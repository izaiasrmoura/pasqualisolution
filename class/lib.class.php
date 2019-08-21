<?php
class LIB{
        
          private $pdo;

public function __construct( $pdo ){

                  $this->pdo = $pdo;
	
}

public function categoria( $cat=0 ){
	

$cons = $this->pdo->query("SELECT * FROM categoria ORDER BY LTRIM(descricao)");
 
while($dados = $cons->fetch(PDO::FETCH_OBJ)) {

$select  = ($dados->cod_categoria == $cat) ? "selected" : "";
print "<option value='".$dados->cod_categoria."' ".$select .">".$dados->descricao."</option>";

}

}

## fecha classe
}
?>