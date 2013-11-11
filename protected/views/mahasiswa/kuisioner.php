	<div id="page-wrapper">
        <div class="row">
			<div class="col-lg-12">
				<ol class="breadcrumb">
				  <li><i class="fa fa-dashboard"></i> Dashboard</li>
				  <li class="active"><i class="fa fa-table"></i>Kuisioner</li>
				</ol>
				<h2 class="widgettitle">Kuisioner Untuk Menentukan Bidang Keahlian Anda</h2>
				<div class="panel panel-success">
					<div class="panel-heading">
					<h4 class="widgettitle">Form Kuisioner</h4>
					 </div>
					 
					<div class="panel-body">
						<div class="col-lg-8">
						<div class="panel panel-success">
						<form class="stdform" action="" method="post">
								<div class="form-group">
									<p>
										Isilah Kuisioner Sesuai dengan Keadan Anda Yang Sebenarnya.
									</p>
								</div>
								<div class="form-group">
									<label>1. Seberapa besar minat anda dalam bidang.?</label>
										<div>
											<label class="radio-inline">
												<input type="radio" name="soal1" id="optionsRadios1" value="option1"  checked="checked"> 1
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal1" id="optionsRadios1" value="option1" > 2
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal1" id="optionsRadios1" value="option1" > 3
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal1" id="optionsRadios1" value="option1" > 4
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal1" id="optionsRadios1" value="option1" > 5
											</label>
										</div>
								  </div>
								  <div class="form-group">
									<label>2. Seberapa besar minat anda dalam bidang Jaringan.?</label>
										<div>
											<label class="radio-inline">
												<input type="radio" name="soal2" id="optionsRadios1" value="option1" checked="checked" > 1
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal2" id="optionsRadios1" value="option1" > 2
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal2" id="optionsRadios1" value="option1" > 3
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal2" id="optionsRadios1" value="option1" > 4
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal2" id="optionsRadios1" value="option1" > 5
											</label>
										</div>
								  </div>
								  <div class="form-group">
									<label>3. Seberapa besar minat anda dalam bidang Multimedia.?</label>
										<div>
											<label class="radio-inline">
												<input type="radio" name="soal3" id="optionsRadios1" value="option1" checked="checked" > 1
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal3" id="optionsRadios1" value="option1" > 2
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal3" id="optionsRadios1" value="option1" > 3
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal3" id="optionsRadios1" value="option1" > 4
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal3" id="optionsRadios1" value="option1" > 5
											</label>
										</div>
								  </div>
								  <div class="form-group">
									<label>4. Seberapa besar minat anda dalam bidang Hardware.?</label>
										<div>
											<label class="radio-inline">
												<input type="radio" name="soal4" id="optionsRadios1" value="option1" checked="checked"> 1
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal4" id="optionsRadios1" value="option1" > 2
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal4" id="optionsRadios1" value="option1" > 3
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal4" id="optionsRadios1" value="option1" > 4
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal4" id="optionsRadios1" value="option1" > 5
											</label>
										</div>
								  </div>
								  <div class="form-group">
									<label>5. Seberapa besar minat anda dalam bidang Sistem Informasi.?</label>
										<div>
											<label class="radio-inline">
												<input type="radio" name="soal5" id="optionsRadios1" value="option1" checked="checked"> 1
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal5" id="optionsRadios1" value="option1" > 2
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal5" id="optionsRadios1" value="option1" > 3
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal5" id="optionsRadios1" value="option1" > 4
											</label>
											<label class="radio-inline">
												<input type="radio" name="soal5" id="optionsRadios1" value="option1" > 5
											</label>
										</div>
								  </div>
								  <div class="form-group">
									<label>6. Apakah nilai matakuliah anda mempresentasikan kemampuan anda.?</label>
										<div>
											<label class="radio-inline">
												<input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked="checked" > Ya
											</label>
											<label class="radio-inline">
												<input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" > Tidak
											</label>
										</div>
								  </div>
								  <div class="form-group">
									<label>7. Apa matakuliah yang paling anda senangi.?</label>
										<div>
											<select name="suka">
												<?php foreach($matkul as $data){ ?>
													<option value="<?php echo $data->kode_mk; ?>"><?php echo $data->nama_mk; ?></option>
												<?php } ?>
											</select>
										</div>
								  </div>
								  <div class="form-group">
									<label>8. Apa matakuliah yang paling anda tidak senangi.?</label>
										<div>
											<select name="benci">
												<?php foreach($matkul as $data){ ?>
													<option value="<?php echo $data->kode_mk; ?>"><?php echo $data->nama_mk; ?></option>
												<?php } ?>
											</select>
										</div>
								  </div>
								  <button type="submit" class="btn btn-default">Submit</button>
				  </form>
				  </div>
				  </div>
				  <div class="col-lg-4">
					<div class="panel panel-warning">
					  <div class="panel-heading">
						<p>Keterangan :<p>
						<p>1. Tidak berminat</p>
						<p>2. Kurang berminat</p>
						<p>3. Cukup berminat</p>
						<p>4. Berminat</p>
						<p>5. Sangat berminat</p>
						<p><?php if($hardware==true){ echo "cocok"; }else{ echo "tidak cocok"; } ?></p>
					  </div>
					</div>
				  </div>
              </div>
            </div>
				</div><!--widgetcontent-->
        <div class="row">
        </div><!-- /.row -->

     </div><!-- /#page-wrapper -->