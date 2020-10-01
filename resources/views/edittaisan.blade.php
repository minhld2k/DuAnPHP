<form action="{{route("taisan.save")}}" method="post">
    @csrf
    <input type="hidden" name="id" value="<?= $taisans->id??""?>">
    <input type="text" name="ten" value="<?= $taisans->ten??""?>"></br>

    <select name="nguoidungid">
    <?php foreach($nguoidungs as $key => $value){ ?>
        <option value="<?= $key??""?>" {{$key == $taisans->nguoidungid ? "selected" : ""}}><?= $value??""?></option>
    <?php }  ?>
    </select></br>

    <select name="chungloaiid">
    <?php foreach($chungloais as $key => $value){ ?>
        <option value="<?= $key??""?>" {{$key == $taisans->chungloaiid ? "selected" : ""}}><?= $value??""?></option>
    <?php }  ?>
    </select></br>

    <select name="nhacungcapid">
    <?php foreach($nhacungcaps as $key => $value){ ?>
        <option value="<?= $key??""?>" {{$key == $taisans->nhacungcapid ? "selected" : ""}}><?= $value??""?></option>
    <?php }  ?>
    </select></br>
    
    <input type="submit" value="save">
</form>