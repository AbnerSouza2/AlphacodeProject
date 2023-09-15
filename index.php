
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js" type="text/javascript"></script>
    <title>Cadastro Alphacode</title>
</head>
<body>
  

  <?php #Incluir config.php no index e pegar informaçoes do sql (tbclientes).
  include_once('config.php');
  $sql = "SELECT * FROM tbclientes ORDER BY id DESC";
  $result = $conn->query ($sql);
  ?>

  <header class="cabecalho">
    <img src="./assets/logo_alphacode.png" width="140px" alt="Logo Alphacode">
    <span>Cadastro de contatos</span>
  </header>

    <div class="container-fluid containerpai">
      <form method="post" name="cadastrocliente" action="ainstbc.php">
        <div class="row-fluid conteinergeral ">
            <div class="col-sm-6 col-md-6 g1 ">
                <label class="labels" for="nome" >Nome Completo</label>
                <input class="inputs" type="text" id="nome" name="nome" required placeholder="Ex: Abner de Souza">
                <label class="labels" for="email">E-mail</label>
                <input class="inputs" type="email" id="email" name="email" required   placeholder="Ex: abnersouza26@gmail.com">
                <label class="labels" for="telefone">Telefone</label>
                <input class="inputs" type="tel" id="telefone" name="telefone" required  pattern="\(\d{2}\)\d{4,5}-\d{4}$" required placeholder="Ex: (xx)xxxx-xxxx">
              
                <div class="form-check checkstyleleft">
                    <input class="form-check-input" name="possuiwhats"  type="checkbox" value="on" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        <span> Número de celular possui Whatsapp</span>
                    </label>
                  </div>

                <div class="form-check checkstyleleft ">
                    <input class="form-check-input " name="enviarsms" type="checkbox" value="on" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        <span>Enviar notificações por SMS</span>
                    </label>                 
                  </div>                 
            </div>
      
            <div class="col-sm-6 col-md-6 g2">
                <label class="labels" for="datanascimento">Data de nascimento</label>
                <input class="inputs" type="date" id="datanascimento" name="datanascimento" required  placeholder="Ex: 18/12/1996">   
                <label class="labels" for="profissao">Profissão</label>
                <input class="inputs" type="text" id="profissao" name="profissao" required  placeholder="Ex: Desenvolvedor FullStack">
                <label class="labels" for="celular">Celular</label>
                <input class="inputs" type="tel" id="celular" pattern="\(\d{2}\)\d{4,5}-\d{4}$" required name="celular" placeholder="Ex: (xx)xxxxx-xxxx">
                <div class="form-check checkstyleright">
                    <input class="form-check-input" name="notficacaoemail"  type="checkbox" value="on" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Enviar notificações por E-mail
                    </label>
                </div>

                <div class="btncadastrar">
                    <button type="submit" name="cadastrar" value="cadastrar">Cadastrar contato </button>                
                  </div>

            </div>
        </div>

      </form>
        <hr>

            <table class="table  table-hover  tablegeral">
                <thead class="tabletop">
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Celular para contato</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>

                <tbody>             
                  <?php   #Colher os dados do registro na tabela
                  while($user_data = mysqli_fetch_assoc($result))
                  {
                    echo "<tr>";       
                    echo "<td>". $user_data ['nome']. "</td>";
                    echo "<td>". $user_data ['datanascimento']. "</td>";
                    echo "<td>". $user_data ['email']. "</td>";
                    echo "<td>". $user_data ['celular']. "</td>";
                    echo "<td> 
                      <a class= 'btn btn-sm btn-primary' href='edit.php?id=$user_data[id]' title='Editar'>
                      <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor class='bi bi-pencil' viewBox='0 0 16 16'>
                          <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                        </svg>
                        </a>

                        <a class= 'btn btn-sm btn-danger' href='delete.php?id=$user_data[id]' title='Deletar'> 
                          <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3' viewBox='0 0 16 16'>
                            <path d='M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z'/>
                          </svg>
                        </a>
                    </td>";
                  
                  }
                  ?>

                </tbody>
              </table>

              <div class="row rodape">
                <a class="col-md-4 r1" href="">Termos | Politicas</a>
                <footer class="col-md-4 r2">&copy Copyright 2022 | Desenvolvido por <img src="./assets/logo_rodape_alphacode.png" width="100px" alt=""></footer>
                <span class="col-md-4 r3">&copyAlphacode IT Solutions 2022</span> 
            </div>
        </div> 
   
  
    
</body>

</html>