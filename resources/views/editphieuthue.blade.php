<form action="{{route("phieuthue.save")}}" method="post">
    @csrf
    <input type="hidden" name="id" value="<?= $phieuthue->id??""?>">
    <input type="text" name="tenphieu" value="<?= $phieuthue->tenphieu??""?>"></br>
    <input type="text" name="ngaythue" id="" value="<?= date('d-m-Y', strtotime($phieuthue->ngaythue))??"" ?>"><br>
        
    <input type="submit" value="save">
</form>