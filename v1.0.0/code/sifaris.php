
<?php

    if(isset($_GET['proId'])){
        $proId=$_GET['proId'];
        include_once "_productInfo.php";
        include_once "_sifaris.php";

    }else{
        header('location:satis.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sifaris.css">
    <script src="./js/home.js"></script>
    <link rel="icon" href="./img/logo.png">
    <title>Sifairs</title>
</head>
<body>
    
    <div class="header" id="top">
        <div class="left">
            <a href="satis.php">
                <img src="./img/logo.png" alt="">
            </a>
        </div>

    </div>

    <div class="nav">
        <a href="satis.php">ANA SEHIFE</a>
        <a href="#">HAQQIMIZDA</a>
        <a href="#">ƏLAQƏ</a>
            

    </div>

    <h2 class="map">
        <?php echo $PROINFO['adi']; ?>
    </h2>

    <div class="content">
        <div class="info">

            <img src="./img/mehsul/<?php echo $PROINFO['foto']; ?>">

            <h3>
                <s><?php echo $PROINFO['oz_qiymeti']; ?> AZN</s>
                <?php if($PROINFO['endirim_qiymeti']>0): ?>
                    <u><?php echo $PROINFO['endirim_qiymeti']; ?> AZN</u>
                <?php endif; ?>
            </h3>

            <pre><?php echo $PROINFO['haqqinda']; ?></pre>


        </div>

        <form class="sifairs" action="sifaris.php?proId=<?php echo $PROINFO['id']; ?>" method="post">
          
            <h3>Sifariş məlumatları:</h3>
            <label class="ad">
                Ad Soyad: <br>
                <input type="text" name="ad" minlength="5" required placeholder="Aliyev Eli">
            </label>

            <label class="tel">
                Telefon: <br>
                <input type="text" name="tel" minlength="9" required placeholder="+994 xx xxx-xx-xx">
            </label>

            <label class="unvan">
                Unvan: <br>
                <input type="text" name="unvan" minlength="10" required placeholder="Baki s. Nesimi ray">
            </label>

            <input class="btn" type="submit" value="SIFARIS ET">
        </form>
    </div>



</body>
</html>