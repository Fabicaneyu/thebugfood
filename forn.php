<?php
error_reporting(0);
ini_set('display_errors', FALSE);

header('Content-Type: text/html; charset=iso-8859-1');
$con = mysql_connect("localhost", "root", "", "SpaceAppsDebug") or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db("SpaceAppsDebug", $con) or die('Não conectou ao banco');

$SQL="SELECT * FROM tabFornecedor ORDER BY nome_forn";

$result=mysql_query($SQL, $con) or die(mysql_error());
$linha=mysql_fetch_assoc($result);
$total=mysql_num_rows($result);

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<title>Debbug Aplication</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="Style.css?version='12'" media="all"/>
</head>
<body>
<div id="fundo">

<div id="topo">
<div id="logo" style="text-align:center;"><a href="index.html"><img src="logo.jpg" style="width: 100%; height: 100%; border:none;"></img></a></div>
<div id="link" class="Link"><a href="nutri.html">O que é Entomofagia ?</a></div>
<div id="link" class="Link"><a href="forn.php">Encontre Fornecedores</a></div>
<div id="link" class="Link"><a href="https://observer.globe.gov/about/get-the-app">Observatório Globe</a></div>
</div>

<div id="corpo">

<table style="width:85%; margin-left:auto; margin-right:auto; font-family: Arial; font-size:18px">
<tr>
<td style=" height:30px; padding-left: 15px;"></td>
</tr>
<tr>
<td colspan='2' style=" height:30px; padding-left: 15px;color: black; font-size:22px; text-align: center; border-bottom: thin solid black;">Cadastro de Fornecedores</td>
</tr>
<tr>
<td style=" height:30px; padding-left: 15px;">Encontre o fornecedor mais próximo de ti, que possuí a espécie que você busca!</td>
<td style=" padding: 5px; height:30px; background-color:black; color: white;">
<a href="cadastro.html">
<input type="submit" value="É fornecedor? Cadastre-se!" style="margin: 0px; padding: 0px;width:100%; height:100%; color:white; background-color: black; border:none;text-align:left;"></a>
</td>
</tr>
</table>

<form action="forn_inc.php" method="post">
<table style="width:85%;border:thin solid black; margin-left:auto; margin-right:auto; font-family: Arial; font-size:18px">

<tr>
<td style="border-bottom:thin solid black; height:30px; padding-left: 15px;background-color:#869250; color:#fff;">Nome do Inseto*</td>
<td style="border-bottom:thin solid black; border-left: thin solid black; height:30px; padding-left: 15px;width: 50%; background-color:#869250; color:#fff;">Estado</td>
<td style=" text-align:center; height:60px; border-left:thin solid black;" rowspan="2">
<input type="submit" style="height:100%; width: 100%;padding:5px;font-size:20px;text-align:center; background-color:#869250;border:none;color:white;">
</td>
</tr>

<tr>
<td style=" text-align:center; height:60px" >
<input type="text" style="height:40px; width: 90%;font-size:20px;text-align:left;" name="txtNome" >
</td>
<td style="border-left: thin solid black; text-align:center; height:60px" >
<select class="txt" name="slcEstado"><?php if($total > 0) { do { ?>
<option value="<?php echo $linha['estado_forn'] ?>" style="height:40px; width: 90%; font-size: 20px;" ><?php echo $linha['estado_forn'] ?></option>
<?php } while($linha=mysql_fetch_assoc($result)); } ?>

</select>
</td>

</tr>
<tr >
<td colspan='3'style="height:30px; padding-left: 15px;border-top: thin solid black; color:black; font-size:16px;">* o campo nome só é considerado na pesquisa, caso seja usado.</td>

</tr>

</table>
</form>
</div>

<div id="rodape">
<table style="width:85%;border:thin solid black; margin-left:auto; margin-right:auto; font-family: Arial; font-size:18px">
<tr>
<td style="height:30px; padding-left: 15px; text-align: center;color: white;}">Todos os direitos reservados à NASA pelo fornecimento das informações.</td>
</tr>
</table>
</div>

</div>
</body>
</html>