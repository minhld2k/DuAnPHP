<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <a class="btn btn-primary" href="{{route("sachs.list")}}">Danh sách sách</a>
    <a class="btn btn-primary" href="{{route("phieuthues.list")}}">Danh sách phiếu thuê</a>
    <a class="btn btn-primary" href="{{route("chitietphieuthues.list")}}">Danh sách phiếu thuê chi tiết</a><br>
    <a class="btn btn-primary" href="{{route("thongke.ngay")}}">Thống kê theo ngày</a>
    <a class="btn btn-primary" href="{{route("thongke.thang")}}">Thống kê theo tháng</a>
    <a class="btn btn-primary" href="{{route("thongke.sach")}}">Thống kê sách theo tháng</a><br>
    <h3>Thống kê theo ngày</h3>
    <table class="table table-bordered">
        <tr>
            <td>stt</td>
            <td>Ngày thuê</td>
            <td>Số lượng phiếu thuê</td>
            <td>Số lượng sách thuê</td>
        </tr>
        <?php for ($i = 0; $i < count($thongkengay); $i++) { ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= date('d-m-Y', strtotime($thongkengay[$i]->ngaythue)); ?></td>
                <td><?= $thongkengay[$i]->soluongphieu ?></td>
                <td><?= $thongkengay[$i]->soluongsach ?></td>
            </tr>
        <?php } ?>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>