<?php
require("../config.inc.php");


$cons = $pdo->query("SELECT * FROM categoria ORDER BY LTRIM(descricao)");
?>
<html>
<head>
<title>Administração</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<script>
function fRemover(cd){

if(confirm("Deseja mesmo excluir a publicação?")){
  window.location = "exec.php?cod="+cd+"&act=excluir&rnd=<?=rnd?>";
  }
}
</script>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<form name="form1" method="post" action="">
  <table width="647" border="0" align="center" cellpadding="0" cellspacing="1">
    <tr> 
      <td width="443" height="100" align="center" valign="middle"><strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">:: 
        Categorias</font></strong></td>
      <td height="100" colspan="2" align="center" valign="middle">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2"   class="adm-txt12">&nbsp;</td>
      <td width="221" align="right" nowrap class="adm-txt12"><a href="cadastro.php?act=inserir&<?php print rnd?>">&nbsp;incluir novo</a> | <a href="../home.php">Sair</a></td>
    </tr>
    <tr bgcolor="#000000"> 
      <td height="1" colspan="3" align="center" valign="top"></td>
    </tr>
    <tr> 
      <td colspan="3" align="center" valign="top"> <table width="100%" border="0" cellspacing="2" cellpadding="0" align="center">
          <tr> 
            <td width="587"   class="adm-tit12-center">Descri&ccedil;&atilde;o</td>
            <td width="48" align="center" class="adm-tit12-center">Excluir</td>
          </tr>
<?php
while($dados = $cons->fetch(PDO::FETCH_OBJ)) {
?>
          <tr>
<td  style="cursor:pointer" class="adm-txt12-left" title='Editar' onClick="location='cadastro.php?act=editar&cod=<?php print $dados->cod_categoria?>&rnd=<?=rnd?>'">
<?php print $dados->descricao ?></td>
<td align="center" class="adm-txt12-center" >
  <img src="../img/excluir.gif" width="16" height="16" style="cursor:pointer" alt="Excluir" title='Excluir' onClick="fRemover(<?php print $dados->cod_categoria?>)"  border="0"></td>
          </tr>
<?php
}
?>
          <tr> 
            <td colspan="2" class="adm-txt12-left">&nbsp;</td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>
</body>
</html>
