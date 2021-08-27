<?php
$id= filter_input(INPUT_POST,"Torles",FILTER_SANITIZE_NUMBER_INT);
if($id!=null)
{
    $sql="DELETE FROM `kategoriak` WHERE `kategoriaID`=".$id;
    $conn->query($sql);
    echo '<div class="alert alert-success" role="alert">Sikeres Törlés</div>';
}
?>
<!DOCTYPE html>
<form method="post">
    <div class="row">
        <?php
         $sql="SELECT `kategoriaID`,`neve` FROM `kategoriak` WHERE 1;";
         $result=$conn->query($sql);
         if($result->num_rows>0)
         {
             while($row=$result->fetch_assoc())
             {
                 echo '<p>'.$row["neve"].'</p>';
                 echo '<button class="btn btn-danger" type="submit" name="Torles" value="'.$row["kategoriaID"].'">Torles</button>';
             }
         }
        ?>
    </div>
</form>

