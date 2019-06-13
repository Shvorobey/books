Вы вошли под именем: <h1 style="color:#0000ff"><strong>{{\Auth::user()->name}}</strong></h1>
<p><a href="{{route('main')}}">На главную </a>
<table>
    @foreach($books as $book)
        <tr>
            <td> {{$book->id}} </td>
            <td> {{$book->title}} </td>
            <td>
                <form method="POST" action="/admin/book-delete">
                    @csrf
                    @method ('DELETE')
                    <input type="hidden" name="id" value="{{$book->id}}"/>
                    <input type="submit" value="Удалить"/>
                </form>
            </td>
            <td>
                <form method="GET" action="{{route('book-update')}}">
                    @csrf

                    <input type="hidden" name="id" value="{{$book->id}}"/>
                    <input type="submit" value="Изменить"/>
                </form>
            </td>

        </tr>

    @endforeach
</table>