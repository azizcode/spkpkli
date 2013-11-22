<?php $ahli = array('1'=>'Pemrogramman', '2'=>'Jaringan', '3'=>'Hardware', '4' => 'Sistem Informasi','5'=>'Multimedia'); ?>
<div id="page-wrapper">
        <div class="row">
          <div class="col-lg-12">
			<ol class="breadcrumb-inp">
              <li><a href="<?php echo Yii::app()->request->baseUrl; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            </ol>
          </div>
        </div><!-- /.row -->
<div id="page-wrapper">
     <div class="row">
          <div class="col-lg-12">
            <h2>Laporan Program PKLI</h2>
				<div class="table-responsive">
					<table class="table table-bordered table-hover tablesorter">
						<thead>
						  <tr>
							<th>NIM</th>
							<th>Nama</th>
							<th>Tempat PKLI</th>
							<th>Bidang Keahlian</th>
							<th>Tgl Awal</th>
							<th>Tgl Akhir</th>
							<th>Keterangan</th>
						  </tr>
						</thead>
						<tbody>
							<tr>
							<?php foreach ($laporan as $list) {?>
							<td><?php echo $list->NIM ?></td>
							
							<td><a href="">
							<?php $mahasiswa	=	Mahasiswa::model()->findByAttributes(array('NIM'=>$list->NIM));
								echo $mahasiswa->Nama_lengkap; 
							?></a></td>
							<td><a href=""><?php $programpkli	=	ProgramPkli::model()->findByAttributes(array('Id_program_pkli'=>$list->Id_program));
								$instansi = Instansi::model()->findByAttributes(array('Id_instansi'=>$programpkli->Id_instansi));
								echo $instansi->Nama_instansi; 
							?></a></td>
							<td><?php $programpkli	=	ProgramPkli::model()->findByAttributes(array('Id_program_pkli'=>$list->Id_program));
								echo $ahli[ $programpkli->Bidang_Keahlian]; 
							?></td>
							<td><?php $programpkli	=	ProgramPkli::model()->findByAttributes(array('Id_program_pkli'=>$list->Id_program));
								echo $programpkli->awal; 
							?></td>
							<td><?php $programpkli	=	ProgramPkli::model()->findByAttributes(array('Id_program_pkli'=>$list->Id_program));
								echo  $programpkli->akhir; 
							?></td>
							<td><?php $programpkli	=	ProgramPkli::model()->findByAttributes(array('Id_program_pkli'=>$list->Id_program));
								echo  $programpkli->keterangan; 
							?></td>
							<?php }?>
						  </tr>
						</tbody>
					</table>
				</div>
          </div>
          </div>
        </div>
    </div><!-- /.row -->