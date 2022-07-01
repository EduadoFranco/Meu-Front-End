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
       $mysqli = new mysqli('localhost', 'root', '', 'story_geek');
       $sql = "select * from cadastro_produto WHERE id = $ID";
       $result = $mysqli -> query($sql);
       while ($linha = $result -> fetch_assoc()){

            $nome = $linha['nome'];
            $valor = $linha['valor'];
            $descrisao = $linha['descricao'];
          }


   Echo "
        <div class='tudo'>

        <br>
        <div class='desaque'>
            <br>
            CADASTRE SEU PRODUTO
            <div class='barra'>

            </div> 
        </div>

        <div class='contexto'>
            <br>
        </div>
        <div class='texto10'>
            Venda muito mais e mais rápido na STORY GEEK!
        </div>
        <br>
        <br>
        <form method='post' action='sqlmudar.php'>
        <div class='nome'>
            <div class='normal'>
                    ID </br>
                    <input class='voutestar'type='text' name='ID' size='25' value='' /><br/>
                <br/>
                    NOME DO PRODUTO </br>
                        <input class='voutestar'type='text' name='nome' size='25' value='$nome' /><br/>
                    <br/>
                    MODELO</br>
                    <input class='voutestar'type='text' name='modelo' size='25' value='Digite o modelo do produto'/><br/>
                    <br/>
                    VALOR DO PRODUTO </br>
                    <input class='voutestar'type='text' name='valor' size='25' value='$valor'/><br/>
                    <br/>
            </div>
                <div class='imgs'>
                URL DA IMAGEM 1</br>
                    <input class='voutestar'type='text' name='imagem1' size='25' value=''/><br/>
                    <br/>
                    <input id='img-input' type='file' name='img1' size='25' style='border-radius: 0px;'/><br/>
                    <div id='img-container'>
                        <img id='preview' src='' height='200px' width='200px'>
                    </div>
                    URL DA IMAGEM 2</br>
                    <input class='voutestar'type='text' name='imagem2' size='25' value=''/><br/>
                    <br/>
                    <input id='img-input2'type='file' name='img2' size='25' style='border-radius: 0px;'/><br/>
                    <div id='img-container2'>
                        <img id='preview2' src='' height='200px' width='200px'>
                    </div>
                    URL DA IMAGEM 3</br>
                    <input class='voutestar'type='text' name='imagem3' size='25' value=''/><br/>
                    <br/>
                    <input id='img-input3'type='file' name='img3' size='25' style='border-radius: 0px;'/><br/>
                    <div id='img-container3'>
                        <img id='preview3' src='' height='200px' width='200px'>
                    </div>
                    URL DA IMAGEM 4</br>
                    <input class='voutestar'type='text' name='imagem4' size='25' value=''/><br/>
                    <br/>
                    <input id='img-input4'type='file' name='img4' size='25' style='border-radius: 0px;'/><br/>
                    <div id='img-container4'>
                        <img id='preview4' src='' height='200px' width='200px'>
                    </div>
                    URL DA IMAGEM 5</br>
                    <input class='voutestar'type='text' name='imagem5' size='25' value=''/><br/>
                    <br/>
                    <input id='img-input5'type='file' name='img5' size='25' style='border-radius: 0px;'/><br/>
                    <div id='img-container5'>
                        <img id='preview5' src='' height='200px' width='200px'>
                    </div>
                    <br/>
                    <br/>
                    <div class='textoo'>
                    DESCRIÇÃO DO PRODUTO </br>
                    <textarea rows='5' cols='100'class='voutestar' name='descricao'>$descrisao</textarea>
                    </div>
                    <br/>
                    <br/>
                    <br/>
                </div>
        <input class='cadastar'type='submit' name='enviar' value='CONFIRMAR'/>
        </form>
                    <br>
                    <br>
        </div>";
   
   ?>


      <div class="contato">
        <div class="textpromo">
          Receba nossas ofertas e promoções exclusivas!
        </div>
        <div class = "pesquisa2">
          <form action="#" method="post">
              <input type="text" name="search" id="search" placeholder="Digite seu E-Mail" required>
              <div class="botãoPesquisa">
                <button style=" border-radius: 12px; border-radius: 9px; background-color: black;color: white; width: 60px; height: 25px; color: white; margin-top: 3px; margin-left: -25px;"> Enviar </button>
              </div>
          </form>
      </div>
      </div>
      
      <div class="final">
        <div class="block">
          <div class="logodiv">
            <img src="img/storygeek.png">
            </div>

            <div class="texto">
              Institucional
            </div>
            <div class="subtext">
              <a href="#">Home</a>
            </div>
            <div class="subtext">
              <a href="#">Onde Estamos</a>
            </div>
            <div class="subtext">
              <a href="#">Fale Conosco</a>
            </div>
            <div class="subtext">
              <a href="#">Trocas e devoluções</a>
            </div>
            <div class="subtext">
              <a href="#">Segurança</a>
            </div>
            <div class="subtext">
              <a href="#">Quem Somos</a>
            </div>
            <div class="subtext">
              <a href="#">Dúvidas Frequentes</a>
            </div>
            <div class="subtext">
              <a href="#">Privacidade</a>
            </div>
            <div class="subtext">
              <a href="#">Creators</a>
            </div>
            <div class="subtext">
              <a href="#">Parceiros</a>
            </div>

            <div class="texto2">
              Atendimento
            </div>
            <div class="subtext2">
              <a href="#">sac@storygeek.com.br</a>
            </div>
            <div class="subtext2">
              <a href="#">www.storygeek.com.br</a>
            </div>


            <div class="texto3">
              Ajuda
            </div>
            <div class="subtext3">
              <a href="#">Como fazer uma troca?</a>
            </div>
            <div class="subtext3">
              <a href="#">Como rastrear meu pedido?</a>
            </div>
            <div class="subtext3">
              <a href="#">Como ser um parceiro da storygeek?</a>
            </div>
            <div class="subtext3">
              <a href="#">Como entrar em contato com a storygeek?</a>
            </div>
            <div class="subtext3">
              <a href="#">É seguro comprar na storygeek?</a>
            </div>

            <div class="texto4">
              Siga nossas redes
            </div>
            <div class="subtext4">
              <a href="#"><img src="img/icons.jpg"></a>
            </div>

            <div class="texto5">
              Mais buscados
            </div>
            <div class="subtext5">
              <a href="#">Lançamentos</a>
            </div>
            <div class="subtext5">
              <a href="#">Coleção Calamidade</a>
            </div>
            <div class="subtext5">
              <a href="#">Camisetas de Filmes e Séries</a>
            </div>
            <div class="subtext5">
              <a href="#">Camisetas de Games</a>
            </div>
            <div class="subtext5">
              <a href="#">Camisetas de Música</a>
            </div>
            <div class="subtext5">
              <a href="#">Camisetas de Anime</a>
            </div>
             <div class="subtext5">
              <a href="#">Moletons</a>
            </div>


            <div class="texto6">
              Formas de Pagamento
            </div>
            <div class="subtext6">
              <a href="#"><img src="img/iconscompra.jpg"></a>
            </div>

            <div class="texto7">
              Certificados
            </div>
            <div class="subtext7">
              <a href="#"><img src="img/iconscerti.jpg"></a>
            </div>
            <center>
              <div class="subtext8">
                Copyright EDUARDO FRANCO LTDA - 15802576000140 - 2022. Todos os direitos reservados.
              </div>
            </center>
            
        </div>
      </div>

    </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <script src="script.js"></script>
  <script src="cortamanho.js"></script>

</div>