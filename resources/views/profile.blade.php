@extends('layouts.main')

@section('title')
    Home
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="content">
                <h1>Мои объявления</h1>
                <a href="{{ route('bb.create') }}" class="btn">Создать объявление</a>
                @if ( count($bbs) )
                    <table class="bb-table">
                        <tr>
                            <td>Название</td>
                            <td>Описание</td>
                            <td>Цена, руб</td>
                        </tr>
                        @foreach ($bbs as $bb)
                            <tr>
                                <td><h4>{{ $bb->title }}</h4></td>
                                <td>{{ $bb->content }}</td>
                                <td>{{ $bb->price }}</td>
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
