<?php

    include_once "baza.php";

    if($_POST){


        $kat=$_POST['kat'];

        $SQL="INSERT INTO kateqoriya(adi) VALUES ('$kat')";
        $GONDER=mysqli_query($MYSQL,$SQL);

        header("location:kateqoriya.php");

    }else{
        echo "informasiyada xeta bas verdi";
    }

?>