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
                    <p>Цена: {{ $bb->price }} руб</p>
                    <br>
                    <a href="{{ route('home') }}">Вернуться на главную</a>
                </div>
            </div>
        </div>
    </main>
@endsection
