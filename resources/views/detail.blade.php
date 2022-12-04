@extends('layouts.main')

@section('title')
    {{ ucfirst($bb->title) }}
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="content">
                <div class="bb">
                    <h3>{{ $bb->title }}</h3>
                    <br>
                    <p>Описание: {{ $bb->content }}
                    <p>Продавец: {{ $bb->user->name }}</p>
                    <br>
                    <p>Цена: {{ $bb->price }} $</p>
                    <br>
                    <a href="{{ route('home') }}">Все объявления</a>
                    @auth
                        <a href="{{ route('profile') }}"> | Мои объявления</a>
                    @endauth
                </div>
            </div>
        </div>
    </main>
@endsection
