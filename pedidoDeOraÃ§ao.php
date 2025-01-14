<?php
session_start();
include "verifica.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
    <title>Pedido de Oração!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<style>
	h1 {
		text-align: left;
	}
	span.titulo {
		text-align: left;
		color: rgba(252, 252, 17, 0.87);
		
	}
	a {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 40px;
   padding-left: 10px;
   color: rgba(45, 98, 245, 0.877);
   text-shadow: 1px 1px 1px black;
  text-decoration: none;  
  


 
}
a:hover {
    color: rgba(13, 4, 43, 0.664);
   
   text-shadow: 1px 1px 2px  rgba(7, 7, 20, 0.349);
   
}
	body {
		font-size: 36px;
	}
	a#menu {
		color: blueviolet;
		text-align: center;
		font-size: 56px;
	    margin-bottom: 1px;
	}

	</style>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<h1>Pedidos de Oração</h1>
			<?php 
    require_once "includes/funcoes.php";
    require_once "includes/banco.php";
    require_once "includes/login.php";

    $ordem = $_GET['o'] ?? "nome";
    $chave = $_GET['c'] ?? "";
	
    ?>
    <div>
	<a href="testmenu.php" id="menu"><h1>Menu</h1></a>
    
	<div id="nav">
		<form method="get" action="pedidoDeOraçao.php">
		<p class= "pequeno"><a href="pedidoDeOraçao.php?o=n2">Novos |</a> <a href="pedidoDeOraçao.php?o=n">Nome |</a>  <a href="pedidoDeOraçao.php?o=n1">Todos |  </a> <br> <a href="pedidoDeOraçao.php?o=d">Meus Pedidos | </a> <br>Buscar:<input type="text" name="c" size="10" maxlength="40"/><input type="submit" value="Ok"/></p></div>
		</form>
		<table class="listagem">
			<?php
			    
						
				$_SESSION['codb'] = $novo1->cod;
				$q = "SELECT * from pedidos ";

				if (!empty($chave)) {
					$q .= " WHERE nome like '%$chave%' OR urgencia like '%$chave%' OR pedido like '%$chave%'";
				}
				switch ($ordem) {
					case "d":
						$q = "SELECT * FROM `" . $_SESSION['user'] . "` ORDER BY cod DESC";
						break;
					case "n2":
						$q .= " WHERE ok = 0 ORDER BY cod DESC";
						break;
					case "n1":
						$q .= " ORDER BY cod DESC LIMIT 100";
						break;
					case "n":
						$q .= " ORDER BY nome LIMIT 100";
						break;
					default:
						$q .= " ORDER BY cod DESC LIMIT 100";
						
						break;

				}
				
			    
				$busca = $banco->query($q);
				if (!$busca) {
					echo "Falhou! $banco->error";
				} else {
				
					if ($busca->num_rows > 0) {
						while($reg = $busca->fetch_object()){
							$_SESSION['nomep'] = $reg->nome;
							$_SESSION['codp'] = $reg->cod;
							$validar_pedido = "`pedido".$_SESSION['codp']."`";
							$test = substr($reg->pedido, 0, 200);
							
	                        
							echo "<tr><td><a href='detalhes.php?cod=$reg->cod'><h1>Nome: <span class='titulo'>$reg->nome</span></h1></a>";
							echo "<td><span id='pedido'>$test</span><br>";
							echo text("<tr><td>Classe: $reg->urgencia<br>
							Numero: $reg->cod <br> $reg->data<br>");
							$s = "SELECT count(`nome`) as total FROM `pedido".$_SESSION['codp']."`";
						    $s1 = $banco->query($s);
						    $n2 = $s1->fetch_array();
						    echo "<br><h3> " . $n2["total"] ." Pessoas que Orarão ou estão Orando por esse Pedido.</h3>";
						    echo " ";
							

						
						
							if (is_admin()) {
								/*echo "<td><a href='pedidoDeOraçao.php?o=n'><span class='material-symbols-outlined'>
								add_circle</span></a>";
								#echo "<span class='material-symbols-outlined'>
								edit </span></a>";
								echo "<span class='material-symbols-outlined'>
								delete </span></a>";*/
							}elseif (is_editor()) {
								#echo "<td>Alterar";
							}
						}
						while($reg = $busca->fetch_object()){
							$_SESSION['nomep'] = $reg->nome;
							$_SESSION['codp'] = $reg->cod;
							$validar_pedido = "`pedido".$_SESSION['codp']."`";
						
							$s = "SELECT count(`nome`) as total FROM `pedido".$_SESSION['codp']."`";
						    $s1 = $banco->query($s);
						    $n2 = $s1->fetch_array();
						    echo " " . $n2["total"] ." Pessoas que Orarão ou estão Orando por esse Pedido.";
							if (is_admin()) {
								/*echo "<td><a href='pedidoDeOraçao.php?o=n'><span class='material-symbols-outlined'>
								add_circle</span></a>";
								#echo "<span class='material-symbols-outlined'>
								edit </span></a>";
								echo "<span class='material-symbols-outlined'>
								delete </span></a>";*/
							}elseif (is_editor()) {
								#echo "<td>Alterar";
							}
						}
					} else {
						echo "<p>Nenhum registro encontrado...</p>";
					}						
				}
				
			?>
		</table>
    

    <?php 
  echo voltar("Voltar"); ?>
    
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
