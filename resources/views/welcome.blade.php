@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="absolute top-0 right-0 mt-4 mr-4">
            <div class="space-x-4">
                @auth
                    <a
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150"
                    >
                        Log out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">Register</a>
                    @endif
                @endauth
            </div>
        </div>
        @auth
            <section class="flex flex-col md:flex-row justify-between w-8/12 m-auto flex-wrap mt-0">
                <a class="w-full" href="{{ route('home') }}">
                    <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
                </a>
                <livewire:player-stats />
                <livewire:players.scorecard />
            </section>
            <livewire:players.leaderboard />
        @else
            blah
        @endauth
    </div>
@endsection
