<?php $b_keahlian 	= 	array('1'=>'Pemrograman', '2'=>'Jaringan', '3'=>'Hardware', '4' => 'Sistem Informasi','5'=>'Multimedia'); ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<ol class="breadcrumb">
			  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			  <li class="active"><i class="fa fa-bar-chart-o"></i> Program PKLI</li>
			</ol>
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4 class="widgettitle">Program PKLI</h4>
				</div>
				<div class="panel-body">
					<div class="col-lg-12">
						<h3 align="center">Peserta PKLI</h3>
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped tablesorter">
								<tbody>
									<tr class="success"><td>NIM</td><td><?php echo $this->identitas->NIM; ?></td></tr>
									<tr class="active"><td>Nama</td><td><?php echo $this->identitas->Nama_lengkap; ?></td></tr>
									<tr class="success"><td>Program PKLI</td><td><?php echo $tempatpkli; ?></td></tr>
								</tbody>
							</table>
						</div>
						
						<h3 align="center">Instansi Program PKLI</h3>
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped tablesorter">
								<thead>
									<tr>
										<th>No</th>
										<th>Instansi</th>
										<th>Alamat</th>
										<th>Jumlah Peserta</th>
										<th>Bidang Keahlian</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=1; foreach($instansi as $value){ $instansi = Instansi::model()->findByPk($value->Id_instansi); ?>
										<tr class="<?php if($i%2==0){ ?>success<?php } else { ?> active<?php } ?>">
											<td><?php echo $i; ?></td>
											<td><?php echo $instansi->Nama_instansi; ?></td>
											<td><?php echo $instansi->Alamat; ?></td>
											<td><?php echo $value->Jumlah_peserta; ?></td>
											<td><?php echo $b_keahlian[$value->Bidang_Keahlian]; ?></td>
											<td ><a href="" data-toggle="modal" data-target="#modal-instansi" data-instansi="<?php echo $value->Id_program_pkli ?>" class="detail-instansi">Detail</a> | <a href="<?php echo Yii::app()->request->baseUrl.'/mahasiswa/daftar/'.$value->Id_program_pkli; ?>" class="linktabel">Daftar</a></td>
										</tr>
									<?php $i++; } ?>
								</tbody>
							</table>
						</div>
						<div class="modal fade" id="modal-instansi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		                  <div class="modal-dialog">
		                    <div class="modal-content">
		                      <div class="modal-header">
		                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                        <h4 class="modal-title" id="myModalLabel"><b>Detail Program PKLI</b></h4>
		                      </div>
		                      <div class="modal-body">
		                    	<table class="table table-bordered table-hover table-striped tablesorter">
					                  <tr><td>Nama Instansi</td><td id="nama-instansi"></td></tr>
					                  <tr><td>Alamat</td><td id="alamat-instansi"></td></tr>
					                  <tr><td>Bidang Keahlian</td><td id="bidang-keahlian"></td></tr>
					                  <tr><td>Membutuhkan</td><td id="jumlah"></td></tr>
					                  <tr><td>Nomer Telepon</td><td id="telepon-instansi"></td></tr>
					                  <tr><td>Keterangan</td><td id="keterangan"></td></tr> 
					             </table>
		                      </div>
		                      <div class="modal-footer">
		                        <button type="button" class="btn btn-primary" data-dismiss="modal">Keluar</button>
		                      </div>
		                    </div><!-- /.modal-content -->
		                  </div>
		                </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>