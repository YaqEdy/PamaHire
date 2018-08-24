<?php get_template('header');?>
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
</style>


<div id="information" class="spacer reserve-info ">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6" style="float:none !important;margin:0 auto !important">
          <div class="panel panel-default">
              <div class="panel-heading">
                  <h1 class="panel-title"style="text-align:center;font-size:25px;color:#bfa145">LOGIN MEMBER</h1>
              </div>
              <div class="panel-body">
                <form role="form" class="wowload fadeInRight">
                    <div class="form-group">
                        <input type="text" class="form-control"  placeholder="No.KTP atau Email">

                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control"  placeholder="Kata Kunci">

                    </div>
                    <div class="form-group">
                      <div style="transform:scale(0.85);-webkit-transform:scale(0.85);transform-origin:0 0;-webkit-transform-origin:0 0;" id="recaptcha1"></div>
                        <!-- <div class="g-recaptcha" data-theme="light" data-sitekey="6LdCnUsUAAAAADtKmrmf2xa-8Wtd6zObKNKjlL_S" style="transform:scale(0.70);-webkit-transform:scale(0.70);transform-origin:0 0;-webkit-transform-origin:0 0;"></div> -->
                    </div>
                    <div class="form-group">
                        <a style="width:49%;" id="btn_daftar" class="btn btn-default">Daftar</a>
                        <a style="width:49%;" id="btn_coba" class="btn btn-default">Masuk</a>
                    </div>

                </form>
              </div>
              <div class="panel-footer text-center">
                <div class="form-group">
                    <a style="float:left;">Lupa Password</a>
                    <a style="float:right;">Aktifasi Ulang Email</a>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">DAFTAR KE SISTEM REKRUTMEN PAMA</h4>
      </div>
      <div id="crot" class="modal-body">
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group">
            <label class="control-label col-sm-12" style="text-align:left;color:#bfa145">Masukan data-data Anda untuk mendaftar :</label>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="nama_lengkap">Nama Lengkap :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
              <label id="err_nama_lengkap" style="text-align:left;color:red;margin-top:3px" for="nama_lengkap"></label>
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
            <label class="control-label col-sm-4" style="text-align:left" for="email">Alamat Email :</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="email" name="email">
              <label id="err_email" style="text-align:left;color:red;margin-top:3px" ></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="password">Password :</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="password" name="password">
              <label id="err_password" style="text-align:left;color:red;margin-top:3px"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="ulangi_password">Ulangi Password :</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="ulangi_password" name="ulangi_password">
              <label id="err_ulangi_password" style="text-align:left;color:red;margin-top:3px"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-12" style="text-align:left;color:#bfa145">Masukan data pendidikan terakhir Anda :</label>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="jenjang">Jenjang Pendidikan :</label>
            <div class="col-sm-8">
              <input type="text" style="width:100%" id="dd_jenjang" name="jenjang">
              <label id="err_dd_jenjang" style="text-align:left;color:red;margin-top:3px"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="program_studi">Program Studi :</label>
            <div class="col-sm-8">
              <input type="text" style="width:100%" id="dd_prodi" name="program_studi">
              <label id="err_dd_prodi" style="text-align:left;color:red;margin-top:3px"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="konsentrasi_jurusan">Konsentrasi Jurusan :</label>
            <div class="col-sm-8">
              <input type="text" style="width:100%" id="dd_konsentrasi" name="konsentrasi_jurusan">
              <label id="err_dd_konsentrasi" style="text-align:left;color:red;margin-top:3px"></label>
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
                <!-- <div class="g-recaptcha" data-theme="light" data-sitekey="6LdCnUsUAAAAADtKmrmf2xa-8Wtd6zObKNKjlL_S" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div> -->
                <label id="err_recaptcha1" class="control-label col-sm-8" style="text-align:left;color:red;margin-top:3px"></label>
              </div>

          </div>
        </form>
      </div>
      <div class="modal-footer">
          <button type="button" id="btn_register" style="width:48%;" class="btn btn-default form-control">DAFTAR</button>
          <button type="button" style="width:48%;" class="btn btn-default form-control" data-dismiss="modal">BATAL</button>
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
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left">Program Studi</label>
            <div class="col-sm-8">
              <label class="control-label col-sm-12" id="lb_prodi" style="text-align:left"></label>
            </div>
          </div>
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
          <button type="button" style="width:48%;" class="btn btn-default form-control" onclick="closeAll()" data-dismiss="modal">KEMBALI</button>
          <a id="btn_benar" style="width:48%;" class="btn btn-default form-control">LOGIN</a>
      </div>
    </div>
  </div>
</div>

<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
<script>
  var recaptcha1;
  var recaptcha2;
  var myCallBack = function() {
    //Render the recaptcha1 on the element with ID "recaptcha1"
    recaptcha1 = grecaptcha.render('recaptcha1', {
      'sitekey' : '6LdCnUsUAAAAADtKmrmf2xa-8Wtd6zObKNKjlL_S', //Replace this with your Site key
      'theme' : 'light'
    });

    //Render the recaptcha2 on the element with ID "recaptcha2"
    recaptcha2 = grecaptcha.render('recaptcha2', {
      'sitekey' : '6LdCnUsUAAAAADtKmrmf2xa-8Wtd6zObKNKjlL_S', //Replace this with your Site key
      'theme' : 'light'
    });
  };
</script>

<script>
var myWindow = $("#window"),
    btn_daftar = $("#btn_daftar");
$(document).ready(function() {
    // create DatePicker from input HTML element
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
                { text: "S2",value:"S2" },
              ]
          });

    $("#dd_prodi").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { text: "ADMINISTRASI BISNIS",value:"ADMINISTRASI BISNIS" },
                { text: "ADMINISTRASI NIAGA",value:"ADMINISTRASI NIAGA" },
                { text: "ADMINISTRASI KANTOR",value:"ADMINISTRASI KANTOR" },
              ]
          });

    $("#dd_konsentrasi").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { text: "ADMINISTRASI BISNIS(KEUANGAN)",value:"ADMINISTRASI BISNIS(KEUANGAN)" },
                { text: "ADMINISTRASI BISNIS(MANAJEMEN)",value:"ADMINISTRASI BISNIS(MANAJEMEN)" },
                { text: "ILMU ADMINISTRASI BISNIS",value:"ILMU ADMINISTRASI BISNIS" },
              ]
          });
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
    $("#btn_coba").click(function(){
      alert($("#g-recaptcha-response").val());
    });
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
      $("#crot").scrollTop(0);
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

    function reset_register(){
      $("#nama_lengkap").val("");
      $("#nomor_ktp").val("");
      $("#ulangi_ktp").val("");
      $("#email").val("");
      $("#password").val("");
      $("#ulangi_password").val("");
      $("#dd_jenjang").data("kendoDropDownList").value(-1);
      $("#dd_prodi").data("kendoDropDownList").value(-1);
      $("#dd_konsentrasi").data("kendoDropDownList").value(-1);
      $("#nem_ipk").val("");
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
        password : $("#password").val(),
        ulangi_password : $("#ulangi_password").val(),
        jenjang : $("#dd_jenjang").val(),
        program_studi : $("#dd_prodi").val(),
        konsentrasi_jurusan : $("#dd_konsentrasi").val(),
        nem_ipk : $("#nem_ipk").val(),
        reCAPTCHA : $("#g-recaptcha-response-1").val(),
      }

      $.ajax('http://localhost:8080/PAMAhire/user/register_check', {
        dataType : 'json',
        type : 'POST',
        data: register,
        success: function(data){
          console.log(data);
          if(data.status == 'success'){
            $("#err_nama_lengkap").text("");
            $("#err_nomor_ktp").text("");
            $("#err_ulangi_ktp").text("");
            $("#err_email").text("");
            $("#err_password").text("");
            $("#err_ulangi_password").text("");
            $("#err_dd_jenjang").text("");
            $("#err_dd_prodi").text("");
            $("#err_dd_konsentrasi").text("");
            $("#err_nem_ipk").text("");
            $("#err_recaptcha1").text("");
            grecaptcha.reset(recaptcha2);

            $('#myModal').modal('toggle');
            $('#mdKonfirmasi').modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            });
            $("#lb_nama_lengkap").text(": "+register.nama_lengkap);
            $("#lb_nomor_ktp").text(": "+register.nomor_ktp);
            $("#lb_email").text(": "+register.email);
            $("#lb_jenjang").text(": "+register.jenjang);
            $("#lb_prodi").text(": "+register.program_studi);
            $("#lb_jurusan").text(": "+register.konsentrasi_jurusan);
            $("#lb_nem_ipk").text(": "+register.nem_ipk);
          }else{
            $("#err_nama_lengkap").text(data.pesan.nama_lengkap);
            $("#err_nomor_ktp").text(data.pesan.nomor_ktp);
            $("#err_ulangi_ktp").text(data.pesan.ulangi_ktp);
            $("#err_email").text(data.pesan.email);
            $("#err_password").text(data.pesan.password);
            $("#err_ulangi_password").text(data.pesan.ulangi_password);
            $("#err_dd_jenjang").text(data.pesan.jenjang);
            $("#err_dd_prodi").text(data.pesan.program_studi);
            $("#err_dd_konsentrasi").text(data.pesan.konsentrasi_jurusan);
            $("#err_nem_ipk").text(data.pesan.nem_ipk);
            $("#err_recaptcha1").text(data.pesan.recaptcha1);
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
        password : $("#password").val(),
        //ulangi_password : $("#ulangi_password").val(),
        jenjang : $("#dd_jenjang").val(),
        program_studi : $("#dd_prodi").val(),
        konsentrasi_jurusan : $("#dd_konsentrasi").val(),
        nem_ipk : $("#nem_ipk").val(),
      }

      $.ajax('http://localhost:8080/PAMAhire/user/action/tambah', {
        dataType : 'json',
        type : 'POST',
        data: register,
        success: function(data){
          console.log(data);
          if(data.status == 'success'){
            $('#mdKonfirmasi').modal('toggle');
            $('#mdSuccessReg').modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            });
          }


        }

      });
    });
</script>
<?php get_template('footer');?>
