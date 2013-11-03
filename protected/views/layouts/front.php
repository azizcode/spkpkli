<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SISTEM REKOMENDASI PKLI - <?php echo CHtml::encode($this->pageTitle); ?></title>
		<meta name="description" content="A form is a collection of user input elements" />
		<meta name="keywords" content="rekomendasi,tempat pkli, pkli, sistem informasi,magang" />
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.js"></script>
		<link rel="stylesheet" type="text/css" class="ui" href="<?php echo Yii::app()->request->baseUrl; ?>/packaged/css/semantic.min.css">
		<link rel="stylesheet" type="text/css" class="ui" href="<?php echo Yii::app()->request->baseUrl; ?>/packaged/css/semantic.css">
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/packaged/javascript/semantic.min.js"></script>
		<script src="<?php echo Yii::app()->request->baseUrl; ?>/packaged/javascript/semantic.js"></script>
	</head>
	<body>
		<div class="ui large menu">
		  <a class="active item">
		    <i class="home icon"></i> Home
		  </a>
		  <a class="item">
		    <i class="mail icon"></i> Pengumunan
		  </a>
		  <a class="item">
		    <i class="Rocket icon"></i> About
		  </a>1
		  <div class="right menu">
		    <div class="item">
		      <div class="ui icon input">
		        <input type="text" placeholder="Search...">
		        <i class="search link icon"></i>
		      </div>
		    </div>
		    <div class="item">
		        <div class="ui teal button">Login</div>
		    </div>
		  </div>
		</div>
		<?php echo $content; ?>
		<div class="ui inverted segment">
	 		 <p class="ui left floated header"> Copyright &copy; <?php echo date('Y'); ?> SIC 2013 All Rights Reserved 
	 		 </p>
	 		 <p class="ui right floated header">
	 		 	<?php echo Yii::powered(); ?>
	 		 </p>
		</div>
	</body>
</html>