<?php
   #Estrutura para puxar do banco de dados algum cadastro para edição de dados.
    if(!empty($_GET['id']))
    {
      include_once('config.php');


        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM tbclientes WHERE id=$id";

        $result = $conn->query($sqlSelect);

        if($result->num_rows > 0)
        {

            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $datanascimento = $user_data['datanascimento'];
                $profissao = $user_data['profissao'];
                $celular = $user_data['celular'];
              
            }
      
        }
      }
?>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <title>Editar cadastro</title>
</head>
<body>

<style>

.btneditar{
    display: flex;
    justify-content: right;
   
}
.btneditar button{
    border-radius: 5px;
    height: 40px;
    width: 240px;
    border: none;
    margin-top: 80px;
    background-color: #068ED0;
    color: white;
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
   
}

.btnvoltar{
  display: flex;
  align-items: center;
  justify-content: center;
  width: 240px;
  height: 40px;
  background-color: red;
  margin-top: 80px;
  border-radius: 5px;

}

.btnvoltar a{
  color: white;
  text-decoration: none;
  font-size: bold;
}


</style>

<form class="conteinerpaiedit" method="post" name="cadastrocliente" action="saveEdit.php">
<header class="cabecalho">
    <img src="./assets/logo_alphacode.png" width="140px" alt="Logo Alphacode">
    <span>Editar Clientes</span>
  </header>
    <div class="container-fluid containerpai">
      <form method="post" name="cadastrocliente" action="ainstbc.php">
        <div class="row-fluid conteinergeral ">
            <div class="col-sm-6 col-md-6 g1 ">
                <label class="labels" for="nome" >Nome Completo</label>
                <input class="inputs" type="text" id="nome" name="nome" value="<?php echo $nome ?>" required placeholder="Ex: Abner de Souza">
                <label class="labels" for="email">E-mail</label>
                <input class="inputs" type="email" id="email" name="email" value="<?php echo $email ?>"  placeholder="Ex: abnersouza26@gmail.com">
                <label class="labels" for="telefone">Telefone</label>
                <input class="inputs" type="text" id="telefone" name="telefone" value="<?php echo $telefone ?>" pattern="\(\d{2}\)\d{4,5}-\d{4}$" placeholder="Ex: (xx)xxxxx-xxxx">
                <button class="btnvoltar"><a href="index.php">Voltar</a></button>      
            </div>
      

            <div class="col-sm-6 col-md-6 g2">
                <label class="labels" for="datanascimento">Data de nascimento</label>
                <input class="inputs" type="date" id="datanascimento" name="datanascimento" value="<?php echo $datanascimento ?>" placeholder="Ex: 18/12/1996">   
                <label class="labels" for="profissao">Profissão</label>
                <input class="inputs" type="text" id="profissao" name="profissao" value="<?php echo $profissao ?>" placeholder="Ex: Desenvolvedor FullStack">
                <label class="labels" for="celular">Celular</label>
                <input class="inputs" type="tel" id="celular" pattern="\(\d{2}\)\d{4,5}-\d{4}$" required name="celular" value="<?php echo $celular ?>" placeholder="Ex: (xx)xxxxx-xxxx">             
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <div class="btneditar">
                    <button type="submit" name="update" id="update">Salvar </button>
                </div>
            </div>
        </div>
      </form>

      <div class="row rodape">
                <a class="col-md-4 r1" href="">Termos | Politicas</a>
                <footer class="col-md-4 r2">&copy Copyright 2022 | Desenvolvido por <img src="./assets/logo_rodape_alphacode.png" width="100px" alt=""></footer>
                <span class="col-md-4 r3">&copyAlphacode IT Solutions 2022</span> 
            </div>

  </body>