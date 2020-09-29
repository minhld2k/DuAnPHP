<?php

use Illuminate\Support\Carbon;
?>
<form action="{{route("vaora.save")}}" method="post">
    @csrf
    <input type="hidden" name="id" value="">
    <input type="text" name="nhanvienid" value=""></br>
    <input type="text" name= "thoigian" value="<?= Carbon::now()->toDateTimeString()?>"> <br>
    <input type="submit" value="save">
</form>