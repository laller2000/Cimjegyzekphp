<?php
$id2= filter_input(INPUT_POST,"Torles2",FILTER_SANITIZE_NUMBER_INT);
if($id2!=null)
{
    $sql="DELETE FROM `cimzettek` WHERE `Cimzettid`=".$id2;
    $conn->query($sql);
    echo '<div class="alert alert-success" role="alert">Sikeres törlés</div>';
}
?>
<!DOCTYPE html>
<form method="post">
    <?php
    $sql="SELECT `Cimzettid`, `Nev`, `emailcim`, `mobiltelefonszam`, `felvitelidopontja`, `kategorianeve` FROM `cimzettek` WHERE 1;";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            echo '<p>'.$row["Nev"].'</p>';
            echo '<p>'.$row["emailcim"].'</p>';
            echo '<p>'.$row["mobiltelefonszam"].'</p>';
            echo '<p>'.$row["felvitelidopontja"].'</p>';
            echo '<p>'.$row["kategorianeve"].'</p>';
            echo '<button class="btn btn-danger" type="submit" name="Torles2" value="'.$row["Cimzettid"].'">Törlés</button>';
        }
    }
    ?>
</form>