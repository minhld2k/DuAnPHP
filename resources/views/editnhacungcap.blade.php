<form action="{{route("nhacungcap.save")}}" method="post">
    @csrf
    <input type="hidden" name="id" value="<?= $nhacungcaps->id??""?>">
    <input type="text" name="ten" value="<?= $nhacungcaps->ten??""?>"></br>
    
    <input type="submit" value="save">
</form>