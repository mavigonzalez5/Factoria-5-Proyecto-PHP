<?php
require "connect.php";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<header>
    <img src="images/code3.png" alt=" ">
    </header>
    <main>
    <h3>👩‍💻Si lo puedes imaginar, lo puedes programar👩‍💻</h3>

    <a href="form.php"><button class="nuevo-warrior"> ➕ Añadir Warrior </button></a>
    
    <form>

    <div class="container">
        <?php
        foreach ($resultado as $item): ?>
        <div class="tarjeta">
        <div class=divFoto>
            <img style="width:100px" id="foto-personal" src="<?php echo $item['photo'] ?>" alt=""></div>
            <p><?php echo "<b>Nombre: </b>".$item['first_name']?></p>
            <p><?php echo "<b>Apellido: </b>".$item['last_name']?></p>
            <p><?php echo "<b>Género: </b>".$item['gender']?></p>
            <p><?php echo "<b>Edad: </b>".$item['age']?></p>
            <p><?php echo "<b>País: </b>".$item['country']?></p>
        </div>
        <?php endforeach;?>

    </div>
    </main>
</body>
</html>
