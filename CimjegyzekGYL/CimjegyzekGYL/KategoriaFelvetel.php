<?php
$knev= filter_input(INPUT_POST,"nev",FILTER_SANITIZE_STRING);
if($knev!=null)
{
    $sql="INSERT INTO `kategoriak`(`kategoriaID`, `neve`) VALUES (NULL,'".$knev."');";
    $conn->query($sql);
    
}
?>
<!DOCTYPE html>
<form method="post">
    <div class="form-group">
        <label for="nev">Kategoria neve:</label>
        <input class="form-control" type="text" name="nev" id="nev" placeholder="Kategoria neve"/>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Felvitel</button>
    </div>
</form>