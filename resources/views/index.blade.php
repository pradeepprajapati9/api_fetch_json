<table border="2" width="80%">
    <tr>
        <td><h1>showing data </h1></td>
    </tr>
    @foreach ($useruniqueIDs as $useruniqueID)
         <tr>
            <td>UserID->{{$useruniqueID["userId"]}}</td>
            <td>{{$countuserID[$useruniqueID["userId"]]}}->Post</td>
            <td><a href="{{route('post.show',$useruniqueID['userId'])}}">seemore</a></td>
         </tr>
    @endforeach
</table>