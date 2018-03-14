<?php
header ('Content-type: text/html; charset=iso-8859-1');
include('header.php');
include_once("db_connect.php");
	session_start();
// inicio codigo - verifica o nivel de acesso
if($_SESSION["nivel"] != 3){ 
if($_SESSION["nivel"] != 4){

echo "<script language='javascript'>window.history.go(-1);</script>"; 
}
}

// fim do codigo - verifica o nivel de acesso
 
$nivel_necessario = 2;
	
	if(!isset($_SESSION['username']) || !isset($_SESSION['senha'])){ // OR ($_SESSION['nivel'] >= $nivel_necessario)){
		header("Location: index.php");
		
	}
	if(isset($_GET['acao']) && $_GET['acao'] == 'sair'){
		unset($_SESSION['username']);
		unset($_SESSION['senha']);
		unset($_SESSION['nivel']);
		session_destroy();
		
		header("Location: ../index.php");

	}
	
if(!empty($_GET['import_status'])) {
    switch($_GET['import_status']) {
        case 'success':
            $message_stauts_class = 'alert-success';
            $import_status_message = 'Dados inseridos com exito na Lista.';
            break;
        case 'error':
            $message_stauts_class = 'alert-danger';
            $import_status_message = 'Erro: Tente novamente.';
            break;
        case 'invalid_file':
            $message_stauts_class = 'alert-danger';
            $import_status_message = 'Error: Carregue um formato de arquivo CSV valido.';
            break;
	case 'del':
            $message_stauts_class = 'alert-danger';
            $import_status_message = 'A lista foi limpa';
            break;
        default:
            $message_stauts_class = '';
            $import_status_message = '';
    }
}
?>
<title>MAC Barbosa - PAINEL DO ADMINISTRADOR</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/login.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
<script type="text/javascript">
$(document).ready(function(){
	$(".dropdown, .btn-group").hover(function(){
		var dropdownMenu = $(this).children(".dropdown-menu");
		if(dropdownMenu.is(":visible")){
			dropdownMenu.parent().toggleClass("open");
		}
	});
});		
</script>
<style type="text/css">
.container .panel.panel-default .panel-body .row #import_form .col-md-5 {
	text-align: center;
}
.container .panel.panel-default .panel-body .row form .col-md-6 {
	text-align: right;
}
.container .panel.panel-default .panel-body .row form .col-md-2 {
	text-align: center;
}
.container .panel.panel-default .panel-body .row form .col-md-5 {
	text-align: right;
}
.container .panel.panel-default .panel-body .row .table.table-bordered thead tr th {
	text-align: center;
}
@media screen and (min-width: 768px) {
  .dropdown:hover .dropdown-menu, .btn-group:hover .dropdown-menu{
		display: block;
	}
	.dropdown-menu{
		margin-top: 0;
	}
	.dropdown-toggle{
		margin-bottom: 2px;
	}
	.navbar .dropdown-toggle, .nav-tabs .dropdown-toggle{
		margin-bottom: 0;
	}
}
</style>
<link rel="stylesheet" type="text/css" href="../style.css" />	
<center><table border=1 width="1265" height="765">
<tr>
<td width='653' height='117'>
<center><IMG SRC='../img/top2.png' width='1265' height='77'></center>
<center> 


<link rel="stylesheet" href="http://192.168.0.200/lista/bootstrap.min.css">


<script src="http://192.168.0.200/lista/jquery.min.js"></script>

<script src="http://192.168.0.200/lista/bootstrap.min.js"></script>


<?php
if($_SESSION['nivel']==4){


echo '<div class="container">';

echo '<div class="btn-group">';
 
echo '<a href="../index.php" type="button" class="btn btn-info">Home</a></button>';
 
echo '<a href="focopdd" type="button" class="btn btn-default">FocoPDD</a></button>';

echo '<a href="boleto" type="button" class="btn btn-default">Boleto</a></button>';

echo '<a href="posicoes" type="button" class="btn btn-default">Posições</a></button>';

echo '<a href="defasagem" type="button" class="btn btn-default">Defasagem</a></button>';

echo '<a href="entradas" type="button" class="btn btn-default">Entradas</a></button>';

echo '<a href="focoea" type="button" class="btn btn-default">Foco EA</a></button>';

echo '<a href="lista7" type="button" class="btn btn-default">Rolagem</a></button>';

echo '<a href="lista8" type="button" class="btn btn-default">Lista8</a></button>';

echo '<a href="lista9" type="button" class="btn btn-default">Lista9</a></button>';

echo '<a href="lista10" type="button" class="btn btn-default">Lista10</a></button>';

echo '<a href="quebra" type="button" class="btn btn-default">Quebra</a></button>';



echo '<div class="btn-group">
 
<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
 
DEV <span class="caret"></span></button>
 
<ul class="dropdown-menu">
 
<li><a href="http://192.168.0.200/projeto">MProject</a></li>
 
<li><a href="#">Lista Web</a></li>
 
</ul>
</div>';












echo '<div class="btn-group">';
 
echo '<a href="index.php" button type="button" class="btn btn-warning">Painel</button>';
 
echo '<a href="?acao=sair" button type="button" class="btn btn-danger">Sair</a></button>';
 
echo '</div>';
 
echo '</div>';
 
echo '</div>';
 
echo '</div>';


}
?>


<?php
if($_SESSION['nivel']==3){


echo '<div class="container">';

echo '<div class="btn-group">';
 
echo '<a href="../index.php" type="button" class="btn btn-info">Home</a></button>';
 
echo '<a href="focopdd" type="button" class="btn btn-default">FocoPDD</a></button>';

echo '<a href="boleto" type="button" class="btn btn-default">Boleto</a></button>';

echo '<a href="posicoes" type="button" class="btn btn-default">Posições</a></button>';

echo '<a href="defasagem" type="button" class="btn btn-default">Defasagem</a></button>';

echo '<a href="entradas" type="button" class="btn btn-default">Entradas</a></button>';

echo '<a href="focoea" type="button" class="btn btn-default">Foco EA</a></button>';

echo '<a href="lista7" type="button" class="btn btn-default">Rolagem</a></button>';

echo '<a href="lista8" type="button" class="btn btn-default">Lista8</a></button>';

echo '<a href="lista9" type="button" class="btn btn-default">Lista9</a></button>';

echo '<a href="lista10" type="button" class="btn btn-default">Lista10</a></button>';

echo '<a href="quebra" type="button" class="btn btn-default">Quebra</a></button>';

echo '<div class="btn-group">';
 
echo '<a href="index.php" button type="button" class="btn btn-warning">Painel</button>';
 
echo '<a href="?acao=sair" button type="button" class="btn btn-danger">Sair</a></button>';
 
echo '</div>';
 
echo '</div>';
 
echo '</div>';
 
echo '</div>';


}
?>



</center>
</td>
</tr>
<tr>
<td valign="top" height="541">
<?php include('container.php');?>
<div class="container">
 <?php $hr = date(" H ");
      if($hr >= 12 && $hr<18) {
      $resp = "Boa tarde administrador!  Seja bem Vindo(a) ";}
      else if ($hr >= 0 && $hr <12 ){
      $resp = "Bom dia administrador! Seja bem Vindo(a) ";}
      else {
      $resp = "Boa noite administrador!  Seja bem Vindo(a) ";}

echo '<strong><font color= green><p style="text-align: Left;">';
echo "$resp".$_SESSION['username']; 
echo '</font>';?>    
<?php
echo "Nivel de acesso = "; 
print_r($_SESSION['nivel']);    
?>

	 <center>
	   <img src="../img/painel.png" width="644" height="687" usemap="#Map" border="0">
	 </center>
	    
      

		
</div>

</td>
</tr>
<tr  bgcolor="#0D2D00">
<td  height="10" bgcolor="#0D2D00">
<center>
<br>
Copyright © 2017 MAC BARBOSA - Todos os direitos reservados | Política de Privacidade
<br>
<br>
</td>
</center>
</tr>
</table>
<?php include('footer.php');?>
<map name="Map"><area shape="rect" coords="30,522,165,643" href="cadastrar.php"><area shape="rect" coords="176,518,311,639" href="trocarsenha.php">
  <area shape="rect" coords="32,103,165,221" href="focopdd">
  <area shape="rect" coords="179,104,313,221" href="boleto">
  <area shape="rect" coords="328,107,458,220" href="posicoes">
  <area shape="rect" coords="473,105,603,220" href="defasagem">
  <area shape="rect" coords="32,235,166,351" href="entradas">
  <area shape="rect" coords="179,235,313,351" href="focoea">
  <area shape="rect" coords="326,233,460,351" href="lista7">
  <area shape="rect" coords="470,233,605,354" href="lista8">
  <area shape="rect" coords="32,365,167,482" href="lista9">
  <area shape="rect" coords="178,363,314,481" href="lista10">
  <area shape="rect" coords="327,364,460,484" href="quebra">
</map>
