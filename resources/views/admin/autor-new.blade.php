Вы вошли под именем: <h1 style="color:#0000ff"><strong>{{\Auth::user()->name}}</strong></h1>
<p><a href="{{route('main')}}">На главную </a>

<form action="" method="post" enctype="multipart/form-data">
    @csrf
{{--    <strong> Раздел: </strong> <br>--}}
{{--    @foreach($headings as $heading)--}}
{{--        <input type="radio" name="heading_id" value="{{$heading->id}}"--}}
{{--               @if ($heading->id==old('headings')) checked="checked" @endif> {{$heading->title}} <br>--}}
{{--    @endforeach--}}
{{--    <hr>--}}
    <strong>Имя:</strong> <br>
    <input type="text" name="first_name" placeholder="Не более 30 символов" value="{{old ('first_name')}}"/><br>
    @if ($errors->any('first_name'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('first_name') as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <hr>
    <strong>Фамилия:</strong> <br>
    <input type="text" name="last_name" placeholder="Не более 30 символов" value="{{old ('last_name')}}"/><br>
    @if ($errors->any('last_name'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->get('last_name') as $error)
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

