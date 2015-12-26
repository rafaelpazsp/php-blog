<?php
	include_once "inc/header.php";

	$url = (isset($_GET['url'])) ? strip_tags(htmlentities($_GET['url'], ENT_QUOTES)) : 'home';
	$exp = explode('/', $url);

	/*	
		/ --> home
		/artigo/id --> single
		/sobre -> sobre (obvio)
		/artigos -> todos os posts
		/autores -> perfis dos autores
	*/
	$permitidas = ['home', 'artigo', 'sobre', 'artigos', 'autores', 'perfil', '404'];
	
	if(in_array($exp[0], $permitidas) && file_exists("pages/".$exp[0].'.php')){
		include_once "pages/".$exp[0].'.php';
	}else{
		echo '404';
	}

	include_once "inc/footer.php";
?>