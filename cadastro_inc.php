<?php
header('Content-Type: text/html; charset=iso-8859-1');
$con = mysql_connect("localhost", "root", "", "SpaceAppsDebug") or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db("SpaceAppsDebug", $con) or die('Não conectou ao banco');

$nome=$_POST['txtNome'];
$tel=$_POST['txtTel'];
$end=$_POST['txtEnd'];									
$city=$_POST['txtCity'];
$est=$_POST['txtEst'];									
$cep=$_POST['txtCep'];									
$esp_ins=$_POST['txtEsp'];								
$esp_ins2=$_POST['txtEsp2'];
$esp_ins3=$_POST['txtEsp3'];
			
$SQL="INSERT INTO tabFornecedor (nome_forn, end_forn, cidade_forn, estado_forn, telefone_forn, cep_forn, esp_ins_forn, esp_ins_forn2, esp_ins_forn3) VALUES ('$nome', '$end', '$city', '$est', '$tel', '$cep', '$esp_ins', '$esp_ins2', '$esp_ins3')";

mysql_query($SQL, $con) or die("Erro ao tentar cadastrar");
mysql_close($con);
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<title>Debbug Aplication</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="Style.css" media="all"/>
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
<td style=" height:30px; padding-left: 15px;color: black; font-size:22px; text-align: center; border-bottom: thin solid black;">Cadastro de Fornecedores</td>
</tr>
<td style=" height:30px; padding-left: 15px;">Insira seus dados abaixo, campos com asterisco são obrigatórios.</td>
</tr>
</table>

</div>

<div id="rodape">
<table style="width:85%;border:thin solid black; margin-left:auto; margin-right:auto; font-family: Arial; font-size:20px">
<tr>
<td style="height:30px; padding-left: 15px; text-align: center;color: white;}">Todos os direitos reservados à NASA pelo fornecimento das informações.</td>
</tr>
</table>
</div>

</div>
</body>
</html>