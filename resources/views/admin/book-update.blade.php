Вы вошли под именем: <h1 style="color:#0000ff"><strong>{{\Auth::user()->name}}</strong></h1>
<p><a href="{{route('main')}}">На главную </a>

<form action="" method="post" enctype="multipart/form-data">
    @csrf

    <strong>Название книги:</strong> <br>
    <input type="text" name="title" placeholder="Не более 100 символов"
           value="{{old ('title', $book->title )}}"/><br>
    @if ($errors->any('title'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('title') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <hr>

    <strong>Изображение:</strong> <i>370x330</i><strong> :</strong>
    <input type="file" name="img"/><br>
    <input type="hidden" name="id" value="{{old('id', $book->id)}}"/>
    @if ($errors->any('img'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('img') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <hr>

    <input type="submit" value="Сохранить"/>
</form>
