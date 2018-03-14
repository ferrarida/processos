<?php
include('header.php');
include_once("db_connect.php");
	session_start();
// inicio codigo - verifica o nivel de acesso
if($_SESSION["nivel"] != 3){
if($_SESSION["nivel"] != 4){
if($_SESSION["nivel"] != 5){
echo "<script language='javascript'>window.history.go(-1);</script>"; 
}
}
}

// fim do codigo - verifica o nivel de acesso
 
$nivel_necessario = 2;
	
	if(!isset($_SESSION['username']) || !isset($_SESSION['senha'])){
		header("Location: ../../index.php?acao=entrar");
	}
	if(isset($_GET['acao']) && $_GET['acao'] == 'sair'){
		unset($_SESSION['username']);
		unset($_SESSION['senha']);
		session_destroy();
		
		header("Location: ../../index.php");

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
<title>MAC Barbosa - Varejo</title>
<script type="text/javascript" src="../../script/validation.min.js"></script>
<script type="text/javascript" src="../../script/login.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
<style type="text/css">
.container .panel.panel-default .panel-body .row #import_form .col-md-5 {
	text-align: center;
}
.container .panel.panel-default .panel-body .row form .col-md-6 {
	text-align: right;
}
</style>
<link rel="stylesheet" type="text/css" href="../../style.css" />	
<center><table border=1 width="1265" height="765">
<tr>
<td width='653' height='117'>
<center><IMG SRC='../../img/top2.png' width='1265' height='77'></center>
<center> 


<link rel="stylesheet" href="http://192.168.0.200/proposta/bootstrap.min.css">
<script src="http://192.168.0.200/proposta/jquery.min.js"></script>
<script src="http://192.168.0.200/proposta/jquery-1.10.2.min.js"></script>
<script src="http://192.168.0.200/proposta/bootstrap.min.js"></script>
<script src="http://192.168.0.200/proposta/bootstrap.min.js"></script>

 <script src="../../jquery-3.2.1.js" type="text/javascript"></script>
 
<script src="jquery.maskedinput.min.js" type="text/javascript"></script>
 
 <script src="jquery.priceformat.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../../demo.js"></script>

<link rel="stylesheet" href="http://192.168.0.200/proposta/bootstrap.min.css">

<script src="http://192.168.0.200/proposta/jquery.min.js"></script>
<script src="http://192.168.0.200/proposta/jquery-1.10.2.min.js"></script>
<script src="http://192.168.0.200/proposta/bootstrap.min.js"></script>
<script src="http://192.168.0.200/proposta/bootstrap.min.js"></script>

<?php
if($_SESSION['nivel']==5){
		echo '<nav class="navbar navbar-default" role="navigation">';
			echo '<!-- Brand and toggle get grouped for better mobile display -->';
			echo '<div class="navbar-header">';
				echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">';
					echo '<span class="sr-only">Toggle navigation</span>';
					echo '<span class="icon-bar"></span>';
					echo '<span class="icon-bar"></span>';
					echo '<span class="icon-bar"></span>';
				echo '</button>';
				echo '<a class="navbar-brand" href="javascript:void(0)"></a>';
			echo '</div>';

			echo '<!-- Collect the nav links, forms, and other content for toggling -->';
			echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
				echo '<ul class="nav navbar-nav">';
					echo '<li><a href="javascript:void(0)">Home</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscaop.php">Operador</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscavisu.php">Minhas Propostas</a></li>';
                    echo '<li><a href="http://192.168.0.200/ofertavarejo/busca.php">Ofertas</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscaadm.php">Administrativo</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscageren.php">Gerencial</a></li>';



					
				echo '</ul>';
			  echo '<!-- <form class="navbar-form navbar-left" role="search">';
					echo '<div class="form-group">';
						echo '<input type="text" class="form-control" placeholder="Search">';
					echo '</div>';
					echo '<button type="submit" class="btn btn-default">Buscar</button>';
				echo '</form> -->';
				echo '<ul class="nav navbar-nav navbar-right">';

					echo '<li class="active"><a href="http://192.168.0.200/ofertavarejo/painel.php">Painel</a></li>';
					echo '<li><a href="?acao=sair">Sair</a></li>';

					echo '<!--<li class="dropdown">';
						echo '<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Dev <b 

class="caret"></b></a>';
					echo '<ul class="dropdown-menu">';
						echo '<li><a href="javascript:void(0)">MProject</a></li>';
							echo '<li><a href="javascript:void(0)">ListaWeb</a></li>';
							echo '<li class="divider"></li>';
							echo '<li><a href="javascript:void(0)">Separated link</a></li>';
						echo '</ul>';
					echo '</li> -->';
				echo '</ul>';
			echo '</div><!-- /.navbar-collapse -->';
		echo '</nav>';

}
?>
<?php
if($_SESSION['nivel']==4){
		echo '<nav class="navbar navbar-default" role="navigation">';
			echo '<!-- Brand and toggle get grouped for better mobile display -->';
			echo '<div class="navbar-header">';
				echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">';
					echo '<span class="sr-only">Toggle navigation</span>';
					echo '<span class="icon-bar"></span>';
					echo '<span class="icon-bar"></span>';
					echo '<span class="icon-bar"></span>';
				echo '</button>';
				echo '<a class="navbar-brand" href="javascript:void(0)"></a>';
			echo '</div>';

			echo '<!-- Collect the nav links, forms, and other content for toggling -->';
			echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
				echo '<ul class="nav navbar-nav">';
					echo '<li><a href="javascript:void(0)">Home</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscaop.php">Operador</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscavisu.php">Minhas Propostas</a></li>';
                    echo '<li><a href="http://192.168.0.200/ofertavarejo/busca.php">Ofertas</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscaadm.php">Administrativo</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscageren.php">Gerencial</a></li>';



					
				echo '</ul>';
			  echo '<!-- <form class="navbar-form navbar-left" role="search">';
					echo '<div class="form-group">';
						echo '<input type="text" class="form-control" placeholder="Search">';
					echo '</div>';
					echo '<button type="submit" class="btn btn-default">Buscar</button>';
				echo '</form> -->';
				echo '<ul class="nav navbar-nav navbar-right">';

					echo '<li><a href="http://192.168.0.200/santandervarejoweb/paineluser.php">Trocar Senha</a></li>';
					echo '<li><a href="?acao=sair">Sair</a></li>';

					echo '<!--<li class="dropdown">';
						echo '<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Dev <b 

class="caret"></b></a>';
					echo '<ul class="dropdown-menu">';
						echo '<li><a href="javascript:void(0)">MProject</a></li>';
							echo '<li><a href="javascript:void(0)">ListaWeb</a></li>';
							echo '<li class="divider"></li>';
							echo '<li><a href="javascript:void(0)">Separated link</a></li>';
						echo '</ul>';
					echo '</li> -->';
				echo '</ul>';
			echo '</div><!-- /.navbar-collapse -->';
		echo '</nav>';

}
?>
<?php
if($_SESSION['nivel']==3){
		echo '<nav class="navbar navbar-default" role="navigation">';
			echo '<!-- Brand and toggle get grouped for better mobile display -->';
			echo '<div class="navbar-header">';
				echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">';
					echo '<span class="sr-only">Toggle navigation</span>';
					echo '<span class="icon-bar"></span>';
					echo '<span class="icon-bar"></span>';
					echo '<span class="icon-bar"></span>';
				echo '</button>';
				echo '<a class="navbar-brand" href="javascript:void(0)"></a>';
			echo '</div>';

			echo '<!-- Collect the nav links, forms, and other content for toggling -->';
			echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
				echo '<ul class="nav navbar-nav">';
					echo '<li><a href="javascript:void(0)">Home</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscaop.php">Operador</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscavisu.php">Minhas Propostas</a></li>';
                    echo '<li><a href="http://192.168.0.200/ofertavarejo/busca.php">Ofertas</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscaadm.php">Administrativo</a></li>';
					


					
				echo '</ul>';
			  echo '<!-- <form class="navbar-form navbar-left" role="search">';
					echo '<div class="form-group">';
						echo '<input type="text" class="form-control" placeholder="Search">';
					echo '</div>';
					echo '<button type="submit" class="btn btn-default">Buscar</button>';
				echo '</form> -->';
				echo '<ul class="nav navbar-nav navbar-right">';

					echo '<li><a href="http://192.168.0.200/santandervarejoweb/paineluser.php">Trocar Senha</a></li>';
					echo '<li><a href="?acao=sair">Sair</a></li>';

					echo '<!--<li class="dropdown">';
						echo '<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Dev <b 

class="caret"></b></a>';
					echo '<ul class="dropdown-menu">';
						echo '<li><a href="javascript:void(0)">MProject</a></li>';
							echo '<li><a href="javascript:void(0)">ListaWeb</a></li>';
							echo '<li class="divider"></li>';
							echo '<li><a href="javascript:void(0)">Separated link</a></li>';
						echo '</ul>';
					echo '</li> -->';
				echo '</ul>';
			echo '</div><!-- /.navbar-collapse -->';
		echo '</nav>';

}
?>
<?php
if($_SESSION['nivel']==2){
		echo '<nav class="navbar navbar-default" role="navigation">';
			echo '<!-- Brand and toggle get grouped for better mobile display -->';
			echo '<div class="navbar-header">';
				echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">';
					echo '<span class="sr-only">Toggle navigation</span>';
					echo '<span class="icon-bar"></span>';
					echo '<span class="icon-bar"></span>';
					echo '<span class="icon-bar"></span>';
				echo '</button>';
				echo '<a class="navbar-brand" href="javascript:void(0)"></a>';
			echo '</div>';

			echo '<!-- Collect the nav links, forms, and other content for toggling -->';
			echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
				echo '<ul class="nav navbar-nav">';
					echo '<li><a href="javascript:void(0)">Home</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscaop.php">Operador</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscavisu.php">Minhas Propostas</a></li>';
                    echo '<li class="active"><a href="http://192.168.0.200/ofertavarejo/busca.php">Ofertas</a></li>';
					



					
				echo '</ul>';
			  echo '<!-- <form class="navbar-form navbar-left" role="search">';
					echo '<div class="form-group">';
						echo '<input type="text" class="form-control" placeholder="Search">';
					echo '</div>';
					echo '<button type="submit" class="btn btn-default">Buscar</button>';
				echo '</form> -->';
				echo '<ul class="nav navbar-nav navbar-right">';

					echo '<li><a href="http://192.168.0.200/santandervarejoweb/paineluser.php">Trocar Senha</a></li>';
					echo '<li><a href="?acao=sair">Sair</a></li>';

					echo '<!--<li class="dropdown">';
						echo '<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Dev <b 

class="caret"></b></a>';
					echo '<ul class="dropdown-menu">';
						echo '<li><a href="javascript:void(0)">MProject</a></li>';
							echo '<li><a href="javascript:void(0)">ListaWeb</a></li>';
							echo '<li class="divider"></li>';
							echo '<li><a href="javascript:void(0)">Separated link</a></li>';
						echo '</ul>';
					echo '</li> -->';
				echo '</ul>';
			echo '</div><!-- /.navbar-collapse -->';
		echo '</nav>';

}
?>
<?php
if($_SESSION['nivel']==1){
		echo '<nav class="navbar navbar-default" role="navigation">';
			echo '<!-- Brand and toggle get grouped for better mobile display -->';
			echo '<div class="navbar-header">';
				echo '<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">';
					echo '<span class="sr-only">Toggle navigation</span>';
					echo '<span class="icon-bar"></span>';
					echo '<span class="icon-bar"></span>';
					echo '<span class="icon-bar"></span>';
				echo '</button>';
				echo '<a class="navbar-brand" href="javascript:void(0)"></a>';
			echo '</div>';

			echo '<!-- Collect the nav links, forms, and other content for toggling -->';
			echo '<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">';
				echo '<ul class="nav navbar-nav">';
					echo '<li><a href="javascript:void(0)">Home</a></li>';
					echo '<li><a href="buscaop.php">Operador</a></li>';
					echo '<li><a href="http://192.168.0.200/santandervarejoweb/buscavisu.php">Minhas Propostas</a></li>';
                    echo '<li class="active"><a href="http://192.168.0.200/ofertavarejo/busca.php">Ofertas</a></li>';
					



					
				echo '</ul>';
			  echo '<!-- <form class="navbar-form navbar-left" role="search">';
					echo '<div class="form-group">';
						echo '<input type="text" class="form-control" placeholder="Search">';
					echo '</div>';
					echo '<button type="submit" class="btn btn-default">Buscar</button>';
				echo '</form> -->';
				echo '<ul class="nav navbar-nav navbar-right">';

					echo '<li><a href="http://192.168.0.200/santandervarejoweb/paineluser.php">Trocar Senha</a></li>';
					echo '<li><a href="?acao=sair">Sair</a></li>';

					echo '<!--<li class="dropdown">';
						echo '<a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Dev <b 

class="caret"></b></a>';
					echo '<ul class="dropdown-menu">';
						echo '<li><a href="javascript:void(0)">MProject</a></li>';
							echo '<li><a href="javascript:void(0)">ListaWeb</a></li>';
							echo '<li class="divider"></li>';
							echo '<li><a href="javascript:void(0)">Separated link</a></li>';
						echo '</ul>';
					echo '</li> -->';
				echo '</ul>';
			echo '</div><!-- /.navbar-collapse -->';
		echo '</nav>';

}
?>

</center>
</td>
</tr>
<tr>
<td valign="top" height="541">

<div class="container">
	<h2><p style="text-align: Center;">PAINEL DO ADMINISTRADOR</h2></p>
	<h2>
	  <p style="text-align: Left;"><IMG SRC='http://192.168.0.200/ofertavarejo/img/upload.png' width="39" height="42">Importa Ofertas</h2></p>
    <?php if(!empty($import_status_message)){
        echo '<div class="alert '.$message_stauts_class.'">'.$import_status_message.'</div>';
    } ?>
    <div class="panel panel-default">        
        <div class="panel-body">
			<br>
			<div class="row">
				<form action="import.php" method="post" enctype="multipart/form-data" id="import_form">			

	
						<div class="col-md-3">
						<input type="file" name="file" />
						</div>				
                  <div class="col-md-5">
						<input type="submit" class="btn btn-primary" name="import_data" value="IMPORTAR">
					</div>		
				</form>
              <form action="del.php" method="post" enctype="multipart/form-data" id="del_form"><form><div class="col-md-11"><input type="submit" 

class="btn btn-danger" name="del_data" value="DELETAR"></div></form>
                
			</div>
			<br>
			<div class="row">
				<table class="table table-bordered table-striped">
					<thead>
						<tr>
						  <th width="23" class="danger"><center>ID</center></th>
						 <th width="116" class="danger"><center>
						 CPF/CNPJ
						 </center></th>
                          <th width="112" class="danger"><center>
                          CLIENTE
                          </center></th>
						  <th width="91" class="danger"><center>
						  OP19
						  </center></th>
						  <th width="91" class="danger"><center>
						  OFERTA<br>
JUROS
</center></th>
                          <th width="127" class="danger"><center>
						  OFERTA DESC. <br>
						  A VISTA
</center></th>
						  <th width="122" class="danger"><center>
						  OFERTA <br>
						  DESC. PARC.
</center></th>
                          <th width="112" class="danger"><center>
						  OFERTA ENTRADA
						  </center></th>
                          <th width="136" class="danger"><center>
						  STATUS
                          </center></th>                     
						</tr>
					</thead>
					<tbody>
					<?php
						$sql = "SELECT * FROM ofertavarejo ORDER BY id ASC LIMIT 
10000";
						$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
						if(mysqli_num_rows($resultset)) { 
						while( $rows = mysqli_fetch_assoc($resultset) ) { 
  $id = $rows['id'];
  $cpfcnpj = $rows['cpfcnpj'];  
  $cliente = $rows['cliente'];
  $op19 = $rows['op19'];
  $ofer_juros  = $rows['ofer_juros'];
  $ofer_desc_avista = $rows['ofer_desc_avista'];
  $ofer_desc_parc = $rows['ofer_desc_parc'];
  $ofer_entrada = $rows['ofer_entrada'];
  $status = $rows['status'];
						?>
						<tr>
						  <td><h6><?php echo "$id"; ?></h6></td>
                           <td><h6><?php echo "$cpfcnpj"; ?></h6></td>
						  <td><h6><?php echo "$cliente"; ?></h6></td>	
						  <td><h6><?php echo "$op19"; ?></h6></td>
						   <td><h6><?php if($rows['ofer_juros'] != ""){			echo "$ofer_juros"; 			

} else { echo "0";} ?> %</h6></td>
                           
                           
                           
						  <td><h6><?php if($rows['ofer_desc_avista'] != ""){			echo "$ofer_desc_avista"; 		

	} else { echo "0";} ?> %</h6></td>
                          
                          
                          
                          <td><h6> <?php if($rows['ofer_desc_parc'] != ""){			echo "$ofer_desc_parc"; 			} else { 

echo "0";} ?> %</h6></td>
                          
                         
                          
                          
                          <td><h6><?php echo "$ofer_entrada"; ?></h6></td>
						  <td><h6><?php if($rows['status'] != "0"){			echo date('d/m/Y H:i:s', 

strtotime($rows['status'])); 			} else { echo "0";} ?></h6></td>           
						</tr>
						<?php } } else { ?>  
						<tr>
						  <td colspan="9">Nao ha registros a serem exibidos.....</td></tr>
						<?php } ?>					
					</tbody>
				</table>
	    </div>	
    </div>
  </div>		
		
</div>

</td>
</tr>
<tr  bgcolor="#0D2D00">
<td  height="10" bgcolor="#0D2D00">
<center>

Copyright © 2017 MAC BARBOSA - Todos os direitos reservados | Política de Privacidade

<br>
</center>
</td>
</tr>
</table>
<?php include('footer.php');?>