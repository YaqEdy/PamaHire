<!-- bootstrap -->
<link href="<?php echo base_url()."templates/frontend/assets/bootstrap/css/" ;?>bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<button onclick="exportPDF()">Export</button>

 <?= $expPdf ?> 

<script type="text/javascript">
	function exportPDF(){

		window.open("<?php  echo base_url().'DataDiriPelamar/exportPdf' ;?>");
	}

</script>
<!-- <div class="row"></div>
<div class="col-sm-1"></div>
<div class="col-sm-10">

	<div class="panel panel-primary">
		<div class="panel-heading">Profil tes
		</div>
		<div class="panel-body">

			<div class="form-horizontal">
				<h4 align="center"><u><b>Data Diri</u></b>
				</h4>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Photo
					</label>
					<div class="col-sm-7">
						<img id="pvimgProfile" src="" width="200" height="236">
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">No. Ktp
					</label>
					<div class="col-sm-7">
						<label id="pvno_ktp" for="disabledInput" class="control-label detail">111111
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Email
					</label>
					<div class="col-sm-7">
						<label id="pvemail" for="disabledInput" class="control-label detail">Email
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Nama
					</label>
					<div class="col-sm-7">
						<label id="pvnama" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Jenis Kelamin
					</label>
					<div class="col-sm-7">
						<label id="pvjenkel" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Tempat Lahir
					</label>
					<div class="col-sm-7">
						<label id="pvtempat_lahir" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Tanggal Lahir
					</label>
					<div class="col-sm-7">
						<label id="pvtanggal_lahir" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Status
					</label>
					<div class="col-sm-7">
						<label id="pvstatus" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Agama
					</label>
					<div class="col-sm-7">
						<label id="pvagama" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Gol Darah
					</label>
					<div class="col-sm-7">
						<label id="pvgolDarah" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>

				<h4 align="center"><u><b>Informasi Kontak</u></b>
				</h4>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Alamat KTP
					</label>
					<div class="col-sm-7">
						<label id="pvalamatKTP" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Kota/Kabupaten KTP
					</label>
					<div class="col-sm-7">
						<label id="pvkota_ktp" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Propinsi KTP
					</label>
					<div class="col-sm-7">
						<label id="pvpropinsi_ktp" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Alamat Domisili
					</label>
					<div class="col-sm-7">
						<label id="pvalamatDomisili" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Kota Domisili
					</label>
					<div class="col-sm-7">
						<label id="pvkota_domisili" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Propinsi Domisili
					</label>
					<div class="col-sm-7">
						<label id="pvpropinsi_domisili" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Kode Pos
					</label>
					<div class="col-sm-7">
						<label id="pvkodePos" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">No Telepon
					</label>
					<div class="col-sm-7">
						<label id="pvnoTelepon" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">No Handpone
					</label>
					<div class="col-sm-7">
						<label id="pvnoHp" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>

				<h4 align="center"><u><b>Pendidikan</u></b>
				</h4>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Jenjang Pendidikan
					</label>
					<div class="col-sm-7">
						<label id="pvjenjangPendidikan" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Sekolah/Universitas
					</label>
					<div class="col-sm-7">
						<label id="pvsekolahUniversitas" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Jurusan
					</label>
					<div class="col-sm-7">
						<label id="pvjurusan" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">NEM/IPK
					</label>
					<div class="col-sm-7">
						<label id="pvnemIPK" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Tahun Masuk
					</label>
					<div class="col-sm-7">
						<label id="pvtahunMasuk" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Tahun Lulus
					</label>
					<div class="col-sm-2">
						<label id="pvtahunLulus" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>

				<h4 align="center"><u><b>Berkas dan Data Diri</u></b>
				</h4>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">KTP
					</label>
					<div class="col-sm-7">
						<img id="pvimgKTP" src="" height="200">
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Akte Lahir
					</label>
					<div class="col-sm-7">
						<img id="pvimgAkteLahir" src="" height="200">
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Ijazah
					</label>
					<div class="col-sm-7">
						<img id="pvimgIjazah" src="" height="200">
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Transkip
					</label>
					<div class="col-sm-7">
						<img id="pvimgTranskrip" src="" height="200">
					</div>
				</div>

				<h4 align="center"><u><b>Data Keluarga</u></b>
				</h4>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Nama Lengkap
					</label>
					<div class="col-sm-7">
						<label id="pvdkNamaLengkap" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Jenis Kelamin
					</label>
					<div class="col-sm-7">
						<label id="pvdkJenkel" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Hubungan Keluarga
					</label>
					<div class="col-sm-3">
						<label id="pvdkHubunganKeluarga" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Tanggal Lahir
					</label>
					<div class="col-sm-7">
						<label id="pvdkTanggalLahir" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Alamat
					</label>
					<div class="col-sm-7">
						<label id="pvdkAlamat" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">No Telp
					</label>
					<div class="col-sm-7">
						<label id="pvdkNoTelp" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>
				<div class="form-group">
					<label for="disabledInput" class="col-sm-2 control-label">Pekerjaan
					</label>
					<div class="col-sm-7">
						<label id="pvdkPekerjaan" for="disabledInput" class="control-label detail">
						</label>
					</div>
				</div>

				<h4 align="center"><u><b>Pengalaman Kerja</u></b>
				</h4>

				<button class="btn btn-warning" onclick="pvUbah()">Ubah
				</button>
				<button class="btn btn-success" onclick="pvSave()">Save
				</button>
				</div>
			</div>

		</div>
	</div>

</div>
 -->