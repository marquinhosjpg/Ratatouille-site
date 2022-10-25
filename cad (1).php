<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratouille - Registrar</title>
    <link rel="stylesheet" href="estilo_cad.css">
</head>
<body>
    
    <div class="container">
        <div class="form-img">
            <img src="">
        </div>
        <div class="form">

            <form action="verificarUsuario.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Registrar</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="login.php">Entrar</a></button>
                    </div>
                </div>

                <div class="input-group">
                <div class="input-box">
                        <label for="CPF">CPF</label>
                        <input id="CPF" type="text" name="CPF" required>
                    </div>
                    <div class="input-box">
                        <label for="firstname">Nome</label>
                        <input id="nome" type="text" name="nome" required>
                    </div>
                    <div class="input-box">
                        <label for="userName">userName</label>
                        <input id="userName" type="text" name="userName" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" required>
                    </div>
                  
                   
                    <!--<div class="input-box">
                        <label for="confiremail">Confirmar E-mail</label>
                        <input id="confiremail" type="email" name="confiremail" required>
                    </div>-->
                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="senha" required>
                        <label for="password">Confirmar Senha</label>
                        <input id="password" type="password" name="senha2" required>
                    </div>
                    <!--<div class="input-box">
                        <label for="Confirmpass">Confirmar Senha</label>
                        <input id="Confirmpass" type="password" name="Confirmpass" required>
                    </div>-->
                </div>

                <div class="continue-button">
                    <button><a href="">Criar Conta</a></button>
                </div>
                <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
        ?>
            </form>
        </div>
    </div>
   
</body>
</html>