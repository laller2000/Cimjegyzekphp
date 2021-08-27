<?php
$cimid= filter_input(INPUT_POST,"Modosit",FILTER_SANITIZE_NUMBER_INT);
if($cimid!=null)
{
    $sql="UPDATE `cimzettek` SET `Nev`='Nagy Ferenc' WHERE `Cimzettid`=".$cimid;
    $conn->query($sql);
    echo '<div class="alert alert-success" role="alert">Sikeres modositas</div>';
}
?>
<!DOCTYPE html>
<form method="post">
    <div class="row">
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
                    echo '<button class="btn btn-danger" type="submit" name="Modosit" value="'.$row["Cimzettid"].'">Mosoditas</button>';
                }
            }
        ?>
    </div>
</form>
