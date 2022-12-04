@extends('layouts.main')

@section('title')
    Home
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="content">
                <h1>Привет, {{ ucfirst(Auth::user()->name)}}.</h1>
                <h2 style="margin-bottom: 12px;">Ваши объявления</h2>
                <a href="{{ route('bb.create') }}" class="btn">Создать объявление</a>
                @if ( count($bbs) )
                    <table class="bb-table">
                        <tr>
                            <td>Название</td>
                            <td>Описание</td>
                            <td>Цена, $</td>
                        </tr>
                        @foreach ($bbs as $bb)
                            <tr>
                                <td><h4><a href="{{ route('bb.detail', ['bb' => $bb]) }}">{{ $bb->title }}</a></h4></td>
                                <td>{{ $bb->content }}</td>
                                <td>${{ $bb->price }}</td>
                                <td><a href="{{ route('bb.edit', ['bb' => $bb]) }}">Редактировать</a></td>
                                <td><a href="{{ route('bb.delete', ['bb' => $bb]) }}">Удалить</a></td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </main>
@endsection
