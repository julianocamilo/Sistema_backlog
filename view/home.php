<?
include_once "../model/Session.php";
if (!Session::session_exist())
    header("Location: index.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	

	<meta charset="utf-8">
	<title>BS - Home</title>
	
	<meta name="description" content="Home">
	<meta name="author" content="Fernando Tagliapietra">


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="bootstrap-style" href="static/css/bootstrap.min.css" rel="stylesheet">
	<link href="static/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="static/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="static/css/style-responsive.css" rel="stylesheet">
	
	<link rel="shortcut icon" href="static/img/favicon.ico">


</head>

<body>
	
	<nav class="navbar navbar-default" style="margin-bottom:0">
  		  
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><b>BS</b> <small>Backlog System</small></a>
          </div>
      
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
            <ul class="nav navbar-nav navbar-right">
             
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> <? echo Session::get_session()["user"]; ?> <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a href="#">
                      <i class="icon-user"></i></i> Minha conta
                    </a>
                  </li>
                  
                  
                  <li class="divider"></li>
                  
                  <li>
                    <a href="#"> <i class="fa fa-sign-out"></i> Logout</a>
                  </li>
                  
                </ul>
              </li>
            
             
              
            </ul>
          </div>
        </div>
      </nav>
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li>
							<a href="home.php">
								<i class="icon-bar-chart"></i>
								<span class="hidden-tablet"> Chamados</span>
							</a>
						</li>
						
						<li>
							<a href="equipes.html">
								<i class="icon-envelope"></i>
								<span class="hidden-tablet"> Equipes</span>
							</a>
						</li>
						
						<li>
							<a href="usuarios.html">
								<i class="icon-tasks"></i>
								<span class="hidden-tablet"> Usuários</span>
							</a>
						</li>
						
					</ul>
				</div>
			</div>
			
			<div id="content" class="span10">
			
			
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								
							</li>
							<li><a href="#">Chamados</a></li>
						</ul>
			
						<div class="row-fluid">dsadadsa
						</div>		
			
						<div class="row-fluid">dsdsdd
						</div>
						
						<div class="row-fluid hideInIE8 circleStats">
						</div>		
									
						<div class="row-fluid">ddsdsdsd
						</div>
						
						<div class="row-fluid">dsds
						</div>
	
			
			</div>
		</div>
		
	
</div>
	

		

</body>

	<script src="static/js/jquery-1.11.2.min.js"></script>
		<script src="static/js/bootstrap.min.js"></script>

</html>
