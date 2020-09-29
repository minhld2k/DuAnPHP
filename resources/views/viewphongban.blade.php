<a href="{{route('phongban.show',['id'=>-1])}}" class="btn btn-primary">Add</a>
<table class="table table-bordered">
    <tr>
        <td>stt</td>
        <td>Tên phòng ban</td>
        <td>Edit</td>
    </tr>
    <?php for ($i = 0; $i < count($phongbans); $i++) { ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $phongbans[$i]->ten ?></td>
            <td>
                <a href="{{route('phongban.show',['id'=>$phongbans[$i]->id])}}" class="btn btn-primary">edit</a>
            </td>
        </tr>
    <?php } ?>
</table>