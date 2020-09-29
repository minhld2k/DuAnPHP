<a href="{{route('mayquetthe.show',['id'=>-1])}}" class="btn btn-primary">Add</a>
<table class="table table-bordered">
    <tr>
        <td>stt</td>
        <td>Tên máy quét thẻ</td>
        <td>Edit</td>
    </tr>
    <?php for ($i = 0; $i < count($mayquetthes); $i++) { ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $mayquetthes[$i]->ten ?></td>
            <td>
                <a href="{{route('mayquetthe.show',['id'=>$mayquetthes[$i]->id])}}" class="btn btn-primary">edit</a>
            </td>
        </tr>
    <?php } ?>
</table>