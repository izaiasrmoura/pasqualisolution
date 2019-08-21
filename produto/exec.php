<?php
require("../config.inc.php");
 
$act = isset($_REQUEST["act"]) ? addslashes($_REQUEST["act"])  : "";
$cod = isset($_REQUEST["cod"]) ? intval($_REQUEST["cod"]) : 0;


## Excluir
if($act == "excluir"){
	 
    $exec = $pdo->prepare("DELETE FROM produto WHERE(cod_produto = ?)");
    $exec->bindParam(1, $cod);
    $exec->execute();	
 
	 header("Location: lista.php?rnd=".$rnd);
	 exit;

	}else{

$cod_categoria = $_REQUEST["categoria"];
$descricao     = $_REQUEST["descricao"];

}


## Inserir
if($act == "inserir"){

 $exec = $pdo->prepare("INSERT INTO produto(cod_categoria, descricao) VALUES(?, ?)");
 $exec->bindParam(1, $cod_categoria );
 $exec->bindParam(2, $descricao );
 $exec->execute();	 
	  
header("Location: cadastro.php?act=inserir&rnd=".$rnd);
exit;	  
}


## Editar
if($act == "editar"){
	
$exec = $pdo->prepare("UPDATE produto SET cod_categoria=?, descricao = ? WHERE(cod_produto = ?)");
$exec->bindParam(1, $cod_categoria );
$exec->bindParam(2, $descricao);
$exec->bindParam(3, $cod);
$exec->execute();	
header("Location: lista.php?cod={$cod}&act=editar&rnd=".$rnd);
}


?>