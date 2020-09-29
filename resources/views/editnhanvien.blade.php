<form action="{{route("nhanvien.save")}}" method="post">
    @csrf
    <input type="hidden" name="id" value="<?= $nhanviens->id??""?>">
    <input type="text" name="ten" value="<?= $nhanviens->ten??""?>"></br>
    
    <select name="phongban" id="phongban">
    <?php foreach($phongbans as $key => $value){ ?>
        <option value="<?= $key??""?>" {{$key == $nhanviens->phongbanid ? "selected" : ""}}><?= $value??""?></option>
    <?php }  ?>
    </select></br>
    <input type="submit" value="save">
</form>