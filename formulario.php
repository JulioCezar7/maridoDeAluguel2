<?php
// Incluir arquivo da configuração
include_once('config.php');

// verifica se o formulario foi enviado
if(isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $data_nascimento = $_POST['data_nascimento'];

    // verifica se tem usuario ou email ja existe
    $query = "SELECT * FROM usuario WHERE usuario = '$usuario' OR email = '$email'";
    $result = mysqli_query($conexao, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['erro'] = "Erro: Usuário ou email já cadastrado!";
    } else {
        // Inseri os dados no banco
        $query = "INSERT INTO usuario(nome, usuario, email, data_nascimento, senha) 
        VALUES ('$nome','$usuario','$email', '$data_nascimento','$senha')";
        if (mysqli_query($conexao, $query)) {
            $_SESSION['sucesso'] = "Cadastro realizado com sucesso!";
        } else {
            $_SESSION['erro'] = "Erro ao cadastrar usuário!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/jpg" href="favicon.jpg"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script>
 

    // Função para redirecionar para a página inicial
    function redirectToLogin() {
        window.location.href = "login.php"; 
    }
</script>
<style>
        
body{
    font-family: 'Poppins';
    background-color: #063d84;
}
.box{
    color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    translate: -50% -50%;
    background-color: #585b5f;
    padding: 15px;
    border-radius: 12px;
    width: 20%;
}
fieldset{
    border: 3px solid #585b5f;
}
legend{
    border: 1px solid white;
    padding: 10px;
    text-align: center;
    background-color: #585b5f;
    border-radius: 8px;
}
.inputbox{
    position: relative;
}
.inputUser{
    background: none;
    border: none;
    border-bottom: 1px solid white;
    outline: none;
    color: white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
.labels{
    position: absolute;
    top: 0px;
    left: 0px;
    pointer-events: none;
    transition: .5s;
}
.inputUser:focus ~ .labels,
.inputUser:valid ~ .labels{
    top: -20px;
    font-size: 12px;
    color: white;
}
#data_nascimento{
    border: none;
    padding: 8px;
    border-radius: 10px;
    outline: none;
    font-size: 15px;
}
#submit{
    background-color: #063d84;
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 12px;
}
.btn-cadastro{
    background-color: #063d84;
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 12px;
}
    </style> 
   
</head>
 
<body>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br><br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labels">Nome Completo:</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="usuario" id="usuario" class="inputUser" required>
                    <label for="usuario" class="labels">Usuario:</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labels">E-mail:</label>
                </div>
                <br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="password" class="labels">Senha:</label>
                </div>
                <br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                
                <button type="submit" name="submit" id="submit">Enviar</button>
                <br><br>
                <button class="btn-cadastro" onclick="redirectToLogin()">Tenho Login</button>
            </fieldset>
        </form>
    </div>

    <!-- Exibir mensagem de erro -->
    <?php if(isset($_SESSION['erro'])) { ?>
        <div style="color: red;"><?php echo $_SESSION['erro']; ?></div>
        <?php unset($_SESSION['erro']); ?>
    <?php } elseif(isset($_SESSION['sucesso'])) { ?>
        <div style="color: green;"><?php echo $_SESSION['sucesso']; ?></div>
        <?php unset($_SESSION['sucesso']); ?>
    <?php } ?>
</body>
</html>