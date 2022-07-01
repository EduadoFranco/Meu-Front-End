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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>StoryGeek</title>
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


    <div class="tudo">

        <div class="desaque2">
            <br>
            SEUS PRODUTOS
            <div class="barra2">
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
            $img1 = $linha['img1'];
            $img2 = $linha['img2'];
            $img3 = $linha['img3'];
            $img4 = $linha['img4'];
            $img5 = $linha['img5'];
            $valordesc = 0;
            //$divisao = 0;

            if($valor < 70){
                $valordesc = 78.87;
              }
            else if($valor < 190 && $valor > 150){
                 $valordesc = 239.90;
              }
            else if($valor < 150 && $valor > 70){
                $valordesc = 189.90;
              }
            else if ($valor > 190){
               $valordesc = $valordesc = 339.90;
              }
      
            //$divisao = ($valor / 3);

          }

        //  //$nome = $linha['nome'];
        //  //$nome="abobora";
        //  //$valor = 37.66;
        //  $valordesc = 0;
        //  $divsao = 0;
        //  //$descrisao = "asdasfsafsdfdsfdsfsfsdfdsfsdfsdfsdfsdfsdfdsfsdfdsfsdfsdfsdfsdfsdfdsfsdfsdfsdfsdfs";

        //  if($valor < 70){
        //      $valordesc = 78.87;
        //  }
        //  else if($valor < 190 && $valor > 150){
        //     $valordesc = 239.90;
        //  }
        //  else if($valor < 150 && $valor > 70){
        //      $valordesc = 189.90;
        //  }
        //  else if ($valor > 190){
        //      $valordesc = $valordesc = 339.90;
        //  }

        //  $divsao = $valor / 3;
   
    Echo"        
        <div class='tudo2'>
            <div class='flex'>  
                <nav>
                    <ul>
                    <li>
                        <img src='$img1' height='80px' width='80px' onclick=teste1();'>
                    </li>
                        <li>
                        <img src='$img2' height='80px' width='80px' onclick='teste2();''>
                        </li>
                        <li>
                            <img src='$img3' height='80px' width='80px' onclick='teste3();'>
                        </li>
                            <li>
                            <img src='$img4' height='80px' width='80px' onclick='teste4();'>
                            </li>
                            <li>
                                <img src='$img5' height='80px' width='80px' onclick='teste5();'>
                            </li>
                    </ul>
                </nav>
            </div>

            <div class='textoscompra'>

                <div class='imgprincipal'>
                <img id='imgprincipal' src='$img1' width='522px' height='522px' >
                </div>

                <div class='texttitulo'>
                    $nome</br>
                </div>
                <br>

                <div class='valordesconto'>
                <s>R$$valordesc</s>
                </div>

                <div class='valorpreco'>
                R$$valor
                </div>

                <div class='valorparcelas'>
                3x de R$$divisao sem juros
                </div>
                <br>
                <br>
                <div class='leraTamanho'>
                TAMANHO
                </div>

                <div class='tamanho'>
                <nav>
                <ul>
                    <li>
                    <div class='tamanho1' id='test'>
                        <p id='tamanho' onclick='clicar()'> PPP </p>
                    </div>
                    </li>
                    <li>
                        <div class='tamanho1' id='test2'>
                        <p id='tamanho' onclick='clicar2()'> P </p>
                        </div>
                    </li>
                        <li>
                        <div class='tamanho1' id='test3'>
                            <p id='tamanho' onclick='clicar3()'> M </p>
                        </div>
                        </li>
                        <li>
                            <div class='tamanho1' id='test4'>
                            <p id='tamanho' onclick='clicar4()''> G </p>
                            </div>
                        </li>
                            <li>
                            <div class='tamanho1' id='test5'>
                                <p id='tamanho' onclick='clicar5()'> 2G </p>
                            </div>
                            </li>
                            <li>
                                <div class='tamanho1' id='test6'>
                                <p id='tamanho' onclick='clicar6()'> 3G </p>
                                </div>
                            </li>
                                <li>
                                <div class='tamanho1' id='test7'>
                                    <p id='tamanho' onclick='clicar7()'> 4G </p>
                                </div>
                                </li>
                </ul>
                </div>
                </nav>

                <div class='addvalor'>
                <input type='number' value='1' style='width: 51px;'>
                </div>
                <div class='butaocomprar'>
                <button>COMPRAR</button>
                </div>
                <div class='cep'>
                Consulte o frete e prazo de entrega
                </div>
                <div class='cepcaixa'>
                <input name='CEP' id='CEP' required pattern='\d{5}-\d{3}' width='60px'/>
                </div>
                <div class='seta2'>
                <a href='#'><img src='img/setalado.png' height='20px' width='20px'></a>
                </div>
                <br>
                <br>
                <br>
                <div calss='ofret'>
                <div class='fret'>
                    <div class='textfret'>
                    FRETE GRÁTIS - MOOVE
                    </div>
                    <div class='textfret2'>
                    Chega entre sexta 08/07 e quarta 13/07
                    </div>
                    <div class='valorfret'>
                    Grátis
                    </div>
            
                </div>
                <div class='fret'>
                    <div class='textfret'>
                        FRETE PROMOCIONAL
                    </div>
                    <div class='textfret2'>
                        Chega entre quarta 06/07 e quinta 14/07
                    </div>
                    <div class='valorfret2'>
                        R$14,58
                    </div>
                </div>
                <div class='fret'>
                    <div class='textfret'>
                    FRETE MOOVE
                    </div>
                    <div class='textfret2'>
                    Chega entre quinta 07/07 e sexta 15/07
                    </div>
                    <div class='valorfret2'>
                    R$15,68
                    </div>
            
                </div>
                <div class='fret'>
                    <div class='textfret'>
                    NORMAL
                    </div>
                    <div class='textfret2'>
                    Chega entre segunda 11/07 e terça 19/07
                    </div>
                    <div class='valorfret2'>
                    R$16,69
                    </div>
                </div>
                </div>
                <br>
                <br>
                <br>
                <div class='lancamentos'>
                <br>
                DESCRIÇÃO
                <div class='barralan'>

                </div> 
                </div>

                <div class='descricao'>
                <p>$descrisao</p>
                </div>
                <br>
                <br>
                <br>
                <div class='desaque2'>";



          Echo" <script>
                
                function teste1(){
                  document.getElementById('imgprincipal').src='$img1';
              
              }
              
              function teste2(){
                  document.getElementById('imgprincipal').src='$img2';
              
              }
              
              function teste3(){
                  document.getElementById('imgprincipal').src='$img3';
              
              }
              
              function teste4(){
                  document.getElementById('imgprincipal').src='$img4';
              
              }
              
              function teste5(){
                  document.getElementById('imgprincipal').src='$img5';
              
              }
              </script>";


      ?>

    </div>

    <div class="desaque2">
      <br>
      VOCÊ TAMBÉM PODE GOSTAR
      <div class="barra2">
      </div> 
    </div>

    <div class="ofertas">
      <div class="contexto4">
          <div class="card" style="width: 15rem;" >
            <img id= "imagem7" src="img/roupas/imgrp13.png" class="card-img-top" alt="..." onmouseenter="entrar7()" onmouseout="sair7()">
            <div class="card-body">
              <p class="card-text">MOLETOM PRETO - FEEL GOOD</p>
              <p>R$189,90</p>
              <center>
                <div class="botão_comprar">
                  <button style=" border-radius: 12px; border-radius: 12px; background-color: #30b258; width: 160px; height: 50px; color: white;"> Comprar </button>
                </div>
              </center>
            </div>
          </div>

          <div class="card" style="width: 15rem;" >
            <img id= "imagem8" src="img/roupas/imgrp16.png" class="card-img-top" alt="..." onmouseenter="entrar8()" onmouseout="sair8()">
            <div class="card-body">
              <p class="card-text">CAMISETA PRETA - GOAT ROSES</p>
              <p>R$64,90</p>
              <center>
                <div class="botão_comprar">
                  <button style=" border-radius: 12px; border-radius: 12px; background-color: #30b258; width: 160px; height: 50px; color: white;"> Comprar </button>
                </div>
              </center>
            </div>
          </div>

        <div class="card" style="width: 15rem;" >
          <img id= "imagem9" src="img/roupas/imgrp18.png" class="card-img-top" alt="..." onmouseenter="entrar9()" onmouseout="sair9()">
          <div class="card-body">
            <p class="card-text">MOLETOM PRETO - LIFE AND DEATHD</p>
            <p>R$189,90</p>
            <center>
              <div class="botão_comprar">
                <button style=" border-radius: 12px; border-radius: 12px; background-color: #30b258; width: 160px; height: 50px; color: white;"> Comprar </button>
              </div>
            </center>
          </div>
        </div>

        <div class="card" style="width: 15rem;" >
          <img id= "imagem10" src="img/roupas/imgrp19.png" class="card-img-top" alt="..." onmouseenter="entrar10()" onmouseout="sair10()">
          <div class="card-body">
            <p class="card-text">CAMISETA PRETA - EGYPT CAT</p>
            <p>R$69,90</p>
            <center>
              <div class="botão_comprar">
                <button style=" border-radius: 12px; border-radius: 12px; background-color: #30b258; width: 160px; height: 50px; color: white;"> Comprar </button>
              </div>
            </center>
          </div>
        </div>
          
      </div>

      <br>
      <br>
      <br>
      <br>
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