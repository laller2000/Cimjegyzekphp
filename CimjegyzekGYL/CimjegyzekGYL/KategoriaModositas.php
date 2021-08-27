<?php
$moid= filter_input(INPUT_POST,"Modosit",FILTER_SANITIZE_NUMBER_INT);
if($moid!=null)
{
    $sql="UPDATE `kategoriak` SET `neve`='Kozossegi' WHERE `kategoriaID`=".$moid;
    $conn->query($sql);
    echo '<div class="alert alert-success" role="alert">Sikeres mdosoitas</div>';
}
?>
<!DOCTYPE html>
<form method="post">
    <div class="row">
        <?php
            $sql="SELECT `kategoriaID`, `neve` FROM `kategoriak` WHERE 1;";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                    echo '<p>'.$row["neve"].'</p>';
                    echo '<button class="btn btn-danger" name="Modosit" type="submit" value="'.$row["kategoriaID"].'">Modositas</button>';
                }
            }
        ?>
    </div>
</form>