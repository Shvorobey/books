Вы вошли под именем: <h1 style="color:#0000ff"><strong>{{\Auth::user()->name}}</strong></h1>
<p><a href="{{route('main')}}">На главную </a>
<table>
    @foreach($headings as $heading)
        <tr>
            <td> {{$heading->id}} </td>
            <td> {{$heading->title}} </td>
            <td> {{$heading->key}} </td>
            <td>
                <form method="POST" action="/admin/heading-delete">
                    @csrf
                    @method ('DELETE')
                    <input type="hidden" name="id" value="{{$heading->id}}"/>
                    <input type="submit" value="Удалить"/>
                </form>
            </td>
            <td>
                <form method="GET" action="{{route('heading-update')}}">
                    @csrf

                    <input type="hidden" name="id" value="{{$heading->id}}"/>
                    <input type="submit" value="Изменить"/>
                </form>
            </td>

        </tr>

    @endforeach
</table>
