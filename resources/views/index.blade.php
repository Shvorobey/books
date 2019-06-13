@extends ('layout')

@section('title', 'Books - Главная')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585">
            <small>Любить чтение — это обменивать часы скуки, неизбежные в жизни, на часы большого наслаждения.</small>
        </h1>

        @include ('load')

        @foreach( $books as $book)
            <div class="card mb-4">
                <img class="card-img-top" src="{{$book->img}}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title" style="color:#008000">{{$book->title}}</h2>
                    <a href="#" class="btn btn-primary">Подробнее о книге &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                    Книга размещениа в каталоге: {{$book->created_at}} <br>
                    Автор:
                    @foreach($book->autors as $autor)
                    <a href="{{route('books_by_autor', $autor->key)}}">{{$autor->first_name}} {{$autor->last_name}}</a> ,
                    @endforeach
                    <br>
                    Рубрики:
                    @foreach($book->headings as $heading)
                        <a href="{{route('books_by_heading', $heading->key)}}">{{$heading->title}},   </a>
                    @endforeach
                </div>
            </div>
        @endforeach
        <ul class="pagination justify-content-center mb-4">
            @if ($books->currentPage()!=1)
                <li class="page-item"><a class="page-link" href="?page=1"> Первая страница </a></li>
                <li class="page-item"><a class="page-link" href="{{$books->previousPageUrl()}}"> < </a></li>
            @endif
            @if ($books->count ()>0)
                @for ($count=1; $count<=$books->lastPage(); $count++)
                    <li class="page-item @if ($count==$books->currentPage()) active @endif">
                        <a class="page-link" href="?page={{$count}}"> {{$count}} </a></li>
                @endfor
            @else
                <h1><font size="15" color="aqua" face="Arial"> Мы работаем над тем, чтобы здесь что-то появилось
                        ;) </font></h1>
            @endif
            @if ($books->currentPage() != $books->lastPage())
                <li class="page-item"><a class="page-link" href="{{$books->nextPageUrl()}}"> > </a></li>
                <li class="page-item"><a class="page-link" href="?page={{$books->lastPage()}}"> Последняя страница </a>
                </li>
            @endif
        </ul>
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