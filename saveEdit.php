 

<?php #Salvar as informaçoes editadas e voltar para a pagina de cadastro.

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST ['nome'];
        $email = $_POST ['email'];
        $telefone = $_POST ['telefone'];
        $datanascimento = $_POST ['datanascimento'];
        $profissao = $_POST ['profissao'];
        $celular = $_POST ['celular'];

        $sqlUpdate = "UPDATE tbclientes
        SET nome='$nome', email='$email', telefone='$telefone', datanascimento='$datanascimento', profissao='$profissao', celular='$celular'
        WHERE id= '$id'";

        $result = $conn->query($sqlUpdate);
        
    }
    header('Location: index.php');

?>