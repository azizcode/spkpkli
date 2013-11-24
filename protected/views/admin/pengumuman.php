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
						<td><a href="" ></a><?php ?></td>
					</tr>
					<?php $i++; } ?>
				</tbody>
			</table>
		</div>
</div>