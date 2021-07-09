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
	setTimeout("window.location='atua_tec.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>Reteste</title>


</head>



<body>








<?php



$id_ga  =$_POST['id_ga'];
$id  =$_POST['id'];

if ($id_ga == '380754')
{

$query = "update  usuario set nome_ga = 'JUNIOMAR ALEX MOCHNACZ', id_ga = '380754', localidade = 'OESTE', uf = 'SC' where id = '$id'";


}


if ($id_ga == '381030')
{

$query = "update  usuario set nome_ga = 'CLEOMAR APARECIDO BISCHOFF', id_ga = '381030', localidade = 'LONDRINA', uf = 'PR' where id = '$id'";


}

if ($id_ga == '382473')
{

$query = "update  usuario set nome_ga = 'ENIR RODRIGUES', id_ga = '382473', localidade = 'NORTE', uf = 'SC' where id = '$id'";


}


if ($id_ga == '383054')
{

$query = "update  usuario set nome_ga = 'JOSE LUIS TRINDADE', id_ga = '383054', localidade = 'LESTE', uf = 'SC' where id = '$id'";


}

if ($id_ga == '383056')
{

$query = "update  usuario set nome_ga = 'ANDERSON FELIPE FERRI', id_ga = '383056', localidade = 'MARING?', uf = 'PR' where id = '$id'";


}

if ($id_ga == '387358')
{

$query = "update  usuario set nome_ga = 'ALISSON SQUINZANI', id_ga = '387358', localidade = 'CASCAVEL', uf = 'PR' where id = '$id'";


}
 













 
















$sql = mysql_query($query);




if($sql)
{
  
  
  echo "
  <script language='JavaScript'>
  window.alert('EDITADO SUCESSO! ')
  
  </script>";

  echo "<script>saidasuccessfully()</script>";
  

 
  

  
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