
<?php
	$nome = $_POST['nome'];						
	$email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];			
    $confirmarsenha = $_POST['confirmarsenha'];			

				
	if($nome == "" or $telefone == "" or $email == "" or $senha =="" or $confirmarsenha == "")
	{
		echo "<script>alert('Campos Obrigatórios em branco, preencha corretamente ....');</script>";
        echo "<script>javascript:window.location='cadastro_clientes.html';</script>";
	}
	else{			
        //conectando ao bamco de dados
        $mysqli = new mysqli('localhost', 'root', '', 'story_geek');
        $sql = "insert into cadastro_clientes values (null, '$nome', '$email', '$telefone', '$senha')";
        //mostrar o resutado
        $result = $mysqli ->query($sql);
        echo "<script>alert('Usuário Cadastrado com Sucesso!!!');</script>";
        echo "<script>javascript:window.location='index.html';</script>";

	}
				
?>