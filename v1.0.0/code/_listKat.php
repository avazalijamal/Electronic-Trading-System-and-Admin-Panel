<?php

    include_once "baza.php";

    $KATEQORIYA=[];

    $SQL="SELECT id,adi,stat FROM kateqoriya";
    $GONDER=mysqli_query($MYSQL,$SQL);


    while($CAVAB=mysqli_fetch_assoc($GONDER)){
        array_push($KATEQORIYA,$CAVAB);
    }

?>