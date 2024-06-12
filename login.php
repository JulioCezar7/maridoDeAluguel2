<?php
session_start();

// Verifica se a variável de sessão para o alerta está definida
if(isset($_SESSION['login_error']) && !empty($_SESSION['login_error'])) {
    // Exibe o alerta JavaScript
    echo '<script>alert("' . $_SESSION['login_error'] . '");</script>';

    // Limpa a variável de sessão do alerta
    unset($_SESSION['login_error']);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="favicon.jpg"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script>
 

    // Função para redirecionar para a página inicial
    function redirectToCadastro() {
        window.location.href = "formulario.php"; 
    }

    </script>
</head>
<style>
body{
    margin: 0;
    font-family: 'Poppins';
}
.main-login{
    width: 100vw;
    height: 100vh;
    background-color: #063d84;
    display: flex;
    justify-content: center;
    align-items: center;
}
.left-login{
    width: 50vw;
    height: 60vh;
    display: flex;
    justify-self: center;
    align-items: center;
    flex-direction: column;
}
.left-login > h1{
    color: white
    
}
.right-login{
    width: 50vw;
    height: 100vh;
    display: flex;
    justify-self: center;
    align-items: center;
}
.card-login{
    width: 40%;
    display: flex;
    justify-self: center;
    align-items: center;
    flex-direction: column;
    padding: 30px 45px;
    background: white;
    border-radius: 20px;
    box-shadow: 0px 10px 40px #2e37e8;
}
.card-login > h1{
    color: black;
    
    letter-spacing: 1px;
    font-weight: 800;
    margin: 10;
}
.textfield{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: center;
    margin: 10px;
}
.textfield > input{
    width: 100%;
    border: none;
    border-radius: 10px;
    padding: 16px;
    background: white;
    color: #063d84;
    font-size: 12pt;
    box-shadow: 0px 10px 40px #585b5f;
    outline: none;
    box-sizing: border-box;
}
.textfield > label{
    color: black;
    font-weight: 800;
    margin-bottom: 10px;
}

.textfield > input::placeholder{
    color: #063d84;
}
.text-senha{
    font-size: 12px;
    color: #585b5f;
    cursor: pointer;
}
.btn-login{
    width: 75%;
    padding: 18px 5px;
    margin: 30px;
    border: none;
    border-radius: 8px;
    outline: none;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 1px;
    color: #585b5f;
    background: white;
    cursor: pointer;
    box-shadow: 0px 10px 40px -12px #585b5f;
}
.btn-cadastro{
    width: 55%;
    padding: 18px 5px;
    margin: 30px;
    border: none;
    border-radius: 8px;
    outline: none;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 1px;
    color: #585b5f;
    background: white;
    cursor: pointer;
    box-shadow: 0px 10px 40px -12px #585b5f;
}

</style>
<body>
    <div class="main-login">

        <div class="left-login"><h1>Faça Login! <br>E junte-se a nós.
        <img src="Server-amico.svg" class="left-img" alt="Server-amico"></div></h1>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <form action="testelogi.php" method="POST">
                    <div class="textfield">
                    <label for="usuario">Usuario:</label>
                    <input type="text" name="usuario" placeholder="usuario">
                    </div>
                    <div class="textfield">
                        <label for="password">Senha:</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <input class="btn-login" type="submit" name="submit" value="Login">
                </form>
                <button class="btn-cadastro" onclick="redirectToCadastro()">Cadastro</button>
            </div>
        </div>
    </div>
</body>
</html>