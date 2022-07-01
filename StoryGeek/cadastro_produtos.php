
<?php
	$nome = $_POST['nome'];						
	$modelo = $_POST['modelo'];
    $valor = $_POST['valor'];
    $img1 = $_POST['imagem1'];
    $img2 = $_POST['imagem2'];
    $img3 = $_POST['imagem3'];
    $img4 = $_POST['imagem4'];
    $img5 = $_POST['imagem5'];
    // $img1= $_FILES['img1']['name'];
    // $img2= $_FILES['img2']['name'];
    // $img3= $_FILES['img3']['name'];
    // $img4= $_FILES['img4']['name'];
    // $img5= $_FILES['img5']['name'];
    $descricao = $_POST['voutestar'];



	if($nome == "" or $modelo == "" or $valor == "" or $img1=="" or $img2=="" or $img3=="" or $img4=="" or $img5=="" or $descricao=="")
	{
		echo "<script>alert('Campos Obrigatórios em branco, preencha corretamente ....');</script>";
        echo "<script>javascript:window.location='cadastro_produtos.html';</script>";
	}
	else{			
        //conectando ao bamco de dados
        $mysqli = new mysqli('localhost', 'root', '', 'story_geek');
        $sql = "insert into cadastro_produto values (null, '$nome', '$valor', '$img1', '$img2', ' $img3', ' $img4',  '$img5', '$descricao')";
        //mostrar o resutado
        $result = $mysqli ->query($sql);
        echo "<script>alert('Produto Cadastrado com Sucesso!!!');</script>";
        echo "<script>javascript:window.location='visualizar.php';</script>";

	}
				
?>