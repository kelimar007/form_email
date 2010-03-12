<?php
	$email='kelimar007@hotmail.com';
	$assunto=$_POST['assunto'];
	$mensagem=$_POST['mensagem']

	mail( $email, $assunto, $mensagem)

?>