@extends('layouts.layout')

@section('content')


    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <img src="/assets/2.jpg" width="200px" />
            <div class="title m-b-md">
                Pizza House<br />
                The North's Best Pizzas
            </div>
            <a href="/pizzas">Go To List</a>
        </div>
    </div>


@endsection
