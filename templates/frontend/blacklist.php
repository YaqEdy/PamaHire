<?php get_template('headeradmin');?>
<style>
  #table_grid{
    width: 800px;
    margin: 0 auto;
  }

  .modal-dialog{
    overflow-y: initial !important
  }
  .modal-body{
    overflow-y: auto;
  }
  label {
      font-weight: normal !important;
  }
  .k-dropdown .k-dropdown-wrap{
      height: 34px;
  }
</style>
  <input type="text" id="pid" disabled hidden/>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <br />
        <br />
        <table id="table_grid" class="display nowrap table table-bordered" cellspacing="0" style="width:100%" >
          <thead>
            <tr>
              <th>no</th>
              <th>nomor ktp</th>
              <th>nama</th>
              <th>pendidikan</th>
              <th>jurusan</th>
              <th>tgl blacklist</th>
              <th>lama blacklist</th>
              <th>status blacklist</th>
              <th>last update by</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
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
        <h4 class="modal-title">Blacklist</h4>
      </div>
      <div id="crot" class="modal-body">
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="nomor_ktp">Nomor KTP :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nomor_ktp" name="nomor_ktp" style="background-color:gainsboro" placeholder="generate by system" disabled>
              <label id="err_nomor_ktp" style="text-align:left;color:red;margin-top:3px" for="nomor_ktp"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="nama_lengkap">Nama Lengkap :</label>
            <div class="col-sm-8">
              <input type="text" style="width:100%" class="form-control" id="nama_lengkap" name="nama_lengkap" style="background-color:gainsboro" disabled>
              <label id="err_nama_lengkap" style="text-align:left;color:red;margin-top:3px" for="nama_lengkap"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="tanggal_blacklist">Tanggal Blacklist :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="dt_tanggal_blacklist" name="tanggal_blacklist" >
              <label id="err_tanggal_blacklist" style="text-align:left;color:red;margin-top:3px" for="tanggal_blacklist"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="lama_blacklist">Lama Blacklist :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="dd_lama_blacklist" name="lama_blacklist" >
              <label id="err_nomor_ktp" style="text-align:left;color:red;margin-top:3px" for="lama_blacklist"></label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
          <button type="button" id="btn_simpan" onclick="save()" style="width:48%;" class="btn btn-default form-control">SIMPAN</button>
          <button type="button" style="width:48%;" class="btn btn-warning form-control" data-dismiss="modal">BATAL</button>
      </div>
    </div>

  </div>
</div>


  <script type="text/javascript">
  var save_method; //for save method string
  var table;
  $(document).ready(function() {

    load_grid();

    $("#dt_tanggal_blacklist").kendoDatePicker({
      format: "dd/MM/yyyy",
      change: function (e){
      }
    });

      $("#dd_lama_blacklist").kendoDropDownList({
                dataTextField: "text",
                dataValueField: "value",
                optionLabel: " -- Select -- ",
                dataSource: [
                  { text: "1 bulan",value:"1" },
                  { text: "2 bulan",value:"2" },
                  { text: "3 bulan",value:"3" },
                  { text: "4 bulan",value:"4" },
                  { text: "5 bulan",value:"5" },
                  { text: "6 bulan",value:"6" },
                  { text: "7 bulan",value:"7" },
                  { text: "8 bulan",value:"8" },
                  { text: "9 bulan",value:"9" },
                  { text: "10 bulan",value:"10" },
                  { text: "11 bulan",value:"11" },
                  { text: "12 bulan",value:"12" },
                  { text: "13 bulan",value:"13" },
                  { text: "14 bulan",value:"14" },
                  { text: "15 bulan",value:"15" },
                  { text: "16 bulan",value:"16" },
                  { text: "17 bulan",value:"17" },
                  { text: "18 bulan",value:"18" },
                  { text: "19 bulan",value:"19" },
                  { text: "20 bulan",value:"20" },
                  { text: "21 bulan",value:"21" },
                  { text: "22 bulan",value:"22" },
                  { text: "23 bulan",value:"23" },
                  { text: "24 bulan",value:"24" },
                ]
            });

  });

  function reset_blacklist(){
    $("#nomor_ktp").val("");
    $("#dt_tanggal_blacklist").data("kendoDatePicker").value("");
    $("#dd_lama_blacklist").data("kendoDropDownList").value(-1);
    $("#nama_lengkap").val("");
  }

  function load_grid() {
      table = $('#table_grid').DataTable({
        "scrollX": true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url().'blacklist/ajax_list'?>",
            "type": "POST"
        },
        //Set column definition initialisation properties.
        "columnDefs": [
          {
            "targets": [ -1 ], //last column
            "orderable": false, //set not orderable
            // "className":'mdl-data-table__cell--non-numeric'
          },
        ],

      });
    }

    function edit(pid)
    {
      $("#pid").val(pid)
      save_method = 'update';
      $.ajax({
        url : "<?php echo site_url('blacklist/ajax_blacklist/')?>/" + pid,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           console.log(data);
            reset_blacklist();
            $('#pid').val(data.ID);
            $('#nomor_ktp').val(data.nomor_ktp);
            $('#nama_lengkap').val(data.nama_lengkap);
            $("#dt_tanggal_blacklist").data("kendoDatePicker").value(data.tanggal_blacklist),
            $('#dd_lama_blacklist').data("kendoDropDownList").value(data.lama_blacklist.replace(' bulan',''));

            $('#myModal').modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            }); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit Blacklist'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }

    function save(){
      var url;
      var black = {
        pid_pelamar : $("#pid").val(),
        nomor_ktp : $("#nomor_ktp").val(),
        nama_lengkap : $("#nama_lengkap").val(),
        tanggal_blacklist : kendo.toString($("#dt_tanggal_blacklist").data("kendoDatePicker").value(),'yyyy-MM-dd'),
        lama_blacklist : $("#dd_lama_blacklist").data("kendoDropDownList").value(),
      }
      if(save_method == 'blacklist') {
        url = "<?php echo site_url('blacklist/blacklist')?>";
      } else {
        url = "<?php echo site_url('blacklist/ajax_update')?>";
      }

       // ajax adding data to database
      $.ajax({
        url : url,
        type: "POST",
        data: black,
        dataType: "JSON",
        success: function(data){
           //if success close modal and reload ajax table
           console.log(data.pesan.pendidikan);
           if(data.status == "success"){
             swal("Good Job!","data berhasil disimpan","success");
             // $("#err_pendidikan").text("");
             // $("#err_jurusan").text("");
             $('#myModal').modal('toggle');
           }else{
             // $("#err_pendidikan").text(data.pesan.pendidikan);
             // $("#err_jurusan").text(data.pesan.jurusan);
           }
           reload_table();
        }
      });
    }

    function delete_jurusan(pid){
      if(confirm('Are you sure delete this data?')) {
        // ajax delete data to database
          $.ajax({
            url : "<?php echo site_url('m_jurusan/ajax_delete')?>/"+pid,
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
    }

    function blacklist(pid){
      save_method = 'blacklist';
      $.ajax({
        url : "<?php echo site_url('blacklist/ajax_blacklist/')?>/" + pid,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           console.log(data);
            reset_blacklist();
            $('#pid').val(data.ID);
            $('#nomor_ktp').val(data.nomor_ktp);
            $('#nama_lengkap').val(data.nama_lengkap);
            $("#dt_tanggal_blacklist").data("kendoDatePicker").value(data.tanggal_blacklist);
            $('#dd_lama_blacklist').data("kendoDropDownList").value(data.lama_blacklist);

            $('#myModal').modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            }); // show bootstrap modal when complete loaded
            $('.modal-title').text('Blacklist'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }

    function unblacklist(pid){
      var url;
      var whitelist = {
        pid_pelamar : pid,
      }

      url = "<?php echo site_url('blacklist/unblacklist')?>";

       // ajax adding data to database
      $.ajax({
        url : url,
        type: "POST",
        data: whitelist,
        dataType: "JSON",
        success: function(data){
           //if success close modal and reload ajax table
           console.log(data.pesan.pendidikan);
           if(data.status == "success"){
             swal("Good Job!","data berhasil disimpan","success");
             // $("#err_pendidikan").text("");
             // $("#err_jurusan").text("");
          // $('#myModal').modal('toggle');
           }else{
             // $("#err_pendidikan").text(data.pesan.pendidikan);
             // $("#err_jurusan").text(data.pesan.jurusan);
           }
           reload_table();
        }
      });
    }
  </script>
<?php get_template('footer');?>
