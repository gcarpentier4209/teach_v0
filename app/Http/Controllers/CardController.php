<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Resources\CardCollection;
use App\Card;

class CardController extends Controller
{
    public function store(Request $request)
    {
        $card = new Card([
            'title' => $request->get('title'),
            'body' => $request->get('body')
        ]);

        $card->save();

        return response()->json('successfully added');
    }

    public function index()
    {
        return new CardCollection(Card::all());
    }

    public function edit($id)
    {
        $card = Card::find($id);
        return response()->json($card);
    }

    public function update($id, Request $request)
    {
        $post = Card::find($id);

        $post->update($request->all());

        return response()->json('successfully updated');
    }

    public function delete($id)
    {
        $post = Card::find($id);

        $post->delete();

        return response()->json('successfully deleted');
    }
}