<div class="container" id="middle">
      <div class="row">
        <div class="col-lg-12">
          <h1>Pengumuman Program PKLI</h1>
          <hr>
		  <?php foreach($umum as $value){ ?>
			<p><span class="glyphicon glyphicon-time"></span> Ditulis pada <?php $date=date_create($value->tanggal); echo date_format($date, 'd-m-Y'); ?></p>
			<p class="lead"><?php echo $value->judul; ?></p>
			<?php echo $value->isi; ?>
           <hr>  
		  <?php } ?>
   </div>