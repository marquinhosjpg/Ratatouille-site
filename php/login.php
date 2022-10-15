<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_login.css">
    <link rel="stylesheet" href="receita-header-banner.css">
    <title>Entrar</title>
</head>
<body>

    <main class="page-main">
        <!-- Header -->
        <div class="navbar">
            <div class="navbar-left">
                <a href="#"><img class="img-icon" src="img/img_icon.svg"/></a>
                <a href="receita.html"><div class="receita">Receitas</div></a>
                <a href="#"><div class="enviereceita">envie sua receita</div></a>
                <a href="#"><div class="sobrenos">Sobre nós</div></a>
            </div>
    
            <div class="navbar-right">
                <div class="pesquisar">
                    <svg
                        width="40pt"
                        height="40pt"
                        version="1.1" viewBox="0 0 752 752"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m520.91 504.98-83.453-83.465c37.648-45.699 35.145-113.61-7.5664-156.34-22-22-51.258-34.109-82.371-34.109-31.109 0-60.371 12.109-82.371 34.109-45.406 45.43-45.395 119.32 0 164.73 22 22 51.258 34.109 82.371 34.109 27.32 0 53.199-9.3594 74.004-26.543l83.43 83.441zm-239.81-91.016c-36.613-36.625-36.613-96.215 0-132.84 17.738-17.727 41.336-27.5 66.426-27.5 25.09 0 48.676 9.7773 66.426 27.5 36.613 36.625 36.613 96.215 0 132.84-17.738 17.727-41.336 27.5-66.426 27.5-25.09 0-48.688-9.7773-66.426-27.5z"/>
                    </svg>
                    <div class="search">Pesquisar</div>
                </div>
                <a href="login.html"><div class="login">Entrar</div></a>
                <a href="cad.html"><div class="cadastro">Cadastrar</div></a>
            </div>
        </div>

        <!-- Area de Login -->
        <div class="columns">
            <div class="column-main">
                <div class="login-container">
                    <div class="block-login">
                        <div class="block-title">
                            <h4 class="h4-title">Bem-Vindo(a)</h4>
                            <h1 class="h1-title">Fazer Login</h1>
                        </div>
                    </div>
                    <!-- Area Botoes -->
                    <div class="block-container">
                        <form action="verificarLogin.php" class="form-login" method="post" id="login-form">
                            <fieldset class="login-fieldset">
                                <div class="control">
                                    <div classs="field email">
                                        <label for="email" class="label">
                                            <span>Nome do Usuário</span>
                                        </label>
                                        <input name="userName" id="email" title="E-mail"  type="text" class="input-email">
                                    </div>
                                </div>
                                <div class="control">
                                    <div class="field senha">
                                        <label for="password" class="label">
                                            <span>Senha</span>
                                        </label>
                                        <input name="senha" id="password" title="Senha"  type="password" class="input-senha">
                                        <div class="eye" id="toggle-password">
                                            <img class="eye" src="img/view.png" alt="Mostrar ou Esconder Senha">
                                        </div>
                                    </div>
                                    <div class="botao-entrar">
                                        <div class="entrar">
                                            <button type="submit" class="action-entrar" name="login" id="send2">
                                                <span>Entrar</span>
                                            </button><br>
                                            <?php
                                                if(isset($_SESSION['msg'])){
                                                    echo $_SESSION['msg'];
                                                    unset ($_SESSION['msg']);
                                                }
                                            ?>
                                        
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <?php
                                if(isset($_SESSION['msg'])){
                                    echo $_SESSION['msg'];
                                    unset ($_SESSION['msg']);
                                }
                            ?>
                        </form>
                    </div>
                    <div class="mensagem">
                        <p>Ainda não tem uma conta Ratatouille?</p>
                        <a href="cad.php" class="texto" title="Criar uma conta">
                            <button type="submit" class="button" name="create" id="create2">
                                <span class="create">Criar uma Conta</span> 
                            </a> 
                        </button> 
                    </div> 
                </div>
            </div>
        </div>
        
        <!-- <footer>
            <div class="footer-content">
                <h3>Siga nossas redes sociais</h3>
                <p>Fique por dentro de nossas novidades e junte-se a comunidade</p>
                <ul class="socials">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                </ul>
            </div>
            <div class="footer-bottom">
                <p>copyright &copy;2022 JPM. designed by <span>pk</span></p>
            </div>
        </footer> -->
    </main>




</body>
</html>