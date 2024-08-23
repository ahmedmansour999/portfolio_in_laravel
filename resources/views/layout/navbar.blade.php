@extends('layout.index')
@section('style', asset('css/portfolio.css'))

@section('title', 'navbar')

@section('navbar')

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark px-5 ">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">Navbar</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center " id="navbarNav">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('word.ABOUT') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('word.SERVICE') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"> {{ __('word.HOME') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('word.PORTFOLIO') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('word.CONTACT') }}</a>
                    </li>


                </ul>

                {{-- ? language button --}}
                <ul class="m-0 lang-icon" >
                    <li class="nav-item dropdown float-end">
                        <a href="#" data-bs-toggle="dropdown"> <i class="fa-solid fa-globe text-white"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('language.change', ['lang' => 'ar']) }}">العربيه</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('language.change', ['lang' => 'en']) }}">English</a>
                            </li>
                        </ul>
                    </li>
                </ul>



            </div>


        </div>
    </nav>

@endsection
