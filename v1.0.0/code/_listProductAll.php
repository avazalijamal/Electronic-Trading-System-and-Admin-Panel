<?php

    include_once "baza.php";

    $PRODUCTALL=[];

    $SQL="SELECT * FROM mehsullar WHERE stat=1";
    $GONDER=mysqli_query($MYSQL,$SQL);


    while($CAVAB=mysqli_fetch_assoc($GONDER)){
        array_push($PRODUCTALL,$CAVAB);
    }

?>