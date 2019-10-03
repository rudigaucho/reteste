<?php  include "conn.php";  ?>


<?php 


session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"]) )
{
  header("Location: index.html");
  exit;
  
  
}



 


?>



<script type="text/javascript">
function saidasuccessfully()
{
	setTimeout("window.location='dashboard.php'",7000);
	
	
}


</script> 

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
	setTimeout("window.location='dashboard.php'",3000);
	
	
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>Reteste</title>


</head>



<body>








<?php


 
$cliente =$_POST['cliente'];
$ccto =$_POST['ccto']; 
$data =$_POST['date'];
$data_f = date('Y-m-d',strtotime("+30 day", strtotime($data)));


   

	
  

$query = "insert into cliente (cliente,ccto,data_rep,data_final,id_tec,nome_tec,id_ga,nome_ga,data_ult_ret,uf)";

$query.= "values ('$cliente','$ccto','$data','$data_f','".$_SESSION['id']."','".$_SESSION['nome']."','".$_SESSION['id_ga']."','".$_SESSION['nome_ga']."','0000-00-00','".$_SESSION['uf']."')";















$sql = mysql_query($query);



if($sql)
{
  
  
  echo "
  <script language='JavaScript'>
  window.alert('CADASTRADO COM SUCESSO!')
  
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