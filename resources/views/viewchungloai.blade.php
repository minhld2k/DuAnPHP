<a href="{{route('chungloai.show',['id'=>-1])}}" class="btn btn-primary">Add</a>
<table class="table table-bordered">
    <tr>
        <td>stt</td>
        <td>Tên Chủng loại</td>
        <td>Edit</td>
    </tr>
    @for ($i = 0; $i < count($chungloais); $i++)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{$chungloais[$i]->ten}}</td>
            <td>
                <a href="{{route('chungloai.show',['id'=>$chungloais[$i]->id])}}" class="btn btn-primary">edit</a>
            </td>
        </tr>
    @endfor
</table>