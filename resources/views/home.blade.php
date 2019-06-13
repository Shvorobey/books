@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Вход выполнен успешно</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Вы вошли под именем: {{\Auth::user()->name}} <br>
                        <ol>
                            <li><a class="nav-link" style="color:red" href="{{route('book-new')}}">Добавить книгу
                                    <span class="sr-only">(current)</span></li>
                            <li><a class="nav-link" style="color:red" href="{{route('books-list')}}">Редактировать или
                                    удалить
                                    книгу
                                    <span class="sr-only">(current)</span></li>
                            <li><a class="nav-link" style="color:red" href="{{route('autor-new')}}">Добавить автора
                                    <span class="sr-only">(current)</span></li>
                            <li><a class="nav-link" style="color:red" href="{{route('autors-list')}}">Редактировать или
                                    удалить автора
                                    <span class="sr-only">(current)</span></li>
                            <li><a class="nav-link" style="color:red" href="{{route('heading-new')}}">Добавить
                                    раздел
                                    <span class="sr-only">(current)</span></li>
                            <li><a class="nav-link" style="color:red" href="{{route('headings-list')}}">
                                    Редактировать или удалить раздел
                                    <span class="sr-only">(current)</span></li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
