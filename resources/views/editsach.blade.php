
<form action="{{route("sach.save")}}" method="post">
    @csrf
    <input type="hidden" name="id" value="<?= $sach->id??""?>">
    <input type="text" name="tensach" value="<?= $sach->tensach??""?>"></br>
        
    <input type="submit" value="save">
</form>