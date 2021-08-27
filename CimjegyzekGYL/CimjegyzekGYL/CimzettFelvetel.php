<?php
$nev= filter_input(INPUT_POST,"cNev",FILTER_SANITIZE_STRING);
$email= filter_input(INPUT_POST,"cemailcim",FILTER_SANITIZE_STRING);
$mobil= filter_input(INPUT_POST,"cmobiltelefonszam",FILTER_SANITIZE_NUMBER_INT);
$felvitel= filter_input(INPUT_POST,"cfelvitelidopontja",FILTER_SANITIZE_STRING);
$kate= filter_input(INPUT_POST,"ckategorianeve",FILTER_SANITIZE_STRING);
    $sql="INSERT INTO `cimzettek`(`Cimzettid`, `Nev`, `emailcim`, `mobiltelefonszam`, `felvitelidopontja`, `kategorianeve`) VALUES (NULL,'".$nev."','".$email."','".$mobil."','".$felvitel."','".$kate."');";
    if($conn->query($sql)==TRUE)
    {
        echo 'Sikeres felvétel';
    }else{
        echo 'Sikertelen';
    }

?>
<!DOCTYPE html>
<form method="post">
    <div class="form-group">
        <label for="cNev">Név:</label>
        <input class="form-control" type="text" name="cNev" id="cNev"/>
    </div>
    <div class="form-group">
        <label for="cemailcim">E-mail cím:</label>
        <input class="form-control" type="email" name="cemailcim" id="cemailcim"/>
    </div>
    <div class="form-group">
        <label for="cmobiltelefonszam">Mobiltelefonszám:</label>
        <input class="form-control" type="tel" name="cmobiltelefonszam" id="cmobiltelefonszam"/>
    </div>
    <div class="form-group">
        <label for="cfelvitelidopontja">Felvitel időpontja:</label>
        <input class="form-control" type="datetime" name="cfelvitelidopontja" id="cfelvitelidopontja"/>
    </div>
    <div class="form-group">
        <label for="ckategorianeve">Kategoria neve:</label>
        <select class="form-control" id="ckategorianeve">
            <option value="Kozossegi">Kozossegi</option>
            <option value="Frissitesek">Frissitesek</option>
            <option value="Forumok">Forumok</option>
            <option value="Promociok">Promociok</option>
            <option value="Beerkezo">Beerkezo</option>
            <option value="Kuldott">Kuldott</option>
            <option value="Besorolatlan" disabled>Besorolatlan</option>
        </select>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Felvitel</button>
    </div>
</form>
