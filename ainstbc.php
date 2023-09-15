<?php include_once "config.php";?>

<?php #Colher os dados do cliente e adicionar na tabela do banco de dados.
$nome = $_POST ['nome'];
$email = $_POST ['email'];
$telefone = $_POST ['telefone'];
$datanascimento = $_POST ['datanascimento'];
$profissao = $_POST ['profissao'];
$celular = $_POST ['celular'];
$possuiwhats = $_POST ['possuiwhats'] = ( isset($_POST['possuiwhats']) ) ? true : null;
$enviarsms = $_POST ['enviarsms'] = ( isset($_POST['enviarsms']) )  ? true : null;
$notficacaoemail = $_POST ['$notficacaoemail'] = ( isset($_POST['notficacaoemail']) ) ? true : null;

$sql = "INSERT INTO tbclientes (nome,email,telefone,datanascimento,profissao,celular,possuiwhats,enviarsms,notficacaoemail)VALUES('$nome', '$email', '$telefone', '$datanascimento', '$profissao', '$celular', '$possuiwhats', '$enviarsms', '$notficacaoemail')";


/* Retornar a home se o cadastro deu ok! */
if (mysqli_query($conn, $sql)){
    header("Location: index.php");
}else{
    echo "Error no cadastro" . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>

