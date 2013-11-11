<?php $b_keahlian 	= 	array('1'=>'Pemrogramman', '2'=>'Jaringan', '3'=>'Hardware', '4' => 'Sistem Informasi','5'=>'Multimedia'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<ol class="breadcrumb">
			  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			  <li class="active"><i class="fa fa-bar-chart-o"></i> Rekomendasi</li>
			</ol>
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4 class="widgettitle">Rekomendasi Program PKLI</h4>
				</div>
				<div class="panel-body">
					<div class="col-lg-12">
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped tablesorter">
								<thead>
									<tr>
										<th>No</th>
										<th>Bidang Keahlian</th>
										<th>Instansi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1; foreach($rekomendasi as $value){ ?>
										<tr class="<?php if($i%2==0){ ?>success<?php } else { ?> active<?php } ?>">
											<td><?php echo $i; ?></td>
											<td><?php echo $b_keahlian[$value]; ?></td>
											<td><a href="<?php echo Yii::app()->request->baseUrl.'/mahasiswa/pkli/bidang/'.$value; ?>" class="linktabel">Daftar Instansi</a></td>
										</tr>
									<?php $i++; } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	