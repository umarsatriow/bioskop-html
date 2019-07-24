<!DOCTYPE html>
<html>
	
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, 
		initial-scale=1">
		
		<link rel="stylesheet" type="text/css" 
		href="<?= base_url();?>assets/css/bootstrap.css">
		
		<link rel="stylesheet" type="text/css" 
		href="<?= base_url();?>assets/style.css">
		
		<script type="text/javascript" 
		src="<?= base_url();?>assets/js/jquery-1.11.2.min.js"></script>
		
		<script type="text/javascript" 
		src="<?= base_url();?>assets/js/bootstrap.min.js"></script>
		
	</head>

	<body style="background-color: #272626">
		<nav class="navbar navbar-default navbar-fixed-top" 
		role="navigation">
		<div class="navbar-header">
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        	<span class="sr-only"></span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
    	  </button>
		  <a class="navbar-brand" href="#"><img src="<?= base_url()?>assets/image/logo.png"></a>
		</div>
			<div class="container-fluid">
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">   
			<ul class="nav navbar-nav">
			<li><!-- <li class="active"> -->

				<li class="dropdown">
          		<a href="#" class="dropdown-toggle" data-toggle="dropdown">GENRE <span class="caret"></span></a>
          		<ul class="dropdown-menu" role="menu">
            		<li><a href="#">ACTION</a></li>
            		<li><a href="#">COMEDY</a></li>
            		<li><a href="#">HORROR</a></li>
            		<li class="divider"></li>
            		<li><a href="#">MYSTERY</a></li>
            		<li class="divider"></li>
            		<li><a href="#">ROMANCE</a></li>
          		</ul>
        		</li>
			</li>
			</ul>
		
		<ul class="nav navbar-nav navbar-right">
				<li><a href="#"><span class="glyphicon glyphicon-time"></span> SCHEDULE</a></li>
        		<li><a href="#"><span class="glyphicon glyphicon-tag"></span> TICKETS</a></li>
				<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
				
				<!-- <li><a href="#"><span class="glyphicon glyphicon-registration-mark"></span> DAFTAR</a></li> -->
		</ul>
	
		</div>
		</div>
		</nav>
		

		<!-- HEADER -->
	<div class="header"></div>



		<!-- LAYOUT -->

	<div class="container jarak ">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">FILM LIST</div>
						<div class="panel-body">
							<div class="row">
							  <div class="col-sm-6 col-md-3">
							    <a href="#gmbr1" data-toggle="modal" class="thumbnail">
							      <img src="<?= base_url()?>assets/image/poster/k1.jpg" alt="...">
							    	<div class="caption">
								        <h6>Killing Ground</h6>
							    	</div>
							    </a>
							  </div>
							  
							  <div class="col-sm-6 col-md-3">
							    <a href="#gmbr2" class="thumbnail" data-toggle="modal">
							      <img src="<?= base_url()?>assets/image/poster/k2.jpg" alt="...">
							    	<div class="caption">
								        <h6>Happy Death Day</h6>
							    	</div>
							    </a>
							  </div>

							  <div class="col-sm-6 col-md-3">
							    <a href="#gmbr3" class="thumbnail" data-toggle="modal">
							      <img src="<?= base_url()?>assets/image/poster/k3.jpg" alt="...">
							    	<div class="caption">
								        <h6>Netflix 1922</h6>
							    	</div>
							    </a>
							  </div>

							  <div class="col-sm-6 col-md-3">
							    <a href="#gmbr4" class="thumbnail" data-toggle="modal">
							      <img src="<?= base_url()?>assets/image/poster/k4.jpg" alt="...">
							    	<div class="caption">
								        <h6>Talon Falls</h6>
							    	</div>
							    </a>
							  </div>
							  
							  <div class="col-sm-6 col-md-3">
							    <a href="#gmbr6" class="thumbnail" data-toggle="modal">
							      <img src="<?= base_url()?>assets/image/poster/k6.jpg" alt="...">
							    	<div class="caption">
								        <h6>Insidous 2</h6>
							    	</div>
							    </a>
							  </div>

							  <div class="col-sm-6 col-md-3">
							    <a href="#gmbr5" class="thumbnail" data-toggle="modal">
							      <img src="<?= base_url()?>assets/image/poster/k5.jpg" alt="...">
							    	<div class="caption">
								        <h6>Insidious 3</h6>
							    	</div>
							    </a>
							  </div>
						
							  <div class="col-sm-6 col-md-3">
							    <a href="#gmbr7" class="thumbnail" data-toggle="modal">
							      <img src="<?= base_url()?>assets/image/poster/k7.jpg" alt="...">
							    	<div class="caption">
								        <h6>Pengabdi Setan</h6>
							    	</div>
							    </a>
							  </div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading">LIVE TODAY</div>
						<div class="panel-body">
							<img src="<?= base_url()?>assets/image/poster/k5.jpg" alt="..." class="img-rounded">
							 <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-tag"></span> Buy Tickets</button>
							<h3>Showtime :
                                            <br><br>
                                            12:00 <br> 14:10 <br> 16:20 <br> 18:30</h3>

							<img src="<?= base_url()?>assets/image/rules.png" style="padding-left: 15px;">
						</div>
				</div>
			</div>

		
			<!-- MODAL /  -->

			<div id="gmbr1" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"> 
  <div class="modal-dialog modal-sm" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Killing Ground</h4>
      </div>
      <div class="modal-body">

      		 <img style="width: 100%" src="<?= base_url()?>assets/image/poster/k1.jpg" alt="...">
							    	<!-- <div class="caption">
								        <h6>Killing Ground</h6>
							    	</div> -->
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Desc</button>
        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-tag"></span> Buy Tickets</button>
      </div>
      ...
    </div>
</div></div>


			<div id="gmbr2" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"> 
  <div class="modal-dialog modal-sm" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Killing Ground</h4>
      </div>
      <div class="modal-body">

      		 <img style="width: 100%" src="<?= base_url()?>assets/image/poster/k2.jpg" alt="...">
							    	<!-- <div class="caption">
								        <h6>Killing Ground</h6>
							    	</div> -->
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Desc</button>
        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-tag"></span> Buy Tickets</button>
      </div>
      ...
    </div>
</div></div>


			<div id="gmbr3" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"> 
  <div class="modal-dialog modal-sm" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Killing Ground</h4>
      </div>
      <div class="modal-body">

      		 <img style="width: 100%" src="<?= base_url()?>assets/image/poster/k3.jpg" alt="...">
							    	<!-- <div class="caption">
								        <h6>Killing Ground</h6>
							    	</div> -->
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Desc</button>
        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-tag"></span> Buy Tickets</button>
      </div>
      ...
    </div>
</div></div>


			<div id="gmbr4" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"> 
  <div class="modal-dialog modal-sm" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Killing Ground</h4>
      </div>
      <div class="modal-body">

      		 <img style="width: 100%" src="<?= base_url()?>assets/image/poster/k4.jpg" alt="...">
							    	<!-- <div class="caption">
								        <h6>Killing Ground</h6>
							    	</div> -->
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Desc</button>
        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-tag"></span> Buy Tickets</button>
      </div>
      ...
    </div>
</div></div>


			<div id="gmbr5" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"> 
  <div class="modal-dialog modal-sm" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Killing Ground</h4>
      </div>
      <div class="modal-body">

      		 <img style="width: 100%" src="<?= base_url()?>assets/image/poster/k5.jpg" alt="...">
							    	<!-- <div class="caption">
								        <h6>Killing Ground</h6>
							    	</div> -->
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Desc</button>
        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-tag"></span> Buy Tickets</button>
      </div>
      ...
    </div>
</div></div>


			<div id="gmbr6" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"> 
  <div class="modal-dialog modal-sm" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Killing Ground</h4>
      </div>
      <div class="modal-body">

      		 <img style="width: 100%" src="<?= base_url()?>assets/image/poster/k6.jpg" alt="...">
							    	<!-- <div class="caption">
								        <h6>Killing Ground</h6>
							    	</div> -->
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Desc</button>
        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-tag"></span> Buy Tickets</button>
      </div>
      ...
    </div>
</div></div>


			<div id="gmbr7" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel"> 
  <div class="modal-dialog modal-sm" role="document">
    		<div class="modal-content">
    			<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">Killing Ground</h4>
      </div>
      <div class="modal-body">

      		 <img style="width: 100%" src="<?= base_url()?>assets/image/poster/k7.jpg" alt="...">
							    	<!-- <div class="caption">
								        <h6>Killing Ground</h6>
							    	</div> -->
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Desc</button>
        <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-tag"></span> Buy Tickets</button>
      </div>
      ...
    </div>
</div></div>

	</body>
</html>

<script>
	var navigasi=$(".navbar-default").offset().top;
	var menu = function(){
		var scrolatas=$(window).scrollTop();
		if(scrolatas>navigasi){
			$(".navbar-default").addClass("gantiwarna");
		} else{
			$(".navbar-default").removeClass("gantiwarna");
		}
	}
	$(window).scroll(function(){
		menu();
	});
</script>