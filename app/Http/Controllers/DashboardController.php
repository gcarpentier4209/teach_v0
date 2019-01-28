<?php
/**
 * Created by PhpStorm.
 * User: Geoffrey
 * Date: 27/01/2019
 * Time: 11:50
 */

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showCards()
    {
        return view('dashboard');
    }
}