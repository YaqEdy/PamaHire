<?php
 $_this =& get_instance();

 $user_session = $_this->session->userdata;
 if(isset($user_session['group'])){
   if($user_session['group'] == 'user'){
     get_template('header');
   }else if($user_session['group'] == 'admin'){
     get_template('headeradmin');
   }
 }else{
   get_template('header');
 }
 ?>

<style>
 @media screen and (max-height: 575px){ #rc-imageselect, .g-recaptcha {transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;} }
 #rc-imageselect {transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;}
/* Important part */
.modal-dialog{
  overflow-y: initial !important
}

.modal-body{
  height: 420px;
  overflow-y: auto;
}

#myPassword .modal-body{
  height: 120px !important;
  overflow-y: auto;
}

#myAktivasi .modal-body{
  height: 155px !important;
  overflow-y: auto;
}

label {
    font-weight: normal !important;
}
.k-dropdown .k-dropdown-wrap{
    height: 34px;
}

/* .input-sk{
  border: none;
  background: transparent;
  padding: 5px 0;
}

/* .input-sk:webkit-autofill,
.input-sk:webkit-autofill:hover,
.input-sk:webkit-autofill:focus{
  -webkit-box-shadow:0 0 0px 1000px #f2f5f7 inset;
} */

/* .form-sk{
  border-radius: 5px;
  border: 2px solid #bfa145;
  margin-bottom: 5px;
  padding: 0.2rem 0.5rem;
} */

/* .is-full {
  width: 100%;
  text-align: left;
} */

/* .form-control{
  border: none;
} */
/* .k-dropdown{

} */
/* .btn-sk{
  color: #bfa145;
  font-size: 2.25rem;
  background: none;
  border: 3px solid #bfa145 !important;
  border-radius: 5px;
  display: inline-block;
  transition: all 0.3s ease-in;
  width: 100%;
  padding: 1.5rem;
}

.btn-sk:hover{
  background-color: #bfa145;
  color: white;
}  */
.hidden{
  display: none !important;
}
.show_err{display: inline-block;}

.card {
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
}

.card {
  margin: 10px;
  box-sizing: border-box;
  border-radius: 2px;
  background-clip: padding-box;
}
.card span.card-title {
    color: #fff;
    font-size: 24px;
    font-weight: 300;
    text-transform: uppercase;
}

.card .card-image {
  position: relative;
  overflow: hidden;
}
.card .card-image img {
  border-radius: 2px 2px 0 0;
  background-clip: padding-box;
  position: relative;
  z-index: -1;
}
.card .card-image span.card-title {
  position: absolute;
  bottom: 0;
  left: 0;
  padding: 16px;
}
.card .card-content {
  padding: 1px;
  border-radius: 0 0 2px 2px;
  background-clip: padding-box;
  box-sizing: border-box;
}
.card .card-content p {
  margin: 0;
  color: inherit;
}
.card .card-content span.card-title {
  line-height: 48px;
}
.card .card-action {
  border-top: 1px solid rgba(160, 160, 160, 0.2);
  padding: 16px;
}
.card .card-action a {
  color: #ffab40;
  margin-right: 16px;
  transition: color 0.3s ease;
  text-transform: uppercase;
}
.card .card-action a:hover {
  color: #ffd8a6;
  text-decoration: none;
}

/*REQUIRED*/
.carousel-row {
    margin-bottom: 10px;
}

.slide-row {
    padding: 0;
    background-color: #ffffff;
    min-height: 150px;
    border: 1px solid #e7e7e7;
    overflow: hidden;
    height: auto;
    position: relative;
}


.slide-carousel {
    width: 20%;
    float: left;
    display: inline-block;
}

.slide-carousel .carousel-indicators {
    margin-bottom: 0;
    bottom: 0;
    background: rgba(0, 0, 0, .5);
}

.slide-carousel .carousel-indicators li {
    border-radius: 0;
    width: 20px;
    height: 6px;
}

.slide-carousel .carousel-indicators .active {
    margin: 1px;
}

.slide-content {
    /* position: absolute; */
    top: 0;
    left: 20%;
    display: block;
    float: left;
    width: 80%;
    max-height: 76%;
    padding: 1.5% 2% 2% 2%;
    overflow-y: auto;
}

.slide-content h4 {
    margin-bottom: 3px;
    margin-top: 0;
}

.slide-footer {
    /* position: absolute; */
    bottom: 0;
    left: 20%;
    width: 78%;
    height: 20%;
    margin: 1%;
}

/* Scrollbars */
.slide-content::-webkit-scrollbar {
  width: 5px;
}

.slide-content::-webkit-scrollbar-thumb:vertical {
  margin: 5px;
  background-color: #999;
  -webkit-border-radius: 5px;
}

.slide-content::-webkit-scrollbar-button:start:decrement,
.slide-content::-webkit-scrollbar-button:end:increment {
  height: 5px;
  display: block;
}

body{
  background: #eef5f9;
}

</style>



<!-- banner -->
<!-- <div class="banner">
    <img src="images/photos/banner.jpg"  class="img-responsive" alt="slide">
    <div class="welcome-message">
        <div class="wrap-info">
            <div class="information">
                <h1  class="animated fadeInDown">Best hotel in Dubai</h1>
                <p class="animated fadeInUp">Most luxurious hotel of asia with the royal treatments and excellent customer service.</p>
            </div>
            <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
        </div>
    </div>
</div> -->
<!-- banner -->
<!-- linear-gradient(to right, #2980b9, #2c3e50) -->

<!-- reservation-information -->
<div id="information" style="background:#eef5f9" class="spacer reserve-info ">
  <div class="container">
    <div class="row">
      <?php
      if(!isset($user_session['ID'])){
      ?>
      <div class="col-sm-4 col-md-3" style="margin:10px;background-color:white;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:4px;box-shadow:0px 5px 20px rgba(0,0,0,0.05)">

        <h3 id="h3_login" style="border-radius:0px !important;margin-left:-15px;margin-right:-15px;margin-top:0;margin-bottom:22px;background:#00BCD4;font-size:24px;text-shadow:0 1px 1px #000;box-shadow:0 2px 4px #444;padding:15px;position:relative;color:white;font-weight:500"><center>LOGIN MEMBER</center></h3>
        <div class="card-content">
          <div class='spinner hidden'>
            <div class='rect1'></div>
            <div class='rect2'></div>
            <div class='rect3'></div>
          </div>
          <p id="p_spinner" class="hidden" style="text-align:center">Mohon tunggu..</p>

            <form id="form_login" method="post" class="wowload fadeInRight">
                <div class="form-group">
                    <input type="text" id="ktp_email" name="ktp_email" class="form-control">
                    <p id="err_ktp_email" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px"></p>
                </div>
                <div class="form-group">
                    <!-- <label class="control-label" style="text-align:left" for="password">Kata Kunci</label> -->
                    <input type="password"id="password" name="password" class="form-control">
                    <p id="err_password" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px"></p>
                </div>
                <div class="form-group">
                  <div style="transform:scale(0.85);-webkit-transform:scale(0.85);transform-origin:0 0;-webkit-transform-origin:0 0;" id="recaptcha1"></div>
                    <!-- <div class="g-recaptcha" data-theme="light" data-sitekey="6LdCnUsUAAAAADtKmrmf2xa-8Wtd6zObKNKjlL_S" style="transform:scale(0.70);-webkit-transform:scale(0.70);transform-origin:0 0;-webkit-transform-origin:0 0;"></div> -->
                  <p id="err_recaptcha1" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px"></p>
                </div>
                <div class="form-group">
                    <button type="button" id="btn_daftar" style="width:49%;" class="btn btn-primary1"><span class="glyphicon glyphicon-new-window" style="color:white"></span> Daftar</button>
                    <button type="button" id="btn_login" style="width:49%;" class="btn btn-success1"><span class="glyphicon glyphicon-log-in" style="color:white"></span> Login</button>
                </div>
                <div class="form-group">
                    <!-- <p>Belum punya akun? daftar <a href="<?php echo base_url().'front/register/' ;?>">disini</a></p> -->
                    <a href="#" onclick="lupa_pasword()" style="display:block;text-align:center;margin-bottom:5px">Lupa Password</a>
                    <a href="#" onclick="aktivasi_email()" style="display:block;text-align:center">Aktifasi Ulang Email</a>
                </div>
            </form>
          </div>

      </div>
      <?php } ?>
      <?php
        if(isset($user_session['ID'])){
       ?>
          <div class="col-sm-8 col-sm-offset-2" style="padding-left:0px!important;padding-right:0px!important">
      <?php }
        else{
       ?>
          <div class="col-sm-8" style="padding-left:0px!important;padding-right:0px!important">
      <?php } ?>
        <!-- <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <h4>Made with <i class="fa fa-fw fa-heart text-danger"></i> by <a href="http://twitter.com/AlexMahrt" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-fw fa-twitter"></i> @AlexMahrt</a></h4>
            </div>
        </div> -->
        <!-- <hr> -->
        <!-- Begin of rows -->
        <div class="row" style="background-color:white;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:4px;Box-shadow:0px 5px 20px rgba(0,0,0,0.05);margin-left:10px;margin-right:10px;margin-bottom:0px;margin-top:10px">
          <h3 style="margin-top:0;margin-bottom:0px;background:#00BCD4;font-size:24px;text-shadow:0 1px 1px #000;box-shadow:0 2px 4px #444;padding:15px;position:relative;color:white;font-weight:500"><center>PELUANG KARIR</center></h3>
        </div>
        <?php
            $no=1;
            foreach ($datarekrutmen as $rekrut) {
            // $sub_menu = $this->db->get_where('tbl_t_rekrutmen_detail', array('pid_rekrutmen' => $rekrut->pid));
            // foreach ($sub_menu->result() as $sub) {
            $sub_menu_posisi = $this->db->get_where('tbl_m_posisi_detail', array('pid_posisi' => $rekrut->pid_posisi));
            // foreach ($sub_menu_posisi->result() as $sub_posisi) {
        ?>
        <div class="row carousel-row" style="background-color:white;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:4px;Box-shadow:0px 5px 20px rgba(0,0,0,0.05);margin-left:10px;margin-right:10px;margin-bottom:0px;margin-top:0px">
            <div class="col-sm-12 slide-row" >
                <div id="carousel-1" class="carousel slide slide-carousel" data-ride="carousel">
                  <!-- Indicators -->
                  <!-- <ol class="carousel-indicators">
                    <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-1" data-slide-to="1"></li>
                    <li data-target="#carousel-1" data-slide-to="2"></li>
                  </ol> -->

                  <!-- Wrapper for slides -->
                    <?php
                      if($rekrut->status_lowongan == 'SEDANG DIBUKA'){
                     ?>
                       <div  class="carousel-inner" style="height:100%!important;background-color:white;min-height:170px;position:relative">
                       <div style="text-align:center;display: table !important;width: 100%;height: 100%;">
                         <div  style="width:70%;position:absolute;top:20px;padding:0 10px;">
                           <span style="color:#9bbb59;border:1px solid #9bbb59;display:inline-block;padding:5px;border-radius:5px;text-align:center;font-size:14px;line-height:18px;font-weight:400;margin:0">Peluang Karir Ini Sedang Dibuka</span>
                         </div>
                       </div>
                    <?php } else if($rekrut->status_lowongan == 'DITUTUP') {?>
                        <div  class="carousel-inner" style="height:100%!important;background-color:white;min-height:170px;position:relative">
                        <div style="text-align:center;display: table !important;width: 100%;height: 100%;">
                          <div  style="width:70%;position:absolute;top:20px;padding:0 8px;">
                            <span style="color:#ff0000;border:1px solid #ff0000;display:inline-block;padding:5px;border-radius:5px;text-align:center;font-size:14px;line-height:18px;font-weight:400;margin:0">Peluang Karir Ini Sudah Tutup</span>
                          </div>
                        </div>
                    <?php } else{ ?>
                        <div  class="carousel-inner" style="height:100%!important;background-color:white;min-height:170px;position:relative">
                        <div style="text-align:center;display: table !important;width: 100%;height: 100%;">
                          <div  style="width:70%;position:absolute;top:20px;padding:0 10px;">
                            <span style="color:#ff0000;border:1px solid #ff0000;display:inline-block;padding:5px;border-radius:5px;text-align:center;font-size:14px;line-height:18px;font-weight:400;margin:0">Peluang Karir Ini Belum Dibuka</span>
                          </div>
                        </div>
                      <?php } ?>
                    <!-- <div class="item">
                        <img src="http://lorempixel.com/150/150?rand=2" alt="Image">
                    </div>
                    <div class="item">
                        <img src="http://lorempixel.com/150/150?rand=3" alt="Image">
                    </div> -->
                  </div>
                </div>
                <div class="slide-content" style="margin-top:11px!important;">
                    <span style="font-size:18px;font-weight:400;color:#3a3a3a;line-height:22px"><?php echo $rekrut->judul_rekrutmen; ?></span>
                    <a href="<?php echo base_url().'PeluangKarir/peluangkarirdetail/'.$rekrut->pid.'/'.$rekrut->pid_posisi ;?>" style="display:block;font-size:22px;margin-top:10px;margin-bottom:10px;line-height:22px"><?php echo $rekrut->judul_rekrutmen; ?></a>
                    <span style="font-size:15px;font-weight:400;color:#3a3a3a;line-height:22px">
                      <?php foreach ($sub_menu_posisi->result() as $sub_posisi) {
                        $sub_menu_jurusan = $this->db->get_where('tbl_m_jurusan', array('pid' => $sub_posisi->pid_jurusan));
                        foreach ($sub_menu_jurusan->result() as $sub_jurusan) {
                        echo $sub_jurusan->jurusan.', ';
                      ?>

                    <?php }} ?>
                    </span>
                    <button class="btn btn-sm btn-default" style="display:block;margin-top:5px;background:#fefce0;color:#3a3a3a;border:1px solid #aa671d!important;border-radius:6px!important">Lokasi Tes <?php echo $rekrut->kota_kabupaten; ?></button>
                </div>
                <!-- <div class="slide-footer">
                    <span class="pull-left buttons">
                        <button class="btn btn-sm btn-default" style="background:#fefce0;color:#3a3a3a;border:1px solid #aa671d!important;border-radius:15px!important">Lokasi Tes <?php echo $rekrut->kota_kabupaten; ?></button>
                    </span>
                </div> -->
            </div>
        </div>
        <?php } ?>
        <div class="row" style="background-color:white;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:4px;Box-shadow:0px 5px 20px rgba(0,0,0,0.05);margin-left:10px;margin-right:10px;margin-bottom:0px;">
          <a class="col-sm-12" href="<?php echo base_url().'PeluangKarir/'?>" style="display: block;text-align: center;padding-top: 8px;padding-bottom: 8px;background: #00BCD4;color: #fff;">Lihat Semua Peluang Karir</a>
        </div>

          <!-- <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><iframe  class="embed-responsive-item" src="//player.vimeo.com/video/55057393?title=0" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div> -->
      </div>

    </div>
  </div>
</div>
<!-- reservation-information -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">DAFTAR REKRUTMEN PAMAPERSADA</h4>
      </div>
      <div id="regis_modal" class="modal-body">
        <div id="spinner1" class='spinner hidden'>
          <div class='rect1'></div>
          <div class='rect2'></div>
          <div class='rect3'></div>
        </div>
        <p id="p_spinner1" class="hidden" style="text-align:center">Mohon tunggu..</p>
        <form id="form_regis" class="form-horizontal">
          <!-- <div class="form-group">
            <label class="control-label col-sm-12" style="text-align:left;color:#bfa145">Masukan data-data Anda untuk mendaftar :</label>
          </div> -->
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="nama_lengkap">Nama Lengkap :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
              <label id="err_nama_lengkap" style="text-align:left;color:red;margin-top:3px" for="nama_lengkap"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="email">Alamat Email :</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="email" name="email">
              <label id="err_email" style="text-align:left;color:red;margin-top:3px" ></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="nomor_ktp">Nomor KTP :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomor_ktp" maxlength="16" name="nomor_ktp">
              <label id="err_nomor_ktp" style="text-align:left;color:red;margin-top:3px"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="ulangi_ktp">Ulangi Nomor KTP :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="ulangi_ktp" name="ulangi_ktp">
              <label id="err_ulangi_ktp" style="text-align:left;color:red;margin-top:3px"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="password1">Password :</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="password1" name="password1">
              <label id="err_password1" style="text-align:left;color:red;margin-top:3px"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="ulangi_password">Ulangi Password :</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="ulangi_password" name="ulangi_password">
              <label id="err_ulangi_password" style="text-align:left;color:red;margin-top:3px"></label>
            </div>
          </div>
          <!-- <div class="form-group">
            <label class="control-label col-sm-12" style="text-align:left;color:#bfa145">Masukan data pendidikan terakhir Anda :</label>
          </div> -->
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="jenjang">Jenjang Pendidikan :</label>
            <div class="col-sm-8">
              <input type="text" style="width:100%" id="dd_jenjang" name="jenjang">
              <label id="err_dd_jenjang" style="text-align:left;color:red;margin-top:3px"></label>
            </div>
          </div>
          <!-- <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="program_studi">Program Studi :</label>
            <div class="col-sm-8">
              <input type="text" style="width:100%" id="dd_prodi" name="program_studi">
              <label id="err_dd_prodi" style="text-align:left;color:red;margin-top:3px"></label>
            </div>
          </div> -->
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="jurusan">Jurusan :</label>
            <div class="col-sm-8">
              <input type="text" style="width:100%" id="dd_jurusan" name="jurusan">
              <label id="err_dd_jurusan" style="text-align:left;color:red;margin-top:3px"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="nem_ipk">NEM/IPK :</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="nem_ipk" name="nem_ipk">
            </div>
            <label id="err_nem_ipk" class="control-label col-sm-5" style="text-align:left;color:red;margin-top:3px"></label>
          </div>
          <!-- <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label><input type="checkbox" name="remember"> Remember me</label>
              </div>
            </div>
          </div> -->
          <div class="form-group">
              <div class="col-sm-4"></div>
              <div class="col-sm-8">
                <div id="recaptcha2"></div>
                <!-- <div class="g-recaptcha" data-theme="light" data-sitekey="6LfpC1kUAAAAAKCJQlFyfzDtT-niWcKujot0IFvp" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div> -->
                <label id="err_recaptcha2" class="control-label col-sm-8" style="text-align:left;color:red;margin-top:3px"></label>
              </div>

          </div>
        </form>
      </div>
      <div class="modal-footer">
          <button type="button" id="btn_register" style="width:48%;color:white" class="btn btn-success1 form-control"><span class="glyphicon glyphicon-floppy-disk" style="color:white"></span> DAFTAR</button>
          <button type="button" style="width:48%;color:black" class="btn btn-default form-control" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> BATAL</button>
      </div>
    </div>

  </div>
</div>

<div class="modal fade" id="myPassword" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Lupa Password?</h4>
      </div>
      <div id="regis_modal" class="modal-body">
        <div id="spinner1" class='spinner hidden'>
          <div class='rect1'></div>
          <div class='rect2'></div>
          <div class='rect3'></div>
        </div>
        <p id="p_spinner1" class="hidden" style="text-align:center">Mohon tunggu..</p>
        <form id="form_regis" class="form-horizontal">
          <!-- <div class="form-group">
            <label class="control-label col-sm-12" style="text-align:left;color:#bfa145">Masukan data-data Anda untuk mendaftar :</label>
          </div> -->
          <div class="form-group">
            <label class="control-label col-sm-12" style="text-align:left;margin-bottom:8px" for="aktivasi_ulang">Silahkan masukkan alamat email Anda. Kami akan mengirimkan password baru kepada Anda :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="aktivasi_ulang" name="aktivasi_ulang">
              <label id="err_aktivasi_ulang" style="text-align:left;color:red;margin-top:3px;" for="aktivasi_ulang"></label>
            </div>
          </div>

        </form>
      </div>
      <div class="modal-footer">
          <button type="button" id="btn_register" style="width:48%;color:white" class="btn btn-success1 form-control">KIRIM</button>
          <button type="button" style="width:48%;color:black" class="btn btn-default form-control" data-dismiss="modal">KEMBALI</button>
      </div>
    </div>

  </div>
</div>

<div class="modal fade" id="myAktivasi" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Kirim Ulang Email Verifikasi</h4>
      </div>
      <div id="regis_modal" class="modal-body">
        <div id="spinner1" class='spinner hidden'>
          <div class='rect1'></div>
          <div class='rect2'></div>
          <div class='rect3'></div>
        </div>
        <p id="p_spinner1" class="hidden" style="text-align:center">Mohon tunggu..</p>
        <form id="form_regis" class="form-horizontal">
          <!-- <div class="form-group">
            <label class="control-label col-sm-12" style="text-align:left;color:#bfa145">Masukan data-data Anda untuk mendaftar :</label>
          </div> -->
          <label class="control-label" style="text-align:left;display:block;margin-bottom:9px;">Anda dapat mengganti alamat email, jika alamat email yang Anda daftarkan salah.</label>
          <div class="form-group" style="margin-bottom:0px">
            <label class="control-label col-sm-3" style="text-align:left" for="aktivasi_ktp">Nomor KTP</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="aktivasi_ktp" name="aktivasi_ktp">
              <label id="err_aktivasi_ktp" style="text-align:left;color:red;margin-top:3px" for="aktivasi_ktp"></label>
            </div>
          </div>
          <div class="form-group" style="margin-bottom:0px">
            <label class="control-label col-sm-3" style="text-align:left" for="aktivasi_email">Email</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="aktivasi_email" name="aktivasi_email">
              <label id="err_aktivasi_email" style="text-align:left;color:red;margin-top:3px" for="aktivasi_email"></label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
          <button type="button" id="btn_register" style="width:48%;color:white" class="btn btn-success1 form-control">KIRIM ULANG</button>
          <button type="button" style="width:48%;color:black" class="btn btn-default form-control" data-dismiss="modal">KEMBALI</button>
      </div>
    </div>

  </div>
</div>

<div class="modal fade" id="mdKonfirmasi" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">PERIKSA KEMBALI DATA ANDA!</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group">
            <label class="control-label col-sm-12" style="text-align:left;color:#bfa145">Berikut ini adalah data yang Anda masukkan :</label>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left">Nama Lengkap</label>
            <div class="col-sm-8">
              <label class="control-label col-sm-12" id="lb_nama_lengkap" style="text-align:left"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" max-length="16">Nomor KTP</label>
            <div class="col-sm-8">
              <label class="control-label col-sm-12" id="lb_nomor_ktp" style="text-align:left" max-length="16"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" >Alamat Email</label>
            <div class="col-sm-8">
              <label class="control-label col-sm-12" id="lb_email" style="text-align:left"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left">Jenjang Pendidikan</label>
            <div class="col-sm-8">
              <label class="control-label col-sm-12" id="lb_jenjang" style="text-align:left"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left">Jurusan</label>
            <div class="col-sm-8">
              <label class="control-label col-sm-12" id="lb_jurusan" style="text-align:left"></label>
            </div>
          </div>
          <!-- <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left">Program Studi</label>
            <div class="col-sm-8">
              <label class="control-label col-sm-12" id="lb_prodi" style="text-align:left"></label>
            </div>
          </div> -->
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left">NEM/IPK</label>
            <div class="col-sm-3">
              <label class="control-label col-sm-12" id="lb_nem_ipk" style="text-align:left"></label>
            </div>
          </div>
          <div class="form-group">
              <p class="control-label col-sm-12"  style="text-align:center;color:red"><i>
                Periksa kembali data yang Anda gunakan untuk mendaftar ke dalam sistem ini, Kesalahan
                memasukkan data bisa menyebabkan sistem menolak pendaftaran yang Anda lakukan.
                Data nomor KTP dan nilai terakhir(NEM/IPK) tidak dapat diganti setelah pendaftaran
                Anda setujui.</i>
              </p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
          <button type="button" style="width:48%;" class="btn btn-default form-control" id="btn_perbaiki">PERBAIKI</button>
          <a id="btn_benar" style="width:48%;" class="btn btn-default form-control">BENAR</a>
      </div>
    </div>

  </div>
</div>

<div class="modal fade" id="mdSuccessReg" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Anda telah MENDAFTAR sistem ini.</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group">
            <p class="control-label col-sm-12" style="text-align:center">Terima Kasih!<br/>
              Anda telah terdaftar ke sistem rekrutmen PAMA. Silahkan periksa email untuk<br/>
              melakukan verifikasi alamat email Anda.<br/><br/>
              Jika Anda tidak menerima email verifikasi dalam satu jam, silahkan ulangi verifikasi email<br/>
              melalui tombol dibawah ini :<br/><br/>
              <button class="btn btn-default">Ulangi Verifikasi Email</button>
              <br/>
            </p>
            <p class="control-label col-sm-12" style="text-align:center;color:red">
              <br/>
              <br/>
              PAMA tidak memungut biaya atas seluruh tahapan seleksi yang dilakukan. Hati-Hati
              terhadap segala upaya penipuan yang mengatasnamakan PAMA.
            </p>
          </div>
        </form>
      </div>
      <div class="modal-footer">
          <button type="button" style="width:48%;background-color:#f44f4f;color:white" class="btn form-control" onclick="closeAll()">KEMBALI</button>
          <!-- <a id="btn_benar" href="<?php  echo base_url().'front/login';?>" style="width:48%;background-color:#2980b9;color:white" class="btn btn-default form-control">LOGIN</a> -->
      </div>
    </div>
  </div>
</div>


<!-- services -->
<!-- <div class="spacer services wowload fadeInUp">
<div class="container">
    <div class="row">
        <div class="col-sm-4"> -->
            <!-- RoomCarousel -->
            <!-- <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/8.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/10.jpg"  class="img-responsive" alt="slide"></div>
                </div> -->
                <!-- Controls -->
                <!-- <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div> -->
            <!-- RoomCarousel-->
            <!-- <div class="caption">Rooms<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4"> -->
            <!-- RoomCarousel -->
            <!-- <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/6.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/3.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/4.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <!-- <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div> -->
            <!-- RoomCarousel-->
            <!-- <div class="caption">Tour Packages<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>


        <div class="col-sm-4"> -->
            <!-- RoomCarousel -->
            <!-- <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="images/photos/1.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/2.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="images/photos/5.jpg"  class="img-responsive" alt="slide"></div>
                </div> -->
                <!-- Controls -->
                <!-- <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div> -->
            <!-- RoomCarousel-->
            <!-- <div class="caption">Food and Drinks<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
        </div>
    </div>
</div>
</div> -->
<!-- services -->
<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
<script>
  var recaptcha1;
  var recaptcha2;
  var myCallBack = function() {
    //Render the recaptcha1 on the element with ID "recaptcha1"
    recaptcha1 = grecaptcha.render('recaptcha1', {
      'sitekey' : '6LfpC1kUAAAAAKCJQlFyfzDtT-niWcKujot0IFvp', //Replace this with your Site key
      'theme' : 'light'
    });

    //Render the recaptcha2 on the element with ID "recaptcha2"
    recaptcha2 = grecaptcha.render('recaptcha2', {
      'sitekey' : '6LfpC1kUAAAAAKCJQlFyfzDtT-niWcKujot0IFvp', //Replace this with your Site key
      'theme' : 'light'
    });
  };
</script>

<script>
function lupa_pasword(){
  $('#myPassword').modal({
    show: true,
    keyboard: false,
    backdrop: 'static'
  });
}

function aktivasi_email(){
  $('#myAktivasi').modal({
    show: true,
    keyboard: false,
    backdrop: 'static'
  });
}

var myWindow = $("#window"),
    btn_daftar = $("#btn_daftar");
$(document).ready(function() {
    // create DatePicker from input HTML element
    $('.input-sk').focus(function(){
        $(this).parents('.form-sk').css({ "box-shadow": "0 15px 20px rgba(0, 0, 0, 0.2)", "transition": "all 0.2s ease-in", "padding": "0.5rem 0.6rem"});
    }).blur(function(){
        $(this).parent('.form-sk').css({ "box-shadow": "none", "padding": "0.2rem 0.5rem" });
    });

    $('#ulangi_ktp').bind("cut copy paste",function(e) {
      e.preventDefault();
    });

    $('#ulangi_password').bind("cut copy paste",function(e) {
      e.preventDefault();
    });
    $("#datepicker").kendoDatePicker();

    $("#dd_jenjang").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { text: "SMA/SMK",value:"SMA/SMK" },
                { text: "D-III",value:"D-III" },
                { text: "S1/D-IV",value:"S1/D-IV" },
              ]
          });

    // $("#dd_prodi").kendoDropDownList({
    //           dataTextField: "text",
    //           dataValueField: "value",
    //           optionLabel: " -- Select -- ",
    //           dataSource: [
    //             { text: "ADMINISTRASI BISNIS",value:"ADMINISTRASI BISNIS" },
    //             { text: "ADMINISTRASI NIAGA",value:"ADMINISTRASI NIAGA" },
    //             { text: "ADMINISTRASI KANTOR",value:"ADMINISTRASI KANTOR" },
    //           ]
    //       });

    $("#dd_jurusan").kendoDropDownList({
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
    // $("#dd_jurusan").kendoDropDownList({
    //           dataTextField: "text",
    //           dataValueField: "value",
    //           optionLabel: " -- Select -- ",
    //           dataSource: [
    //             { text: "ADMINISTRASI BISNIS(KEUANGAN)",value:"ADMINISTRASI BISNIS(KEUANGAN)" },
    //             { text: "ADMINISTRASI BISNIS(MANAJEMEN)",value:"ADMINISTRASI BISNIS(MANAJEMEN)" },
    //             { text: "ILMU ADMINISTRASI BISNIS",value:"ILMU ADMINISTRASI BISNIS" },
    //           ]
    //       });
});
    // $("#monthpicker").kendoDatePicker({
    //     // defines the start view
    //     start: "year",
    //
    //     // defines when the calendar should return date
    //     depth: "year",
    //
    //     // display month and year in the input
    //     format: "MMMM yyyy",
    //
    //     // specifies that DateInput is used for masking the input element
    //     dateInput: true
    // });

    btn_daftar.click(function() {
        // myWindow.data("kendoWindow").center().open();
        // btn_daftar.fadeOut();
        $('#myModal').modal({
            show: true,
            keyboard: false,
            backdrop: 'static'
        });
        // $('#myModal').modal().show();
        reset_register();
        grecaptcha.reset(recaptcha2);


    });
    $("#myModal" ).on('shown.bs.modal', function(){
      $("#regis_modal").scrollTop(0);
    });

    // function onClose() {
    //     btn_daftar.fadeIn();
    // }

    // myWindow.kendoWindow({
    //     width: "70%",
    //     title: "About Alvar Aalto",
    //     visible: false,
    //     actions: [
    //         "Pin",
    //         "Minimize",
    //         "Maximize",
    //         "Close"
    //     ],
    //     close: onClose
    // }).data("kendoWindow");

    function closeAll(){
      $(".modal").modal("hide");
    }

    function reset_register(){
      $("#nama_lengkap").val("");
      $("#nomor_ktp").val("");
      $("#ulangi_ktp").val("");
      $("#email").val("");
      $("#password1").val("");
      $("#ulangi_password").val("");
      $("#dd_jenjang").data("kendoDropDownList").value(-1);
      // $("#dd_prodi").data("kendoDropDownList").value(-1);
      $("#dd_jurusan").data("kendoDropDownList").value(-1);
      $("#nem_ipk").val("");

      $("#err_nama_lengkap").text("");
      $("#err_nomor_ktp").text("");
      $("#err_ulangi_ktp").text("");
      $("#err_email").text("");
      $("#err_password1").text("");
      $("#err_ulangi_password").text("");
      $("#err_dd_jenjang").text("");
      // $("#err_dd_prodi").text("");
      $("#err_dd_jurusan").text("");
      $("#err_nem_ipk").text("");
      $("#err_recaptcha2").text("");
    }

    $("#btn_perbaiki").click(function(){
      $('#mdKonfirmasi').modal('toggle');
      $('#myModal').modal({
          show: 'true',
          keyboard: false,
          backdrop: 'static'
      });
      grecaptcha.reset(recaptcha2);
    });

    $("#btn_register").click(function(){
      // var action = $('#form-user').attr('action');
      var register = {
        nama_lengkap : $("#nama_lengkap").val(),
        nomor_ktp : $("#nomor_ktp").val(),
        ulangi_ktp : $("#ulangi_ktp").val(),
        email : $("#email").val(),
        password : $("#password1").val(),
        ulangi_password : $("#ulangi_password").val(),
        jenjang : $("#dd_jenjang").val(),
        // program_studi : $("#dd_prodi").val(),
        jurusan : $("#dd_jurusan").val(),
        nem_ipk : $("#nem_ipk").val(),
        reCAPTCHA : $("#g-recaptcha-response-1").val(),
      }
      console.log(register);
      $.ajax("<?php echo base_url().'user/register_check';?>", {
        dataType : 'json',
        type : 'POST',
        data: register,
        success: function(data){
          console.log(data);
          if(data.status == 'success'){
            swal({
              title: "Apakah Anda yakin?",
              text: "Apakah Anda yakin bahwa data yang anda masukkan benar? Data nomor KTP tidak dapat diganti setelah pendaftaran Anda setujui.",
              type: "warning",
              showCancelButton:true,
              // confirmButtonColor:"#dd6b55",
              confirmButtonText:"Benar",
              cancelButtonText:"Perbaiki",
              closeOnConfirm:true,
              closeOnCancel:true,
            },function(isConfirm){
              if(isConfirm){
                $("#err_nama_lengkap").text("");
                $("#err_nomor_ktp").text("");
                $("#err_ulangi_ktp").text("");
                $("#err_email").text("");
                $("#err_password1").text("");
                $("#err_ulangi_password").text("");
                $("#err_dd_jenjang").text("");
                // $("#err_dd_prodi").text("");
                $("#err_dd_jurusan").text("");
                $("#err_nem_ipk").text("");
                $("#err_recaptcha2").text("");
                grecaptcha.reset(recaptcha2);
                $("#form_regis").hide();
                $("#spinner1").removeClass("hidden");
                $("#p_spinner1").removeClass("hidden");
                $.ajax("<?php echo base_url().'user/register_submit';?>", {
                  dataType : 'json',
                  type : 'POST',
                  data: register,
                  success: function(data){
                    console.log(data);
                    $("#form_regis").show();
                    $("#spinner1").addClass("hidden");
                    $("#p_spinner1").addClass("hidden");
                    if(data.status == 'success'){
                      $('#mdKonfirmasi').modal('toggle');
                      $('#mdSuccessReg').modal({
                          show: 'true',
                          keyboard: false,
                          backdrop: 'static'
                      });
                    }else{
                      $("#err_nama_lengkap").text(data.pesan.nama_lengkap);
                      $("#err_nomor_ktp").text(data.pesan.nomor_ktp);
                      $("#err_ulangi_ktp").text(data.pesan.ulangi_ktp);
                      $("#err_email").text(data.pesan.email);
                      $("#err_password1").text(data.pesan.password);
                      $("#err_ulangi_password").text(data.pesan.ulangi_password);
                      $("#err_dd_jenjang").text(data.pesan.jenjang);
                      // $("#err_dd_prodi").text(data.pesan.program_studi);
                      $("#err_dd_jurusan").text(data.pesan.jurusan);
                      $("#err_nem_ipk").text(data.pesan.nem_ipk);
                      $("#err_recaptcha2").text(data.pesan.recaptcha2);
                      grecaptcha.reset(recaptcha2);
                    }

                  }

                });
              }
            });
          }else{
            $("#err_nama_lengkap").text(data.pesan.nama_lengkap);
            $("#err_nomor_ktp").text(data.pesan.nomor_ktp);
            $("#err_ulangi_ktp").text(data.pesan.ulangi_ktp);
            $("#err_email").text(data.pesan.email);
            $("#err_password1").text(data.pesan.password);
            $("#err_ulangi_password").text(data.pesan.ulangi_password);
            $("#err_dd_jenjang").text(data.pesan.jenjang);
            // $("#err_dd_prodi").text(data.pesan.program_studi);
            $("#err_dd_jurusan").text(data.pesan.jurusan);
            $("#err_nem_ipk").text(data.pesan.nem_ipk);
            $("#err_recaptcha2").text(data.pesan.recaptcha2);
            grecaptcha.reset(recaptcha2);
          }

        }

      });

      //var mass_action_type = $('#form-user #mass_action_type').val();

      // if(action == 'mass'){
      //   var datatosend = $('#tbl-user input').serialize() + '&mass_action_type='+mass_action_type;
      // }
      // else{
      // var datatosend = $('#form-user').serialize();
      // }
      // console.log(datatosend);

      // $.ajax('http://localhost:8080/PAMAhire/user/action/tambah', {
      //   dataType : 'json',
      //   type : 'POST',
      //   data: datatosend,
      //   success: function(data){
      //     console.log(data);
      //     if(data.status == 'success'){
      //       alert('yuhii');
      //     }
      //
      //   }
      //
      // });
    });

    $("#btn_benar").click(function(){
      var register = {
        nama_lengkap : $("#nama_lengkap").val(),
        nomor_ktp : $("#nomor_ktp").val(),
        //ulangi_ktp : $("#ulangi_ktp").val(),
        email : $("#email").val(),
        password : $("#password1").val(),
        //ulangi_password : $("#ulangi_password").val(),
        jenjang : $("#dd_jenjang").val(),
        // program_studi : $("#dd_prodi").val(),
        jurusan : $("#dd_jurusan").val(),
        nem_ipk : $("#nem_ipk").val(),
      }
    });

    $("#btn_login").click(function(){
      var login = {
        ktp_email : $("#ktp_email").val(),
        password : $("#password").val(),
        reCAPTCHA : $("#g-recaptcha-response").val(),
      }
      $("#form_login").addClass("hidden");
      $("#h3_login").addClass("hidden");
      $(".spinner").removeClass("hidden");
      $("#p_spinner").removeClass("hidden");
      $.ajax("<?php echo site_url('user/login')?>/" , {
        dataType : 'json',
        type : 'POST',
        data: login,
        success: function(data){
          console.log(data);

          if(data.status == 'success'){
            if(data.pesan.group == 'user'){
                window.location.href = "<?php echo site_url('dashboard')?>/";
            }else{
                window.location.href = "<?php echo site_url('dashboard/admin')?>/";
            }
          }else{
            $("#form_login").removeClass("hidden");
            $("#h3_login").removeClass("hidden");
            $(".spinner").addClass("hidden");
            $("#p_spinner").addClass("hidden");

            if(data.pesan.ktp_email != ""){
                $("#err_ktp_email").text(data.pesan.ktp_email);
                $("#err_ktp_email").removeClass("hidden");
            }else{
                $("#err_ktp_email").text("");
                $("#err_ktp_email").addClass("hidden");
            }
            if(data.pesan.password != ""){
                $("#err_password").text(data.pesan.password);
                $("#err_password").removeClass("hidden");
            }else {
                $("#err_password").text("");
                $("#err_password").addClass("hidden");
            }
            if(data.pesan.recaptcha1 != ""){
                $("#err_recaptcha1").text(data.pesan.recaptcha1);
                $("#err_recaptcha1").removeClass("hidden");
            }else {
                $("#err_recaptcha1").text("");
                $("#err_recaptcha1").addClass("hidden");
            }
            grecaptcha.reset(recaptcha1);
          }


        }

      });
    });
</script>

<?php get_template('footer');?>
