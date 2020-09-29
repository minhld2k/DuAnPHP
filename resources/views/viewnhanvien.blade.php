<a href="{{route('nhanvien.show',['id'=>-1])}}" class="btn btn-primary">Add</a>
<table class="table table-bordered">
    <tr>
        <td>stt</td>
        <td>Tên nhân viên</td>
        <td>Phòng ban</td>
        <td>Edit</td>
    </tr>
    <?php for ($i = 0; $i < count($nhanviens); $i++) { ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $nhanviens[$i]->ten ?></td>
            <td><?= $phongbans[$nhanviens[$i]->phongbanid] ?></td>
            <td>
                <a href="{{route('nhanvien.show',['id'=>$nhanviens[$i]->id])}}" class="btn btn-primary">edit</a>
            </td>
        </tr>
    <?php } ?>
</table>