<form action="{{route("chungloai.save")}}" method="post">
    @csrf
    <input type="hidden" name="id" value="<?= $chungloais->id??""?>">
    <input type="text" name="ten" value="<?= $chungloais->ten??""?>"></br>
    
    <input type="submit" value="save">
</form>