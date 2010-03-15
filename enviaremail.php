<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Untitled Page</title>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<style> article, aside, figure, footer, header, hgroup, menu, nav, section { display: block; } </style>
	
</head>
<body>
	<div class="container">
		<h1>Contato</h1>
		
		<?php
			$email='kelimar007@hotmail.com';
			$assunto=$_POST['assunto'];
			$mensagem=$_POST['mensagem'];
	
			if(mail( $email, $assunto, $mensagem)):
	
		?>

			<<p>Seu email foi enviado</p>

		<?php else: ?>
	
			<p> Não foi possível enviar seu email. Tente mais tarde.</p>	
		<?php endif; ?>

	</div>
</body>
</html>