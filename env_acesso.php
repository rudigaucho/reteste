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



$id  =$_POST['id'];
$nome  =$_POST['nome'];
$login  =$_POST['login'];
$senha  =$_POST['senha'];
$nome_ga  =$_POST['nome_gad'];
$acesso  =$_POST['acesso'];
$area  =$_POST['area'];

    if($nome_ga == 'JUNIOMAR ALEX MOCHNACZ')
    {
    
          $uf = 'SC'; 
          $id_ga = '380754'; 
          $localidade = 'OESTE';
        


    }

    if($nome_ga == 'CLEOMAR APARECIDO BISCHOFF')
    {
    
          $uf = 'PR'; 
          $id_ga = '381030'; 
          $localidade = 'LONDRINA';
        


    }

    if($nome_ga == 'MARLON CRISTIAN')
    {
    
          $uf = 'PR'; 
          $id_ga = '382124'; 
          $localidade = 'CAPITAL';
        


    }

    if($nome_ga == 'ENIR RODRIGUES')
    {
    
          $uf = 'SC'; 
          $id_ga = '382473'; 
          $localidade = 'NORTE';
        


    }

    if($nome_ga == 'JOSE LUIS TRINDADE')
    {
    
          $uf = 'SC'; 
          $id_ga = '383054'; 
          $localidade = 'LESTE';
        


    }

    if($nome_ga == 'ANDERSON FELIPE FERRI')
    {
    
          $uf = 'PR'; 
          $id_ga = '383056'; 
          $localidade = 'MARING?';
        


    }

    if($nome_ga == 'ALISSON SQUINZANI')
    {
    
          $uf = 'PR'; 
          $id_ga = '387358'; 
          $localidade = 'CASCAVEL';
        


    }




 












$query2 = "insert into usuario (id,nome,login,senha,id_ga,nome_ga,acesso,area,uf,localidade)";

$query2.= "values ('$id','$nome','$login','$senha','$id_ga','$nome_ga','$acesso','$area','$uf','$localidade')";
 

















$sql2 = mysql_query($query2);



if($sql2)
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