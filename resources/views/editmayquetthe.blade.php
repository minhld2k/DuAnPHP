<form action="{{route("mayquetthe.save")}}" method="post">
    @csrf
    <input type="hidden" name="id" value="<?= $mayquetthes->id??""?>">
    <input type="text" name="ten" value="<?= $mayquetthes->ten??""?>"></br>
    
    <input type="submit" value="save">
</form>