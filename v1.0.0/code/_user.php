<?php

    include_once "baza.php";

    $USERID=$_SESSION['userId'];

    $SQL="SELECT tamadi,email,foto FROM istifadeci WHERE id=$USERID AND stat=1";
    $GONDER=mysqli_query($MYSQL,$SQL);
    $USERINFO=mysqli_fetch_assoc($GONDER);

?>