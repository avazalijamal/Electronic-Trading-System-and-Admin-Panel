
<?php
    include_once "_isloginadmin.php";
    include_once "_user.php";
    include_once "_sifarisList.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="./img/icon.jpg">
    <link rel="stylesheet" href="./css/admin.css">
    <script src="./js/admin.js"></script>
</head>
<body>
    <div class="left">

        <div class="profil">
            <img src="./img/user/<?php echo $USERINFO['foto']  ?>" alt="">
            <div class="info">
                <h3><?php echo $USERINFO['tamadi']  ?></h3>
                <p><?php echo $USERINFO['email']  ?></p>
            </div>
            <a href="_cixis.php">
                <img src="./img/power.png" class="p">
            </a>
        </div>

        <div class="nav">
            <a style="background-color:#23D959;" href="admin.php">Sifarisler</a>
            <a href="mehsullar.php">Mehsullar</a>
            <a href="kateqoriya.php">Kateqoriyalar</a>
        </div>

    </div>

    <div class="right">

        <div class="header">
            <h3>Sifarisler</h3>
        </div>

        <ol class="list">

            <?php foreach($SIFARISLER as $SIFARIS): ?>

                <li style="background-color:<?php echo $SIFARIS['stat']==1 ? "orange" : ($SIFARIS['stat']==2 ? "green" : "red"); ?>;">
                    <img src="./img/mehsul/<?php echo  $SIFARIS['mehsul']['foto']; ?>" title="Mustang Usaq">
                    <p class="inf">
                        <b><?php echo  $SIFARIS['sifaris_veren_ad']; ?></b> <br>
                        <b><?php echo  $SIFARIS['mehsul']['adi']; ?></b> <br>
                        <b><?php echo  $SIFARIS['mehsul']['kateqoriya']; ?></b> <br>
                        <i><?php echo  $SIFARIS['sifaris_veren_telefon']; ?></i> <br>
                        <span><?php echo  $SIFARIS['sifaris_veren_unvan']; ?></span>
                    </p>

                    <p class="status">
                        <a id="gi<?php echo $SIFARIS['id'] ?>" href="_statSifaris.php?id=<?php echo  $SIFARIS['id']; ?>&stat=1">
                            <input onchange="Klick('gi<?php echo $SIFARIS['id'] ?>')" type="radio" <?php echo $SIFARIS['stat']==1 ? "checked" : "" ; ?> id="">
                            gozle
                        </a>
                        <a id="ci<?php echo $SIFARIS['id'] ?>" href="_statSifaris.php?id=<?php echo  $SIFARIS['id']; ?>&stat=2">
                            <input onchange="Klick('ci<?php echo $SIFARIS['id'] ?>')" type="radio" <?php echo $SIFARIS['stat']==2 ? "checked" : "" ; ?>  id="">
                            catdirildi
                        </a>
                        <a id="ri<?php echo $SIFARIS['id'] ?>" href="_statSifaris.php?id=<?php echo  $SIFARIS['id']; ?>&stat=0">
                            <input onchange="Klick('ri<?php echo $SIFARIS['id'] ?>')" type="radio" <?php echo $SIFARIS['stat']==0 ? "checked" : "" ; ?>   id="">
                            redd edildi
                        </a>
                    </p>

                </li>

            <?php endforeach; ?>

        </ol>

    </div>
    
</body>
</html>