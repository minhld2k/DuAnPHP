<a href="{{route('taisan.show',['id'=>-1])}}" class="btn btn-primary">Add</a>
<table class="table table-bordered">
    <tr>
        <td>stt</td>
        <td>Tên Tài sản</td>
        <td>Chủ tài sản</td>
        <td>Chủng loại</td>
        <td>Nhà cung cấp</td>
        <td>Edit</td>
    </tr>
    @for ($i = 0; $i < count($taisans); $i++)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{$taisans[$i]->ten}}</td>
            <td>{{$nguoidungs[$taisans[$i]->nguoidungid]}}</td>
            <td>{{$chungloais[$taisans[$i]->chungloaiid]}}</td>
            <td>{{$nhacungcaps[$taisans[$i]->nhacungcapid]}}</td>
            <td>
                <a href="{{route('taisan.show',['id'=>$taisans[$i]->id])}}" class="btn btn-primary">edit</a>
            </td>
        </tr>
    @endfor
</table>

    