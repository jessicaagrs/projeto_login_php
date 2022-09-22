<?php
include('conection.php');

if(isset($_POST['email']) || isset($_POST['password'])){

    if(strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['password']) == 0){
        echo "Preencha sua senha";
    } else {
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$password'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL".$mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['name'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/assets/style.css">
    <title>Login</title>
</head>
<body>

    <form method="post" class="container">
            <label>Email</label>
            <input type="email" name="email" id="email">
            <label>Senha</label>
            <input type="password" name="password" id="password">
            <input type="submit" value="Enviar" id="submit">
    </form>
    
</body>
</html>