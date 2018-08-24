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
   position: absolute;
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
   position: absolute;
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
 background: #eef5f9;
}
.lbl-detail:after{
  content: ":";
  float: right;
}

@media only screen and (max-width:768px) {
  .div-detail{
    width: 100%!important;
  }
}

.div-detail{
  width:45%;padding:0 10px;
}
</style>

<div id="information" style="background:#eef5f9" class="spacer reserve-info ">
  <div class="container">
    <div class="row">
      <div class="col-md-12" style="padding-left:0px!important;padding-right:0px!important;background-color:white;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:4px;Box-shadow:0px 5px 20px rgba(0,0,0,0.05)">
        <div class="col-md-12" style="display:flex">
          <div style="padding:10px 20px;width:85%;background:#fafafa">
            <div style="padding:10px 0 0 10px;">
              <span style="background:#fefce0;border:1px solid #aa671d;padding:3px 20px;border-radius:20px;font-size:12px;display:inline-block;margin:0 0 5px 0">
                Lokasi Tes <?php echo $datarekrutmen->kota_kabupaten; ?>
              </span>
              <h4 style="font-size:17.5px"><?php echo $datarekrutmen->judul_rekrutmen; ?></h4>
              <h1 style="font-size:24px;color:#006e8c;margin-top:0px!important"><?php echo $datarekrutmen->position_title; ?></h1>
            </div>
          </div>
          <div style="width:15%;background:#d4e3fc;position:relative;">
            <span style="display:block;background:#006e8c;color:#fff;text-align:center;padding:3px 7px;"></span>
            <span style="font-size:50px;text-align:center;display:block;line-height:50px;padding:15px 0;">
              <?php   if($datarekrutmen->status_lowongan == 'DITUTUP'){ ?>
                <span style="color:#ff0000;border:1px solid #ff0000;display:inline-block;padding:5px;border-radius:5px;font-size:18px;line-height:18px">
                  Sudah Tutup
                </span>
              <?php } else if($datarekrutmen->status_lowongan == 'SEDANG DIBUKA'){ ?>
                <span style="color:#9bbb59;border:1px solid #9bbb59;display:inline-block;padding:5px;border-radius:5px;font-size:18px;line-height:18px">
                  Sedang Dibuka
                </span>
              <?php } else { ?>
                <span style="color:#ff0000;border:1px solid #ff0000;display:inline-block;padding:5px;border-radius:5px;font-size:18px;line-height:18px">
                  Belum Dibuka
                </span>
              <?php } ?>
            </span>
          </div>
        </div>
        <div class="col-md-12">
          <p style="margin-bottom:10px!important;font-size:13px;padding:20px 20px 0 20px">
            <i>*Penetapan profesi dapat berubah sesuai kebutuhan PT Pama Persada Nusantara</i>
          </p>
          <div style="background:#fafafa;border:1px solid #d4e3fc;margin:20px;padding:10px 20px;display:flex;flex-wrap:wrap;position:relative">
            <div class="div-detail">
              <label class="lbl-detail" style="float:left;font-size:12px;width:130px">Dibuka</label>
              <ul style="margin:0;list-style:none;padding:0 0 0 140px">
                <li><?php echo date('d F Y', strtotime($datarekrutmen->tanggal_mulai)); ?></li>
              </ul>
            </div>
            <div class="div-detail">
              <label class="lbl-detail" style="float:left;font-size:12px;width:130px">Ditutup</label>
              <ul style="margin:0;list-style:none;padding:0 0 0 140px">
                <li><?php echo date('d F Y', strtotime($datarekrutmen->tanggal_selesai)); ?></li>
              </ul>
            </div>
            <div class="div-detail">
              <label class="lbl-detail" style="float:left;font-size:12px;width:130px">Jenjang</label>
              <ul style="margin:0;list-style:none;padding:0 0 0 140px">
                <li><?php echo $datarekrutmen->education; ?></li>
              </ul>
            </div>
            <div class="div-detail">
              <label class="lbl-detail" style="float:left;font-size:12px;width:130px">Posisi</label>
              <ul style="margin:0;list-style:none;padding:0 0 0 140px">
                <li><?php echo $datarekrutmen->position_title; ?></li>
              </ul>
            </div>
            <div class="div-detail">
              <label class="lbl-detail" style="float:left;font-size:12px;width:130px">Kota Rekrutmen</label>
              <ul style="margin:0;list-style:none;padding:0 0 0 140px">
                <li><?php echo $datarekrutmen->kota_kabupaten; ?></li>
              </ul>
            </div>
            <div class="div-detail">
              <label class="lbl-detail" style="float:left;font-size:12px;width:130px">Kode Posisi</label>
              <ul style="margin:0;list-style:none;padding:0 0 0 140px">
                <li><?php echo $datarekrutmen->kode_posisi; ?></li>
              </ul>
            </div>
            <div class="div-detail">
              <label class="lbl-detail" style="float:left;font-size:12px;width:130px">Angkatan</label>
              <ul style="margin:0;list-style:none;padding:0 0 0 140px">
                <li><?php echo $datarekrutmen->gelombang; ?></li>
              </ul>
            </div>
            <div class="div-detail">
              <label class="lbl-detail" style="float:left;font-size:12px;width:130px">Minimal IPK</label>
              <ul style="margin:0;list-style:none;padding:0 0 0 140px">
              <?php
                $sub_posisi = $this->db->get_where('tbl_m_posisi_detail', array('pid_posisi' => $datarekrutmen->pid_posisi));
                foreach ($sub_posisi->result() as $sub_pos) {
                $sub_jurusan = $this->db->get_where('tbl_m_jurusan', array('pid' => $sub_pos->pid_jurusan))->row();
              ?>
                <li style="line-height:18px;font-weight:400"><?php echo  $sub_jurusan->jurusan.' minimal '.$sub_pos->min_gpa; ?></li>
              <?php } ?>
              </ul>
            </div>
            <div class="div-detail">
              <label class="lbl-detail" style="float:left;font-size:12px;width:130px">Program Studi</label>
              <ul style="margin:0;list-style:none;padding:0 0 0 140px">
                <?php
                  $sub_posisi = $this->db->get_where('tbl_m_posisi_detail', array('pid_posisi' => $datarekrutmen->pid_posisi));
                  foreach ($sub_posisi->result() as $sub_pos) {
                  $sub_jurusan = $this->db->get_where('tbl_m_jurusan', array('pid' => $sub_pos->pid_jurusan))->row();
                ?>
                  <li style="line-height:18px;font-weight:400"><?php echo  $sub_jurusan->jurusan; ?></li>
                <?php } ?>
              </ul>
            </div>
            <div  style="width:10%;position:absolute;right:10px;top:20px;padding:0 10px;">
              <?php   if($datarekrutmen->status_lowongan == 'DITUTUP'){ ?>
              <span style="color:#ff0000;border:1px solid #ff0000;display:inline-block;padding:5px;border-radius:5px;text-align:center;font-size:14px;line-height:18px;font-weight:400;margin:0">Peluang Karir Ini Sudah Tutup</span>
            <?php } else if($datarekrutmen->status_lowongan == 'SEDANG DIBUKA'){ ?>
              <span style="color:#9bbb59;border:1px solid #9bbb59;display:inline-block;padding:5px;border-radius:5px;text-align:center;font-size:14px;line-height:18px;font-weight:400;margin:0">Peluang Karir Ini Sedang Dibuka</span>
              <?php } else { ?>
              <span style="color:#ff0000;border:1px solid #ff0000;display:inline-block;padding:5px;border-radius:5px;text-align:center;font-size:14px;line-height:18px;font-weight:400;margin:0">Peluang Karir Ini Belum Dibuka</span>
              <?php } ?>
            </div>
          </div>
        </div>
        <?php
        $_this =& get_instance();

        $user_session = $_this->session->userdata;

        if(isset($user_session['ID'])){
          if($datarekrutmen->status_lowongan == 'SEDANG DIBUKA'){
        ?>
        <div class="col-md-12 text-center">
          <button type="button" onclick="kirim_lamaran('<?php echo $datarekrutmen->pid ?>','<?php echo $datarekrutmen->pid_posisi ?>')" class="btn btn-success" style="margin-bottom:20px">Lamar Sekarang</button>
        </div>
      <?php }} ?>
      </div>

    </div>
  </div>
</div>

<script>
  function kirim_lamaran(s_str_pid,s_str_pid_posisi){
    var data_lamaran = {
      pid_rekrutmen : s_str_pid,
      pid_posisi : s_str_pid_posisi,
    }
    $.ajax("<?php  echo base_url().'peluangkarir/ajax_kirim_lamaran' ;?>", {
      dataType : 'json',
      type : 'POST',
      data: data_lamaran,
      success: function(data){
        swal("",data.pesan,data.status);
      }

    });
  }
</script>

<?php get_template('footer');?>
