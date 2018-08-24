<?php get_template('headeradmin');?>
<style>
  #table_grid{
    width: 800px;
    margin: 0 auto;
  }

  #table_grid_posted{
    width: 800px;
    margin: 0 auto;
  }

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

  #exTab3 .nav-pills > li > a {
    border-radius: 4px 4px 0 0 ;
  }

  #exTab3 .tab-content {
    border : 2px solid #2980b9;
    background-color: white;
    padding : 10px 30px;
  }

  .nav-pills>li.active>a, .nav-pills>li.active>a:hover, .nav-pills>li.active>a:focus {
    /* background: linear-gradient(rgba(90, 92, 204, 0.7), rgba(51, 190, 239, 0.7)) */
    background: linear-gradient(to right, #2980b9, #2c3e50);
  }
</style>

  <input type="text" id="pid" disabled hidden/>
  <input type="text" id="status" disabled hidden/>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <button class="btn btn-primary1" onclick="add_rekrutmen()"><i class="glyphicon glyphicon-plus"></i> Buat Rekrutmen Baru</button>
        <br />
        <br />

        <div id="exTab3">
          <ul  class="nav nav-pills">
      			<li class="active">
              <a  href="#1b" class="tabs" data-toggle="tab">Posted Jobs</a>
      			</li>
      			<li>
              <a href="#2b" class="tabs" data-toggle="tab">Saved Draft</a>
      			</li>
            <li>
              <a href="#3b" class="tabs" data-toggle="tab">Closed</a>
      			</li>
      		</ul>

    			<div class="tab-content clearfix" style="margin-bottom:50px">
    			  <div class="tab-pane active" id="1b">
              <table id="table_grid_posted" class="display nowrap table table-bordered" cellspacing="0" style="width:100%" >
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Rekrutmen</th>
                    <th>Tipe Rekrutmen</th>
                    <th>Kota/Kab</th>
                    <th>Gelombang</th>
                    <th>Periode</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
    				</div>
    				<div class="tab-pane" id="2b">
              <table id="table_grid" class="display nowrap table table-bordered" cellspacing="0" style="width:100%" >
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Rekrutmen</th>
                    <th>Tipe Rekrutmen</th>
                    <th>Kota/Kab</th>
                    <th>Gelombang</th>
                    <th>Periode</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
    				</div>
            <div class="tab-pane" id="3b">
              <table id="table_grid_closed" class="display nowrap table table-bordered" cellspacing="0" style="width:100%" >
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul Rekrutmen</th>
                    <th>Tipe Rekrutmen</th>
                    <th>Kota/Kab</th>
                    <th>Gelombang</th>
                    <th>Periode</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
    				</div>
    			</div>
        </div>
      </div>
      <!-- <div class="col-sm-8 col-md-9">
      </div> -->
  </div>
</div>

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">TAMBAH REKRUTMEN</h4>
      </div>
      <div id="crot" class="modal-body">
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="pid_source">Source :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" style="width:100%" id="dd_pid_source" name="pid_source">
              <label id="err_pid_source" style="text-align:left;color:red;margin-top:3px" for="pid_source"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="kota_kabupaten">Kota/Kabupaten :</label>
            <div class="col-sm-8">
              <input type="text" style="width:100%" class="form-control" id="dd_kota_kabupaten" name="kota_kabupaten">
              <label id="err_kota_kabupaten" style="text-align:left;color:red;margin-top:3px" for="kota_kabupaten"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="gelombang">Gelombang :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="gelombang" name="gelombang">
              <label id="err_gelombang" style="text-align:left;color:red;margin-top:3px" for="gelombang"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" name="a" style="text-align:left" for="periode">Periode :</label>
            <div class="col-sm-8">
              <input type="text" style="width:48% !important;height: 34px;margin-right:4%" id="dd_periode_bln" name="periode"><input type="text" style="width:48% !important;" id="periode_thn" name="periode">
              <label id="err_periode" name="b" style="text-align:left;color:red;margin-top:3px" for="periode"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="judul_rekrutmen">Judul Rekrutmen :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="judul_rekrutmen" name="judul_rekrutmen">
              <label id="err_judul_rekrutmen" style="text-align:left;color:red;margin-top:3px" for="judul_rekrutmen"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="posisi">Posisi :</label>
            <div class="col-sm-8">
              <select data-role="multiselect" style="width:98%" id="dd_posisi" name="posisi"></select>
              <label id="err_posisi" style="text-align:left;color:red;margin-top:3px" for="posisi"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="tipe_rekrutmen">Tipe Rekrutmen :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" style="width:100%" id="dd_tipe_rekrutmen" name="tipe_rekrutmen">
              <label id="err_tipe_rekrutmen" style="text-align:left;color:red;margin-top:3px" for="tipe_rekrutmen"></label>
            </div>
          </div>
          <!-- <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="vendor_psikotes">Vendor Psikotes :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" style="width:100%" id="vendor_psikotes" name="vendor_psikotes">
              <label id="err_vendor_psikotes" style="text-align:left;color:red;margin-top:3px" for="vendor_psikotes"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="vendor_labs">Vendor Labs :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" style="width:100%" id="vendor_labs" name="vendor_labs">
              <label id="err_vendor_labs" style="text-align:left;color:red;margin-top:3px" for="vendor_labs"></label>
            </div>
          </div> -->

          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="deskripsi_event">Deskripsi Event :</label>
            <div class="col-sm-8">
              <textarea class="form-control" id="deskripsi_event" rows="7" name="deskripsi_event"></textarea>
              <label id="err_deskripsi_event" style="text-align:left;color:red;margin-top:3px" for="deskripsi_event"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="tanggal_mulai">Tanggal Mulai :</label>
            <div class="col-sm-8">
              <input class="form-control" style="width:100%" id="tanggal_mulai" name="tanggal_mulai">
              <label id="err_tanggal_mulai" style="text-align:left;color:red;margin-top:3px" for="tanggal_mulai"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="tanggal_selesai">Tanggal Selesai :</label>
            <div class="col-sm-8">
              <input class="form-control" style="width:100%" id="tanggal_selesai" name="tanggal_selesai">
              <label id="err_tanggal_selesai" style="text-align:left;color:red;margin-top:3px" for="tanggal_selesai"></label>
            </div>
          </div>
          <!-- <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="barcode">Menggunakan Barcode :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" style="width:100%" id="barcode" name="barcode">
              <label id="err_barcode" style="text-align:left;color:red;margin-top:3px" for="barcode"></label>
            </div>
          </div> -->
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="zona_waktu">Jam :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" style="width:100%" id="zona_waktu" name="zona_waktu">
              <label id="err_zona_waktu" style="text-align:left;color:red;margin-top:3px" for="zona_waktu"></label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btn_simpan" onclick="save()" style="width:48%;" class="btn btn-success1 form-control"><span class="glyphicon glyphicon-floppy-disk" style="color:white"></span> SIMPAN</button>
        <button type="button" style="width:48%;" class="btn btn-default form-control" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> BATAL</button>
      </div>
    </div>

  </div>
</div>


  <script type="text/javascript">
  var save_method; //for save method string
  var table,table2;
  var tahun = "";
  $(document).ready(function() {
    load_grid_posted();





    load_grid();
    load_grid_closed();

    $("#dd_posisi").kendoMultiSelect({
                placeholder:"Pilih Posisi....",
                dataTextField:"posisi_desc",
                dataValueField:"pid",
                autoBind:true,
                dataSource:{
                  transport:{
                    read:{
                      url: "<?php  echo base_url().'M_Posisi/read_posisi_rekrutmen' ;?>",
                      type:"POST",
                      dataType: 'JSON',
                    }
                  },
                },
            }).data("kendoMultiSelect");

    $("#dd_kota_kabupaten").kendoDropDownList({
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

    $("#dd_pid_source").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { value: "STTN",text:"SEKOLAH TINGGI TEKNOLOGI NASIONAL" },
                { value: "POLINEMA",text:"POLITEKNIK NEGERI MALANG" },
                { value: "JF",text:"JOBFAIR" },
                { value: "ATWS",text:"AKADEMI TEKNOLOGI WARGA SURAKARTA" },
                { value: "POLBAN",text:"POLITEKNIK NEGERI BANDUNG" },
                { value: "UNESA",text:"UNIVERSITAS NEGERI SURABAYA" },
              ]
          });

    $("#dd_periode_bln").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { text: "Januari",value:"01" },
                { text: "Februari",value:"02" },
                { text: "Maret",value:"03" },
                { text: "April",value:"04" },
                { text: "Mei",value:"05" },
                { text: "Juni",value:"06" },
                { text: "Juli",value:"07" },
                { text: "Agustus",value:"08" },
                { text: "September",value:"09" },
                { text: "Oktober",value:"10" },
                { text: "November",value:"11" },
                { text: "Desember",value:"12" },
              ]
          });

    $("#periode_thn").kendoDatePicker({
      depth: "decade",
      format: "yyyy",
      start: "decade",
      change: function (e){
        tahun = kendo.toString(this.value(),"yyyy");
      }
    });
    $("#periode_thn").attr("readonly","readonly");

    // $("#zona_waktu").kendoDropDownList({
    //           dataTextField: "text",
    //           dataValueField: "value",
    //           optionLabel: " -- Select -- ",
    //           dataSource: [
    //             { text: "WIB",value:"WIB" },
    //             { text: "WITA",value:"WITA" },
    //             { text: "WIT",value:"WIT" },
    //           ]
    //       });

    $("#barcode").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { text: "Tidak",value:"Tidak" },
                { text: "Ya",value:"Ya" },
              ]
          });

    $("#dd_tipe_rekrutmen").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { text: "HO",value:"HO" },
                { text: "Site",value:"Site" },
              ]
          });

    $("#vendor_psikotes").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { text: "Dialogue",value:"Dialogue" },
                { text: "Aire",value:"Aire" },
                { text: "Cantika",value:"Cantika" },
              ]
          });

    $("#vendor_labs").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { text: "Cito",value:"Dialogue" },
                { text: "Prodia",value:"Prodia" },
                { text: "RS. Omni",value:"RS. Omni" },
              ]
          });

    $("#tanggal_mulai").kendoDatePicker({
      format: "dd/MM/yyyy",
      change: function (e){
      }
    });

    $("#tanggal_mulai").attr("readonly","readonly");

    $("#tanggal_selesai").kendoDatePicker({
      format: "dd/MM/yyyy",
      change: function (e){
      }
    });

    $("#tanggal_selesai").attr("readonly","readonly");
  });

  function reset_rekrutmen(){
    $('#pid').val("");
    $('#dd_pid_source').data("kendoDropDownList").value(-1);
    $('#dd_kota_kabupaten').data("kendoDropDownList").value(-1);
    $('#gelombang').val("");
    $('#periode_thn').val("");
    $('#dd_periode_bln').data("kendoDropDownList").value(-1);
    $('#judul_rekrutmen').val("");
    $('#dd_tipe_rekrutmen').data("kendoDropDownList").value(-1);
    $('#deskripsi_event').val("");
    $('#status').val("");
    $('#tanggal_mulai').data("kendoDatePicker").value("");
    $('#tanggal_selesai').data("kendoDatePicker").value("");
    $('#zona_waktu').val("");
    $('#dd_posisi').data("kendoMultiSelect").value(-1);

    $("#err_pid_source").text("");
    $("#err_kota_kabupaten").text("");
    $("#err_gelombang").text("");
    $("#err_periode").text("");
    $("#err_judul_rekrutmen").text("");
    $("#err_posisi").text("");
    $("#err_tipe_rekrutmen").text("");
    $("#err_deskripsi_event").text("");
    $("#err_tanggal_mulai").text("");
    $("#err_tanggal_selesai").text("");
    $("#err_zona_waktu").text("");
  }

  $(".tabs").click(function(){
    reload_table();
  });
  function load_grid() {
      table = $('#table_grid').DataTable({
        "scrollX": true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url().'t_rekrutmen/ajax_list'?>",
            "type": "POST"
        },
        //Set column definition initialisation properties.
        "columnDefs": [
          {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
          },
        ],

      });
    }

    function load_grid_posted() {
        table2 = $('#table_grid_posted').DataTable({
          "scrollX": true,
          "processing": true, //Feature control the processing indicator.
          "serverSide": true, //Feature control DataTables' server-side processing mode.
          // Load data for the table's content from an Ajax source
          "ajax": {
              "url": "<?php echo base_url().'t_rekrutmen/ajax_list_posted'?>",
              "type": "POST"
          },
          //Set column definition initialisation properties.
          "columnDefs": [
            {
              "targets": [ -1 ], //last column
              "orderable": false, //set not orderable
            },

          ],
        });
      }






      function load_grid_closed() {
          table3 = $('#table_grid_closed').DataTable({
            "scrollX": true,
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url().'t_rekrutmen/ajax_list_closed'?>",
                "type": "POST"
            },
            //Set column definition initialisation properties.
            "columnDefs": [
              {
                "targets": [ -1 ], //last column
                "orderable": false, //set not orderable
              },

            ],
          });
        }

    function add_rekrutmen()
    {
      save_method = 'add';
      $('#myModal').modal({
          show: 'true',
          keyboard: false,
          backdrop: 'static'
      });
      reset_rekrutmen();
      $("#status").val("draft");
      $('.modal-title').text('TAMBAH REKRUTMEN'); // Set Title to Bootstrap modal title
    }

    function edit_rekrutmen(pid)
    {
      save_method = 'update';
      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('t_rekrutmen/ajax_edit/')?>/" + pid,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           console.log(data);
            reset_rekrutmen();
            tahun = data.tahun;
            $('#pid').val(data.pid);
            $('#dd_pid_source').data("kendoDropDownList").value(data.pid_source);
            $('#dd_kota_kabupaten').data("kendoDropDownList").value(data.kota_kabupaten);
            $('#gelombang').val(data.gelombang);
            $('#periode_thn').val(data.tahun);
            $('#dd_periode_bln').data("kendoDropDownList").value(data.kode_bulan);
            $('#judul_rekrutmen').val(data.judul_rekrutmen);
            $('#dd_tipe_rekrutmen').data("kendoDropDownList").value(data.tipe_rekrutmen);
            // $('#vendor_psikotes').data("kendoDropDownList").value(data.vendor_psikotes);
            // $('#vendor_labs').data("kendoDropDownList").value(data.vendor_labs);
            $('#deskripsi_event').val(data.deskripsi_event);
            $('#status').val(data.status);
            $('#tanggal_mulai').data("kendoDatePicker").value(data.tanggal_mulai);
            $('#tanggal_selesai').data("kendoDatePicker").value(data.tanggal_selesai);
            //$('#barcode').data("kendoDropDownList").value(data.barcode);
            $('#zona_waktu').val(data.zona_waktu);

            var rekrutmen = {
              pid_rekrutmen : data.pid,
            }

            $.ajax({
              url : "<?php echo site_url('t_rekrutmen/ajax_rekrutmen_detail')?>",
              type: "POST",
              data: rekrutmen,
              dataType: "JSON",
              success: function(dataRek)
              {
                var selectPID = [];

                for(var i = 0; i<dataRek.length;i++){
                  selectPID.push(dataRek[i].pid_posisi);
                }
                console.log(selectPID);
                $("#dd_posisi").data("kendoMultiSelect").value(selectPID);
              }
            });
            $('#myModal').modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            }); // show bootstrap modal when complete loaded
            $('.modal-title').text('EDIT REKRUTMEN'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }

    function reposting_rekrutmen(pid)
    {
      save_method = 'add';
      //Ajax Load data from ajax
      $("#status").val("draft");
      $.ajax({
        url : "<?php echo site_url('t_rekrutmen/ajax_edit/')?>/" + pid,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           console.log(data);
            reset_rekrutmen();
            tahun = data.tahun;
            $('#pid').val(data.pid);
            $('#dd_pid_source').data("kendoDropDownList").value(data.pid_source);
            $('#dd_kota_kabupaten').data("kendoDropDownList").value(data.kota_kabupaten);
            $('#gelombang').val(data.gelombang);
            $('#periode_thn').val(data.tahun);
            $('#dd_periode_bln').data("kendoDropDownList").value(data.kode_bulan);
            $('#judul_rekrutmen').val(data.judul_rekrutmen);
            $('#dd_tipe_rekrutmen').data("kendoDropDownList").value(data.tipe_rekrutmen);
            // $('#vendor_psikotes').data("kendoDropDownList").value(data.vendor_psikotes);
            // $('#vendor_labs').data("kendoDropDownList").value(data.vendor_labs);
            $('#deskripsi_event').val(data.deskripsi_event);
            $('#status').val(data.status);
            $('#tanggal_mulai').data("kendoDatePicker").value(data.tanggal_mulai);
            $('#tanggal_selesai').data("kendoDatePicker").value(data.tanggal_selesai);
            //$('#barcode').data("kendoDropDownList").value(data.barcode);
            $('#zona_waktu').val(data.zona_waktu);

            var rekrutmen = {
              pid_rekrutmen : data.pid,
            }

            $.ajax({
              url : "<?php echo site_url('t_rekrutmen/ajax_rekrutmen_detail')?>",
              type: "POST",
              data: rekrutmen,
              dataType: "JSON",
              success: function(dataRek)
              {
                var selectPID = [];

                for(var i = 0; i<dataRek.length;i++){
                  selectPID.push(dataRek[i].pid_posisi);
                }
                console.log(selectPID);
                $("#dd_posisi").data("kendoMultiSelect").value(selectPID);
              }
            });

            $('#myModal').modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            }); // show bootstrap modal when complete loaded
            $('.modal-title').text('REPOSTING REKRUTMEN'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }

    function posting_rekrutmen(pid)
    {
      //Ajax Load data from ajax
      var posting = {
        pid_posting : pid,
      }
      $.ajax({
        url : "<?php echo site_url('t_rekrutmen/ajax_posting')?>",
        type: "POST",
        data: posting,
        dataType: "JSON",
        success: function(data){         //if success close modal and reload ajax table
           reload_table();
        }
      });
    }

    function closed_rekrutmen(pid)
    {
      //Ajax Load data from ajax
      var closed = {
        pid_closed : pid,
      }
      $.ajax({
        url : "<?php echo site_url('t_rekrutmen/ajax_closed')?>",
        type: "POST",
        data: closed,
        dataType: "JSON",
        success: function(data){         //if success close modal and reload ajax table
           reload_table();
        }
      });
    }

    function save(){
      var url;
      var rekrutmen = {
        pid : $("#pid").val(),
        pid_source : $("#dd_pid_source").data("kendoDropDownList").value(),
        kota_kabupaten : $("#dd_kota_kabupaten").data("kendoDropDownList").value(),
        gelombang : $("#gelombang").val(),
        periode_bln : $("#dd_periode_bln").data("kendoDropDownList").value(),
        periode_thn : tahun,
        judul_rekrutmen : $("#judul_rekrutmen").val(),
        tipe_rekrutmen : $("#dd_tipe_rekrutmen").data("kendoDropDownList").value(),
        posisi : $("#dd_posisi").val(),
        // vendor_psikotes : $("#vendor_psikotes").data("kendoDropDownList").value(),
        // vendor_labs : $("#vendor_labs").data("kendoDropDownList").value(),
        deskripsi_event : $("#deskripsi_event").val(),
        tanggal_mulai : kendo.toString($("#tanggal_mulai").data("kendoDatePicker").value(),'yyyy-MM-dd'),
        tanggal_selesai : kendo.toString($("#tanggal_selesai").data("kendoDatePicker").value(),'yyyy-MM-dd'),
        //barcode : $("#barcode").data("kendoDropDownList").value(),
        zona_waktu : $("#zona_waktu").val(),
        status : $("#status").val(),
      }

      console.log(rekrutmen);

      if(save_method == 'add') {
        url = "<?php echo site_url('t_rekrutmen/ajax_add')?>";
      } else {
        url = "<?php echo site_url('t_rekrutmen/ajax_update')?>";
      }

       // ajax adding data to database
      $.ajax({
        url : url,
        type: "POST",
        data: rekrutmen,
        dataType: "JSON",
        success: function(data){
           //if success close modal and reload ajax table
           if(data.status == "success"){
             swal("Good Job!","data berhasil disimpan","success");
             $("#err_pid_source").text("");
             $("#err_kota_kabupaten").text("");
             $("#err_gelombang").text("");
             $("#err_periode").text("");
             $("#err_judul_rekrutmen").text("");
             $("#err_posisi").text("");
             $("#err_tipe_rekrutmen").text("");
             $("#err_deskripsi_event").text("");
             $("#err_tanggal_mulai").text("");
             $("#err_tanggal_selesai").text("");
             $("#err_zona_waktu").text("");
             $('#myModal').modal('toggle');
           }else{
             $("#err_pid_source").text(data.pesan.pid_source);
             $("#err_kota_kabupaten").text(data.pesan.kota_kabupaten);
             $("#err_gelombang").text(data.pesan.gelombang);
             $("#err_periode").text(data.pesan.periode);
             $("#err_judul_rekrutmen").text(data.pesan.judul_rekrutmen);
             $("#err_posisi").text(data.pesan.posisi);
             $("#err_tipe_rekrutmen").text(data.pesan.tipe_rekrutmen);
             $("#err_deskripsi_event").text(data.pesan.deskripsi_event);
             $("#err_tanggal_mulai").text(data.pesan.tanggal_mulai);
             $("#err_tanggal_selesai").text(data.pesan.tanggal_selesai);
             $("#err_zona_waktu").text(data.pesan.zona_waktu);

             swal("","data gagal disimpan",'error');

           }
           reload_table();
        }
      });
    }

    function delete_rekrutmen(pid){
      if(confirm('Are you sure delete this data?')) {
        // ajax delete data to database
          $.ajax({
            url : "<?php echo site_url('t_rekrutmen/ajax_delete')?>/"+pid,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
              reload_table();
            },
            error: function (jqXHR, textStatus, errorThrown){
                alert('Error adding / update data');
            }
        });

      }
    }

    function reload_table(){
      table.ajax.reload(null,false); //reload datatable ajax
      table2.ajax.reload(null,false);
      table3.ajax.reload(null,false);
    }
  </script>
<?php get_template('footer');?>
