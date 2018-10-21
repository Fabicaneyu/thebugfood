<?php
error_reporting(0);
ini_set('display_errors', FALSE);
header('Content-Type: text/html; charset=iso-8859-1');
//PESQUISA
$nome=$_POST['txtNome'];
$estado=$_POST['slcEstado'];

$con = mysql_connect("localhost", "root", "", "SpaceAppsDebug") or trigger_error(mysql_error(),E_USER_ERROR);
mysql_select_db("SpaceAppsDebug", $con) or die('Não conectou ao banco');

$SQL="SELECT * FROM tabFornecedor";
$result3=mysql_query($SQL, $con) or die(mysql_error());
$linha3=mysql_fetch_assoc($result3);

if($nome == ""){
$SQL="SELECT * FROM tabFornecedor WHERE estado_forn='$estado'"; 
$result=mysql_query($SQL, $con) or die(mysql_error());
$linha=mysql_fetch_assoc($result);
$total=mysql_num_rows($result);


}
else if(($nome==$linha3['esp_ins_forn']) && ($estado==$linha3['estado_forn']))
$SQL="SELECT * FROM tabFornecedor WHERE esp_ins_forn='$nome'";
else if(($nome==$linha3['esp_ins_forn2']) && ($estado==$linha3['estado_forn']))
$SQL="SELECT * FROM tabFornecedor WHERE esp_ins_forn2='$nome'";
else if(($nome==$linha3['esp_ins_forn3']) && ($estado==$linha3['estado_forn']))
$SQL="SELECT * FROM tabFornecedor WHERE esp_ins_forn3='$nome'"; 

$SQL2=$SQL." AND estado_forn='$estado'";
$result=mysql_query($SQL2, $con) or die(mysql_error());
$linha=mysql_fetch_assoc($result);
$total=mysql_num_rows($result);



?>

<?php 
$SQL3="SELECT * FROM tabFornecedor ORDER BY nome_forn";

$result2=mysql_query($SQL3, $con) or die(mysql_error());
$linha2=mysql_fetch_assoc($result2);
$total2=mysql_num_rows($result2);

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
<td style=" height:30px; padding-left: 15px;">Encontre o fornecedor mais próximo de ti, que possuí a espécie que você busca!</td>
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
<select class="txt" name="slcEstado"><?php if($total2 > 0) { do { ?>
<option value="<?php echo $linha2['estado_forn'] ?>" style="height:40px; width: 90%; font-size: 20px;" ><?php echo $linha2['estado_forn'] ?></option>
<?php } while($linha2=mysql_fetch_assoc($result2)); } ?>

</select>
</td>

</tr>
<tr >
<td colspan='3'style="height:30px; padding-left: 15px;border-top: thin solid black; color:black; font-size:16px;">* o campo nome só é considerado na pesquisa, caso seja usado.</td>

</tr>

</table>
</form>
<?php if($total > 0) { do { ?>


<table style="width:85%;border:thin solid black; margin-top:1%; margin-left:auto; margin-right:auto; font-family: Arial; font-size:18px">

<tr style="background-color:#869250; color:#fff;">
<td style="border-bottom:thin solid black; height:30px; padding-left: 15px;">Fornecedor: <?php echo $linha['nome_forn'] ?></td>
<td style="border-bottom:thin solid black; border-left: thin solid black; height:30px; padding-left: 15px;width: 30%;">Cidade: <?php echo $linha['cidade_forn'] ?></td>
<td style=" text-align:center; height:60px;width: 30%; border-left:thin solid black;border-bottom: thin solid black; text-align:left;padding-left: 15px;">Estado: <?php echo $linha['estado_forn'] ?>
</td>
</tr>

<tr>
<td style="width:'40%';text-align:center; height:60px;text-align:left;padding-left: 15px; border-bottom: thin solid black; " >Endereço: <?php echo $linha['end_forn'] ?>
</td>
<td style="width:'30%';text-align:center; height:60px;text-align:left;padding-left: 15px; border-bottom: thin solid black; border-left: thin solid black;" >Telefone: <?php echo $linha['telefone_forn'] ?>
</td>
<td  style=" text-align:center; height:60px; text-align:left;padding-left: 15px;border-left:thin solid black; border-bottom: thin solid black;" >CEP: <?php echo $linha['cep_forn'] ?>
</td>
</tr>

<tr>
<td style=" height:30px; padding-left: 15px;">Inseto 1: <?php echo $linha['esp_ins_forn'] ?></td>
<td style=" border-left: thin solid black; height:30px; padding-left: 15px;width: 30%;">Inseto 2: <?php echo $linha['esp_ins_forn2'] ?></td>
<td style=" text-align:center; height:60px;width: 30%; border-left:thin solid black; text-align:left;padding-left: 15px;">Inseto 3: <?php echo $linha['esp_ins_forn3'] ?>
</td>
</tr>

</table>
<?php } while($linha=mysql_fetch_assoc($result)); } else{ ?>

<table style="width:85%; margin-left:auto; margin-right:auto; font-family: Arial; font-size:18px">
<tr>
<td style="height:30px; padding-left: 15px;"></td>
</tr>
</table>

<table style="width:85%;border:thin solid black; margin-left:auto; margin-right:auto; font-family: Arial; font-size:18px">
<tr>
<td style="height:30px; padding-left: 15px; text-align: center;">Nenhum fornecedor encontrado!</td>
</tr>
</table>

<table style="width:85%; margin-left:auto; margin-right:auto; font-family: Arial; font-size:18px">
<tr>
<td style="height:30px; padding-left: 15px;"></td>
</tr>
</table>
<?php } ?>

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
<?php 
mysql_free_result($result);
?>