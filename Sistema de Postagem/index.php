<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="PROJETO ECOPHALT,Projeto Ecophalt,Ecophalt,Ecologia,Praia Grande">
    <meta name="author" content="Rodrigo Garcia Topan Moreira">
    <meta name="description" content="Páginal Inicial de Apresentação">
    <title>SISTEMA DE POSTAGEM DE NOTÍCIAS</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-image: url('b1.jpg'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
	  <header>
	  <div class="container">
		 <div class="pos-f-t fixed-top">
			  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  	<a class="navbar-brand" href="index.php">SISTEMA DE POSTAGEM DE NOTÍCIAS</a>
		  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  	</button>
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item">
				        <a class="nav-link" href="index.php">PRINCIPAL<span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Como fazer</a>
				      </li>
		              <li class="nav-item">
		                <a class="nav-link" href="#bottom-title-news">Portal</a>
		              </li>				      
				      <li class="nav-item">
				        <a class="nav-link" href="admNoticias/montador.php">Administração</a>
				      </li>
				    </ul>
				  </div>
				</nav>
			</div>
		</header>

		<div class="container-fluid col-md-11 col-sm-12">
		<section id="top-title">
		<br><br><br>
			<div class="card">
			  <div class="card-body">
			    <H2 class="display-4"> SISTEMA DE POSTAGEM DE NOTÍCIAS</H2>
			    <H3 class="lead">Desenvolvido por Rodrigo Topan Moreira</H3>
			  </div>
			</div>
		</section>
		<br>
		<section id="about">
			<div class="jumbotron">
		  <h2 class="display-4">Sobre Mim</h2>
		  <p class="lead">Olá, meu nome é Rodrigo. Sou um programador apaixonado por todo tipo de tecnologia que possa, de alguma maneira ajudar a sociedade. Acredito que a tecnologia usada para disseminar informação e conhecimento também é de fundamental importância, por isso através do GitHub, publico todo projeto que possa ser útil para outras pessoas.</p>
		  <hr class="my-6">
		  <p class="lead">
		    <a class="btn btn-info btn-lg" href="Sobre/sobre.php" role="button">Saiba mais</a>
		  </p>
		</div>
		</section>
	     <BR>
		<section id="bottom-title-news">
			<div class="card">
			  <div class="card-body" align="center">
			    <H1>NOTÍCIAS CADASTRADAS NO SISTEMA</H1>
			  </div>
			</div>
	    </section>
	    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <p class="lead text-muted">Esse é um exemplo de exibição de notícias cadastradas em banco de dados.</p>
          <p>
            <a href="#" class="btn btn-primary">Como Fazer?</a>
          </p>
        </div>
      </section>
	    <br>
         <?php
             require ("conexao.php");
             $bd = mysql_select_db("db_postagens");
             //Repare no order by
             //O order by aqui está jogando todas as noticias mais atuais para o começo da page
            $sql = "SELECT cd_noticia as c,nm_noticia, nm_imagem_noticia,(SELECT LEFT(ds_noticia,100) FROM tb_noticia where cd_noticia=c) as ds_noticia from tb_noticia ORDER BY cd_noticia DESC";
                     $resultado = mysql_query($sql);?><center>
          <div class="row" style="background-color:white; width: 100%;">
             <div class="album text-muted">
        		<div class="container-fluid">
        			<div class="row">
		          <?php
		             while($linha = mysql_fetch_array($resultado))
		            {
		        	?>
			            <div class="card col-md-5" style="margin-left:5%; margin-top: 10px;">
			              <img src="admNoticias/uploads/<?php echo $linha['nm_imagem_noticia']?>" style="height: 300px;" alt="Card image cap">
			              <h4 class="cad-title"><?php echo $linha['nm_noticia']?></h4>
			              <p class="card-text"><?php echo $linha['ds_noticia'];?></p>
			                <form action="portal/leitor.php" method="get">
                    			<input type="hidden" name="id_noticia" value="<?php echo $linha['c']?>">
                    			<input type="submit" name="enviar" value="Ler Mais" class="btn btn-primary col-md-5">
                  			</form>
			            </div>
			       <?php
			         }
			      ?> 
	         		</div>
	         	</div>
	        </div>
	      </div>

	    </main>
   
    <!-- START THE FEATURETTES -->
    <section id="news" style="background-color: white; padding: 20px;">
	      <hr class="featurette-divider">
	 		<a href="#" class="btn btn-info col-md-12">VER TODAS NOTÍCIAS</a>
	      <!-- /END THE FEATURETTES -->
      </section>
      <br>
    </div>
    <footer class="footer">
    <center>
		  <div class="jumbotron jumbotron-fluid" style="background-color: black;">
			 <div class="container">
			  <div class="row">
			    <div class="col-md-12 col-sm-12">
			            <h4 class="text-white">Contato</h4>
	        		    <ul class="list-unstyled">
	              				<li><a href="https://www.facebook.com/rodrigo.topan.7" class="text-white">Facebook:Rodrigo Topan</a></li>
	              				<li class="text-white">Email: rodrigo.topan.ti@gmail.com</li>
	              				<li><a href="https://github.com/RodrigoTopan">GitHub:https://github.com/RodrigoTopan</a></li>
	            		</ul>
	            </div>
			 </div>
		 </div>
		</div>
	</center>
    </footer>
    	<?php include('jquery_dep.php');?>
  </body>
</html>