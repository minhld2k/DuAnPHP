<form action="{{route("nhatky.save")}}" method="post">
    @csrf

    <select name="nguoidungid">
    <?php foreach($nguoidungs as $key => $value){ ?>
        <option value="<?= $key??""?>"><?= $value??""?></option>
    <?php }  ?>
    </select></br>

    <select name="taisanid">
    <?php foreach($taisans as $key => $value){ ?>
        <option value="<?= $key??""?>"><?= $value??""?></option>
    <?php }  ?>
    </select></br>

    <input type="text" name="ngaychuyen" value="{{date('d-m-Y H:i:s')}}">
    
    <input type="submit" value="save">
</form>