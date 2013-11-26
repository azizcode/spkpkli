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
						<td><a class="linktabel" href="<?php echo Yii::app()->request->baseUrl; ?>/admin/input/edit/<?php echo $value->id; ?>">Edit</a> | <a href="#hapus" data-toggle="modal" data-target="#hapus" class="linktabel">Hapus</a></td>
					</tr>
					<?php $i++; } ?>
				</tbody>
			</table>
			<div class="modal fade" id="" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Konfirmasi Delete </h4>
                      </div>
                      <div class="modal-body">
                        Apakah Anda yakin ingin menghapus ini ?
                      </div>
                      <div class="modal-footer">
                        <a type="button" class="btn btn-default" data-dismiss="modal">Close</a>
                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin/input/delete/.<?php echo $value->id; ?>" type="button" class="btn btn-primary">Delete</a>
                      </div>
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
		</div>
</div>