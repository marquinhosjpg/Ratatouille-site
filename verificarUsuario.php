    <?php
        session_start();
        include_once("conexaoDB.php");

        if (isset($_POST['CPF'])){
            $CPF=$_POST['CPF'];
        } else {
            $CPF = '';
        }
        if (isset($_POST['nome'])){
            $nome=$_POST['nome'];
        } else {
            $nome = '';
        }
        if (isset($_POST['userName'])){
            $userName=$_POST['userName'];
        } else {
            $userName = '';
        }
        if (isset($_POST['dataNasc'])){
            $dataNasc=$_POST['dataNasc'];
        } else {
            $dataNasc = '';
        }
        if (isset($_POST['email'])){
            $email=$_POST['email'];
        } else {
            $email = '';
        }
        if (isset($_POST['telefone'])){
            $telefone=$_POST['telefone'];
        } else {
            $telefone = '';
        }
        if (isset($_POST['senha'])){
            $senha=$_POST['senha'];
        } else {
            $senha = '';
        }

        
        
        $sqlselect= "SELECT * FROM cadastro WHERE userName = '$userName'";
        $resultadoselect = @mysqli_query($connect,$sqlselect);

        if (@mysqli_num_rows($resultadoselect)==0){
            $sql = "insert into cadastro values (default, '$CPF', '$nome', '$userName', '$dataNasc', '$email', '$telefone', '$senha')";
            $resultado = @mysqli_query($connect,$sql);
            if (!$resultado){
                die ('Query Inválida: ' . @mysqli_error($connect));
                exit;
            }else{
                mysqli_close($connect);
                $_SESSION['msg'] = "$userName cadastrado com sucesso!";
                header("Location: cadastro.php");
            }
        } else{
                $_SESSION['msg'] = "$userName já possui cadastro!";
                header("Location: cadastro.php");
        }
        
     ?>