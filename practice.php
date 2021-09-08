<?php
	
	// Define a Constant
	
	
	// Your Variables
	$meuNome	= "Juarez Miranda";
	$corPreferida	= "Roxo";
	$anoNascimento	= 1997;
	
	/*
	Use PHP to calculate the difference
	between your birth year and this year
	to show your age dynamically
	*/

	date_default_timezone_set('America/Sao_Paulo');
	
	$hoje		= date('F j, Y');
	$anoAtual	= date('Y');

	$minhaIdade = ($anoAtual - $anoNascimento);

	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <!-- PAGE TITLE --></title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>
			
			<h1>Mão na Massa: <small><!-- PAGE TITLE --></small></h1>
			<hr>
			
			<h2>Seu Exemplo</h2>
			
			<div class="sandbox">
				<h3>Data de Hoje:</h3>
				<p><?php echo $hoje; ?></p>
				
				<h3>Meu Nome:</h3>
				<p><?php echo $meuNome; ?></p>
				
				<h3>Minha Cor Preferida:</h3>
				<p><?php echo $corPreferida ?></p>
				
				<h3>Minha Idade:</h3>
				<p><?php echo $minhaIdade ?></p>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Ir para o exemplo final</a>
			
			<hr>
			
			<small>&copy;<?php echo $anoAtual; ?> - <?php echo $meuNome; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
