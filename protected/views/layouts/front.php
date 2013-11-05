<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SISTEM REKOMENDASI PKLI - <?php echo CHtml::encode($this->pageTitle); ?></title>
		<meta name="description" content="A form is a collection of user input elements" />
		<meta name="keywords" content="rekomendasi,tempat pkli, pkli, sistem informasi,magang" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/sb-admin.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css">
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.0.3.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div id="wrapper">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
				<a class="navbar-brand" href="#">
				SPK PKLI</a>
		</div>

			<div class="container">	
			  	<!-- Collect the nav links, forms, and other content for toggling -->
			  	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="menu odd"><a href="/home">
							<span class="glyphicon glyphicon-home"></span>
							<span class="glyphicon-class">Home</span>
							</a></li>
						<li class="menu"><a href="/pengumuman">
						<span class="glyphicon glyphicon-warning-sign"></span>
						<span class="glyphicon-class">Pengumuman</span>
						</a></li>
						<li class="menu odd"><a href="/about">
						<span class="glyphicon glyphicon-info-sign"></span>
						<span class="glyphicon-class">About</span>
						</a></li>
						<li class="dropdown menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="glyphicon glyphicon-user"></i>
								John Lenon
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>	
					</ul>
			  	</div><!-- /.navbar-collapse -->
<<<<<<< HEAD
		<?php echo $content; ?>
		<div class="footer">
		 		 <div class="footer-left"><span> Copyright &copy; <?php echo date('Y'); ?> SIC 2013 All Rights Reserved</span></div>
		 		 <div class="footer-right"><span><?php echo Yii::powered(); ?></span></div>
=======
		  	</div>
		</nav>
		<div id="middle" class="container"><?php echo $content; ?></div>
		<footer>
			<div class="container">
		 		 <div class="pull-left"> Copyright &copy; <?php echo date('Y'); ?> SIC 2013 All Rights Reserved</div>
		 		 <div class="pull-right"><?php echo Yii::powered(); ?></div>
		 	</div>	 
>>>>>>> 8f8dda9a3dc2cd63f2b5924e3aaaedda64180fb1
		</footer>
	</div><!-- /#wrapper -->
	</body>
</html>