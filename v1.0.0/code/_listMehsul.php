<?php

    include_once "baza.php";

    $MEHSULLAR=[];

    $SQL="SELECT * FROM mehsullar";
    $GONDER=mysqli_query($MYSQL,$SQL);


    while($CAVAB=mysqli_fetch_assoc($GONDER)){
        array_push($MEHSULLAR,$CAVAB);
    }

?>