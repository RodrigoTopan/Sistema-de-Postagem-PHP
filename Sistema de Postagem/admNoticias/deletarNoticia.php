<?php
    $id=$_POST['del_noticia'];
 
    include ("../conexao.php");

    mysql_select_db("db_postagens");
    
    /*$deletar="DELETE FROM tb_membro WHERE  cd_membro='$id'";*/
    /*O DELETAR DOS MEMBROS DEIXA O MEMBRO APENAS COM O ESTADO DESATIVADO*/
$result="delete from tb_noticia where cd_noticia='$id'";

    if(mysql_query($result)){
            
            header("Location:montador.php");
        }
        else{
            
            die("Não foi possível realizar a alteração".mysql_error());
        }
mysql_close($conexao);