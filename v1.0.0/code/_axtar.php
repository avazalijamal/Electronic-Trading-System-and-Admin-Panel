<?php

    include_once "baza.php";

    if(isset($_GET['acar'])){

        $acar=$_GET['acar'];

        $PRODUCTALL=[];

        $SQL="SELECT * FROM mehsullar WHERE stat=1 AND adi LIKE '%$acar%' OR kateqoriya LIKE '%$acar%' OR haqqinda LIKE '%$acar%'";
        $GONDER=mysqli_query($MYSQL,$SQL);
    
    
        while($CAVAB=mysqli_fetch_assoc($GONDER)){
            array_push($PRODUCTALL,$CAVAB);
        }


    }

?>