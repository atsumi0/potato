<h1>詳細画面</h1>
<p><a href="{{ route('potato.management')}}">一覧画面</a></p>
 
<table border="1">
    <tr>
        <th>id</th>
        <th>title</th>
        <th>author</th>
        <th>created_at</th>
        <th>updated_at</th>
    </tr>
    <tr>
        <td>{{ $potato->id }}</td>
        <td>{{ $potato->name }}</td>
        <td>{{ $potato->created_at }}</td>
        <td>{{ $potato->updated_at }}</td>
    </tr>
</table>