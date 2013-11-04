<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SISTEM REKOMENDASI PKLI - <?php echo CHtml::encode($this->pageTitle); ?></title>
		<meta name="description" content="A form is a collection of user input elements" />
		<meta name="keywords" content="rekomendasi,tempat pkli, pkli, sistem informasi,magang" />
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.0.3.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">	
				<div class="navbar-header">
			  	<!-- Collect the nav links, forms, and other content for toggling -->
			  	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="/home">Home</a></li>
						<li><a href="/pengumuman">Pengumuman</a></li>
						<li><a href="/about">About</a></li>
					</ul>
				
					<ul class="nav navbar-nav navbar-right">
						<li>
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group"><input type="text" class="form-control" placeholder="Search"></div>
								<button type="submit" class="btn btn-default">Submit</button>
							</form>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Masuk</a>
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
		  	</div>
		</nav>
		<div class="container"><?php echo $content; ?></div>
		<footer>
			<div class="container">
		 		 <div class="pull-left"> Copyright &copy; <?php echo date('Y'); ?> SIC 2013 All Rights Reserved</div>
		 		 <div class="pull-right"><?php echo Yii::powered(); ?></div>
		 	</div>	 
		</footer>
	</body>
</html>