<?php get_template('header');?>

<!-- <style type="text/css">

</style>
-->
<!-- <div class="row" style="margin-top: 5px;"></div> -->
<div class="col-sm-1"></div>
<div class="container">
	<div class="col-sm-12">
		<div class="panel panel-primary">
			<div class="panel-heading" id="idPanel">Hi, <?= $nama_pelamar ?></div>
			<div class="panel-body">

				<div class="row">
					<div class="col-md-9">

						<div id="idAlert" style="background: #86d8ff;color: red;padding: 10px;">
							<span class="glyphicon glyphicon-exclamation-sign"></span> <?= $remark1 . $remark2 . $remark3 . $remark4 . $remark5?>
						</div>

						<div class="container" style="margin-top: 20px">
							<div class="row">
								<div class="col-md-3">
									<img id="imgProfile" src="<?= $profil_path ?>" width="200" height="236">
								</div>
								<div class="col-md-6">
									<h2 style="margin-top: -30px;padding: 0px;margin-bottom: 0px"><b><?= $nama_pelamar ?></b></h2>
								</div>
								<div class="col-md-6">
									<h2 style="margin-top: -30px;padding: 0px;margin-bottom: 0px"><b><?= $sekolah_universitas ?></b></h2>
									<hr style="margin-top: -20px;padding: 0px;">
								</div>

								<div class="col-md-9">
									<div class="row">
										<div class="col-md-2">
											<div>Tahun Masuk</div>
										</div>
										<div class="col-md-2">
											<div>: <?= $tahun_masuk_pendidikan?></div>
										</div>
										<div class="col-md-1">
											<div>IPK</div>
										</div>
										<div class="col-md-1">
											<div>: <?= $nem_ipk?></div>
										</div>
										<div class="col-md-6"></div>
										<br><br>

										<div class="col-md-2">
											<div>Tahun Lulus</div>
										</div>
										<div class="col-md-2">
											<div>: <?= $tahun_lulus?></div>
										</div>
										<div class="col-md-9"></div>
										<br><br>

										<button class="btn btn-primary" onclick="lihatCV()">Lihat CV</button>

									</div>

								</div>
								<div class="col-md-9">&nbsp;</div>
								<div class="col-md-9">&nbsp;</div>

								<div class="col-md-9">
									<hr>
									<div class="row">
										<div class="col-md-2">
											<div>No KTP</div>
										</div>
										<div class="col-md-10">
											<div>: <?= $no_ktp?></div>
										</div>
										<br><br>

										<div class="col-md-2">
											<div>Alamat Email</div>
										</div>
										<div class="col-md-10">
											<div>: <?= $email?></div>
										</div>
										<br><br>

										<div class="col-md-2">
											<div>No. Handphonel</div>
										</div>
										<div class="col-md-10">
											<div>: <?= $no_hp?></div>
										</div>
										<br><br>

										<button class="btn btn-primary" onclick="perbaruiInfo()" style="float: right;">Perbarui Info Akun</button>

									</div>
									<!-- <input type="text" name="nama" id="nama" style="border:0;" value="Tahun Masuk"> -->
								</div>

							</div>


						</div>


					</div>

					<div class="col-md-3">
						<div id="idAgendaGroup">
							<div class="panel panel-primary">
								<div class="panel-heading" id="idPanel">Agenda Recruitment</div>
								<div class="panel-body">
									<div id="agenda">agendanya</div>
								</div>
							</div>

						</div>
					</div>


				</div>


			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	var iAlert="'<?php echo $remark1.$remark2.$remark3.$remark4.$remark5; ?>'";
	if(iAlert=="''"){
		$("#idAlert").hide();
	}

	function lihatCV(){
		// document.location.href="<?php  echo base_url().'DataDiriPelamar/ajax_Preview' ;?>?sPID="+iID;
		document.location.href="<?php  echo base_url().'DataDiriPelamar' ;?>?sLihatCV="+1;
	}
	function perbaruiInfo(){
		document.location.href="<?php  echo base_url().'DataDiriPelamar' ;?>";
	}

</script>

<?php get_template('footer');?>
