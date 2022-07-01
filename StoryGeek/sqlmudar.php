<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Styles/style.css" rel="stylesheet" type="text/css" />
    <link href="Styles/menu.css" rel="stylesheet" type="text/css" />
    <link href="Styles/submenu.css" rel="stylesheet" type="text/css" />
    <link href="Styles/final.css" rel="stylesheet" type="text/css" />
    <link href="Styles/roupas.css" rel="stylesheet" type="text/css" />
    <link href="Styles/cadastros.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Cadastro</title>
</head>
<body>

<div class="Tudo">

    <div class="menu" id="menujs">

        <div class="logo">
        <a href="index.html"><img src="img/Logo.png" alt=""></a>
        </div>

        <div class = "pesquisa">
            <form action="#" method="post">
                <input type="text" name="search" id="search" placeholder="Faça sua Busca" required>
                <div class="botãoPesquisa">
                <button type="submit" style="margin-top: 2px;"> <img src="img/pesquisar.png" height="20px" width="20px"> </button> 
                </div>
            </form>
        </div>

        <div class="entrar">

            <div class="imgentrar">
              <img src="img/camisa_entrar.png" height="40px" width="40px" alt="">
            </div>
            <div class="textentrar">
            <nav>
              <ul>
                <li>
                  <p>Cadastrar</p>
                  <div class="submenuentrar">
                    <ul>
                      <li>
                        <div class="text2">
                          <p><a href="cadastro_clientes.html">Cadastre-se</a></p>
                        </div>
                      </li>
                        <li>
                          <div class="text2">
                            <p><a href="cadastro_produtos.html">Cadastre-Produto</a></p>
                          </div>
                        </li>
                        <li>
                          <div class="text2">
                              <p><a href="#">Visualizar-Produto</a></p>
                          </div>
                        </li>
                          <li>
                              <div class="text2">
                                  <p><a href="#">Alterar-Produto</a></p>
                              </div>
                          </li>
                              <li>
                                  <div class="text2">
                                      <p><a href="#">Excluir-Produto</a></p>
                                  </div>
                              </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </nav>
              <div class="seta">
                <img src="img/seta.png" height="20px" width="20px">
              </div>
            </div>

        </div>
    </div>

    <div Class="Sub-Menu">
      <div class="nomes">
        <div class="colecoes">
          <ul>
            <li>
              <p><a href="#">COLEÇÕES</a></p>
            </li>
              <li>
                <p><a href="#">CAMISETAS</a></p>
              </li>
                <li>
                  <p><a href="#">BLUSÃO</a></p>
                </li>
                  <li>
                    <p><a href="#">MOLETONS</a></p>
                  </li>
                    <li>
                      <p><a href="#">MANGA LONGA</a></p>
                    </li>
                      <li>
                        <p><a href="#">PARCEIROS</a></p>
                      </li>
                        <li>
                          <p><a href="#">CREATORS</a></p>
                        </li>
                          <li>
                            <p><a href="#">ARTISTAS</a></p>
                          </li>
          </ul>
        </div>
      </div>
    </div>



    <?php
            $ID = $_POST['ID'];
            $nome = $_POST['nome'];
            $valor = $_POST['valor'];
            $descricao = $_POST['descricao'];
            $img1 = $_POST['imagem1'];
            $img2 = $_POST['imagem2'];
            $img3 = $_POST['imagem3'];
            $img4 = $_POST['imagem4'];
            $img5 = $_POST['imagem5'];


			$mysqli = new mysqli('localhost', 'root', '', 'story_geek');

            $sql = "update cadastro_produto SET nome='$nome', valor='$valor', img1='$img1', img2='$img2', img3='$img3', img4='$img4', img5='$img5', descricao='$descricao' where id = $ID";
            $result = $mysqli -> query($sql);

            echo "
            <div class='desaque'>
            <br>
            Dados Alterados com Sucesso!!!
            <div class='barra'>
         
            </div> ";
		
    ?>
