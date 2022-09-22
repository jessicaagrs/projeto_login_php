<?php

include('protect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/assets/style.css">
    <title>Painel</title>
</head>
<body>
    <h1>Bem Vindo ao Painel</h1>
    
    <p><?php echo $_SESSION['name']; ?></p>

    <div class="image">
        <img src="src/assets/arranjo1.jpg" alt="arranjo de flores" width="500">
        <img src="src/assets/arranjo2.jpg" alt="arranjo de flores" width="500">
        <img src="src/assets/arranjo3.jpg" alt="arranjo de flores" width="500">
    </div>

    <p><a href="logout.php">Sair</a></p>

</body>
</html>