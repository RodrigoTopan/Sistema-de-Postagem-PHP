<?php
	$titulo = $_POST['titulo'];
	$conteudo = $_POST['conteudo'];
	$pasta='uploads';
	$permitido=array('image/jpg','image/jpeg','image/pjpeg');
	$img=$_FILES['img'];
	$tmp=$img['tmp_name'];
	$name=$img['name'];
	$type=$img['type'];
		include("../conexao.php");
		mysql_select_db("db_postagens");
		require('funcao.php');
		if(!empty($name) && in_array($type, $permitido)){
		    $nome='img-'.md5(uniqid(rand(),true)).'.jpg';
		    upload($tmp,$nome,500,$pasta);
		   //Por favor. Sempre que você for usar php com mysql tome cuidado com os apóstrofos
		$inserir = "INSERT INTO tb_noticia VALUES (DEFAULT,'$nome','$titulo','$conteudo',1)";
		      
		 $queryInserir = mysql_query("$inserir");
		      
		}else{
		    echo "Tipo de arquivo invalido envie jpeg";
		}
 mysql_close($conexao);
 header("Location:./montador.php");
 ?>