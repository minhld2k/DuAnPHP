<h3>Thống kê theo thang</h3><br>
<form action="{{route('nhanvien.thang')}}" method="get">
    @csrf
    <input type="number" name="thang" id="" value="{{$thang}}">
    <input type="number" name="nam" id="" value="{{$nam}}">
    <select name="nhanvienid">
    @foreach($nhanviens as $key => $value)
        <option value="<?= $key??""?>" {{$key == $nhanvienid ? "selected" : ""}}><?= $value??""?></option>
    @endforeach
    </select></br>
    <input type="submit" value="save">
</form>
<table class="table table-bordered">
    <tr>
        <td>stt</td>
        <td>Ngày</td>
        <td>Giờ vào</td>
        <td>Giờ ra</td>
        <td>Số lượng</td>
    </tr>
    @for ($i = 0; $i < count($vaoras); $i++) 
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{ $vaoras[$i]->ngay }}</td>
            <td>{{ $vaoras[$i]->vao }}</td>
            <td>{{ $vaoras[$i]->ra }}</td>
            <td>{{ $vaoras[$i]->soluong }}</td>
        </tr>
    @endfor
</table>