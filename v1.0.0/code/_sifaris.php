<?php

    include_once "baza.php";

    if($_POST){

        $ad=$_POST['ad'];
        $tel=$_POST['tel'];
        $unvan=$_POST['unvan'];
        $mehsul=$PROINFO['id'];
        $sahib=$PROINFO['sahibi'];


        $SQL="INSERT INTO sifarisler(mehsul,qebul_eden,sifaris_veren_ad,sifaris_veren_telefon,sifaris_veren_unvan) VALUES ($mehsul,$sahib,'$ad','$tel','$unvan')";
        $GONDER=mysqli_query($MYSQL,$SQL);

        header("location:satis.php");

    }
?>