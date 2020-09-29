@extends('layouts.layout')
@section('navigation')
<div class="navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a class="btn btn-primary" href="{{route("sachs.list")}}">Danh sách sách</a>
            <a class="btn btn-primary" href="{{route("phieuthues.list")}}">Danh sách phiếu thuê</a>
            <a class="btn btn-primary" href="{{route("chitietphieuthues.list")}}">Danh sách phiếu thuê chi tiết</a>
            <a class="btn btn-primary" href="{{route("thongke.ngay")}}">Thống kê theo ngày</a>
            <a class="btn btn-primary" href="{{route("thongke.thang")}}">Thống kê theo tháng</a>
            <a class="btn btn-primary" href="{{route("thongke.sach")}}">Thống kê sách theo tháng</a>
        </li>
    </ul>
</div>

@endsection
@section('content')
<h3>DANH SÁCH SÁCH</h3>
<a href="{{route('sach.show',['id'=>-1])}}" class="btn btn-primary" style="margin-left: 50px;">Add</a>
<table class="table table-bordered">
    <tr>
        <td>stt</td>
        <td>Tên sách</td>
        <td>Edit</td>
    </tr>
    <?php for ($i = 0; $i < count($sachs); $i++) { ?>
        <tr>
            <td><?= $i + 1 ?></td>
            <td><?= $sachs[$i]->tensach ?></td>
            <td>
                <a href="{{route('sach.show',['id'=>$sachs[$i]->id])}}" class="btn btn-primary">edit</a>
            </td>
        </tr>
    <?php } ?>
</table>
@endsection