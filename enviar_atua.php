<?php  include "conn.php";  ?>


<?php 


session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}



 


?>



 

<?php

session_start();













	

	
//}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
<link href="css/style.css" rel="stylesheet">
<link rel="icon" href="img/icon.ico">

<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='atua.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>Reteste</title>


</head>



<body>








<?php



$fix  =$_POST['fix'];
$uf  =$_POST['uf'];
$nome_ga  =$_POST['ga'];
$nome_tec  =$_POST['tec'];
$localidade  =$_POST['localidade'];
$ccto  =$_POST['ccto'];
$estacao  =$_POST['estacao'];
$cliente  =$_POST['cliente'];
$area  =$_POST['area'];
$tr  =$_POST['tr'];
$data_baixa  =$_POST['data_baixa'];
$data_final  =$_POST['data_final'];

 











$query = "update  cliente set nome_ga = '$nome_ga', uf = '$uf', nome_tec = '$nome_tec', localidade = '$localidade', ccto =  '$ccto', estacao = '$estacao', cliente = '$cliente', area = '$area', id_tec = '$tr', data_rep = '$data_baixa', data_final = '$data_final'  where protocolo = '$fix'";

 
















$sql = mysql_query($query);




if($sql)
{
  
  
  echo "
  <script language='JavaScript'>
  window.alert('EDITADO SUCESSO!')
  
  </script>";

  echo "<script>saidasuccessfully()</script>";
  

 ;
  

  
}
else
{
  
  echo "<script language='JavaScript'>
   window.alert('ERRO NO ENVIO!');
   </script> " ;
  
}








?>

























</body>


</html>