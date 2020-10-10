
<?php
include "conn.php";
session_start();

if(!isset($_SESSION["login"]) &&  !isset($_SESSION["senha"])  )
{
  header("Location: index.html");
  exit;
  
  
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<link rel="icon" href="img/logo_oi.ico">

<script type="text/javascript">
function saidasuccessfully()
{
  setTimeout("window.location='atua.php'",3000);
  
  
}
</script> 


<link rel="icon" href="img/logo.png">

<link rel="stylesheet" href="estilopres.css"/>

<meta charset="UTF-8"/>

<title>RETESTE</title>

<link rel="icon" href="img/icon.ico">
</head>



<body>








<?php

$fix =$_GET['fix'];










$query = "delete from cliente where protocolo = '$fix'";






$sql = mysql_query($query);


if($sql )
{
  
  
    echo ' <h2>DELETADA COM SUCESSO!'.$n_rat;
  
  echo "<script>saidasuccessfully()</script>";

 
  

  
}
else
{
  
  echo "<h2>Erro !</h2> ";
  
}




 

?>

























</body>


</html>