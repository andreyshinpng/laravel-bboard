@extends('layouts.main')

@section('title')
    Home
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="content">
                <h1>Редактирование объявления</h1>
                <form action="{{ route('bb.update', ['bb' => $bb]) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <label for="title">Название</label><br>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input type="text" name="title" value="{{ old('title', $bb->title) }}">
                    </div>
                    <div class="row">
                        <label for="content">Описание</label><br>
                        @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input type="text" name="content" value="{{ old('content', $bb->content) }}"></input>
                    </div>
                    <div class="row">
                        <label for="price">Цена</label><br>
                        @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input type="text" name="price" value="{{ old('price', $bb->price) }}">
                    </div>
                    <div class="row"><br>
                        <input type="submit" value="Применить изменения" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
