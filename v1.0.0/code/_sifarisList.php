<?php

    include_once "baza.php";

    $SIFARISLER=[];

    $SQL="SELECT * FROM sifarisler WHERE qebul_eden=$USERID";
    $GONDER=mysqli_query($MYSQL,$SQL);


    while($CAVAB=mysqli_fetch_assoc($GONDER)){
        
        $id=$CAVAB['mehsul'];
        $SQL2="SELECT * FROM mehsullar WHERE id=$id";
        $GONDER2=mysqli_query($MYSQL,$SQL2);
        $CAVAB['mehsul']=mysqli_fetch_assoc($GONDER2);
        
        array_push($SIFARISLER,$CAVAB);

    }

    


?>