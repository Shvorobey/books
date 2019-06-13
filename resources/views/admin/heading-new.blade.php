Вы вошли под именем: <h1 style="color:#0000ff"><strong>{{\Auth::user()->name}}</strong></h1>
<p><a href="{{route('main')}}">На главную </a>

<form action="" method="post" enctype="multipart/form-data">
    @csrf

    <strong>Название:</strong> <br>
    <input type="text" name="title" placeholder="Не более 30 символов" value="{{old ('title')}}"/><br>
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
    <strong>Ключ:</strong> <br>
    <input type="text" name="key" placeholder="Не более 30 символов" value="{{old ('key')}}"/><br>
    @if ($errors->any('key'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('key') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <hr>
    <input type="submit" value="Сохранить"/>
</form>


