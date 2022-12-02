@extends('layouts.main')

@section('title')
    Home
@endsection

@section('content')
    <main>
        <div class="container">
            <div class="content">
                <h1>Создание объявления</h1>
                <form action="{{ route('bb.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <label for="title">Название</label><br>
                        @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input type="text" name="title">
                    </div>
                    <div class="row">
                        <label for="content">Описание</label><br>
                        @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input type="text" name="content">
                    </div>
                    <div class="row">
                        <label for="price">Цена</label><br>
                        @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <input type="text" name="price">
                    </div>
                    <div class="row"><br>
                        <input type="submit" value="Создать объявление" class="btn">
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
