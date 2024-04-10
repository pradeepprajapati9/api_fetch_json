<table border="1" width="90%">
    <tr>
        <td>
            <h3>Title</h3>
        </td>
        <td>
            <h3>Body</h3>
        </td>
    </tr>
    @foreach ($collections as $collection)
        <tr>
            <td>{{$collection['title']}}</td>
            <td>{{$collection['body']}}</td>
        </tr>
    @endforeach
</table>
