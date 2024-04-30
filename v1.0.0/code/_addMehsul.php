<?php

    include_once "baza.php";

    if($_POST){
        
        $ad=$_POST['ad'];
        $say=$_POST['say'];
        $kat=$_POST['kat'];
        $qiymet_o=$_POST['qiymet_o'];
        $qiymet_e=$_POST['qiymet_e'];
        $haqqinda=$_POST['haqqinda'];
        $sahibi=$_SESSION['userId'];

        $f_name="mehsul.png";

        if($_FILES['foto']['size']>0){

            $foto=$_FILES['foto'];
            $tmp=$foto['tmp_name'];
            $f_name=uniqid()."-".uniqid().".png";

            move_uploaded_file($tmp,"./img/mehsul/$f_name");

        }

        $SQL="INSERT INTO mehsullar(foto,adi,say,kateqoriya,oz_qiymeti,endirim_qiymeti,haqqinda,sahibi) VALUES ('$f_name','$ad','$say','$kat','$qiymet_o','$qiymet_e','$haqqinda','$sahibi')";

        $GONDER=mysqli_query($MYSQL,$SQL);

        header("location:mehsullar.php");

    }else{
        echo "informasiyada xeta bas verdi";
    }

?>