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

</style>
  <input type="text" id="pid" disabled hidden/>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <button class="btn btn-primary1" onclick="add_jurusan()"><i class="glyphicon glyphicon-plus"></i> Tambah Jurusan</button>
        <br />
        <br />
        <table id="table_grid" class="display nowrap table table-bordered" cellspacing="0" style="width:100%" >
          <thead>
            <tr>
              <th>no</th>
              <th>kode jurusan</th>
              <th>pendidikan</th>
              <th>jurusan</th>
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
        <h4 class="modal-title">TAMBAH JURUSAN</h4>
      </div>
      <div id="crot" class="modal-body">
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="kode_jurusan">Kode Jurusan :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="kode_jurusan" name="kode_jurusan" style="background-color:gainsboro" placeholder="generate by system" disabled>
              <label id="err_kode_jurusan" style="text-align:left;color:red;margin-top:3px" for="kode_jurusan"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="pendidikan">Pendidikan :</label>
            <div class="col-sm-8">
              <input type="text" style="width:100%" class="form-control" id="dd_pendidikan" name="pendidikan">
              <label id="err_pendidikan" style="text-align:left;color:red;margin-top:3px" for="pendidikan"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="jurusan">Jurusan :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="jurusan" name="jurusan">
              <label id="err_jurusan" style="text-align:left;color:red;margin-top:3px" for="jurusan"></label>
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
  var table;
  $(document).ready(function() {

    load_grid();

      $("#dd_pendidikan").kendoDropDownList({
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

  });

  function reset_jurusan(){
    $("#kode_jurusan").val("");
    $("#dd_pendidikan").data("kendoDropDownList").value(-1);
    $("#jurusan").val("");
    $("#pid").val("");
  }

  function load_grid() {
      table = $('#table_grid').DataTable({
        "scrollX": true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url().'m_jurusan/ajax_list'?>",
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

    function add_jurusan()
    {
      save_method = 'add';
      $('#myModal').modal({
          show: 'true',
          keyboard: false,
          backdrop: 'static'
      });
      reset_jurusan();
      $('.modal-title').text('TAMBAH JURUSAN'); // Set Title to Bootstrap modal title
    }

    function edit_jurusan(pid)
    {
      save_method = 'update';

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('m_jurusan/ajax_edit/')?>/" + pid,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           console.log(data);
            reset_jurusan();
            $('#kode_jurusan').val(data.kode_jurusan);
            $('#dd_pendidikan').data("kendoDropDownList").value(data.pendidikan);
            $('#jurusan').val(data.jurusan);
            $('#pid').val(data.pid);

            $('#myModal').modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            }); // show bootstrap modal when complete loaded
            $('.modal-title').text('EDIT JURUSAN'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }

    function save(){
      var url;
      var jurusan = {
        pid : $("#pid").val(),
        kode_jurusan : $("#kode_jurusan").val(),
        pendidikan : $("#dd_pendidikan").data("kendoDropDownList").value(),
        jurusan : $("#jurusan").val(),
      }
      if(save_method == 'add') {
        url = "<?php echo site_url('m_jurusan/ajax_add')?>";
      } else {
        url = "<?php echo site_url('m_jurusan/ajax_update')?>";
      }

       // ajax adding data to database
      $.ajax({
        url : url,
        type: "POST",
        data: jurusan,
        dataType: "JSON",
        success: function(data){
           //if success close modal and reload ajax table
           console.log(data.pesan.pendidikan);
           if(data.status == "success"){
             swal("Good Job!","data berhasil disimpan","success");
             $("#err_pendidikan").text("");
             $("#err_jurusan").text("");
             $('#myModal').modal('toggle');
           }else{
             $("#err_pendidikan").text(data.pesan.pendidikan);
             $("#err_jurusan").text(data.pesan.jurusan);
             if(data.pesan.remark_jrs != ""){
               swal("",data.pesan.remark_jrs,'error');
             }
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
  </script>
<?php get_template('footer');?>
