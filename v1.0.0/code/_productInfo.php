<?php

    include_once "baza.php";

    if(isset($proId)){

        $SQL="SELECT * FROM mehsullar WHERE id=$proId";
        $GONDER=mysqli_query($MYSQL,$SQL);

        $PROINFO=mysqli_fetch_assoc($GONDER);

        if(count($PROINFO)<=0) header('location:satis.php');
  
    }

?>