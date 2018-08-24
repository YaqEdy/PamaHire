 <?php get_template('headeradmin');?>

 <style>
  #table_gridPelamar{
    width: 800px;
    margin: 0 auto;
  }

  // .modal-dialog{
  //   width: 100%;
  //   height: 100%;
  //   margin: 0;
  //   padding: 0;
  // }
  // .modal-content{
  //   height: auto;
  //   min-height: 100%;
  //   border-radius:0;
  // }
</style>


 <div class="container">

  <div id="idgridPelamar">
   <div class="form-group">
    <label class="control-label col-sm-1">Rekrutment</label>
    <div class="col-sm-3">
      <div id="ddSource"></div>
    </div>
  </div>
  <br>
  <br>
  <br>

  <table id="table_gridPelamar" class="display nowrap table table-bordered" cellspacing="0" style="width:100%" >
    <thead>
      <tr>
        <th>No</th>
        <th>Detail</th>

        <th>profil_path</th>
        <th>nama_pelamar</th>
        <th>jenjang_pendidikan</th>
        <th>jurusan</th>
        <th>kode_profesi</th>
        <th>usia</th>
        <th>status_pernikahan</th>
        <th>jenkel</th>
        <th>nem_ipk</th>
        <th>status</th>
        <th>status_final</th>
        <th>verifikator</th>
        <th>last_update_date</th>
        <th>opsi</th>

        <th>kriteria</th>

        <th>no_ktp</th>
        <th>tempat_lahir</th>
        <th>tanggal_lahir</th>
        <th>alamat_ktp</th>
        <th>sekolah_universitas</th>
        <th>upload_ktp</th>
        <th>upload_akte_lahir</th>
        <th>upload_ijazah</th>
        <th>upload_transkrip</th>
        <th>position_title</th>
        <th>rekrutment</th>
        <th>gelombang</th>
        <th>pid_blacklist</th>
        <th>pid_pelamar</th>
        <th>Keterangan adm</th>

      <th>status_jenjang</th>
      <th>status_jurusan</th>
      <th>status_usia</th>
      <th>status_jenkel</th>
      <th>status_status_pernikahan</th>
      <th>status_ipk</th>

      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>

<div id="idgridvalidasi" hidden>
<button class="btn btn-warning" onclick="ClickBack()"><i class="glyphicon glyphicon-arrow-left"></i> Back</button>
<br>
<br>
 <div class="form-group">
  <label class="control-label col-sm-1">Rekrutment</label>
  <div class="col-sm-3">
    <div id="ddSource_validasi"></div>
  </div>
</div>
<br>
<br>
<br>

<table id="table_gridvalidasi" class="display nowrap table table-bordered" cellspacing="0" style="width:100%" >
  <thead>
    <tr>
      <th>No</th>
      <th>Detail</th>

      <th>posisi</th>
      <th>aktivasi usia</th>
      <th>usia maks</th>
      <th>detail ukuran usia</th>
      <th>aktivasi jenis kelamin</th>
      <th>jenis kelamin</th>
      <th>aktivasi status</th>
      <th>status</th>
      <th>aktivasi ipk</th>
      <th>ipk</th>
      <th>aktivasi jurusan</th>
      <th>jurusan</th>

      <th>pid_source</th>
      <th>pid_verifikasi</th>
      <th>pid_posisi</th>
      <th>jenjang</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
</div>


<!-- Modal -->
<div class="modal fade" id="mdl_Select" role="dialog">
  <div class="modal-dialog" style="width:100%;height: 100%;margin: 0; padding: 0;">
    <!-- <div class="modal-content" style="width:1000px"> -->
    <div class="modal-content" style="height: auto;min-height: 100%;border-radius:0;">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" ></h4>
      </div>
      <div class="modal-body">

        <form class="form-horizontal" id="fmSeleksiAdm">
          <input type="hidden" id="txtPid">
          <div class="form-group">
            <label class="control-label col-sm-1">Rekrutment</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="txtRekrutment" readonly>
            </div>
            <label class="control-label col-sm-1">Posisi</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="txtPosisi" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-1">Gelombang</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="txtGelombang" readonly>
            </div>
          </div>
          <br>

          <div class="form-group">
            <div class="col-sm-6">
              <div class="panel panel-primary">
                <div class="panel-heading">Data Diri</div>
                <div class="panel-body">
                 <div class="form-group">
                  <label class="control-label col-sm-2">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtNama" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Tempat Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtTempatLahir" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Tanggal Lahir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtTanggalLahir" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">No KTP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtNoKtp" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2">Alamat Ktp</label>
                  <div class="col-sm-10">
                    <textarea id="taAlamatKTP" name="taAlamatKTP" rows="5" style="width: 100%" readonly></textarea>
                  </div>
                </div>


              </div>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="panel panel-primary">
              <div class="panel-heading">Ktp dan Akte kelahiran</div>
              <div class="panel-body">
               <div class="form-group">
                 <div class="col-sm-12">
                  <img id="imgKtp" src="#" class="img-responsive" width="700">
                  <img id="imgAkte" src="#" class="img-responsive" width="700">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="form-group">
        <div class="col-sm-6">
          <div class="panel panel-primary">
            <div class="panel-heading">Pendidikan Terakhir</div>
            <div class="panel-body">
             <div class="form-group">
              <label class="control-label col-sm-2">Pendidikan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txtPendidikan" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Universitas</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txtUniversitas" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">Jurusan</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txtJurusan" readonly>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2">IPK</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="txtIpk" readonly>
              </div>
            </div>


          </div>
        </div>
      </div>

      <div class="col-sm-6">
        <div class="panel panel-primary">
          <div class="panel-heading">Ijazah dan Transkrip</div>
          <div class="panel-body">
           <div class="form-group">
             <div class="col-sm-12">
              <img id="imgIjazah" src="#" class="img-responsive" width="700">
              <img id="imgTranskrip" src="#" class="img-responsive" width="700">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</form>

<div class="modal-footer">
  <!-- <form class="form-horizontal" id="fmStatus"> -->
  <div class="row">
    <div class="col-sm-6">
      <div class="row">
        <label class="col-sm-2">Keterangan</label>
        <div class="col-sm-10">
          <textarea id="taKeterangan" name="taKeterangan" rows="6" style="width: 100%"></textarea>
        </div>
      </div>

    </div>
    <div class="col-sm-6">
      <div class="row">
        <label class="col-sm-3">Status Seleksi</label>
        <div class="col-sm-4">
          <div class="btn-group" id="btnToggle">
            <button class="btn" id="btnOK" onclick="clickOK(1)">OK</button>
            <button class="btn" id="btnNOK" onclick="clickNOK(1)">NOK</button>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <label class="col-sm-3">PIC</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="txtPIC" readonly>
        </div>
      </div>
    </div>
  </div>
  <!-- </form> -->

  <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

</div>
</div>
</div>
</div>
</div>



<!-- Modal validasi-->
<div class="modal fade" id="mdl_validasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <!-- <div class="modal-content" style="width:800px !important; height:inherit !important;margin: 0 auto !important;"> -->
      <div class="modal-content">
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" ></h4>
      </div>
      <div class="modal-body">

        <div class="form-horizontal" id="fmValidasi">

          <div class="form-group">
            <label class="control-label col-sm-3">Posisi</label>
            <div class="col-sm-3">
              <input type="text" id="ddPosisi">
            </div>
          </div>
          <div class="form-group">
          <label class="control-label col-sm-3">Aktivasi Usia</label>
            <div class="col-sm-3" id="idcmbUsia">
              <input type="checkbox" id="cmbUsia">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Usia Maks</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="txtUsiaMaks">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Detail Ukuran Usia</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="txtUkuranUsia">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Aktivasi Jenis Kelamin</label>
            <div class="col-sm-3" id="idcmbJenkel">
              <input type="checkbox"  id="cmbJenkel">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Jenis Kelamin</label>
            <div class="col-sm-3">
              <input type="text" id="ddJenkel">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Aktivasi Status</label>
            <div class="col-sm-3" id="idcmbStatus">
              <input type="checkbox" id="cmbStatus">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Status</label>
            <div class="col-sm-3">
              <input type="text" id="ddStatus">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Aktivasi IPK</label>
            <div class="col-sm-3" id="idcmbIkp">
              <input type="checkbox" id="cmbIkp">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">IPK</label>
            <label class="control-label col-sm-1" id="txtJenjang_"></label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="txtIPK_">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Aktivasi Jurusan</label>
            <div class="col-sm-3" id="idcmbJurusan">
              <input type="checkbox"  id="cmbJurusan">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-3">Jurusan</label>
            <div class="col-sm-3">
              <input type="text" id="ddjurusan">
            </div>
          </div>


        </div>

        <div class="modal-footer">

          <button type="button" class="btn btn-success" onclick="saveAutoValidasi()">Save</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal StatusFinal-->
<div class="modal fade" id="mdl_StatusFinal" role="dialog" >
  <div class="modal-dialog">
    <div class="modal-content" style="width:800px !important; height:inherit !important;margin: 0 auto !important;">
      <!-- <div class="modal-content"> -->
      <div class="modal-header bg-primary">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">

        <!-- <form class="form-horizontal" id="fmStatusFinal"> -->
          <div class="row">
            <label class="col-sm-3 list-group-item list-group-item-info" >Minat Profesi</label>
            <div class="col-sm-9 list-group-item list-group-item-default">
             <a id="txtposisiSF" ></a>
            </div>
          </div>
          <div class="row">
            <label class="col-sm-3 list-group-item list-group-item-info" >Jenjang</label>
            <div class="col-sm-7 list-group-item list-group-item-default">
             <a id="txtJenjangSF" ></a>
            </div>
            <div class="col-sm-2 list-group-item list-group-item-default">
             <a id="txtJenjang_statusSF" style="border:0px;" value="lolos">
            </div>
          </div>
          <div class="row">
            <label class="col-sm-3 list-group-item list-group-item-info" >Program Studi</label>
            <div class="col-sm-7 list-group-item list-group-item-default">
             <a id="txtProgramStudiSF" ></a>
            </div>
            <div class="col-sm-2 list-group-item list-group-item-default">
             <a id="txtProgramStudi_statusSF" style="border:0px;" value="lolos">
            </div>
          </div>
          <div class="row">
            <label class="col-sm-3 list-group-item list-group-item-info" >Umur</label>
            <div class="col-sm-7 list-group-item list-group-item-default">
             <a id="txtUmurSF" ></a>
            </div>
            <div class="col-sm-2 list-group-item list-group-item-default">
             <a id="txtUmur_statusSF" style="border:0px;" value="lolos">
            </div>
          </div>
          <div class="row">
            <label class="col-sm-3 list-group-item list-group-item-info" >Jenis Kelamin</label>
            <div class="col-sm-7 list-group-item list-group-item-default">
             <a id="txtJenkelSF" ></a>
            </div>
            <div class="col-sm-2 list-group-item list-group-item-default">
             <a id="txtJenkel_statusSF" style="border:0px;" value="lolos">
            </div>
          </div>
          <div class="row">
            <label class="col-sm-3 list-group-item list-group-item-info" >Status Menikah</label>
            <div class="col-sm-7 list-group-item list-group-item-default">
             <a id="txtStatusSF" ></a>
            </div>
            <div class="col-sm-2 list-group-item list-group-item-default">
             <a id="txtStatus_statusSF" style="border:0px;" value="lolos">
            </div>
          </div>
          <div class="row">
            <label class="col-sm-3 list-group-item list-group-item-info" >IPK</label>
            <div class="col-sm-7 list-group-item list-group-item-default">
              <a id="txtIpkSF" ></a>
            </div>
            <div class="col-sm-2 list-group-item list-group-item-default">
              <a id="txtIpk_statusSF" ></a>
            </div>
          </div>
<br/>
      <div class="row">
        <label class="col-sm-2">Keterangan</label>
        <div class="col-sm-10">
          <textarea id="taKeteranganSF" name="taKeterangan" rows="6" style="width: 100%"></textarea>
        </div>
        </div>


        <!-- </form> -->

        <div class="modal-footer">

          <button type="button" class="btn btn-success" onclick="clickOK(2)">Lulus</button>
          <button type="button" class="btn btn-danger" onclick="clickNOK(2)">Tidak Lulus</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
</div>

</div>

<script type="text/javascript">
  var iPidBlacklist;
  var s_source="";
  var s_sourcevalidasi="";
  var ipid_verifikasi;

  $(document).ready(function() {
 		// readPelamar();
    load_grid();
    load_gridValidasi();
  });

  $("#ddSource").width(250).kendoDropDownList({
    optionLabel:"--Select--",
    dataTextField:"pid_source",
    dataValueField:"pid_source",
    dataSource:{
      type:"json",
      transport:{
        read:{
          url: "<?php  echo base_url().'SeleksiAdministrasi/read_DDSource' ;?>",
          type:"POST",
          dataType: 'JSON',
          cache:false
        }
      },
    },
    filter:"contains",
    change:function(e){
      s_source=e.sender._old;
      Reload();
      // console.log(s_source);
      // load_grid();
    }
  });

  $("#ddSource_validasi").width(250).kendoDropDownList({
    optionLabel:"--Select--",
    dataTextField:"pid_source",
    dataValueField:"pid_source",
    dataSource:{
      type:"json",
      transport:{
        read:{
          url: "<?php  echo base_url().'SeleksiAdministrasi/read_DDSource' ;?>",
          type:"POST",
          dataType: 'JSON',
          cache:false
        }
      },
    },
    filter:"contains",
    change:function(e){
      s_sourcevalidasi=e.sender._old;
      ReloadValidasi();
    }
  });

  function load_grid() {
    table = $('#table_gridPelamar').DataTable({
      // "dom":'Bfrtipl',
      "sDom": '<"toolbar"><<B><"filters"f><"btm_length" l><"clear">rt<"bottom"i><"clear"><"clear"><T><"blm_paginate"p>>',

      initComplete: function () {
        $("div.toolbar").append('<div class="row"><div class="col-md-6"></button></div><div class="col-md-6 text-right"><button  onclick="validasiAuto()" class="btn btn-primary btn-sm" style="margin-bottom:10px;"><i class="glyphicon glyphicon-ok-circle"></i> Validasi Otomatis</button></div></div>');
      },

      "buttons": [
      {
        extend:'csv',
        exportOptions:{columns:[0,3,4,5,6,7,8,9,10,11,12,13]}

      },
      {
        extend:'excel',
        exportOptions:{columns:[0,3,4,5,6,7,8,9,10,11,12,13],
          stripHtml:false}

        },
      // 'colvis'
      ],

      "fnRowCallback":function(nRow,aData,iDisplayIndex,iDisplayIndexFull){
        if(aData[16]=="TERDUPLIKASI"){
          $('td',nRow).css('background-color','red');
          $('td',nRow).css('color','white');
        }else
        if(aData[16]=="DIINDIKASIKAN TERDUPLIKASI"){
          $('td',nRow).css('background-color','yellow');
        }else
        {
          $('td',nRow).css('background-color','white');
        }
      },

      "scrollX": true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": "<?php echo base_url().'SeleksiAdministrasi/ajax_list'?>",
          // "url": "<?php echo base_url().'SeleksiAdministrasi/ajax_list'?>?sSource="+s_source,
          "type": "POST",
          // "data":{"sSource":s_source},
          "data":function(z){
            z.sSource=s_source;
          },

        },
        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
            // "className":'mdl-data-table__cell--non-numeric'
          },
          {"targets":[16],"visible":false,"searchable":false},
          {"targets":[17],"visible":false,"searchable":false},
          {"targets":[18],"visible":false,"searchable":false},
          {"targets":[19],"visible":false,"searchable":false},
          {"targets":[20],"visible":false,"searchable":false},
          {"targets":[21],"visible":false,"searchable":false},
          {"targets":[22],"visible":false,"searchable":false},
          {"targets":[23],"visible":false,"searchable":false},
          {"targets":[24],"visible":false,"searchable":false},
          {"targets":[25],"visible":false,"searchable":false},
          {"targets":[26],"visible":false,"searchable":false},
          {"targets":[27],"visible":false,"searchable":false},
          {"targets":[28],"visible":false,"searchable":false},
          {"targets":[29],"visible":false,"searchable":false},
          {"targets":[30],"visible":false,"searchable":false},
          {"targets":[31],"visible":false,"searchable":false},

          {"targets":[32],"visible":false,"searchable":false},
          {"targets":[33],"visible":false,"searchable":false},
          {"targets":[34],"visible":false,"searchable":false},
          {"targets":[35],"visible":false,"searchable":false},
          {"targets":[36],"visible":false,"searchable":false},
          {"targets":[37],"visible":false,"searchable":false},

          ],

        });
  }

  function Reload(){
    $('#table_gridPelamar').DataTable().ajax.reload();
  }

  $('#table_gridPelamar').on('click', '.admCheck', function () {
    var iclosestRow = $(this).closest('tr');
    var idata = table.row(iclosestRow).data();

    iPidBlacklist=idata[30];
    if(document.getElementById('admCheck'+idata[29]).checked==true){
      clickOK(1);
      document.getElementById('admCheck'+idata[29]).checked=true;
    }else{
      clickNOK(1);
      document.getElementById('admCheck'+idata[29]).checked=false;
    }

  });

  $('#table_gridPelamar').on('click', '#btnSelect', function () {
    $('#mdl_Select').find('.modal-title').text('Seleksi Administrasi');
    document.getElementById("fmSeleksiAdm").reset();

    var iclosestRow = $(this).closest('tr');
    var idata = table.row(iclosestRow).data();
    console.log(idata);

    $("#txtRekrutment").val(idata[27]);
    $("#txtGelombang").val(idata[28]);
    $("#txtPosisi").val(idata[26]);

    $("#txtNama").val(idata[3]);
    $("#txtTempatLahir").val(idata[18]);
    $("#txtTanggalLahir").val(idata[19]);
    $("#txtNoKtp").val(idata[17]);
    $("#taAlamatKTP").text(idata[20]);
    document.getElementById('imgKtp').src=idata[22];
    document.getElementById('imgAkte').src=idata[23];


    $("#txtPendidikan").val(idata[4]);
    $("#txtUniversitas").val(idata[21]);
    $("#txtJurusan").val(idata[5]);
    $("#txtIpk").val(idata[10]);
    document.getElementById('imgIjazah').src=idata[24];
    document.getElementById('imgTranskrip').src=idata[25];

    if(document.getElementById('admCheck'+idata[29]).checked==false){
      $("#btnOK").removeClass('btn-success');
      $("#btnNOK").addClass('btn-success');
    }else{
      $("#btnNOK").removeClass('btn-success');
      $("#btnOK").addClass('btn-success');
    }
    iPidBlacklist=idata[30];

    $("#txtPIC").val(idata[13]);
    $("#taKeterangan").val(idata[31]);

  });

  function clickOK(sParam){
    var i_clsStatus;
    if(sParam==1){
    $("#btnNOK").removeClass('btn-success');
    $("#btnOK").addClass('btn-success');
    i_clsStatus={
      pid_blacklist:iPidBlacklist,
      administrasi:1,
      keterangan_adm:$("#taKeterangan").val()
    }
  }else{
    i_clsStatus={
      pid_blacklist:iPidBlacklist,
      administrasi:1,
      keterangan_adm:$("#taKeteranganSF").val()
    }
  }
    $.ajax({
      type: "POST",
      cache:false,
      dataType: "JSON",
      url: "<?php  echo base_url().'SeleksiAdministrasi/ajax_StatusAdm' ;?>",
      data: { sTbl: i_clsStatus },
      success: function (e) {
        alert(e.Remark);
        Reload();
      }
    });
    // console.log(i_clsStatus);
  }
  function clickNOK(sParam){
    var i_clsStatus;
    if(sParam==1){
    $("#btnOK").removeClass('btn-success');
    $("#btnNOK").addClass('btn-success');
    i_clsStatus={
      pid_blacklist:iPidBlacklist,
      administrasi:0,
      keterangan_adm:$("#taKeterangan").val()
    }
  }else{
    i_clsStatus={
      pid_blacklist:iPidBlacklist,
      administrasi:0,
      keterangan_adm:$("#taKeteranganSF").val()
    }
  }
    $.ajax({
      type: "POST",
      cache:false,
      dataType: "JSON",
      url: "<?php  echo base_url().'SeleksiAdministrasi/ajax_StatusAdm' ;?>",
      data: { sTbl: i_clsStatus },
      success: function (e) {
        alert(e.Remark);
        Reload();
      }
    });
    console.log('nok');
  }

  function validasiAuto(){
    $('#idgridPelamar').hide();
    $('#idgridvalidasi').show();
    ReloadValidasi();
    dd();
  }
function ClickBack(){
    $('#idgridPelamar').show();
    $('#idgridvalidasi').hide();
}

  function load_gridValidasi() {
    tableValidasi = $('#table_gridvalidasi').DataTable({
      // "dom":'Bfrtipl',
      // "sDom": '<"toolbar"><<B><"filters"f><"btm_length" l><"clear">rt<"bottom"i><"clear"><"clear"><T><"blm_paginate"p>>',

      // initComplete: function () {
      //   $("div.toolbar").append('<div class="row"><div class="col-md-6"></button></div><div class="col-md-6 text-right"><button  onclick="validasiAuto()" class="btn btn-primary btn-sm" style="margin-bottom:10px;"><i class="glyphicon glyphicon-ok-circle"></i> Back</button></div></div>');
      // },

      "scrollX": true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        // Load data for the table's content from an Ajax source
        "ajax": {
          "url": "<?php echo base_url().'SeleksiAdministrasi/ajax_listValidasi'?>",
          "type": "POST",
          "data":function(z){
            z.sSource=s_sourcevalidasi;
          },

        },
        //Set column definition initialisation properties.
        "columnDefs": [
        {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
            // "className":'mdl-data-table__cell--non-numeric'
          },
          {"targets":[14],"visible":false,"searchable":false},
          {"targets":[15],"visible":false,"searchable":false},
          {"targets":[16],"visible":false,"searchable":false},
          {"targets":[17],"visible":false,"searchable":false},


          ],

        });
  }

  function ReloadValidasi(){
    $('#table_gridvalidasi').DataTable().ajax.reload();
  }

  $('#table_gridvalidasi').on('click', '#btnValidasi', function () {
    $('#mdl_validasi').find('.modal-title').text('Setting Validasi Otomatis');
    // document.getElementById("fmValidasi").reset();
    $("#ddPosisi").data("kendoDropDownList").value("");
    $("#ddStatus").data("kendoDropDownList").value("");
    $("#ddjurusan").data("kendoDropDownList").value("");
    $("#ddJenkel").data("kendoDropDownList").value("");
    $("#txtIPK_").val("");
    $("#txtUsiaMaks").val("");
    $("#txtUkuranUsia").val("");
    $("#txtJenjang_").text("");

    var iclosestRow = $(this).closest('tr');
    var idata = tableValidasi.row(iclosestRow).data();
    console.log(idata);


    // document.getElementById('mdl_validasi cmbUsia').checked=true;

    $("#ddPosisi").data("kendoDropDownList").value(idata[16]);
    $("#ddStatus").data("kendoDropDownList").value(idata[9]);
    $("#ddjurusan").data("kendoDropDownList").value(idata[13]);
    $("#ddJenkel").data("kendoDropDownList").value(idata[7]);
    if(idata[3]==1){
      $("#idcmbUsia").empty();
      $("#idcmbUsia").html('<input type="checkbox" id="cmbUsia" checked>');
      // document.getElementById('cmbUsia').checked=true;
    }else{
      $("#idcmbUsia").empty();
      $("#idcmbUsia").html('<input type="checkbox" id="cmbUsia">');
      // document.getElementById('cmbUsia').checked=false;
    }
    $("#txtUsiaMaks").val(idata[4]);
    $("#txtUkuranUsia").val(idata[5]);
    if(idata[6]=="1"){
      $("#idcmbJenkel").empty();
      $("#idcmbJenkel").html('<input type="checkbox" id="cmbJenkel" checked>');
      // document.getElementById('cmbJenkel').checked=true;
    }else{
      $("#idcmbJenkel").empty();
      $("#idcmbJenkel").html('<input type="checkbox" id="cmbJenkel">');
      // document.getElementById('cmbJenkel').checked=false;
    }
    if(idata[8]=="1"){
      $("#idcmbStatus").empty();
      $("#idcmbStatus").html('<input type="checkbox" id="cmbStatus" checked>');
      // document.getElementById('cmbStatus').checked=true;
    }else{
      $("#idcmbStatus").empty();
      $("#idcmbStatus").html('<input type="checkbox" id="cmbStatus">');
      // document.getElementById('cmbStatus').checked=false;
    }
    if(idata[10]=="1"){
      $("#idcmbIkp").empty();
      $("#idcmbIkp").html('<input type="checkbox" id="cmbIkp" checked>');
      // document.getElementById('cmbIkp').checkexd=true;
    }else{
      $("#idcmbIkp").empty();
      $("#idcmbIkp").html('<input type="checkbox" id="cmbIkp">');
      // document.getElementById('cmbIkp').checked=false;
    }
    $("#txtIPK_").val(idata[11]);
    if(idata[12]=="1"){
      $("#idcmbJurusan").empty();
      $("#idcmbJurusan").html('<input type="checkbox" id="cmbJurusan" checked>');
      // document.getElementById('cmbJurusan').checked=true;
    }else{
      $("#idcmbJurusan").empty();
      $("#idcmbJurusan").html('<input type="checkbox" id="cmbJurusan">');
      // document.getElementById('cmbJurusan').checked=false;
    }
    $("#txtJenjang_").text(idata[17]);
    ipid_verifikasi=idata[15];
  });

$('#table_gridPelamar').on('click', '#btnStatusFinal', function () {
    $('#mdl_StatusFinal').find('.modal-title').text('Hasil verifikasi program');
    // document.getElementById("fmStatusFinal").reset();

    var iclosestRow = $(this).closest('tr');
    var idata = table.row(iclosestRow).data();
    // console.log(idata);
    iPidBlacklist=idata[30];
    $("#txtposisiSF").text(idata[6]);
    $("#txtJenjangSF").text(idata[4]);
    $("#txtProgramStudiSF").text(idata[5]);
    $("#txtUmurSF").text(idata[7]);
    $("#txtJenkelSF").text(idata[9]);
    $("#txtStatusSF").text(idata[8]);
    $("#txtIpkSF").text(idata[10]);

   if(idata[32]=="Lulus"){
    $("#txtJenjang_statusSF").empty();
    $("#txtJenjang_statusSF").html('<a style="color:green"><i class="glyphicon glyphicon-ok-sign"></i> '+idata[32]+'</a>');
   }else{
    $("#txtJenjang_statusSF").empty();
    $("#txtJenjang_statusSF").html('<a style="color:red"><i class="glyphicon glyphicon-remove-sign"></i> '+idata[32]+'</a>');
   }
   if(idata[33]=="Lulus"){
    $("#txtProgramStudi_statusSF").empty();
    $("#txtProgramStudi_statusSF").html('<a style="color:green"><i class="glyphicon glyphicon-ok-sign"></i> '+idata[33]+'</a>');
   }else{
    $("#txtProgramStudi_statusSF").empty();
    $("#txtProgramStudi_statusSF").html('<a style="color:red"><i class="glyphicon glyphicon-remove-sign"></i> '+idata[33]+'</a>');
   }
   if(idata[34]=="Lulus"){
    $("#txtUmur_statusSF").empty();
    $("#txtUmur_statusSF").html('<a style="color:green"><i class="glyphicon glyphicon-ok-sign"></i> '+idata[34]+'</a>');
   }else{
    $("#txtUmur_statusSF").empty();
    $("#txtUmur_statusSF").html('<a style="color:red"><i class="glyphicon glyphicon-remove-sign"></i> '+idata[34]+'</a>');
   }
   if(idata[35]=="Lulus"){
    $("#txtJenkel_statusSF").empty();
    $("#txtJenkel_statusSF").html('<a style="color:green"><i class="glyphicon glyphicon-ok-sign"></i> '+idata[35]+'</a>');
   }else{
    $("#txtJenkel_statusSF").empty();
    $("#txtJenkel_statusSF").html('<a style="color:red"><i class="glyphicon glyphicon-remove-sign"></i> '+idata[35]+'</a>');
   }
   if(idata[36]=="Lulus"){
    $("#txtStatus_statusSF").empty();
    $("#txtStatus_statusSF").html('<a style="color:green"><i class="glyphicon glyphicon-ok-sign"></i> '+idata[36]+'</a>');
   }else{
    $("#txtStatus_statusSF").empty();
    $("#txtStatus_statusSF").html('<a style="color:red"><i class="glyphicon glyphicon-remove-sign"></i> '+idata[36]+'</a>');
   }
   if(idata[37]=="Lulus"){
    $("#txtIpk_statusSF").empty();
    $("#txtIpk_statusSF").html('<a style="color:green"><i class="glyphicon glyphicon-ok-sign"></i> '+idata[37]+'</a>');
   }else{
    $("#txtIpk_statusSF").empty();
    $("#txtIpk_statusSF").html('<a style="color:red"><i class="glyphicon glyphicon-remove-sign"></i> '+idata[37]+'</a>');
   }

    $("#taKeteranganSF").val(idata[31]);

  });

function dd(){
  $("#ddPosisi").width(250).kendoDropDownList({
    optionLabel:"--Select--",
    dataTextField:"position_title",
    dataValueField:"pid",
    dataSource:{
      type:"json",
      transport:{
        read:{
          url: "<?php  echo base_url().'SeleksiAdministrasi/read_DDPosisi' ;?>",
          type:"POST",
          dataType: 'JSON',
          cache:false
        }
      },
    },
    filter:"contains",
    change:function(e){
      console.log(e.sender._old);
      // s_source=e.sender._old;
    }
  });

$("#ddStatus").width(250).kendoDropDownList({
  optionLabel:"--Select--",
  dataTextField:"text",
  dataValueField:"value",
  dataSource:[
    {text:"Lajang",value:"Lajang"},
    {text:"Menikah",value:"Menikah"},
    {text:"Cerai",value:"Cerai"},
  ],
  filter:"contains",
  change:function(e){
    // s_source=e.sender._old;
  }
});
$("#ddJenkel").width(250).kendoDropDownList({
  optionLabel:"--Select--",
  dataTextField:"text",
  dataValueField:"value",
  dataSource:[
    {text:"Laki-laki",value:"1"},
    {text:"Perempuan",value:"0"},
  ],
  filter:"contains",
  change:function(e){
    // s_source=e.sender._old;
  }
});
$("#ddjurusan").width(250).kendoDropDownList({
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
        cache:false
      }
    },
  },
  filter:"contains",
  change:function(e){
    // s_source=e.sender._old;
  }
});

}

function saveAutoValidasi(){

  i_clsAutoValidasi = {
    pid_verifikasi:ipid_verifikasi,
    pid_posisi:$("#ddPosisi").data("kendoDropDownList").value(),
    aktivasi_usia:document.getElementById('cmbUsia').checked,
    usia_maxs:$("#txtUsiaMaks").val(),
    detail_ukuran_usia:$("#txtUkuranUsia").val(),
    aktivasi_jenis_kelamin:document.getElementById('cmbJenkel').checked,
    jenis_kelamin:$("#ddJenkel").data("kendoDropDownList").value(),
    aktivasi_status:document.getElementById('cmbStatus').checked,
    status:$("#ddStatus").data("kendoDropDownList").value(),
    aktivasi_ipk:document.getElementById('cmbIkp').checked,
    ipk:$("#txtIPK_").val(),
    aktivasi_jurusan:document.getElementById('cmbJurusan').checked,
    jurusan:$("#ddjurusan").data("kendoDropDownList").value()
  }
 console.log(i_clsAutoValidasi);
$.ajax({
  type: "POST",
  cache:false,
  dataType: "JSON",
  url: "<?php  echo base_url().'SeleksiAdministrasi/ajax_SaveAutoValidasi' ;?>",
  data: { sTbl: i_clsAutoValidasi },
  success: function (e) {
    console.log(e);
    if(e.status==true){
    alert(e.Remark);
      ReloadValidasi();
      Reload();
    }else{

      // alert(e.Remark);
    }
  }
});

}

</script>

<?php get_template('footer');?>
