@extends('layouts.main')

@section('title')
    Home
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="content">
                <h1>Редактирование объявления</h1>
                <form action="{{ route('bb.destroy', ['bb' => $bb]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <h3>{{ $bb->title }}</h3>
                        <p>{{ $bb->content }}</p>
                        <p>{{ $bb->price }}</p>
                    </div>
                    <div class="row"><br>
                        <input type="submit" value="Подтвердить удаление" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
