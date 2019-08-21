<?php
require("../config.inc.php");
 
$act = isset($_REQUEST["act"]) ? addslashes($_REQUEST["act"])  : "";
$cod = isset($_REQUEST["cod"]) ? intval($_REQUEST["cod"]) : 0;

## Excluir
if($act == "excluir"){

    $exec = $pdo->prepare("DELETE FROM categoria WHERE(cod_categoria = ?)");
    $exec->bindParam(1, $cod);
    $exec->execute();	

         header("Location: lista.php?rnd=".$rnd);
	 exit;

	}else{

    $descricao = isset($_REQUEST["descricao"]) ? addslashes($_REQUEST["descricao"]) : "";		
}


## Inserir
if($act == "inserir"){

 $exec = $pdo->prepare("INSERT INTO categoria(descricao) VALUES(?)");
 $exec->bindParam(1, $descricao );
 $exec->execute();	 
	  
header("Location: cadastro.php?act=inserir&rnd=".$rnd);
exit;	  
}


## Editar
if($act == "editar"){
	
$exec = $pdo->prepare("UPDATE categoria SET descricao = ? WHERE(cod_categoria = ?)");
$exec->bindParam(1, $descricao);
$exec->bindParam(2, $cod);
$exec->execute();	

header("Location: lista.php?cod={$cod}&act=editar&rnd=".$rnd);
}


?>