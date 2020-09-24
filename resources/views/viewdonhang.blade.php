<form action="{{route("viewdonhang")}}" method="get">
    <input type="text" name="ngay" id="" value="{{$ngay}}">
    <input type="submit" value="Xem">
</form> <br>
<p>Số tiền bán trong ngày: {{$tong}}</p> <br>
<p>Số đơn hàng bán trong ngày: {{$count}}</p> <br>
<table class="border">
    <tr>
        <td>id</td>
        <td>Tên hàng</td>
        <td>Số lượng</td>
        <td>Đơn giá</td>
        <td>Thành tiền</td>
        <td>Ngày bán</td>
    </tr>
    <?php foreach ($donhang as $resultItem) {?>
        <tr>
            <td><?= $resultItem->id ?></td>
            <td><?= $resultItem->tenhang ?></td>
            <td><?= $resultItem->soluong ?></td>
            <td><?= $resultItem->dongia ?></td>
            <td><?= $resultItem->thanhtien ?></td>
            <td><?= $resultItem->ngayban ?></td>
        </tr> 
    <?php } ?>
</table>