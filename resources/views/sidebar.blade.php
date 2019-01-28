@extends('layouts.app')

{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
{{--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>--}}
{{--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
<!------ Include the above in your HEAD tag ---------->


@section('content')

    <div class="container" >
        {{--Zone de recherche --}}
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        <div class="row justify-content-left">
            <div class="col-sm-3">
                <form class="card card-sm">
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-sm">
                            <i class="fas fa-search h6 text-body"></i>
                        </div>
                        <div class="col-sm">
                            <input class="form-control form-control-sm form-control-borderless" type="search" placeholder="quoi?">
                        </div>
                        <div class="col-sm">
                            <button class=" btn btn-sm btn-success" type="submit">Find</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="row justify-content-left">
            <div class="col-md-3 ">
                <nav class="nav flex-column" style="background-color: #e3f2fd;">

                    <a class="nav-link active" href="#">Ressources</a>
                    <a class="nav-link active" href="#">Cours</a>
                    <a class="nav-link active" href="#">Parcours</a>
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link" href="#">Link</a>
                    <a class="nav-link disabled" href="#">Disabled</a>
                </nav>

            </div>

        </div>




    </div>
@endsection
