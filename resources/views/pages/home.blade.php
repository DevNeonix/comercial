@extends('layouts.app')
@section('content')
    <div id="wrapper">
        <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
            <a class="navbar-brand" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav side-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Side Menu Items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-md-auto d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Session::get('usuario', '')->nombre}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/clear">Cerrar Sesion</a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                @include("components.menus")
            </div>
        </div>
    </div>


@endsection
