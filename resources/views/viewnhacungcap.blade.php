<a href="{{route('nhacungcap.show',['id'=>-1])}}" class="btn btn-primary">Add</a>
<table class="table table-bordered">
    <tr>
        <td>stt</td>
        <td>Tên Nhà cung cấp</td>
        <td>Edit</td>
    </tr>
    @for ($i = 0; $i < count($nhacungcaps); $i++)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{$nhacungcaps[$i]->ten}}</td>
            <td>
                <a href="{{route('nhacungcap.show',['id'=>$nhacungcaps[$i]->id])}}" class="btn btn-primary">edit</a>
            </td>
        </tr>
    @endfor
</table>