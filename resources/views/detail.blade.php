@extends('layouts.main')

@section('title')
    {{ ucfirst($bb->title) }}
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="content">
                <h1>Доска объявлений</h1>
                <div class="bb">
                    <h3>{{ $bb->title }}</h3>
                    <p>Описание: {{ $bb->content }}
                    <p>Продавец: {{ $bb->user->name }}</p>
                    <p>Цена: {{ $bb->price }} руб</p>
                    <a href="{{ route('home') }}">Вернуться на главную</a>
                </div>
            </div>
        </div>
    </main>
@endsection
