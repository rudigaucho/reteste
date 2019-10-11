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
	setTimeout("window.location='table-pendencias.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>Reteste</title>


</head>



<body>








<?php



$protocolo  =$_POST['protocolo'];
$contato  =$_POST['contato'];
$desc  =$_POST['desc'];

 











$query = "update  cliente set data_ult_ret = NOW()  where protocolo = '$protocolo'";
$query2 = "insert into reteste (protocolo,data_ret,contato,descricao,cad_por)";

$query2.= "values ('$protocolo',NOW(),'$contato','$desc','".$_SESSION['nome']."')";
 
















$sql = mysql_query($query);
$sql2 = mysql_query($query2);



if($sql && $sql2 )
{
  
  
  echo "
  <script language='JavaScript'>
  window.alert('CADASTRO EFETUADO SUCESSO!')
  
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