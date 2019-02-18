@extends('layouts.app')


@section('content')



<div class="container" >
    {{--Zone de recherche --}}
    {{--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">--}}
    {{--<div class="row justify-content-left">--}}
        {{--<div class="col-sm-3">--}}
            {{--<form class="card card-sm">--}}
                {{--<div class="card-body row no-gutters align-items-center">--}}
                    {{--<div class="col-sm">--}}
                        {{--<i class="fas fa-search h6 text-body"></i>--}}
                    {{--</div>--}}
                    {{--<div class="col-sm">--}}
                        {{--<input class="form-control form-control-sm form-control-borderless" type="search" placeholder="quoi?">--}}
                    {{--</div>--}}
                    {{--<div class="col-sm">--}}
                        {{--<button class=" btn btn-sm btn-success" type="submit">Find</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}

    <sidebar-form></sidebar-form>

    {{--<div class="row justify-content-left">--}}
        {{--<div class="col-md-3 ">--}}
            {{--<nav class="nav flex-column" style="background-color: #e3f2fd;">--}}

                {{--<link href="https://fonts.googleapis.com/icon?family=Material+Icons"--}}
                      {{--rel="stylesheet">--}}

               {{----}}
                {{--<example-component></example-component>--}}

                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdownGestCat">--}}
                    {{--<a class="nav-link active" href="{{ route('Ressources.create') }}">--}}
                        {{--<a class="nav-link active" href="#">--}}
                        {{--<i class="material-icons">note</i> @lang('Ressources')--}}
                        {{--</a>--}}
                {{--</div>--}}

                {{--<a class="nav-link active" href="#">--}}
                    {{--<i class="material-icons">view_list</i> @lang('Cours')--}}
                {{--</a>--}}
                {{--<a class="nav-link active" href="#">--}}
                    {{--<i class="material-icons">folder_open</i> @lang('Parcours')--}}
                {{--</a>--}}

            {{--</nav>--}}

        {{--</div>--}}

    {{--</div>--}}


</div>
@endsection
