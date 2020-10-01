<form action="{{route("nguoidung.save")}}" method="post">
    @csrf
    <input type="hidden" name="id" value="<?= $nguoidungs->id??""?>">
    <input type="text" name="ten" value="<?= $nguoidungs->ten??""?>"></br>
    
    <input type="submit" value="save">
</form>