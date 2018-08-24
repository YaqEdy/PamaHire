<?php get_template('header');?>
<style>
  /* body { margin: 10px; } */

  .wizard a {
    padding: 10px 12px 10px;
    margin-right: 5px;
    background: #efefef;
    position: relative;
    display: inline-block;
  }
  .wizard a:before {
    width: 0;
    height: 0;
    border-top: 20px inset transparent;
    border-bottom: 20px inset transparent;
    border-left: 20px solid #fff;
    position: absolute;
    content: "";
    top: 0;
    left: 0;
  }
  .wizard a:after {
    width: 0;
    height: 0;
    border-top: 20px inset transparent;
    border-bottom: 20px inset transparent;
    border-left: 20px solid #efefef;
    position: absolute;
    content: "";
    top: 0;
    right: -20px;
    z-index: 2;
  }
  .wizard a:first-child:before,
  .wizard a:last-child:after {
    border: none;
  }
  .wizard a:first-child {
    -webkit-border-radius: 4px 0 0 4px;
    -moz-border-radius: 4px 0 0 4px;
    border-radius: 4px 0 0 4px;
  }
  .wizard a:last-child {
    -webkit-border-radius: 0 4px 4px 0;
    -moz-border-radius: 0 4px 4px 0;
    border-radius: 0 4px 4px 0;
  }
  .wizard .badge {
    margin: 0 5px 0 18px;
    position: relative;
    top: -1px;
  }
  .wizard a:first-child .badge {
    margin-left: 0;
  }
  .wizard .current {
    background: #007ACC;
    color: #fff;
  }
  .wizard .current:after {
    border-left-color: #007ACC;
  }

  .wizard .green_ {
    background: green;
    color: #fff;
  }
  .wizard .green_:after {
    border-left-color: green;
  }


  /*detail*/
  .detail{
    font-weight: normal !important;
    text-align: left !important;
  }
</style>

<div class="wizard" id="fmStepsUP" style="margin-top: 5px;text-align:center" hidden>
  <a href="#" id="a1" class="current"><span class="badge">1</span> Data Diri</a>
  <a href="#" id="a2"><span class="badge">2</span> Informasi Kontak</a>
  <a href="#" id="a3"><span class="badge">3</span> Pendidikan</a>
  <a href="#" id="a4"><span class="badge">4</span> Berkas dan Data Diri</a>
  <a href="#" id="a5"><span class="badge">5</span> Data Keluarga</a>
  <a href="#" id="a6"><span class="badge">6</span> Pengalaman Kerja</a>
</div>

<h4 align="center">form recruitment</h4>
<div class="container">
  <div class="row" id="fmSteps">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <div class="panel panel-primary" >
        <div class="panel-body">

          <div id="fm_datadiri" hidden>
            <form class="form-horizontal">

              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Unggah Pasfoto Baru <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <img id="imgProfile" src="" width="200" height="236">
                  <input name="fotoProfile" id="fotoProfile" type="file" autofocus >
                  <small id="dd1" style="color: red" hidden> wajib upload foto</small>
                  <h6 style="color: blue;margin-top:2px; ">Maks. 500 kb, Format : JPEG,JPG,PNG</h6>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">No. KTP <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input class="form-control" name="no_ktp" id="no_ktp" type="text" autofocus required disabled>
                  <small id="dd2" style="color: red" hidden> wajib di isi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Email <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input class="form-control" name="email" id="email" type="text" autofocus required>
                  <small id="dd3" style="color: red" hidden> wajib di isi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Nama <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input class="form-control" name="nama" id="nama" type="text" autofocus required>
                  <small id="dd4" style="color: red" hidden> wajib di isi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Jenis Kelamin <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <div class="row">
                    <div class="col-sm-3">
                      <label class="radio-gender">
                        <input type="radio" id="priaRadio" name="rbJenkel" value="1"> Pria
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <label class="radio-gender">
                        <input type="radio" id="wanitaRadio"  name="rbJenkel" value="0"> Wanita
                      </label>
                    </div>
                    <div class="col-sm-2">
                      <small id="dd5" style="color: red" hidden> wajib di isi</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Tempat Lahir <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input name="tempat_lahir" id="tempat_lahir" type="text" autofocus>
                  <small id="dd6" style="color: red" hidden> wajib di isi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Tanggal Lahir <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input  name="tanggal_lahir" id="tanggal_lahir" type="text" style="margin-left:1px" autofocus required>
                  <small id="dd7" style="color: red" hidden> wajib di isi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Status <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input  name="status" id="status" type="text" autofocus required>
                  <small id="dd8" style="color: red" hidden> wajib di isi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Agama <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input name="agama" id="agama" type="text" autofocus required>
                  <small id="dd9" style="color: red" hidden> wajib di isi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Gol Darah <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input name="golDarah" id="golDarah" type="text" autofocus required>
                  <small id="dd10" style="color: red" hidden> wajib di isi</small>
                </div>
              </div>
            </form>
            <button onclick="btn_simpanDataDiri()" class="btn btn-info">Simpan & Selanjutnya</button>
          </div>
          <!-- Form data diri -->
          <div id="fm_informasiKontak" hidden>
            <form class="form-horizontal">
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Alamat KTP <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <textarea id="alamatKTP" name="alamatKTP" rows="5" style="width: 100%" autofocus required></textarea>
                  <small id="ik1" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Propinsi KTP <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input name="propinsi_ktp" id="propinsi_ktp" type="text" autofocus required>
                  <small id="ik2" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Kota/Kabupaten KTP <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input name="kota_ktp" id="kota_ktp" type="text" autofocus required>
                  <small id="ik3" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Alamat KTP sama dengan Domisili</label>
                <div class="col-sm-7">
                  <input id="CB_DomisiliSama" type="checkbox" onchange="onCheckDomisiliSama()"> Sama
                </div>
              </div>

              <div id="groupDomilisi">
                <div class="form-group">
                  <label for="disabledInput" class="col-sm-2 control-label">Alamat Domisili <b style="color: red">*</b></label>
                  <div class="col-sm-7">
                    <textarea id="alamatDomisili" name="alamatDomisili" rows="5" style="width: 100%" autofocus required></textarea>
                    <small id="ik4" style="color: red" hidden> wajib diisi</small>
                    <!-- <input class="form-control" name="alamatDomisili" id="alamatDomisili" type="text" autofocus required> -->
                  </div>
                </div>
                <div class="form-group">
                  <label for="disabledInput" class="col-sm-2 control-label">Propinsi Domisili <b style="color: red">*</b></label>
                  <div class="col-sm-7">
                    <input name="propinsi_domisili" id="propinsi_domisili" type="text" autofocus required>
                    <small id="ik5" style="color: red" hidden> wajib diisi</small>
                  </div>
                </div>
                <div class="form-group">
                  <label for="disabledInput" class="col-sm-2 control-label">Kota/Kabupaten Domisili <b style="color: red">*</b></label>
                  <div class="col-sm-7">
                    <input name="kota_domisili" id="kota_domisili" type="text" autofocus required>
                    <small id="ik6" style="color: red" hidden> wajib diisi</small>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Kode Pos <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input class="form-control" name="kodePos" id="kodePos" type="text" autofocus required>
                    <small id="ik7" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">No Telepon <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input class="form-control" name="noTelepon" id="noTelepon" type="text" autofocus required>
                    <small id="ik8" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">No Handpone <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input class="form-control" name="noHp" id="noHp" type="text" autofocus required>
                    <small id="ik9" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
            </form>
            <button onclick="btn_simpanInformasiKontak()" class="btn btn-info">Simpan & Selanjutnya</button>
          </div>
          <!-- end informasi kontak -->
          <div id="fm_Pendidikan" hidden>
            <form class="form-horizontal" >

              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Jenjang Pendidikan <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input name="jenjangPendidikan" id="jenjangPendidikan" type="text" autofocus required>
                  <small id="p1" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Sekolah/Universitas <b style="color: red">*</b></label>
                <div class="col-sm-7" id="idSekolahUniv">
                  <input name="sekolahUniversitas" id="sekolahUniversitas" type="text" autofocus required>
                  <small id="p2" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Jurusan <b style="color: red">*</b></label>
                <div class="col-sm-7" id="idJurusan">
                  <input name="jurusan" id="jurusan" type="text" autofocus required>
                  <small id="p3" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">NEM/IPK <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input class="form-control" name="nemIPK" id="nemIPK" type="text" autofocus required>
                  <small id="p4" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Tahun Masuk <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input name="tahunMasuk" id="tahunMasuk" type="text" style="margin-left: 1px" autofocus required>
                  <small id="p5" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Tahun Lulus <b style="color: red">*</b></label>
                <div class="col-sm-2">
                  <input class="form-control" name="tahunLulus" id="tahunLulus" type="text" autofocus required readonly>
                  <small id="p6" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
            </form>
            <button onclick="btn_simpanPendidikan()" class="btn btn-info">Simpan & Selanjutnya</button>
          </div>

          <div  id="fm_BerkasDataDiri" hidden>
            <form class="form-horizontal">

              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Upload KTP <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <img id="imgKTP" src="" height="200" hidden>
                  <input name="uploadKTP" id="uploadKTP" type="file" autofocus required>
                  <small id="bdd1" style="color: red" hidden> wajib upload berkas</small>
                  <h6 style="color: blue;margin-top:2px; ">Maks. 500 kb, Format : JPEG,JPG,PNG</h6>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Upload Akte Lahir <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <img id="imgAkteLahir" src="" height="200" hidden>
                  <input name="uploadAkteLahir" id="uploadAkteLahir" type="file" autofocus required>
                  <small id="bdd2" style="color: red" hidden> wajib upload berkas</small>
                  <h6 style="color: blue;margin-top:2px; ">Maks. 500 kb, Format : JPEG,JPG,PNG</h6>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Upload Ijazah <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <img id="imgIjazah" src="" height="200" hidden>
                  <input name="uploadIjazah" id="uploadIjazah" type="file" autofocus required>
                  <small id="bdd3" style="color: red" hidden> wajib upload berkas</small>
                  <h6 style="color: blue;margin-top:2px; ">Maks. 500 kb, Format : JPEG,JPG,PNG</h6>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Upload Transkip <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <img id="imgTranskrip" src="" height="200" hidden>
                  <input name="uploadTranskrip" id="uploadTranskrip" type="file" autofocus required>
                  <small id="bdd4" style="color: red" hidden> wajib upload berkas</small>
                  <h6 style="color: blue;margin-top:2px; ">Maks. 500 kb, Format : JPEG,JPG,PNG</h6>
                </div>
              </div>
            </form>
            <button onclick="btn_simpanBerkasDataDiri()" class="btn btn-info">Simpan & Selanjutnya</button>
          </div>

          <div  id="fm_DataKeluarga" hidden>
            <form class="form-horizontal">

              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Nama Lengkap <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input class="form-control" name="dkNamaLengkap" id="dkNamaLengkap" type="text" autofocus required>
                  <small id="dk1" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Jenis Kelamin <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <div class="row">
                    <div class="col-sm-3">
                      <label class="radio-gender">
                        <input type="radio" id="priaRadioDk" name="rbJenkelDk" value="1"> Pria
                      </label>
                    </div>
                    <div class="col-sm-3">
                      <label class="radio-gender">
                        <input type="radio" id="wanitaRadioDK"  name="rbJenkelDk" value="0"> Wanita
                      </label>
                    </div>
                    <div class="col-sm-2">
                      <small id="dk2" style="color: red" hidden> wajib diisi</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Hubungan Keluarga <b style="color: red">*</b></label>
                <div class="col-sm-3">
                  <input name="dkHubunganKeluarga" id="dkHubunganKeluarga" type="text" autofocus required>
                </div>
                <div class="col-sm-4" id="dkHKLain" hidden>
                  <input class="form-control" name="dkHubunganKeluargaLain" id="dkHubunganKeluargaLain" type="text" autofocus required >
                </div>
                <small id="dk3" style="color: red" hidden> wajib diisi</small>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Tanggal Lahir <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input name="dkTanggalLahir" id="dkTanggalLahir" type="text" style="margin-left: 1px" autofocus required>
                  <small id="dk4" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Alamat <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <textarea id="dkAlamat" name="dkAlamat" rows="5" style="width: 100%" autofocus required></textarea>
                  <small id="dk5" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">No Telp <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input class="form-control" name="dkNoTelp" id="dkNoTelp" type="text" autofocus required>
                  <small id="dk6" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Pekerjaan <b style="color: red">*</b></label>
                <div class="col-sm-7">
                  <input class="form-control" name="dkPekerjaan" id="dkPekerjaan" type="text" autofocus required>
                  <small id="dk7" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div style="color: red">*Data keluarga terdekat yang bisa dihubungi</div>
            </form>
            <button onclick="btn_simpanDataKeluarga()" class="btn btn-info">Simpan & Selanjutnya</button>
          </div>

          <div id="fm_PengalamanKerja" hidden>
            <div id="pkTable"></div>

            <form class="form-horizontal" >
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Nama Perusahaan</label>
                <div class="col-sm-7">
                  <input class="form-control" name="pkNamaPerusahaan" id="pkNamaPerusahaan" type="text" autofocus required>
                  <small id="pk1" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Level</label>
                <div class="col-sm-7">
                  <input class="form-control" name="pkLevel" id="pkLevel" type="text" autofocus required>
                  <small id="pk2" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-7">
                  <input name="pkStatus" id="pkStatus" type="text" autofocus required>
                  <small id="pk3" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Jenis Pekerjaan</label>
                <div class="col-sm-7">
                  <input name="pkJenisPekerjaan" id="pkJenisPekerjaan" type="text" autofocus required>
                  <small id="pk4" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Posisi</label>
                <div class="col-sm-7">
                  <input class="form-control" name="pkPosisi" id="pkPosisi" type="text" autofocus required>
                  <small id="pk5" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Deskripsi Pekerjaaan</label>
                <div class="col-sm-7">
                  <input class="form-control" name="pkPekerjaanDesc" id="pkPekerjaanDesc" type="text" autofocus required>
                  <small id="pk6" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Tahun Masuk</label>
                <div class="col-sm-7">
                  <input name="pkTahunMasuk" id="pkTahunMasuk" type="text" style="margin-left: 1px" autofocus required>
                  <small id="pk7" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
              <div class="form-group">
                <label for="disabledInput" class="col-sm-2 control-label">Tahun Keluar</label>
                <div class="col-sm-2" id="pkThnKeluar">
                  <input class="form-control" name="pkTahunKeluar" id="pkTahunKeluar" type="text" style="margin-left: 1px" autofocus required readonly>
                  <small id="pk8" style="color: red" hidden> wajib diisi</small>
                </div>
              </div>
            </form>
            <button onclick="btn_PengalamanKerja()" class="btn btn-info">Simpan</button>
            <button onclick="btn_PengalamanKerjaLanjut()" class="btn btn-success">Selanjutnya</button>
            <button onclick="btn_AddPengalamanKerja()" class="btn btn-primary">+ Add</button>
          </div>

        </div>
      </div>
    </div>
    <div class="col-sm-1"></div>
  </div>

  <div id="fmPreview" class="row">
  </div>
</div>
<!-- ================================================== -->

<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="<?php echo get_template_directory(dirname(__FILE__), 'js/') ;?>jquery-3.3.1.min.js"></script>
<script src="<?php echo get_template_directory(dirname(__FILE__), 'js/') ;?>bootstrap.min.js"></script>

-->
<script>
  var iSteps=<?= $iSteps?>;
  // var iID='04f289d5-3ec5-11e8-a66f-782bcbdbdcb7';
  // var iID='04f289d5-3ec5-11e8-a66f-782bcbdb7613';
  var iID='<?= $iIDs ?>';
  var iPidPengalaman;
  var iKota;
  $(document).ready(function () {
    readpelamar();
    stepsDashboard();
    if(<?= $iLihatCV?>==1){
      btn_PengalamanKerjaLanjut();
    }else{
      $("#fmStepsUP").show();
      $("#fmSteps").show();
      $("#fmPreview").hide();
    }

  });

  function stepsDashboard(){
    console.log(iSteps);
    if(iSteps>=1){
      DataDiri();
    }
    if(iSteps>=2){
      InformasiKontak();
    }
    if(iSteps>=3){
      Pendidikan();
    }
    if(iSteps>=4){
      BerkasDataDiri();
    }
    if(iSteps>=5){
      DataKeluarga();
    }
    if(iSteps>=6){
      PengalamanKerja();
    }
  }

  function readpelamar(){
    $.ajax({
      type: "POST",
      cache:false,
      dataType: "JSON",
      url: "<?php  echo base_url().'DataDiriPelamar/ajax_ReadPelamar' ;?>",
      data: { sID: iID },
      success: function (e) {
        console.log(e);
        if(e.status==true){
          $("#no_ktp").val(e.data.no_ktp);
          $("#nama").val(e.data.nama_pelamar);
          $("#email").val(e.data.email);
          $("#tempat_lahir").data("kendoDropDownList").value(e.data.tempat_lahir);
          $("#tanggal_lahir").data("kendoDatePicker").value(e.data.tanggal_lahir);
          if(e.data.jenkel == 1){
            $("#priaRadio").prop("checked",true);
          }else if(e.data.jenkel == 0){
            $("#wanitaRadio").prop("checked",true);
          }
          $("#status").data("kendoDropDownList").value(e.data.status_pernikahan);
          $("#agama").data("kendoDropDownList").value(e.data.agama);
          $("#golDarah").data("kendoDropDownList").value(e.data.gol_darah);
          document.getElementById('imgProfile').src=e.data.profil_path;

          if(e.data.alamat_ktp==null){
            $("#alamatKTP").text('');
          }else{
            $("#alamatKTP").text(e.data.alamat_ktp);
          }
          $("#propinsi_ktp").data("kendoDropDownList").value(e.data.propinsi_ktp);
          kotaKtp(e.data.propinsi_ktp);
          $("#kota_ktp").data("kendoDropDownList").value(e.data.kota_ktp);
          if(e.data.domisili_sama==1){
            document.getElementById('CB_DomisiliSama').checked=true;
            $("#groupDomilisi").hide();
          }else{
            document.getElementById('CB_DomisiliSama').checked=false;
            $("#groupDomilisi").show();
          }
          if(e.data.alamat_domisili==null){
            $("#alamatDomisili").text('');
          }else{
            $("#alamatDomisili").text(e.data.alamat_domisili);
          }
          $("#propinsi_domisili").data("kendoDropDownList").value(e.data.propinsi_domisili);
          kotaDomisili(e.data.propinsi_domisili);
          $("#kota_domisili").data("kendoDropDownList").value(e.data.kota_domisili);
          $("#kodePos").val(e.data.kode_pos);
          $("#noTelepon").val(e.data.no_telpon);
          $("#noHp").val(e.data.no_hp);

          $("#jenjangPendidikan").data("kendoDropDownList").value(e.data.jenjang_pendidikan);

          if(e.data.jenjang_pendidikan=="D-III" || e.data.jenjang_pendidikan=="S1/D-IV"){
            $("#idSekolahUniv").empty();
            $("#idSekolahUniv").html('<input name="sekolahUniversitas" id="sekolahUniversitas" type="text" autofocus required>');
            $("#idJurusan").empty();
            $("#idJurusan").html('<input name="jurusan" id="jurusan" type="text" autofocus required>');
            fnUniversitas();
            fnJurusan();
            $("#sekolahUniversitas").data("kendoDropDownList").value(e.data.sekolah_universitas);
            $("#jurusan").data("kendoDropDownList").value(e.data.jurusan);
          }else{
            $("#idSekolahUniv").empty();
            $("#idSekolahUniv").html('<input class="form-control" name="sekolahUniversitas" id="sekolahUniversitas" type="text" autofocus required>');
            $("#idJurusan").empty();
            $("#idJurusan").html('<input class="form-control" name="jurusan" id="jurusan" type="text" autofocus required>');
            $("#sekolahUniversitas").val(e.data.sekolah_universitas);
            $("#jurusan").val(e.data.jurusan);
          }

          $("#nemIPK").val(e.data.nem_ipk);
          $("#tahunMasuk").data("kendoDatePicker").value(e.data.tahun_masuk_pendidikan);
          if(e.data.tahun_lulus=='Sekarang'){
            $("#tahunLulus").val(e.data.tahun_lulus);
          }else{
            document.getElementById('tahunLulus').readOnly=false;
            $("#tahunLulus").removeClass("form-control");
            iTahunMasuk=parseInt(e.data.tahun_lulus)-3;
            thnLulus();
            $("#tahunLulus").data("kendoDropDownList").value(e.data.tahun_lulus);
          }

          document.getElementById('imgKTP').src=e.data.upload_ktp;
          document.getElementById('imgAkteLahir').src=e.data.upload_akte_lahir;
          document.getElementById('imgIjazah').src=e.data.upload_ijazah;
          document.getElementById('imgTranskrip').src=e.data.upload_transkrip;
          $("#imgKTP").show();
          $("#imgAkteLahir").show();
          $("#imgIjazah").show();
          $("#imgTranskrip").show();

          $("#dkNamaLengkap").val(e.data.nama_lengkap);
          if(e.data.jenis_kelamin == 1){
            $("#priaRadioDk").prop("checked",true);
          }else if(e.data.jenis_kelamin == 0){
            $("#wanitaRadioDK").prop("checked",true);
          }
          if(e.data.hubungan_keluarga == 'Ayah' || e.data.hubungan_keluarga == 'Ibu' || e.data.hubungan_keluarga == 'Kakak Laki-Laki' || e.data.hubungan_keluarga == 'Kakak Perempuan'){
            $("#dkHubunganKeluarga").data("kendoDropDownList").value(e.data.hubungan_keluarga);
            $("#dkHKLain").hide();
          }else{
            $("#dkHubunganKeluarga").data("kendoDropDownList").value('Lainnya');
            $("#dkHubunganKeluargaLain").val(e.data.hubungan_keluarga);
            $("#dkHKLain").show();
          }
          $("#dkTanggalLahir").data("kendoDatePicker").value(e.data.tanggal_lahir_keluarga);
          $("#dkAlamat").val(e.data.alamat);
          $("#dkNoTelp").val(e.data.no_telp);
          $("#dkPekerjaan").val(e.data.pekerjaan);

          $("#pkTable").html(e.tblPengalaman);
        }

      }
    });

}

$("#tanggal_lahir").kendoDatePicker({
  format:"yyyy-MM-dd"
});
$("#status").kendoDropDownList({
  optionLabel:"--Select--",
  dataTextField:"text",
  dataValueField:"value",
  dataSource:[
  {text:"Lajang",value:"Lajang"},
  {text:"Menikah",value:"Menikah"},
  {text:"Cerai",value:"Cerai"},
  ],
  filter:"contains",
});
$("#tempat_lahir").width(250).kendoDropDownList({
  optionLabel:"--Select--",
  dataTextField:"kota",
  dataValueField:"kota",
  dataSource:{
    type:"json",
    transport:{
      read:{
        url: "<?php  echo base_url().'DataDiriPelamar/read_DDKota' ;?>",
        type:"POST",
        dataType: 'JSON',
        data:{sProvinsi:'ALL'},
        cache:false
      }
    },
  },
  filter:"contains",
});
// document.getElementById('tempat_lahir').readOnly=false;
// $("#tempat_lahir").attr("readonly",true);


$("#agama").kendoDropDownList({
  optionLabel:"--Select--",
  dataTextField:"text",
  dataValueField:"value",
  dataSource:[
  {text:"Islam",value:"Islam"},
  {text:"Kristen",value:"Kristen"},
  {text:"Protestan",value:"Protestan"},
  {text:"Budha",value:"Budha"},
  {text:"Hindu",value:"Hindu"},
  {text:"Khong Hu Chu",value:"Khong Hu Chu"},
  ],
  filter:"contains",
});
$("#golDarah").kendoDropDownList({
  optionLabel:"--Select--",
  dataTextField:"text",
  dataValueField:"value",
  dataSource:[
  {text:"A",value:"A"},
  {text:"B",value:"B"},
  {text:"O",value:"O"},
  {text:"A/B",value:"A/B"},
  {text:"-",value:"-"},
  ],
  filter:"contains",
});
$("#propinsi_ktp").width(300).kendoDropDownList({
  optionLabel:"--Select--",
  dataTextField:"provinsi",
  dataValueField:"provinsi",
  dataSource:{
    type:"json",
    transport:{
      read:{
        url: "<?php  echo base_url().'DataDiriPelamar/read_DDProvinsi' ;?>",
        type:"POST",
        dataType: 'JSON',
        cache:false
      }
    },
  },
  filter:"contains",
  change:function(e){
    console.log(e.sender._old);
    kotaKtp(e.sender._old);
  }
});
function kotaKtp(e){
  $("#kota_ktp").width(300).kendoDropDownList({
    optionLabel:"--Select--",
    dataTextField:"kota",
    dataValueField:"kota",
    dataSource:{
      type:"json",
      transport:{
        read:{
          url: "<?php  echo base_url().'DataDiriPelamar/read_DDKota' ;?>",
          type:"POST",
          dataType: 'JSON',
          data:{sProvinsi:e},
          cache:false
        }
      },
    },
    filter:"contains",
  });
}

$("#propinsi_domisili").width(300).kendoDropDownList({
  optionLabel:"--Select--",
  dataTextField:"provinsi",
  dataValueField:"provinsi",
  dataSource:{
    type:"json",
    transport:{
      read:{
        url: "<?php  echo base_url().'DataDiriPelamar/read_DDProvinsi' ;?>",
        type:"POST",
        dataType: 'JSON',
        cache:false
      }
    },
  },
  filter:"contains",
  change:function(e){
    console.log(e.sender._old);
    kotaDomisili(e.sender._old);
  }
});
function kotaDomisili(e){
  $("#kota_domisili").width(300).kendoDropDownList({
    optionLabel:"--Select--",
    dataTextField:"kota",
    dataValueField:"kota",
    dataSource:{
      type:"json",
      transport:{
        read:{
          url: "<?php  echo base_url().'DataDiriPelamar/read_DDKota' ;?>",
          type:"POST",
          dataType: 'JSON',
          data:{sProvinsi:e},
          cache:false
        }
      },
    },
    filter:"contains",
  });
}

$("#jenjangPendidikan").kendoDropDownList({
  optionLabel:"--Select--",
  dataTextField:"text",
  dataValueField:"value",
  dataSource:[
  {text:"SMK/SMA",value:"SMK/SMA"},
  {text:"D-III",value:"D-III"},
  {text:"S1/D-IV",value:"S1/D-IV"},
  {text:"Lainnya",value:"Lainnya"},
  ],
  filter:"contains",
  change:function(e){
    // console.log(e.sender._old);
    if(e.sender._old=="D-III" || e.sender._old=="S1/D-IV"){
      $("#idSekolahUniv").empty();
      $("#idSekolahUniv").html('<input name="sekolahUniversitas" id="sekolahUniversitas" type="text" autofocus required>');
      $("#idJurusan").empty();
      $("#idJurusan").html('<input name="jurusan" id="jurusan" type="text" autofocus required>');
      fnUniversitas();
      fnJurusan();
    }else{
      $("#idSekolahUniv").empty();
      $("#idSekolahUniv").html('<input class="form-control" name="sekolahUniversitas" id="sekolahUniversitas" type="text" autofocus required>');
      $("#idJurusan").empty();
      $("#idJurusan").html('<input class="form-control" name="jurusan" id="jurusan" type="text" autofocus required>');
    }
  }
});
function fnUniversitas(){
  $("#sekolahUniversitas").width(450).kendoDropDownList({
    optionLabel:"--Select--",
    dataTextField:"universitas",
    dataValueField:"universitas",
    dataSource:{
      type:"json",
      transport:{
        read:{
          url: "<?php  echo base_url().'DataDiriPelamar/read_DDUniversitas' ;?>",
          type:"POST",
          dataType: 'JSON',
          data:{sProvinsi:'ALL'},
          cache:false
        }
      },
    },
    filter:"contains",
  });
}
function fnJurusan(){
  $("#jurusan").width(300).kendoDropDownList({
    optionLabel:"--Select--",
    dataTextField:"jurusan",
    dataValueField:"jurusan",
    dataSource:{
      type:"json",
      transport:{
        read:{
          url: "<?php  echo base_url().'DataDiriPelamar/read_DDJurusan' ;?>",
          type:"POST",
          dataType: 'JSON',
          data:{sProvinsi:'ALL'},
          cache:false
        }
      },
    },
    filter:"contains",
  });
}

$("#tahunMasuk").kendoDatePicker({
  start:'decade',
  depth:'decade',
  format:"yyyy",
  change:function(e){
    iTahunMasuk=parseInt($("#tahunMasuk").val());
    document.getElementById('tahunLulus').readOnly=false;
    $("#tahunLulus").removeClass("form-control");
    thnLulus();
      // $("#tahunLulus").prop("readonly",false);
    }
  });
var iTahunMasuk;
function thnLulus(){
  $("#tahunLulus").kendoDropDownList({
    optionLabel:"--Select--",
    dataTextField:"text",
    dataValueField:"value",
    dataSource:[
    {text:iTahunMasuk+3,value:iTahunMasuk+3},
    {text:iTahunMasuk+4,value:iTahunMasuk+4},
    {text:iTahunMasuk+5,value:iTahunMasuk+5},
    {text:"Sekarang",value:"Sekarang"},
    ],
    filter:"contains",
  });
}

$("#dkHubunganKeluarga").kendoDropDownList({
  optionLabel:"--Select--",
  dataTextField:"text",
  dataValueField:"value",
  dataSource:[
  {text:"Ayah",value:"Ayah"},
  {text:"Ibu",value:"Ibu"},
  {text:"Kakak Laki-Laki",value:"Kakak Laki-Laki"},
  {text:"Kakak Perempuan",value:"Kakak Perempuan"},
  {text:"Lainnya",value:"Lainnya"},
  ],
  filter:"contains",
  change:function(e){
    if($("#dkHubunganKeluarga").val()=="Lainnya"){
      $("#dkHKLain").show();
    }else{
      $("#dkHKLain").hide();
    }
  }
});
$("#dkTanggalLahir").kendoDatePicker({
  format:"yyyy-MM-dd"
});

$("#pkStatus").kendoDropDownList({
  optionLabel:"--Select--",
  dataTextField:"text",
  dataValueField:"value",
  dataSource:[
  {text:"Aktif",value:"Aktif"},
  {text:"Resign",value:"Resign"},
  ],
  filter:"contains",
  change:function(e){
    if($("#pkStatus").val()=="Aktif"){
      $("#pkThnKeluar").empty();
      $("#pkThnKeluar").append('<input class="form-control" name="pkTahunKeluar" id="pkTahunKeluar" type="text" style="margin-left: 1px" autofocus readonly><small id="pk8" style="color: red" hidden> wajib diisi</small>');


      $("#pkTahunKeluar").val("Sekarang");
    }else{
      $("#pkTahunKeluar").val("");
    }
  }
});
$("#pkJenisPekerjaan").kendoDropDownList({
  optionLabel:"--Select--",
  dataTextField:"text",
  dataValueField:"value",
  dataSource:[
  {text:"Permanent",value:"Permanent"},
  {text:"Kontrak",value:"Kontrak"},
  {text:"Magang",value:"Magang"},
  ],
  filter:"contains",
});
$("#pkTahunMasuk").kendoDatePicker({
  max:kendo.date.today(),
  depth:'decade',
  start:'decade',
  format:"yyyy",
  change:function(e){
    // alert("s");
    if($("#pkStatus").val()=="Resign"){
      $("#pkTahunKeluar").removeClass("form-control");
      document.getElementById('pkTahunKeluar').readOnly=false;
      fnpkTahunKeluar();
      ipkTahunMasuk=this.value();
    }
  }
});
var ipkTahunMasuk;
function fnpkTahunKeluar(){
  $("#pkTahunKeluar").kendoDatePicker({
    min:new Date($("#pkTahunMasuk").val(),1,1),
    max:kendo.date.today(),
    depth:'decade',
    start:'decade',
    format:"yyyy",
  });
}

function onCheckDomisiliSama(){
  if(document.getElementById('CB_DomisiliSama').checked==true){
    $("#groupDomilisi").hide();
  }else
  if(document.getElementById('CB_DomisiliSama').checked==false){
    $("#groupDomilisi").show();
  }
}

$("#a1").click(function(){
  if(iSteps>=1){
    DataDiri();
  }
});
$("#a2").click(function(){
  if(iSteps>=2){
    InformasiKontak();
  }
});
$("#a3").click(function(){
  if(iSteps>=3){
    Pendidikan();
  }
});
$("#a4").click(function(){
  if(iSteps>=4){
    BerkasDataDiri();
  }
});
$("#a5").click(function(){
  if(iSteps>=5){
    DataKeluarga();
  }
});
$("#a6").click(function(){
  if(iSteps>=6){
    PengalamanKerja();
  }
});
$("#fm_datadiri").show();
function DataDiri(){
  $("#fm_datadiri").show();
  $("#fm_informasiKontak").hide();
  $("#fm_Pendidikan").hide();
  $("#fm_BerkasDataDiri").hide();
  $("#fm_DataKeluarga").hide();
  $("#fm_PengalamanKerja").hide();
}

$("#fotoProfile").on('change',function(){
  var file_data = $('#fotoProfile').prop('files')[0];
  var form_data = new FormData();
  form_data.append('pid_pelamar',iID);
  form_data.append('file', file_data);
    // alert(form_data);
    $.ajax({
      url: "<?php  echo base_url().'DataDiriPelamar/ajax_UploadProfile?' ;?>",
        dataType: 'JSON',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(e){
          if(e.status==true){
            document.getElementById('imgProfile').src=e.path;
          }else{
            alert(e.Remark);
          }
        }
      });
  });

var i_clsDataDiri;
function btn_simpanDataDiri(){
 i_clsDataDiri = {
  pid_pelamar:iID,
  nama_pelamar:$("#nama").val(),
  no_ktp:$("#no_ktp").val(),
  email:$("#email").val(),
  tempat_lahir:$("#tempat_lahir").val(),
  tanggal_lahir:$("#tanggal_lahir").val(),
  jenkel:$('input[name=rbJenkel]:checked').val(),
  agama:$("#agama").val(),
  gol_darah:$("#golDarah").val(),
  status_pernikahan:$("#status").val(),
  profil_path:document.getElementById('imgProfile').src
}
console.log(i_clsDataDiri);
$.ajax({
  type: "POST",
  cache:false,
  dataType: "JSON",
  url: "<?php  echo base_url().'DataDiriPelamar/ajax_SaveDataDiri' ;?>",
  data: { sTbl: i_clsDataDiri },
  success: function (e) {
    console.log(e);
    if(e.status==true){
      iSteps=1;
      InformasiKontak();
      $("#dd1").hide();
      $("#dd2").hide();
      $("#dd3").hide();
      $("#dd4").hide();
      $("#dd5").hide();
      $("#dd6").hide();
      $("#dd7").hide();
      $("#dd8").hide();
      $("#dd9").hide();
      $("#dd10").hide();
    }else{
      if(e.Remark[1]==1){$("#dd1").show();}
      else{$("#dd1").hide();}
      if(e.Remark[2]==1){$("#dd2").show();}
      else{$("#dd2").hide();}
      if(e.Remark[3]==1){$("#dd3").show();}
      else{$("#dd3").hide();}
      if(e.Remark[4]==1){$("#dd4").show();}
      else{$("#dd4").hide();}
      if(e.Remark[5]==1){$("#dd5").show();}
      else{$("#dd5").hide();}
      if(e.Remark[6]==1){$("#dd6").show();}
      else{$("#dd6").hide();}
      if(e.Remark[7]==1){$("#dd7").show();}
      else{$("#dd7").hide();}
      if(e.Remark[8]==1){$("#dd8").show();}
      else{$("#dd8").hide();}
      if(e.Remark[9]==1){$("#dd9").show();}
      else{$("#dd9").hide();}
      if(e.Remark[10]==1){$("#dd10").show();}
      else{$("#dd10").hide();}

      // alert(e.Remark[0]);
    }
  }
});
}

function InformasiKontak(){
  $("#fm_datadiri").hide();
  $("#fm_informasiKontak").show();
  $("#fm_Pendidikan").hide();
  $("#fm_BerkasDataDiri").hide();
  $("#fm_DataKeluarga").hide();
  $("#fm_PengalamanKerja").hide();

  $("#a1").removeClass('current');
  $("#a1").addClass('green_');
  $("#a2").addClass('current');
}

var i_clsInfoKontak;
function btn_simpanInformasiKontak(){
  var i_domisili_sama=0;
  if(document.getElementById('CB_DomisiliSama').checked==true){
    i_domisili_sama=1;
  }
  i_clsInfoKontak = {
    pid_info_kontak_pelamar:iID,
    alamat_ktp:$("#alamatKTP").val(),
    kota_ktp:$("#kota_ktp").val(),
    propinsi_ktp:$("#propinsi_ktp").val(),
    domisili_sama:i_domisili_sama,
    alamat_domisili:$("#alamatDomisili").val(),
    kota_domisili:$("#kota_domisili").val(),
    propinsi_domisili:$("#propinsi_domisili").val(),
    kode_pos:$("#kodePos").val(),
    no_telpon:$("#noTelepon").val(),
    no_hp:$("#noHp").val()
  }
//  console.log(i_clsInfoKontak);
$.ajax({
  type: "POST",
  cache:false,
  dataType: "JSON",
  url: "<?php  echo base_url().'DataDiriPelamar/ajax_SaveInformasiKontak' ;?>",
  data: { sTbl: i_clsInfoKontak },
  success: function (e) {
    console.log(e);
    if(e.status==true){
      Pendidikan();
      iSteps=2;
      $("#ik1").hide();
      $("#ik2").hide();
      $("#ik3").hide();
      $("#ik4").hide();
      $("#ik5").hide();
      $("#ik6").hide();
      $("#ik7").hide();
      $("#ik8").hide();
      $("#ik9").hide();
    }else{
      if(e.Remark[1]==1){$("#ik1").show();}
      else{$("#ik1").hide();}
      if(e.Remark[2]==1){$("#ik2").show();}
      else{$("#ik2").hide();}
      if(e.Remark[3]==1){$("#ik3").show();}
      else{$("#ik3").hide();}
      if(e.Remark[4]==1){$("#ik4").show();}
      else{$("#ik4").hide();}
      if(e.Remark[5]==1){$("#ik5").show();}
      else{$("#ik5").hide();}
      if(e.Remark[6]==1){$("#ik6").show();}
      else{$("#ik6").hide();}
      if(e.Remark[7]==1){$("#ik7").show();}
      else{$("#ik7").hide();}
      if(e.Remark[8]==1){$("#ik8").show();}
      else{$("#ik8").hide();}
      if(e.Remark[9]==1){$("#ik9").show();}
      else{$("#ik9").hide();}

      // alert(e.Remark);
    }
  }
});

}

  // $("#nav_Pendidikan").click(function(){
    function Pendidikan(){
      $("#fm_datadiri").hide();
      $("#fm_informasiKontak").hide();
      $("#fm_Pendidikan").show();
      $("#fm_BerkasDataDiri").hide();
      $("#fm_DataKeluarga").hide();
      $("#fm_PengalamanKerja").hide();

      $("#a2").removeClass('current');
      $("#a2").addClass('green_');
      $("#a3").addClass('current');
    }
  // });
  var i_clsPendidikan;
  function btn_simpanPendidikan(){
   i_clsPendidikan = {
    pid_pendidikan_pelamar:iID,
    jenjang_pendidikan:$("#jenjangPendidikan").val(),
    sekolah_universitas:$("#sekolahUniversitas").val(),
    jurusan:$("#jurusan").val(),
    nem_ipk:$("#nemIPK").val(),
    tahun_masuk:$("#tahunMasuk").val(),
    tahun_lulus:$("#tahunLulus").val()
  }
  // console.log(i_clsPendidikan);
  $.ajax({
    type: "POST",
    cache:false,
    dataType: "JSON",
    url: "<?php  echo base_url().'DataDiriPelamar/ajax_SavePendidikan' ;?>",
    data: { sTbl: i_clsPendidikan },
    success: function (e) {
      console.log(e);
      if(e.status==true){
        BerkasDataDiri();
        iSteps=3;
        $("#p1").hide();
        $("#p2").hide();
        $("#p3").hide();
        $("#p4").hide();
        $("#p5").hide();
        $("#p6").hide();
      }else{
        if(e.Remark[1]==1){$("#p1").show();}
        else{$("#p1").hide();}
        if(e.Remark[2]==1){$("#p2").show();}
        else{$("#p2").hide();}
        if(e.Remark[3]==1){$("#p3").show();}
        else{$("#p3").hide();}
        if(e.Remark[4]==1){$("#p4").show();}
        else{$("#p4").hide();}
        if(e.Remark[5]==1){$("#p5").show();}
        else{$("#p5").hide();}
        if(e.Remark[6]==1){$("#p6").show();}
        else{$("#p6").hide();}

        // alert(e.Remark);
      }
    }
  });

}

function BerkasDataDiri(){
  $("#fm_datadiri").hide();
  $("#fm_informasiKontak").hide();
  $("#fm_Pendidikan").hide();
  $("#fm_BerkasDataDiri").show();
  $("#fm_DataKeluarga").hide();
  $("#fm_PengalamanKerja").hide();

  $("#a3").removeClass('current');
  $("#a3").addClass('green_');
  $("#a4").addClass('current');
}

var i_clsBerkasDataDiri;
function btn_simpanBerkasDataDiri(){
 i_clsBerkasDataDiri={
  upload_ktp:document.getElementById('imgKTP').src,
  upload_akte_lahir:document.getElementById('imgAkteLahir').src,
  upload_ijazah:document.getElementById('imgIjazah').src,
  upload_transkrip:document.getElementById('imgTranskrip').src
}
$.ajax({
  type: "POST",
  cache:false,
  dataType: "JSON",
  url: "<?php  echo base_url().'DataDiriPelamar/ajax_SaveBerkasDataDiri' ;?>",
  data: { sTbl: i_clsBerkasDataDiri },
  success: function (e) {
    console.log(e);
    if(e.status==true){
      DataKeluarga();
      iSteps=4;
      $("#bdd1").hide();
      $("#bdd2").hide();
      $("#bdd3").hide();
      $("#bdd4").hide();
    }else{
     if(e.Remark[1]==1){$("#bdd1").show();}
     else{$("#bdd1").hide();}
     if(e.Remark[2]==1){$("#bdd2").show();}
     else{$("#bdd2").hide();}
     if(e.Remark[3]==1){$("#bdd3").show();}
     else{$("#bdd3").hide();}
     if(e.Remark[4]==1){$("#bdd4").show();}
     else{$("#bdd4").hide();}
     // alert(e.Remark);
   }
 }
});

}
$("#uploadKTP").on('change',function(){
  var file_data = $('#uploadKTP').prop('files')[0];
  var form_data = new FormData();
  form_data.append('pid_pelamar',iID);
  form_data.append('sParam', 'KTP');
  form_data.append('file', file_data);
    // alert(form_data);
    $.ajax({
      url: "<?php  echo base_url().'DataDiriPelamar/ajax_Upload?' ;?>",
        dataType: 'JSON',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(e){
          // console.log(e);
            // alert('tes'); // display response from the PHP script, if any
            // alert(e.Remark); // display response from the PHP script, if any
            if(e.status==true){
              document.getElementById('imgKTP').src=e.path;
              $("#imgKTP").show();
            }else{
              alert(e.Remark);
            }
          }
        });
  });
$("#uploadAkteLahir").on('change',function(){
  var file_data = $('#uploadAkteLahir').prop('files')[0];
  var form_data = new FormData();
  form_data.append('pid_pelamar',iID);
  form_data.append('sParam', 'AkteLahir');
  form_data.append('file', file_data);
    // alert(form_data);
    $.ajax({
      url: "<?php  echo base_url().'DataDiriPelamar/ajax_Upload?' ;?>",
        dataType: 'JSON',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(e){
          if(e.status==true){
            document.getElementById('imgAkteLahir').src=e.path;
            $("#imgAkteLahir").show();
          }else{
            alert(e.Remark);
          }
        }
      });
  });
$("#uploadIjazah").on('change',function(){
  var file_data = $('#uploadIjazah').prop('files')[0];
  var form_data = new FormData();
  form_data.append('pid_pelamar',iID);
  form_data.append('sParam', 'Ijazah');
  form_data.append('file', file_data);
    // alert(form_data);
    $.ajax({
      url: "<?php  echo base_url().'DataDiriPelamar/ajax_Upload?' ;?>",
        dataType: 'JSON',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(e){
          if(e.status==true){
            document.getElementById('imgIjazah').src=e.path;
            $("#imgIjazah").show();
          }else{
            alert(e.Remark);
          }
        }
      });
  });
$("#uploadTranskrip").on('change',function(){
  var file_data = $('#uploadTranskrip').prop('files')[0];
  var form_data = new FormData();
  form_data.append('pid_pelamar',iID);
  form_data.append('sParam', 'Transkrip');
  form_data.append('file', file_data);
    // alert(form_data);
    $.ajax({
      url: "<?php  echo base_url().'DataDiriPelamar/ajax_Upload?' ;?>",
        dataType: 'JSON',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'post',
        success: function(e){
          if(e.status==true){
            document.getElementById('imgTranskrip').src=e.path;
            $("#imgTranskrip").show();
          }else{
            alert(e.Remark);
          }
        }
      });
  });


  // $("#nav_DataKeluarga").click(function(){
    function DataKeluarga(){
      $("#fm_datadiri").hide();
      $("#fm_informasiKontak").hide();
      $("#fm_Pendidikan").hide();
      $("#fm_BerkasDataDiri").hide();
      $("#fm_DataKeluarga").show();
      $("#fm_PengalamanKerja").hide();

      $("#a4").removeClass('current');
      $("#a4").addClass('green_');
      $("#a5").addClass('current');
    }
  // });
  var i_clsDataKeluarga;
  function btn_simpanDataKeluarga(){
    var iHubKel=$("#dkHubunganKeluarga").val();
    if($("#dkHubunganKeluarga").val()=="Lainnya"){
      iHubKel=$("#dkHubunganKeluargaLain").val();
    }
    i_clsDataKeluarga = {
      pid_keluarga_pelamar:iID,
      nama_lengkap:$("#dkNamaLengkap").val(),
      jenis_kelamin:$('input[name=rbJenkelDk]:checked').val(),
      hubungan_keluarga:iHubKel,
      tanggal_lahir:$("#dkTanggalLahir").val(),
      alamat:$("#dkAlamat").val(),
      no_telp:$("#dkNoTelp").val(),
      pekerjaan:$("#dkPekerjaan").val()
    }
    // console.log(i_clsDataKeluarga);
    $.ajax({
      type: "POST",
      cache:false,
      dataType: "JSON",
      url: "<?php  echo base_url().'DataDiriPelamar/ajax_SaveDataKeluarga' ;?>",
      data: { sTbl: i_clsDataKeluarga },
      success: function (e) {
        console.log(e);
        if(e.status==true){
          PengalamanKerja();
          iSteps=5;
          $("#dk1").hide();
          $("#dk2").hide();
          $("#dk3").hide();
          $("#dk4").hide();
          $("#dk5").hide();
          $("#dk6").hide();
          $("#dk7").hide();
        }else{
          if(e.Remark[1]==1){$("#dk1").show();}
          else{$("#dk1").hide();}
          if(e.Remark[2]==1){$("#dk2").show();}
          else{$("#dk2").hide();}
          if(e.Remark[3]==1){$("#dk3").show();}
          else{$("#dk3").hide();}
          if(e.Remark[4]==1){$("#dk4").show();}
          else{$("#dk4").hide();}
          if(e.Remark[5]==1){$("#dk5").show();}
          else{$("#dk5").hide();}
          if(e.Remark[6]==1){$("#dk6").show();}
          else{$("#dk6").hide();}
          if(e.Remark[7]==1){$("#dk7").show();}
          else{$("#dk7").hide();}

          // alert(e.Remark);
        }
      }
    });

  }

  // $("#nav_PengalamanKerja").click(function(){
    function PengalamanKerja(){
      $("#fm_datadiri").hide();
      $("#fm_informasiKontak").hide();
      $("#fm_Pendidikan").hide();
      $("#fm_BerkasDataDiri").hide();
      $("#fm_DataKeluarga").hide();
      $("#fm_PengalamanKerja").show();

      $("#a5").removeClass('current');
      $("#a5").addClass('green_');
      $("#a6").addClass('current');
    }
  // });

  function btn_AddPengalamanKerja(){
    iPidPengalaman='';
    $("#pkNamaPerusahaan").val("");
    $("#pkLevel").val("");
    $("#pkStatus").data("kendoDropDownList").value("");
    $("#pkJenisPekerjaan").data("kendoDropDownList").value("");
    $("#pkPosisi").val("");
    $("#pkPekerjaanDesc").val("");
    $("#pkTahunMasuk").data("kendoDatePicker").value("");
    $("#pkThnKeluar").empty();
    $("#pkThnKeluar").append('<input class="form-control" name="pkTahunKeluar" id="pkTahunKeluar" type="text" style="margin-left: 1px" autofocus readonly><small id="pk8" style="color: red" hidden> wajib diisi</small>');
    $("#pkTahunKeluar").val("");
  }

  var i_clsPengalamanKerja;
  function btn_PengalamanKerja(){
   i_clsPengalamanKerja = {
    pid_pengalaman_pelamar:iPidPengalaman,
    pid_pelamar:iID,
    nama_perusahaan:$("#pkNamaPerusahaan").val(),
    level:$("#pkLevel").val(),
    status:$("#pkStatus").val(),
    jenis_pekerjaan:$("#pkJenisPekerjaan").val(),
    posisi:$("#pkPosisi").val(),
    pekerjaan_desc:$("#pkPekerjaanDesc").val(),
    tahun_masuk:$("#pkTahunMasuk").val(),
    tahun_keluar:$("#pkTahunKeluar").val()
  }
    // console.log(i_clsPengalamanKerja);
    $.ajax({
      type: "POST",
      cache:false,
      dataType: "JSON",
      url: "<?php  echo base_url().'DataDiriPelamar/ajax_SavePengalamanKerja' ;?>",
      data: { sTbl: i_clsPengalamanKerja },
      success: function (e) {
        console.log(e);
        if(e.status==true){
          $("#pkTable").empty();
          $("#pkTable").append(e.tblPengalaman);
          btn_AddPengalamanKerja();
          $("#pk1").hide();
          $("#pk2").hide();
          $("#pk3").hide();
          $("#pk4").hide();
          $("#pk5").hide();
          $("#pk6").hide();
          $("#pk7").hide();
          $("#pk8").hide();
        }else{
          if(e.Remark[1]==1){$("#pk1").show();}
          else{$("#pk1").hide();}
          if(e.Remark[2]==1){$("#pk2").show();}
          else{$("#pk2").hide();}
          if(e.Remark[3]==1){$("#pk3").show();}
          else{$("#pk3").hide();}
          if(e.Remark[4]==1){$("#pk4").show();}
          else{$("#pk4").hide();}
          if(e.Remark[5]==1){$("#pk5").show();}
          else{$("#pk5").hide();}
          if(e.Remark[6]==1){$("#pk6").show();}
          else{$("#pk6").hide();}
          if(e.Remark[7]==1){$("#pk7").show();}
          else{$("#pk7").hide();}
          if(e.Remark[8]==1){$("#pk8").show();}
          else{$("#pk8").hide();}
          // alert(e.Remark);
        }
      }
    });

  }
  function btn_PengalamanKerjaLanjut(){
    $("#fmStepsUP").hide();
    $("#fmSteps").hide();
    $("#fmPreview").show();

    $.ajax({
      type: "POST",
      cache:false,
      dataType: "JSON",
      url: "<?php  echo base_url().'DataDiriPelamar/ajax_Preview' ;?>",
      data: { sPID: iID },
      success: function (e) {
        console.log(e);
        if(e.status==true){
          $("#a6").removeClass('current');
          $("#a6").addClass('green_');
          iSteps=6;

          $("#fmPreview").empty();
          $("#fmPreview").html(e.detail);
        }else{
          alert(e.Remark);
        }
      },
      complete:function(e){
        // previewDataDiri();
      }
    });

  }

  function exportPDF(){
    window.open("<?php  echo base_url().'DataDiriPelamar/exportPdf','_self',false ;?>");
  }

  function pvUbah(){
    $("#fmStepsUP").show();
    $("#fmSteps").show();
    $("#fmPreview").hide();
    $("#fmPreview").empty();
    $("#a1").click();
  }
  function pvSave(){
    $.ajax({
      type: "POST",
      cache:false,
      dataType: "JSON",
      url: "<?php  echo base_url().'DataDiriPelamar/selesai' ;?>",
      data: {sDataDiri: i_clsDataDiri,sInfoKontak:i_clsInfoKontak,sPendidikan:i_clsPendidikan,sBerkasDataDiri:i_clsBerkasDataDiri,sDataKeluarga:i_clsDataKeluarga,sPengalamanKerja:i_clsPengalamanKerja} ,
      success: function (e) {
        console.log(e);
        document.location.href=e.redirect;
      }
    });
  }

  function editPengalaman(e){
    var iRow=document.getElementById(e);
    var iCell=iRow.getElementsByTagName("td");

    iPidPengalaman=e;
    $("#pkNamaPerusahaan").val(iCell[0].innerText);
    $("#pkLevel").val(iCell[1].innerText);
    $("#pkStatus").data("kendoDropDownList").value(iCell[2].innerText);
    $("#pkJenisPekerjaan").data("kendoDropDownList").value(iCell[3].innerText);
    $("#pkPosisi").val(iCell[4].innerText);
    $("#pkPekerjaanDesc").val(iCell[5].innerText);
    $("#pkTahunMasuk").data("kendoDatePicker").value(iCell[6].innerText);
    if(iCell[2].innerText=="Resign"){
      $("#pkTahunKeluar").removeClass("form-control");
      document.getElementById('pkTahunKeluar').readOnly=false;
      fnpkTahunKeluar();
      $("#pkTahunKeluar").data("kendoDatePicker").value(iCell[7].innerText);
    }else if(iCell[2].innerText=="Aktif"){
      $("#pkThnKeluar").empty();
      $("#pkThnKeluar").append('<input class="form-control" name="pkTahunKeluar" id="pkTahunKeluar" type="text" style="margin-left: 1px" autofocus readonly><small id="pk8" style="color: red" hidden> wajib diisi</small>');
      $("#pkTahunKeluar").val(iCell[7].innerText);
    }
    // alert(iCell[0].innerText);
  }
  function deletePengalaman(e){
    var i_clsDelPengalamanKerja = {
      pid_pengalaman_pelamar:e,
      pid_pelamar:iID
    }

    $.ajax({
      type: "POST",
      cache:false,
      dataType: "JSON",
      url: "<?php  echo base_url().'DataDiriPelamar/ajax_DeletePengalamanKerja' ;?>",
      data: {sTbl: i_clsDelPengalamanKerja} ,
      success: function (e) {

        $("#pkTable").empty();
        $("#pkTable").append(e.tblPengalaman);
      }
    });

  }


  // function previewDataDiri(){
  //   document.getElementById('pvimgProfile').src=i_clsDataDiri.profil_path;
  //   $("#pvno_ktp").text(i_clsDataDiri.no_ktp);
  //   $("#pvnama").text(i_clsDataDiri.nama_pelamar);
  //   $("#pvemail").text(i_clsDataDiri.email);
  //   // $("#pvtempat_lahir").text(i_clsDataDiri.tempat_lahir);
  //   $("#pvtanggal_lahir").text(i_clsDataDiri.tanggal_lahir);
  //   $("#pvjenkel").text(i_clsDataDiri.jenkel);
  //   $("#pvstatus").text(i_clsDataDiri.status_pernikahan);
  //   $("#pvagama").text(i_clsDataDiri.agama);
  //   $("#pvgolDarah").text(i_clsDataDiri.gol_darah);

  //   $("#pvalamatKTP").text(i_clsInfoKontak.alamat_ktp);
  //   $("#pvpropinsi_ktp").text(i_clsInfoKontak.propinsi_ktp);
  //   $("#pvkota_ktp").text(i_clsInfoKontak.kota_ktp);
  //   $("#pvalamatDomisili").text(i_clsInfoKontak.alamat_domisili);
  //   $("#pvpropinsi_domisili").text(i_clsInfoKontak.propinsi_domisili);
  //   $("#pvkota_domisili").text(i_clsInfoKontak.kota_domisili);
  //   $("#pvkodePos").text(i_clsInfoKontak.kode_pos);
  //   $("#pvnoTelepon").text(i_clsInfoKontak.no_telpon);
  //   $("#pvnoHp").text(i_clsInfoKontak.no_hp);

  //   $("#pvjenjangPendidikan").text(i_clsPendidikan.jenjang_pendidikan);
  //   $("#pvsekolahUniversitas").text(i_clsPendidikan.sekolah_universitas);
  //   $("#pvjurusan").text(i_clsPendidikan.jurusan);
  //   $("#pvnemIPK").text(i_clsPendidikan.nem_ipk);
  //   $("#pvtahunMasuk").text(i_clsPendidikan.tahun_masuk);
  //   $("#pvtahunLulus").text(i_clsPendidikan.tahun_lulus);

  //   document.getElementById('pvimgKTP').src=i_clsBerkasDataDiri.upload_ktp;
  //   document.getElementById('pvimgAkteLahir').src=i_clsBerkasDataDiri.upload_akte_lahir;
  //   document.getElementById('pvimgIjazah').src=i_clsBerkasDataDiri.upload_ijazah;
  //   document.getElementById('pvimgTranskrip').src=i_clsBerkasDataDiri.upload_transkrip;

  //   $("#pvdkNamaLengkap").text(i_clsDataKeluarga.nama_lengkap);
  //   $("#pvdkJenkel").text(i_clsDataKeluarga.jenis_kelamin);
  //   $("#pvdkHubunganKeluarga").text(i_clsDataKeluarga.hubungan_keluarga);
  //   $("#pvdkTanggalLahir").text(i_clsDataKeluarga.tanggal_lahir);
  //   $("#pvdkAlamat").text(i_clsDataKeluarga.alamat);
  //   $("#pvdkNoTelp").text(i_clsDataKeluarga.no_telp);
  //   $("#pvdkPekerjaan").text(i_clsDataKeluarga.pekerjaan);

    // $("#pvpkNamaPerusahaan").text(i_clsPengalamanKerja.nama_perusahaan);
    // $("#pvpkLevel").text(i_clsPengalamanKerja.level);
    // $("#pvpkStatus").text(i_clsPengalamanKerja.status);
    // $("#pvpkJenisPekerjaan").text(i_clsPengalamanKerja.jenis_pekerjaan);
    // $("#pvpkPosisi").text(i_clsPengalamanKerja.posisi);
    // $("#pvpkPekerjaanDesc").text(i_clsPengalamanKerja.pekerjaan_desc);
    // $("#pvpkTahunMasuk").text(i_clsPengalamanKerja.tahun_masuk);
    // $("#pvpkTahunKeluar").text(i_clsPengalamanKerja.tahun_keluar);



  //   $("#fmStepsUP").hide();
  //   $("#fmSteps").hide();
  //   $("#fmPreview").show();
  // }


</script>
</body>
</html>
