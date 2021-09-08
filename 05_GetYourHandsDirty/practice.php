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
			
			<h1>Get Your Hands Dirty: <small><!-- PAGE TITLE --></small></h1>
			<hr>
			
			<h2>Your Example</h2>
			
			<div class="sandbox">
				<h3>Today's Date:</h3>
				<p><?php echo $hoje; ?></p>
				
				<h3>My Name:</h3>
				<p><?php echo $meuNome; ?></p>
				
				<h3>My Favourite Colour:</h3>
				<p><?php echo $corPreferida ?></p>
				
				<h3>My Age:</h3>
				<p><?php echo $minhaIdade ?></p>
			</div><!-- end sandbox -->
			
			<a href="index.php" class="button">Back to the final example</a>
			
			<hr>
			
			<small>&copy;<?php echo $anoAtual; ?> - <?php echo $meuNome; ?></small>
		</div><!-- end wrapper -->
		
		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
