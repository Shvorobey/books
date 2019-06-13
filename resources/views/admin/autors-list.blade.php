Вы вошли под именем: <h1 style="color:#0000ff"><strong>{{\Auth::user()->name}}</strong></h1>
<p><a href="{{route('main')}}">На главную </a>

<table>
    @foreach($autors as $autor)
        <tr>
            <td> {{$autor->id}} </td>
            <td> {{$autor->first_name}} </td>
            <td> {{$autor->last_name}} </td>
            <td> {{$autor->key}} </td>
            <td>
                <form method="POST" action="/admin/autor-delete">
                    @csrf
                    @method ('DELETE')
                    <input type="hidden" name="id" value="{{$autor->id}}"/>
                    <input type="submit" value="Удалить"/>
                </form>
            </td>
            <td>
                <form method="GET" action="{{route('autor-update')}}">
                    @csrf

                    <input type="hidden" name="id" value="{{$autor->id}}"/>
                    <input type="submit" value="Изменить"/>
                </form>
            </td>

        </tr>

    @endforeach
</table>