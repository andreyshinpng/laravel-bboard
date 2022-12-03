@extends('layouts.main')

@section('title')
    Home
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="content">
                <h2>Доска объявлений</h2>
                @if ( count($bbs) )
                    <table class="bb-table">
                        <tr>
                            <td>Название</td>
                            <td>Описание</td>
                            <td>Продавец</td>
                            <td>Цена, руб</td>
                        </tr>
                        @foreach ($bbs as $bb)
                            <tr>
                                <td><h4>{{ $bb->title }}</h4></td>
                                <td>{{ $bb->content }}</td>
                                <td><a href="{{ route('userBbs', ['user' => $bb->user->id]) }}">{{ $bb->user->name }}</a></td>
                                <td>{{ $bb->price }}</td>
                                <td><a href="{{ route('detail', ['bb' => $bb->id]) }}">Подробнее</a></td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </main>
@endsection
