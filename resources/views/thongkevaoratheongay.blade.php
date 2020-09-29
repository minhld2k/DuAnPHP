<h3>Thống kê theo ngày</h3><br>
<form action="{{route('nhanvien.ngay')}}" method="get">
    @csrf
    <input type="number" name="ngay" id="" value="{{$ngay}}">
    <input type="number" name="thang" id="" value="{{$thang}}">
    <select name="nhanvienid">
    <?php foreach($nhanviens as $key => $value){ ?>
        <option value="<?= $key??""?>" {{$key == $nhanvienid ? "selected" : ""}}><?= $value??""?></option>
    <?php }  ?>
    </select></br>
    <input type="submit" value="save">
</form>
<table class="table table-bordered">
    <tr>
        <td>stt</td>
        <td>Thời gian</td>
    </tr>
    <?php for ($i = 0; $i < count($vaoras); $i++) { ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= date('d-m-Y H:i:s', strtotime($vaoras[$i]->thoigian)); ?></td>
        </tr>
    <?php } ?>
</table>