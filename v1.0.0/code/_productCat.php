<?php
      include_once "baza.php";

      if(isset($_GET['katAxtar'])){
  
          $katAxtar=$_GET['katAxtar'];
  
          $PRODUCTALL=[];
  
          $SQL="SELECT * FROM mehsullar WHERE stat=1 AND kateqoriya LIKE '%$katAxtar%'";
          $GONDER=mysqli_query($MYSQL,$SQL);
      
      
          while($CAVAB=mysqli_fetch_assoc($GONDER)){
              array_push($PRODUCTALL,$CAVAB);
          }
  
      }
?>