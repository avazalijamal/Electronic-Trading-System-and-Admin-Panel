<?php
    include_once "_isloginadmin.php";
    include_once "_user.php";
    include_once "_listKat.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kateqoriyalar</title>
    <link rel="icon" href="./img/icon.jpg">
    <link rel="stylesheet" href="./css/kateqoriya.css">
    <script src="./js/kateqoriya.js"></script>
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
            <a href="admin.php">Sifarisler</a>
            <a href="mehsullar.php">Mehsullar</a>
            <a style="background-color:#23D959;" href="kateqoriya.php">Kateqoriyalar</a>
        </div>

    </div>

    <div class="right">

        <div class="header">
            <h3>Kateqoriyalar</h3>
        </div>

        <form action="_addKat.php"  method="post">
            <input name="kat" minlength="3" required class="txt" type="text" placeholder="Kateqoriya adi">
            <input class="btn" type="submit" value="Elave et">
        </form>

        <ol class="list">

            <?php foreach($KATEQORIYA as $kat):?>
            <li style="<?php echo $kat['stat']==0? 'background-color:#CCCCCC;':'' ?>">
                <p class="inf"><?php echo $kat['adi'] ?></p>

                <p class="status">
                    <a id="aa<?php echo $kat['id'] ?>" href="_statKat.php?id=<?php echo $kat['id'] ?>&stat=1">
                        <input onchange="Klick('aa<?php echo $kat['id'] ?>')" type="radio" <?php echo $kat['stat']==1? 'checked':'' ?> id="">
                        Aktiv   
                    </a>
                    <a id="da<?php echo $kat['id'] ?>" href="_statKat.php?id=<?php echo $kat['id'] ?>&stat=0">
                        <input onchange="Klick('da<?php echo $kat['id'] ?>')" type="radio" <?php echo $kat['stat']==0? 'checked':'' ?> id="">
                        Deaktiv
                    </a>

                </p>

            </li>
            <?php endforeach; ?>

        </ol>

    </div>
    
    

</body>
</html>