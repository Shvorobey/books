@extends ('layout')

@section('title', 'Книги автора')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4" style="color:#0000CD">Все книги автора <u style="color:#006400">{{$autor->first_name}} {{$autor->last_name}}</u> </h1>

    @foreach( $autor->books as $book)
        <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="{{$book->img}}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title" style="color:#ff0000">{{$book->title}}</h2>
                    <a href="{{route('single_book', $book->id)}}" class="btn btn-primary">Подробнее о книге &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Создан: {{$book->created_at}}  <br>
                    Автор:
                    @foreach($book->autors as $autor)
                        <a href="{{route('books_by_autor', $autor->key)}}">{{$autor->first_name}} {{$autor->last_name}}</a><br>
                    @endforeach
                    Рубрики:
                    @foreach($book->headings as $heading)
                        <a href="{{route('books_by_heading', $heading->key)}}">{{$heading->title}}   </a>
                    @endforeach
                </div>
            </div>
    @endforeach
    </div>

@endsection

@section ('headings')
    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Рубрики:</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        @inject('heading', 'App\Headings_for_sidebar')
                        <div>
                            {{ $heading->show_headings() }}<br>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section ('autors')
    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Популярные авторы:</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        @inject('autors', 'App\Autors_for_sidebar')
                        <div>
                            {{ $autors->show_autors() }}<br>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section ('advertising')
    <!-- Advertising Widget -->
    <div class="card my-4">
        <h5 class="card-header">Рекламный блок</h5>
        <div class="card-body">
            <strong style="color:#ff0000"> Покупайте наших слонов </strong>
        </div>
    </div>
@endsection