<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<?php echo CHtml::image(Yii::app()->request->baseUrl.'/gambar/1.jpg','1.jpg'); ?>
			<div class="carousel-caption"></div>
		</div>
		<div class="item">
			<?php echo CHtml::image(Yii::app()->request->baseUrl.'/gambar/2.jpg','2.jpg'); ?>
			<div class="carousel-caption"></div>
		</div>
		<div class="item">
			<?php echo CHtml::image(Yii::app()->request->baseUrl.'/gambar/3.jpg','3.jpg'); ?>
			<div class="carousel-caption"></div>
		</div>
	</div>
	<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>
