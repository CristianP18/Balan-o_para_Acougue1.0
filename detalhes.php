<?php
session_start();
   ?>
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
   
   text-shadow: 2px 2px 2px  rgba(7, 7, 20, 0.349);
   
}
    div#body {
        font-size: 46px;
        font-family: Arial, Helvetica, sans-serif;
    }
    span#nome {
        font-family: Arial, Helvetica, sans-serif;
		color: darkmagenta;
    }
	span#pedido {
		font-size: 36px;
		padding-bottom: 2px;
	}
	h3 {
		font-size: 28px;
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
			<?php 
    require_once "includes/funcoes.php";
    require_once "includes/banco.php";
    require_once "includes/login.php";
	$add = $_GET['a'] ?? "";
    ?>
    <div id="body">
    <a href="testmenu.php" id="menu"><h1>Menu</h1></a>
	    <form method="GET" action="detalhes.php">
			<p class= "pequeno"><a href="detalhes.php?a=add"> <span class='material-symbols-outlined'>
								add_circle</span> Adicionar | </a> <a href="detalhes.php?a=ex"><span>
								</span> Tirar da Minha Lista | </a><a href="detalhes.php?a=excluir"> <span class='material-symbols-outlined'>
								delete</span> Excluir Pedido | </a>
		</form>
    <table class="detalhes">
			<?php
			
				$cod = $_GET['cod'] ?? 0;
				$usuario = $_SESSION['user'];
			
						
				$q = "SELECT * FROM pedidos WHERE cod = '$cod'";
				$f = " CREATE TABLE `".$_SESSION['user']."` (
					`cod` int(10) NOT NULL,
					`nome` varchar(40) NOT NULL
				  ) ENGINE=InnoDB DEFAULT CHARSET=utf8";
				$fa = $banco->query($f);
				$busca = $banco->query($q);

			
				
				if (!$banco->query($q)) {
					echo "Falhou ! $banco->error";		
					while($reg = $busca->fetch_object()){
						$_SESSION['nomep'] = $reg->nome;
						$_SESSION['codp'] = $reg->cod;
						$validar_pedido = "`pedido".$_SESSION['codp']."`";
						

						echo "<tr><td><a href='detalhes.php?cod=$reg->cod'><h1>Nome: <span class='titulo'>$reg->nome</span></h1></a>";
						echo text("<tr><td>Classe: $reg->urgencia <br> Numero: $reg->cod <br> $reg->data<br>");
					
						$s = "SELECT count(`nome`) as total FROM `pedido".$_SESSION['codp']."`";
						$s1 = $banco->query($s);
						$n2 = $s1->fetch_array();
						echo " " . $n2["total"] ." Pessoas que Orarão ou estão Orando por esse Pedido.";
						
						
						
						
						echo $n2["total"];
						if (is_admin()) {
							/*echo "<td><a href='pedidoDeOraçao.php?o=n'><span class='material-symbols-outlined'>
							add_circle</span></a>";
							echo "<span class='material-symbols-outlined'>
							edit </span></a>";
							
							echo "<span class='material-symbols-outlined'>
							delete </span></a>";*/
						}elseif (is_editor()) {
							#echo "<td>Alterar";
						}
					}
				} else {
						
				}
				if (!$busca) {
					echo "Falhou! $banco->error";
				} else {
					if ($busca->num_rows > 0) {
						$reg = $busca->fetch_object();
						
						# echo "<tr><td rowspan='3'><img class='grande' src='$thumb'/>";
						echo "oii";
						echo "<td><h1>Nome: <span id='nome'>$reg->nome</span></h1>";
						
						echo "<td><span id='pedido'>$reg->pedido</span><br>";
						echo "Pedido Numero: $reg->cod ";
						$_SESSION['nomep'] = $reg->nome;
				        $_SESSION['codp'] = $reg->cod;
						$s = "SELECT count(`nome`) as total FROM `pedido".$_SESSION['codp']."`";
						$s1 = $banco->query($s);
						$n2 = $s1->fetch_array();
						echo "<br><h3> " . $n2["total"] ." Pessoas que Orarão ou estão Orando por esse Pedido.</h3>";
						echo " ";
						
						
				        
					

						
						
						
					} else {
						echo "<p Pedido não encontrado</p>";
					}		
				}
			
				$n = "SELECT * FROM `pedido".$_SESSION['codp']."`";
				
				$n1 = $banco->query($n);
				$_SESSION['nomec'] = $n1->nome;
				echo "".$_SESSION['nomec']."";
				switch ($add) {
					case "add":	
						$a = " CREATE TABLE `pedido".$_SESSION['codp']."` (
							`nome` varchar(40) NOT NULL,
							`data` datetime NOT NULL
						  ) ENGINE=InnoDB DEFAULT CHARSET=utf8";

						$aa = $banco->query($a);			  				
						$b = " INSERT INTO `" . $_SESSION['user'] . "` ( `cod`, `nome`)
						VALUES (" . $_SESSION['codp'] . ", '" . $_SESSION['nomep'] . "')";
						$c = " UPDATE `pedidos` SET `ok`= 1 WHERE `cod` = '" . $_SESSION['codp'] . "'";
						$a = " INSERT INTO `pedido".$_SESSION['codp']."` (`nome`, `data`) VALUES ('" . $_SESSION['user'] . "', NOW())";

						$ca = $banco->query($c);
						$ba = $banco->query($b);
						$aa = $banco->query($a);
						echo "Pedido Nº: " . $_SESSION['codp'] . " Adicionado";
						
						break;
					case "ex":
						$c = " DELETE FROM `" . $_SESSION['user'] . "` WHERE `cod` = " . $_SESSION['codp'] . "";
						$ca = $banco->query($c);
						$a = "DELETE FROM `pedido".$_SESSION['codp']."` WHERE `cod` = " . $_SESSION['codp'] . "";
						$aa = $banco->query($a);
						echo "Pedido Nº: " . $_SESSION['codp'] . " Removido da Lista";
						break;
						case "excluir":
						$t = "DELETE FROM `pedidos` WHERE `cod` = " .  $_SESSION['codp'] ."";
						$ta = $banco->query($t);
						echo msg_aviso("Pedido deletado com Sucesso");
						$c = " DELETE FROM `" . $_SESSION['user'] . "` WHERE `cod` = " . $_SESSION['codp'] . "";
						$ca = $banco->query($c);
						$a = "DELETE FROM `pedido".$_SESSION['codp']."` WHERE `cod` = " . $_SESSION['codp'] . "";
						$aa = $banco->query($a);
						break;
					

				}
			?>
			</table>
		

    </div>
    <?php 
  echo voltar2("Voltar"); ?>
    </div>
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