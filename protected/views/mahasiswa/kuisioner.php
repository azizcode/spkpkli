<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<ol class="breadcrumb">
			  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			  <li class="active"><i class="fa fa-table"></i> Kuisioner</li>
			</ol>
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4 class="widgettitle">Kuisioner Bidang Keahlian Program PKLI</h4>
				</div>
				<div class="panel-body">
					<div class="col-lg-8">
						<div class="panel panel-success">
							<form class="stdform" action="" method="post">
								<div class="form-group">
									<p><b>Isilah Kuisioner Sesuai dengan Keaadan Anda Yang Sebenarnya</b></p>
								</div>
								<div class="form-group">
									<label>1. Seberapa besar minat anda dalam bidang Pemrograman?</label>
									<div class="radio-kuisioner">
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
									<label>2. Seberapa besar minat anda dalam bidang Jaringan?</label>
									<div class="radio-kuisioner">
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
									<label>3. Seberapa besar minat anda dalam bidang Multimedia?</label>
									<div class="radio-kuisioner">
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
									<label>4. Seberapa besar minat anda dalam bidang Hardware?</label>
									<div class="radio-kuisioner">
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
									<label>5. Seberapa besar minat anda dalam bidang Sistem Informasi?</label>
									<div class="radio-kuisioner">
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
								<label>6. Apakah nilai matakuliah anda sudah mempresentasikan kemampuan anda?</label>
									<div class="radio-kuisioner">
										<label class="radio-inline">
											<input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked="checked" > Ya
										</label>
										<label class="radio-inline">
											<input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" > Tidak
										</label>
									</div>
								</div>
								<div class="form-group">
									<label>7. Apa matakuliah yang paling anda senangi?</label>
									<div class="radio-kuisioner">
										<select name="suka" id="suka">
											<?php foreach($matkul as $data){ ?>
												<option value="<?php echo $data->kode_mk; ?>"><?php echo $data->nama_mk; ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label>8. Apa matakuliah yang paling anda tidak senangi?</label>
									<div class="radio-kuisioner">
										<select name="benci" id="benci">
											<?php foreach($matkul as $data){ ?>
												<option value="<?php echo $data->kode_mk; ?>"><?php echo $data->nama_mk; ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Kirim</button>
								<button type="reset" class="btn btn-primary">Kirim</button>
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	$('#suka').change(function () {
		var suka	=	$('#suka option:selected').val();
		if(suka<7){
			for(var i=1;i<7;i++){
				$("#benci >option[value='"+i+"']").remove();
			}
		}
		else if(suka>=7 && suka<11){
			for(var i=7;i<11;i++){
				$("#benci >option[value='"+i+"']").remove();
			}
		}
		else if(suka>=11 && suka<16){
			for(var i=11;i<16;i++){
				$("#benci >option[value='"+i+"']").remove();
			}
		}
		else if(suka>=16 && suka<19){
			for(var i=16;i<19;i++){
				$("#benci >option[value='"+i+"']").remove();
			}
		}else{
			for(var i=19;i<22;i++){
				$("#benci >option[value='"+i+"']").remove();
			}
		}
	});
	
	$('#benci').change(function () {
		var benci	=	$('#benci option:selected').val();
		if(benci<7){
			for(var i=1;i<7;i++){
				$("#suka >option[value='"+i+"']").remove();
			}
		}
		else if(benci>=7 && benci<11){
			for(var i=7;i<11;i++){
				$("#suka >option[value='"+i+"']").remove();
			}
		}
		else if(benci>=11 && benci<16){
			for(var i=11;i<16;i++){
				$("#suka >option[value='"+i+"']").remove();
			}
		}
		else if(benci>=16 && benci<19){
			for(var i=16;i<19;i++){
				$("#suka >option[value='"+i+"']").remove();
			}
		}else{
			for(var i=19;i<22;i++){
				$("#suka >option[value='"+i+"']").remove();
			}
		}
	});
</script>	