<?php get_template('header');?>
<style>
  .modal-dialog{
    overflow-y: initial !important
  }
  .modal-body{
    height: 420px;
    overflow-y: auto;
  }
  label {
      font-weight: normal !important;
      display: block;
  }
  .k-dropdown .k-dropdown-wrap{
      height: 34px;
      -webkit-appearence: none;
      background: transparent;
      border-radius: 5px;
      border: 2px solid #bfa145;
      margin-bottom: 5px;
  }

  .input-sk{
    border: none;
    background: transparent;
    padding: 5px 0;
  }

  .input-sk:webkit-autofill,
  .input-sk:webkit-autofill:hover,
  .input-sk:webkit-autofill:focus{
    -webkit-box-shadow:0 0 0px 1000px #f2f5f7 inset;
  }

  .form-sk{
    border-radius: 5px;
    border: 2px solid #bfa145;
    margin-bottom: 5px;
    padding: 0.2rem 0.5rem;
  }

  .is-full {
    width: 100%;
    text-align: left;
  }

  .form-control{
    border: none;
  }
  /* .k-dropdown{

  } */
  .btn-sk{
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
  }
  .hidden{
    display: none !important;
  }
  .show_err{display: inline-block;}
</style>
<div class="container" style="width:95%">
  <div class="row">
    <div class="col-xs-12 col-md-8" style="float:none !important;margin:0 auto !important">
      <div class='spinner hidden'>
        <div class='rect1'></div>
        <div class='rect2'></div>
        <div class='rect3'></div>
      </div>
      <form class="form-horizontal" style="margin-top:50px;margin-bottom:50px">
        <div class="form-group">
          <h2 class="modal-title">DAFTAR REKRUTMEN PAMA</h2>
        </div>
        <div class="form-group form-sk">
          <label class="control-label" style="text-align:left" for="nama_lengkap">Nama Lengkap</label>
          <input type="text" class="form-control input-sk" id="nama_lengkap" name="nama_lengkap">
          <p id="err_nama_lengkap" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px">mantap</p>
        </div>
        <div class="form-group form-sk">
          <label class="control-label" style="text-align:left" for="email">Email</label>
          <input type="text" class="form-control input-sk" id="email" name="email">
          <p id="err_email" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px">mantap</p>
        </div>
        <div class="form-group form-sk">
          <label class="control-label" style="text-align:left" for="nomor_ktp">Nomor KTP</label>
          <input type="text" class="form-control input-sk" id="nomor_ktp" maxlength="16" name="nomor_ktp">
          <p id="err_nomor_ktp" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px">mantap</p>
        </div>
        <div class="form-group form-sk">
          <label class="control-label" style="text-align:left" for="ulangi_ktp">Ulangi Nomor KTP</label>
          <input type="text" class="form-control input-sk" id="ulangi_ktp" name="ulangi_ktp">
          <p id="err_ulangi_ktp" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px">mantap</p>
        </div>
        <div class="form-group form-sk">
          <label class="control-label" style="text-align:left" for="password">Password</label>
          <input type="password" class="form-control input-sk" id="password" maxlength="16" name="password">
          <p id="err_password" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px">mantap</p>
        </div>
        <div class="form-group form-sk">
          <label class="control-label" style="text-align:left" for="ulangi_password">Ulangi Password</label>
          <input type="password" class="form-control input-sk" id="ulangi_password" name="ulangi_password">
          <p id="err_ulangi_password" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px">mantap</p>
        </div>
        <div class="form-group">
          <input type="text" class="form-control is-full" id="dd_jenjang" name="jenjang">
          <p id="err_dd_jenjang" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px">mantap</p>
        </div>
        <div class="form-group">
          <input type="text" class="form-control is-full" id="dd_prodi" name="program_studi">
          <p id="err_dd_prodi" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px">mantap</p>
        </div>
        <div class="form-group">
          <input type="text" class="form-control is-full" id="dd_konsentrasi" name="konsentrasi_jurusan">
          <p id="err_dd_konsentrasi" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px">mantap</p>
        </div>
        <div class="form-group form-sk">
          <label class="control-label" style="text-align:left" for="nem_ipk">NEM/IPK</label>
          <input type="text" class="form-control input-sk" id="nem_ipk" name="nem_ipk">
          <p id="err_nem_ipk" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px">mantap</p>
        </div>
        <div class="form-group">
          <div style="margin:0 auto !important" id="recaptcha1"></div>
          <p id="err_recaptcha1" class="show_err hidden" style="text-align:left;color:red;margin-top:3px;margin-bottom:0 !important;background-color:#f44f4f;color:white;padding:0 5px">mantap</p>
        </div>
        <div class="form-group">
          <button type="button" id="btn_register" class="btn-sk">Daftar</button>
        </div>
      </form>

    </div>
  </div>
</div>

<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
<script>
  var recaptcha1;
  var myCallBack = function() {
    //Render the recaptcha1 on the element with ID "recaptcha1"
    recaptcha1 = grecaptcha.render('recaptcha1', {
      'sitekey' : '6LdCnUsUAAAAADtKmrmf2xa-8Wtd6zObKNKjlL_S', //Replace this with your Site key
      'theme' : 'light'
    });
  };
</script>
<script>
  $(document).ready(function(){
//--- input effect
    $('.input-sk').focus(function(){
        $(this).parents('.form-sk').css({ "box-shadow": "0 15px 20px rgba(0, 0, 0, 0.2)", "transition": "all 0.2s ease-in", "padding": "0.5rem 0.6rem"});
    }).blur(function(){
        $(this).parent('.form-sk').css({ "box-shadow": "none", "padding": "0.2rem 0.5rem" });
    });

    $("#dd_jenjang").kendoDropDownList({
        dataTextField: "text",
        dataValueField: "value",
        optionLabel: " Pilih Jenjang Pendidikan ",
        dataSource: [
          { text: "SMA/SMK",value:"SMA/SMK" },
          { text: "D-III",value:"D-III" },
          { text: "S1/D-IV",value:"S1/D-IV" }
        ]
    });

    $("#dd_prodi").kendoDropDownList({
        dataTextField: "text",
        dataValueField: "value",
        optionLabel: " Pilih Program Studi ",
        dataSource: [
          { text: "ADMINISTRASI BISNIS",value:"ADMINISTRASI BISNIS" },
          { text: "ADMINISTRASI NIAGA",value:"ADMINISTRASI NIAGA" },
          { text: "ADMINISTRASI KANTOR",value:"ADMINISTRASI KANTOR" },
        ]
    });

    $("#dd_konsentrasi").kendoDropDownList({
        dataTextField: "text",
        dataValueField: "value",
        optionLabel: " Pilih Konsentrasi Jurusan ",
        dataSource: [
          { text: "ADMINISTRASI BISNIS(KEUANGAN)",value:"ADMINISTRASI BISNIS(KEUANGAN)" },
          { text: "ADMINISTRASI BISNIS(MANAJEMEN)",value:"ADMINISTRASI BISNIS(MANAJEMEN)" },
          { text: "ILMU ADMINISTRASI BISNIS",value:"ILMU ADMINISTRASI BISNIS" },
        ]
    });
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
      reCAPTCHA : $("#g-recaptcha-response").val(),
    }

    $.ajax('http://localhost:8080/PAMAhire/user/register_check', {
      dataType : 'json',
      type : 'POST',
      data: register,
      success: function(data){
        console.log(data);
        if(data.status == 'success'){
          alert("mantap");
          grecaptcha.reset(recaptcha1);
        }
        if(data.pesan.nama_lengkap != ""){
            $("#err_nama_lengkap").text(data.pesan.nama_lengkap);
            $("#err_nama_lengkap").removeClass("hidden");
        }else{
            $("#err_nama_lengkap").text("");
            $("#err_nama_lengkap").addClass("hidden");
        }
        if(data.pesan.nomor_ktp != ""){
            $("#err_nomor_ktp").text(data.pesan.nomor_ktp);
            $("#err_nomor_ktp").removeClass("hidden");
        }else {
            $("#err_nomor_ktp").text("");
            $("#err_nomor_ktp").addClass("hidden");
        }
        if(data.pesan.ulangi_ktp != ""){
            $("#err_ulangi_ktp").text(data.pesan.ulangi_ktp);
            $("#err_ulangi_ktp").removeClass("hidden");
        }else {
            $("#err_ulangi_ktp").text("");
            $("#err_ulangi_ktp").addClass("hidden");
        }
        if(data.pesan.email != ""){
            $("#err_email").text(data.pesan.email);
            $("#err_email").removeClass("hidden");
        }else {
            $("#err_email").text("");
            $("#err_email").addClass("hidden");
        }
        if(data.pesan.password != ""){
            $("#err_password").text(data.pesan.password);
            $("#err_password").removeClass("hidden");
        }else {
            $("#err_password").text("");
            $("#err_password").addClass("hidden");
        }
        if(data.pesan.ulangi_password != ""){
            $("#err_ulangi_password").text(data.pesan.ulangi_password);
            $("#err_ulangi_password").removeClass("hidden");
        }else {
            $("#err_ulangi_password").text("");
            $("#err_ulangi_password").addClass("hidden");
        }
        if(data.pesan.jenjang != ""){
            $("#err_dd_jenjang").text(data.pesan.jenjang);
            $("#err_dd_jenjang").removeClass("hidden");
        }else {
            $("#err_dd_jenjang").text("");
            $("#err_dd_jenjang").addClass("hidden");
        }
        if(data.pesan.program_studi != ""){
            $("#err_dd_prodi").text(data.pesan.program_studi);
            $("#err_dd_prodi").removeClass("hidden");
        }else {
            $("#err_dd_prodi").text("");
            $("#err_dd_prodi").addClass("hidden");
        }
        if(data.pesan.konsentrasi_jurusan != ""){
            $("#err_dd_konsentrasi").text(data.pesan.konsentrasi_jurusan);
            $("#err_dd_konsentrasi").removeClass("hidden");
        }else {
          $("#err_dd_konsentrasi").text("");
          $("#err_dd_konsentrasi").addClass("hidden");
        }
        if(data.pesan.nem_ipk != ""){
            $("#err_nem_ipk").text(data.pesan.nem_ipk);
            $("#err_nem_ipk").removeClass("hidden");
        }else{
            $("#err_nem_ipk").text("");
            $("#err_nem_ipk").addClass("hidden");
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
</script>
<?php get_template('footer');?>
