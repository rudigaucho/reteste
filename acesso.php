<?php 
         include "conn.php"; 
      
         session_start();
 


?>



<!DOCTYPE html>
<html lang="en">
  <head>

  <link rel="icon" href="img/serede.png">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>





  
<style>
  #loading
{
  
width:70px;
height:70px;  
  
  
  
  
}
</style>




<link rel="stylesheet"  href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<link rel="stylesheet"  href="/resources/demos/style.css">



<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script type="text/javascript" src="validacaoid.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>




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
    <title>Reteste</title>
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
    <header class="app-header"><a class="app-header__logo" href="dashboard.php">Serede</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
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
        
        
        
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Cadastro de colaboradores</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item"><a href="#">Form Components</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form method="post" action="env_acesso.php">

                

                  <div class="form-group">
                    <label for="exampleInputEmail1">id</label>
                    <input class="form-control"  maxlength="45" id="exampleInputEmail1" required type="text" name="id" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input class="form-control"  maxlength="85" id="exampleInputEmail1" required type="text" name="nome" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Login</label>
                    <input class="form-control"  maxlength="45" id="exampleInputEmail1" required type="text" name="login" aria-describedby="emailHelp" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">senha</label>
                    <input class="form-control"  maxlength="45" id="exampleInputEmail1" required type="password" name="senha" aria-describedby="emailHelp" >
                  </div>
                  
                  <div class="form-group">
                        <label for="email">NOME GA:</label>  
                        <select class="form-control "  name="nome_gad">
                            <option value="JUNIOMAR ALEX MOCHNACZ">  JUNIOMAR ALEX MOCHNACZ </option>
                            <option value="CLEOMAR APARECIDO BISCHOFF">  CLEOMAR APARECIDO BISCHOFF </option>
                            <option value="MARLON CRISTIAN">  MARLON CRISTIAN </option>
                            <option value="ENIR RODRIGUES">  ENIR RODRIGUES </option>
                            <option value="JOSE LUIS TRINDADE">  JOSE LUIS TRINDADE </option>
                            <option value="ANDERSON FELIPE FERRI">  ANDERSON FELIPE FERRI </option>
                            <option value="ALISSON SQUINZANI">  ALISSON SQUINZANI </option>
                         


                        </select>
                  </div>

                  <div class="form-group">
                        <label for="email">Acesso:</label>  
                        <select class="form-control "  name="acesso">
                            <option value="TEC">  Técnico </option>
                            <option value="ADM">  Adm </option>
                            <option value="GA">  GA </option>

                        </select>
                  </div>

                  <div class="form-group">
                        <label for="email">Área:</label>  
                        <select class="form-control "  name="area">
                            <option value="Tecnico de dados">  Técnico de dados </option>
                            <option value="Eletricista">  Eletricista </option>
                            <option value="GA">  GA </option>
                            </select>
                  </div>


                       

                  

                 

                  
                  
                  


                  
                  
                  
                  
                  
                  </div>
                   
                  
                  
                    </div>
                  </div>
                  <div class="tile-footer"> 
                  
                    <button class="btn btn-primary" type="submit">Cadastrar</button> 
                   
               
                  
            </div>
                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
  
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
          

