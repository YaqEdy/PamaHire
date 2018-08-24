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
        <button class="btn btn-primary1" onclick="add_source()"><i class="glyphicon glyphicon-plus"></i> Tambah Source</button>
        <br />
        <br />
        <table id="table_grid" class="display nowrap table table-bordered" cellspacing="0" style="width:100%" >
          <thead>
            <tr>
              <th>no</th>
              <th>source code</th>
              <th>source name</th>
              <th>is active</th>
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
        <h4 class="modal-title">TAMBAH SOURCE</h4>
      </div>
      <div id="crot" class="modal-body">
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="source_code">Source Code :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="source_code" name="source_code">
              <label id="err_source_code" style="text-align:left;color:red;margin-top:3px" for="source_code"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="pendidikan">Source Name :</label>
            <div class="col-sm-8">
              <input type="text" style="width:100%" class="form-control" id="source_name" name="source_name">
              <label id="err_source_name" style="text-align:left;color:red;margin-top:3px" for="source_name"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="is_active">Is Active :</label>
            <div class="col-sm-8">
              <input type="checkbox" id="is_active" name="is_active">
              <label id="err_is_active" style="text-align:left;color:red;margin-top:3px" for="is_active"></label>
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

  function reset_source(){
    $("#source_code").val("");
    $("#source_name").val("");
    $('#is_active').prop('checked', false);
    $("#pid").val("");
  }

  function load_grid() {
      table = $('#table_grid').DataTable({
        "scrollX": true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url().'source/ajax_list'?>",
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

    function add_source()
    {
      reset_source();
      save_method = 'add';
      $('#myModal').modal({
          show: 'true',
          keyboard: false,
          backdrop: 'static'
      });

      $('.modal-title').text('TAMBAH SOURCE'); // Set Title to Bootstrap modal title
    }

    function edit_source(pid)
    {
      save_method = 'update';

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('source/ajax_edit/')?>/" + pid,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           console.log(data);
            reset_source();
            $('#source_code').val(data.source_code);
            $('#source_name').val(data.source_name);
            $('#is_active').prop('checked', data.is_active == '1'? true : false);
            $('#pid').val(data.pid);

            $('#myModal').modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            }); // show bootstrap modal when complete loaded
            $('.modal-title').text('EDIT SOURCE'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }

    function save(){
      var check;
      if ($('#is_active').is(":checked")){
        check = "1";
        alert("a");
      }else{
        check = "0";
      }
      var url;
      var jurusan = {
        pid : $("#pid").val(),
        source_code : $("#source_code").val(),
        source_name : $("#source_name").val(),
        is_active : check,
      }

      if(save_method == 'add') {
        url = "<?php echo site_url('source/ajax_add')?>";
      } else {
        url = "<?php echo site_url('source/ajax_update')?>";
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
             $("#err_source_code").text(data.pesan.source_code);
             $("#err_source_name").text(data.pesan.source_name);
             if(data.pesan.remark_src != ""){
               swal("",data.pesan.remark_src,'error');
             }
           }
           reload_table();
        }
      });
    }

    function delete_source(pid){
      if(confirm('Are you sure delete this data?')) {
        // ajax delete data to database
          $.ajax({
            url : "<?php echo site_url('source/ajax_delete')?>/"+pid,
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
