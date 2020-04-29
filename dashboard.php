
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
<html lang="en">
  <head>
    <link rel="icon" href="img/serede.png">
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>RETESTE</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="dashboard.php">Serede</a><br>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> <br>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
        <!--Notification Menu-->
       
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" style="width:38px; height:40px;" src="img/serede.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><?php echo $_SESSION['nome'];?> </p>
          <p class="app-sidebar__user-designation"><?php echo $_SESSION['area'];?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item active" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li>
        
        
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Tabelas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
           
          <?php if($_SESSION['acesso'] == 'ADM'){ ?>
            <li><a class="treeview-item" href="import2.php"><i class="icon fa fa-circle-o"></i> Upload base</a></li>
            <li><a class="treeview-item" href="atua.php"><i class="icon fa fa-circle-o"></i> Atualiza base</a></li>
            <?php }?>
            <li><a class="treeview-item" href="table-pendencias.php"><i class="icon fa fa-circle-o"></i> Pendência</a></li>
            <li><a class="treeview-item" href="pesq_per.php"><i class="icon fa fa-circle-o"></i> Pesquisa</a></li>
            
          </ul>
          
        </li>
        
            
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
          <p>Relatório Gráfico Reteste</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        </ul>
      </div>
      <!-- 
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>TESTE</h4>
              <p><b>5</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
            <div class="info">
              <h4>TESTE</h4>
              <p><b>25</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
            <div class="info">
              <h4>TESTE</h4>
              <p><b>10</b></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
            <div class="info">
              <h4>TESTE</h4>
              <p><b>500</b></p>
            </div>
          </div>
        </div>
      </div>
      -->
      <div class="row " >
        <div class="col-md-12">
          <div class="tile">
          <h3 class="tile-title">Tabela Reteste por GA</h3>


          <?php


date_default_timezone_set('America/Sao_Paulo');



$data_atual = date("Y-m-d");


$sql = mysql_query ("SELECT ga.uf,ga.nome,ga.localidade,(SELECT count(*) from cliente where ga.localidade = cliente.localidade and  data_final >= '$data_atual' and data_rep !='$data_atual' ) as total, (SELECT count(*) from cliente where ga.localidade = cliente.localidade and  data_final >= '$data_atual' and data_ult_ret = '$data_atual'  and data_rep !='$data_atual' ) as Realizados, (SELECT count(*) from cliente where ga.localidade = cliente.localidade  and  data_final >= '$data_atual' and data_ult_ret 
!= '$data_atual'  and data_rep !='$data_atual' ) as pendente from cliente JOIN ga
on ga.protocolo = cliente.protocolo order by ga.uf,ga.nome" );

$sql2 = mysql_query ("SELECT ga.nome,(SELECT count(*) as total2 from cliente where data_final >= '$data_atual' and data_rep !='$data_atual'  ) as tot_ok, (SELECT count(*) from cliente where data_final >= '$data_atual' and data_ult_ret = '$data_atual' and data_rep !='$data_atual' ) as tot_Realizados, (SELECT count(*) from cliente where    data_final >= '$data_atual' and data_ult_ret 
!= '$data_atual' and data_rep !='$data_atual'  ) as tot_pendente from cliente JOIN ga
on ga.protocolo = cliente.protocolo group by tot_ok;");

function obterPercentual($percentage, $of)
{
    $percent = 100 * $of;
    $percent2 = $percent / $percentage;

  
    return  number_format( $percent2, 1 ) . '%';;
}



$row = mysql_num_rows($sql);
$row2 = mysql_num_rows($sql2);

if (mysql_num_rows($sql2) > 0)
{
  while ($dado3 = mysql_fetch_assoc($sql2)){

    $tot_ok = $dado3 ["tot_ok"] ;
    $tot_realizado = $dado3 ["tot_Realizados"] ;
    $tot_pendente = $dado3 ["tot_pendente"] ;

     
    



  }

}


if (mysql_num_rows($sql) > 0){

 
  $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$ipad = strpos($_SERVER['HTTP_USER_AGENT'],"iPad");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
$symbian = strpos($_SERVER['HTTP_USER_AGENT'],"Symbian");
$windowsphone = strpos($_SERVER['HTTP_USER_AGENT'],"Windows Phone");

if ($iphone || $ipad || $android || $palmpre || $ipod || $berry || $symbian || $windowsphone == true) {
  
     $dispositivo = "Mobile";
    // moblie

?>
          <table class="table table-responsive ">   <?php }else {  $dispositivo = "Computador";?>

            <table class="table">   
            <?php } ?>
  <thead>
    <tr>
      <th scope="col" class="table-dark">Ga</th>
      <th scope="col" class="table-dark">Localidade</th>
      <th scope="col" class="table-dark">Total</th>
      <th scope="col"class="table-dark" >Realizado</th>
      <th scope="col" class="table-dark">Pendente</th>
      <th scope="col" class="table-dark">%</th>
    </tr>
  </thead>
  <tbody >
  <?php  while ($dado = mysql_fetch_assoc($sql)){
    $porcentagem = obterPercentual($dado ["total"], $dado ["Realizados"]);
   
    $dado2 = mysql_fetch_assoc($sql2); ?>
    <tr >
      <th > <?php echo $dado ["nome"];  ?> </th>
      <th > <?php echo $dado ["localidade"];  ?> </th>
      <td><?php echo $dado ["total"];  ?></td>
      <td><?php echo $dado ["Realizados"];  ?></td>
      <td><a style="color:black;" href="pesq_contagem.php?localidade=<?php echo $dado ["localidade"];  ?>"><?php echo $dado ["pendente"]; ?></span></a></td>
      <?php if($porcentagem >= 0.0 && $porcentagem <= 49.9) { ?>
      <td><span class="badge badge-danger" style="font-size:12px;" ><?php echo $porcentagem; ?></span></td>  
      
      <?php } ?>

      <?php if($porcentagem >= 50.0 && $porcentagem <= 99.9 ) { ?>
      <td><span class="badge badge-warning"  style="font-size:12px;" ><?php echo $porcentagem; ?></span></td>  
      
      <?php } if ($porcentagem == 100.0) { ?>
        <td><span class="badge badge-success" style="font-size:12px;" ><?php echo $porcentagem; ?></span></td>
        <?php } ?>
    </tr>
    
  </tbody>
  <?php  }}  ?> 
  
  <td class="table-dark" >TOTAL</td>
  <td  class="table-dark"></td>
  <td class="table-dark"><a  style="color:white;" href="pesq_contagem_total.php"> <?php echo $tot_ok;  ?> </span></a></td>
  <td class="table-dark"><?php echo $tot_realizado;  ?></td>
  <td class="table-dark" ><?php echo $tot_pendente;  ?></td>
  <?php  $porcentagem2 = obterPercentual($tot_ok, $tot_realizado);   ?>
  <td class="table-dark"><?php echo $porcentagem2  ?></td>
</table><span >*Versão para <?php echo $dispositivo;   ?><?php echo $data_atual;   ?></span> <span style="float:right;font-family:georgia,garamond,serif;font-size:16px;font-style:italic;">Desenvolvimento  Rudinei Rossales  <a  href="https://www.linkedin.com/in/rudineigti"  target="_blank"><img src="img/in.png" alt="Smiley face" height="20" width="25"></a></span>
          </div>
          
        </div>
        <!-- 
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Em desenvolvimento</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Em desenvolvimento</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="lineChartDemo2"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Em desenvolvimento</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="pieChartDemo2"></canvas>
            </div>
          </div>
        </div>
      </div>
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Em desenvolvimento</h3>
            <p>Em desenvolvimento</p>
            <p>Em desenvolvimento</p>
            <p>Em desenvolvimento </p>
          </div>
        </div>
        -->
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["GA1", "GA2", "GA3", "GA4", "GA5"],
      	datasets: [
      		{
      			label: "Setembro",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "Agosto",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 300,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 50,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>

<script type="text/javascript">
  var data = {
    labels: ["January", "February", "March", "April", "May"],
    datasets: [
      {
        label: "My First dataset",
        fillColor: "rgba(220,220,220,0.2)",
        strokeColor: "rgba(220,220,220,1)",
        pointColor: "rgba(220,220,220,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(220,220,220,1)",
        data: [65, 59, 80, 81, 56]
      },
      {
        label: "My Second dataset",
        fillColor: "rgba(151,187,205,0.2)",
        strokeColor: "rgba(151,187,205,1)",
        pointColor: "rgba(151,187,205,1)",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "rgba(151,187,205,1)",
        data: [28, 48, 40, 19, 86]
      }
    ]
  };
  var pdata = [
    {
      value: 300,
      color: "#46BFBD",
      highlight: "#5AD3D1",
      label: "Complete"
    },
    {
      value: 50,
      color:"#F7464A",
      highlight: "#FF5A5E",
      label: "In-Progress"
    }
  ]
  
  var ctxl = $("#lineChartDemo2").get(0).getContext("2d");
  var lineChart = new Chart(ctxl).Line(data);
  
  var ctxp = $("#pieChartDemo2").get(0).getContext("2d");
  var pieChart = new Chart(ctxp).Pie(pdata);
</script>

    

    
  </body>
</html>