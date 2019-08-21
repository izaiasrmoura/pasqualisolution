<?php
include("../config.inc.php");
include("../class/lib.class.php");

$lib = new LIB($pdo);

$cod = isset( $_REQUEST["cod"] ) ? $_REQUEST["cod"] : 0;
$act = isset( $_REQUEST["act"] ) ? $_REQUEST["act"] : "";

$cons  = $pdo->query( "SELECT * FROM produto WHERE(cod_produto = {$cod})" );
$dados = $cons->fetch(PDO::FETCH_OBJ);

$descricao = "";
$categoria = "";

if(is_object($dados) !== false){
$descricao = $dados->descricao;
$categoria = $dados->cod_categoria;
}
?>
<html>
<head>
<title>Administração</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<script>
function fConcluir(form){
	
if(form.descricao.value.replace(/^\s+|\s+$/gm,'') == ''){
alert("informe a descricao");
form.descricao.focus();
return false;
}	
document.formulario.submit();
}
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name='formulario' action="exec.php?rnd=<?=rnd?>" method="post">
  
  <!-- Formulario -->
  <table width="647" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr>
      <td width="443" height="100" align="center" valign="middle"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">:: 
        Cadastrar produto</font></strong></td>
      <td height="100" colspan="2" align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"   class="adm-txt12">&nbsp;</td>
      <td width="221" align="right" nowrap class="adm-txt12"><a href="lista.php?<?php print rnd?>">&nbsp;Voltar</a> |&nbsp;</td>
    </tr>
    <tr bgcolor="#000000">
      <td height="1" colspan="3" align="center" valign="top"></td>
    </tr>
    <tr>
      <td colspan="3" align="center" valign="top"><table width="100%" border="0" cellspacing="2" cellpadding="0" align="center">
        <tr>
          <td width="184"   class="adm-tit12-center">&nbsp;</td>
          <td width="455"   class="adm-tit12-center">&nbsp;</td>
          </tr>
           <tr>
          <td class='adm-txt12-right'> Categoria: </td>
          <td class='adm-txt12-left'>
<select name='categoria'>
<?php print $lib->categoria( $categoria )?>
</select>
</td>
          </tr>
           <tr>
          <td class='adm-txt12-right'> Descricao: </td>
          <td class='adm-txt12-left'><input type='text' class='adm-input' name='descricao' value='<?=$descricao?>' size='45' maxlength='100'></td>
          </tr>
        <tr>
          <td align='right'><input type='hidden' name='cod' value='<?=$cod?>'>
            <input type='hidden' name='act' value='<?=$act?>'></td>
          <td><input type='button' name='concluir' value='Concluir' onclick="fConcluir(this.form)"></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
<script>document.formulario.descricao.focus();</script>
</html>