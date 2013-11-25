<div id="page-wrapper">
	<div class="row">
	</div>
	<div class="table-responsive col-lg-12">
		<h3 align="center">Manajemen Pengumuman</h3>
			<table class="table table-bordered table-hover table-striped tablesorter">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Konten</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=1; foreach($umum as $value){ ?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php $date=date_create($value->tanggal);
                        echo date_format($date, 'd-m-Y'); ?></td>
						<td><?php echo $value->isi; ?></td>
						<td><a class="linktabel" href="<?php echo Yii::app()->request->baseUrl; ?>/admin/input/edit/<?php echo $value->id; ?>">Edit</a> | <a class="linktabel" href="<?php echo Yii::app()->request->baseUrl; ?>/admin/input/delete/.<?php echo $value->id; ?>" >Hapus</a></td>
					</tr>
					<?php $i++; } ?>
				</tbody>
			</table>
		</div>
</div>