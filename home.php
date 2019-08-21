<?php
require("config.inc.php");
?>
<html>
<head>
<title>Painel</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="529" border="0" align="center" cellpadding="0" cellspacing="1">
  <tr> 
    <td width="245" height="100" align="center" valign="middle">&nbsp;</td>
    <td width="341" height="100" align="center" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>&nbsp;
</td>
          <td align="right"><?=date("d/m/Y h:i")?></td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td colspan="2" align="center" valign="top"> <table width="527" border="0" cellspacing="2" cellpadding="0" align="center">
        <tr height="25"> 
          <td colspan="2" class="adm-tit12-center">Menu</td>
        </tr>
        <tr> 
          <td width="217" class="adm-txt12-left"><a href="categoria/lista.php">Categoria</a></td>
          <td width="217" class="adm-txt12-left"><a href="produto/lista.php">Produtos</a></td>
        </tr>
        <tr>
          <td class="adm-txt12-left">&nbsp;</td>
          <td class="adm-txt12-left">&nbsp;</td>
        </tr>
        <tr>
          <td class="adm-txt12-left">&nbsp;</td>
          <td class="adm-txt12-left">&nbsp;</td>
        </tr>
      </table>
      </td>
  </tr>
</table>
<table style="display:none" width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td></td>
  </tr>
</table>

</body>
</html>