<!DOTYPE html>
<?php
 $sql="SELECT cimzettek.Nev,cimzettek.emailcim,cimzettek.mobiltelefonszam,cimzettek.felvitelidopontja,cimzettek.kategorianeve, kategoriak.neve FROM cimzettek 
Inner JOIN kapcsolattabla ON cimzettek.Cimzettid=kapcsolattabla.CimID2 JOIN kategoriak ON kapcsolattabla.kategoriaID2=kategoriak.kategoriaID
ORDER By cimzettek.Nev ASC;";
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
            echo '<p>'.$row["neve"].'</p>';
        }
    }
?>