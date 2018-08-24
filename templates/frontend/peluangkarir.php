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
   min-height: 300px;
   border: 1px solid #e7e7e7;
   overflow: hidden;
   height: auto;
   position: relative;
}


.slide-carousel {
   width: 22%;
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
   width: 78%;
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

.slide-content table tr td label{
  width: 150px;
  float: left;
  line-height: 18px;
  font-weight: 400;
}

.slide-content table tr td label:after{
  content: ":";
  float: right;
}

body{
 background: #f5f5f5;
}

</style>

<div id="information" style="background:#f5f5f5" class="spacer reserve-info ">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2" style="padding-left:0px!important;padding-right:0px!important">
        <!-- <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <h4>Made with <i class="fa fa-fw fa-heart text-danger"></i> by <a href="http://twitter.com/AlexMahrt" class="btn btn-primary btn-xs" target="_blank"><i class="fa fa-fw fa-twitter"></i> @AlexMahrt</a></h4>
            </div>
        </div> -->
        <!-- <hr> -->
        <!-- Begin of rows -->
        <?php if (is_array($datarekrutmen) || is_object($datarekrutmen)) { ?>
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
        <div class="row carousel-row" style="margin:10px;background-color:white;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:4px;Box-shadow:0px 5px 20px rgba(0,0,0,0.05)">
            <div class="col-sm-12 slide-row" >
                <div id="carousel-1" class="carousel slide slide-carousel" data-ride="carousel">
                    <?php
                      if($rekrut->status_lowongan == 'SEDANG DIBUKA'){
                     ?>
                       <div  class="carousel-inner" style="height:100%!important;background-color:white;min-height:320px;position:relative">
                       <div style="text-align:center;display: table !important;width: 100%;height: 100%;">
                         <div  style="width:45%;position:absolute;top:20px;padding:0 6px;">
                           <span style="color:#9bbb59;border:1.5px solid #9bbb59;display:inline-block;padding:4px;border-radius:5px;text-align:center;font-size:17px;line-height:18px;font-weight:400;margin:0">Peluang Karir Ini Sedang Dibuka</span>
                         </div>
                       </div>
                    <?php } else if($rekrut->status_lowongan == 'DITUTUP') {?>
                        <div  class="carousel-inner" style="height:100%!important;background-color:white;min-height:302px;position:relative">
                        <div style="text-align:center;display: table !important;width: 100%;height: 100%;">
                          <div  style="width:45%;position:absolute;top:20px;padding:0 6px;">
                            <span style="color:#ff0000;border:1.5px solid #ff0000;display:inline-block;padding:4px;border-radius:5px;text-align:center;font-size:17px;line-height:18px;font-weight:400;margin:0">Peluang Karir Ini Sudah Tutup</span>
                          </div>
                        </div>
                    <?php } else{ ?>
                        <div  class="carousel-inner" style="height:100%!important;background-color:white;min-height:302px;position:relative">
                        <div style="text-align:center;display: table !important;width: 100%;height: 100%;">
                          <div  style="width:45%;position:absolute;top:20px;padding:0 6px;">
                            <span style="color:#ff0000;border:1.5px solid #ff0000;display:inline-block;padding:4px;border-radius:5px;text-align:center;font-size:17px;line-height:18px;font-weight:400;margin:0">Peluang Karir Ini Belum Dibuka</span>
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
                <div class="slide-content">
                    <table class="fixed">
                      <col width="900px">
                      <tr>
                        <td>
                          <a href="<?php echo base_url().'PeluangKarir/peluangkarirdetail/'.$rekrut->pid.'/'.$rekrut->pid_posisi ;?>" style="display:block;font-size:22px;margin-top:10px;margin-bottom:10px;line-height:28px"><?php echo $rekrut->judul_rekrutmen; ?></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Posisi</label><span style="font-size:15px;font-weight:400;color:#3a3a3a;line-height:18px;padding:0 0 0 140px;display:block"><?php echo $rekrut->position_title; ?></span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Jenjang Pendidikan</label><span style="font-size:15px;font-weight:400;color:#3a3a3a;line-height:18px;padding:0 0 0 140px;display:block"><?php echo $rekrut->education; ?></span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Program Studi</label><span style="font-size:15px;font-weight:400;color:#3a3a3a;line-height:18px;padding:0 0 0 140px;display:block">
                            <?php foreach ($sub_menu_posisi->result() as $sub_posisi) {
                              $sub_menu_jurusan = $this->db->get_where('tbl_m_jurusan', array('pid' => $sub_posisi->pid_jurusan));
                              foreach ($sub_menu_jurusan->result() as $sub_jurusan) {
                              echo $sub_jurusan->jurusan.', ';
                            ?>

                          <?php }} ?>
                          </span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <label>Waktu pendaftaran</label><span style="font-size:15px;font-weight:400;color:#3a3a3a;line-height:18px;padding:0 0 0 140px;display:block"><?php echo date('d F Y', strtotime($rekrut->tanggal_mulai)).' - '. date('d F Y', strtotime($rekrut->tanggal_selesai)); ?></span>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <br/>
                          <button class="btn btn-sm btn-default" style="background:#fefce0;color:#3a3a3a;border:1px solid #aa671d!important;border-radius:15px!important">Lokasi Tes <?php echo $rekrut->kota_kabupaten; ?></button>
                        </td>
                      </tr>
                    </table>
                </div>
                <div>
                    <span class="pull-right" style="padding-right:20px;margin-top:30px;margin-bottom:4px" >
                        <a href="<?php echo base_url().'PeluangKarir/peluangkarirdetail/'.$rekrut->pid.'/'.$rekrut->pid_posisi ;?>">Selengkapnya..</a>
                    </span>
                </div>
            </div>
        </div>
      <?php }}else{
       ?>
       <h2>belum ada peluang karir</h2>
     <?php } ?>
      <div class="row">
        <span class="pull-right" style="margin-right:50px" >
          <?php
              echo $this->pagination->create_links();
          ?>
        </span>
      </div>
      </div>

    </div>
  </div>
</div>


<?php get_template('footer');?>
