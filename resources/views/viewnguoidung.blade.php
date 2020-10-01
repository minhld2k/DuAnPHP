<a href="{{route('nguoidung.show',['id'=>-1])}}" class="btn btn-primary">Add</a>
<table class="table table-bordered">
    <tr>
        <td>stt</td>
        <td>Tên Người dùng</td>
        <td>Edit</td>
    </tr>
    @for ($i = 0; $i < count($nguoidungs); $i++)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{$nguoidungs[$i]->ten}}</td>
            <td>
                <a href="{{route('nguoidung.show',['id'=>$nguoidungs[$i]->id])}}" class="btn btn-primary">edit</a>
            </td>
        </tr>
    @endfor
</table>