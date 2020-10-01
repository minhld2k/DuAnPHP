<form action="{{route('nhatky.list')}}" method="get">
    @csrf
    <select name="taisanid">
    <?php foreach($taisans as $key => $value){ ?>
        <option value="<?= $key??""?>" {{$key == $taisanid ? "selected" : ""}}><?= $value??""?></option>
    <?php }  ?>
    </select></br>
    <input type="submit" value="save">
</form>
<table class="table table-bordered">
    <tr>
        <td>stt</td>
        <td>Tên tài sản</td>
        <td>Chủ tài sản</td>
        <td>Ngày chuyển </td>
    </tr>
    @for ($i = 0; $i < count($nhatkys); $i++)
        <tr>
            <td>{{ $i + 1 }}</td>
            <td>{{$taisans[$nhatkys[$i]->taisanid]}}</td>
            <td>{{$nguoidungs[$nhatkys[$i]->nguoidungid]}}</td>
            <td>{{$nhatkys[$i]->ngaychuyen}}</td>
            
        </tr>
    @endfor
</table>