<form action="{{route("phongban.save")}}" method="post">
    @csrf
    <input type="hidden" name="id" value="<?= $phongbans->id??""?>">
    <input type="text" name="ten" value="<?= $phongbans->ten??""?>"></br>
    
    <input type="submit" value="save">
</form>