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
        <button class="btn btn-primary1" onclick="add_position()"><i class="glyphicon glyphicon-plus"></i> Tambah Position</button>
        <br />
        <br />
        <table id="table_grid" class="display nowrap table table-bordered" cellspacing="0" style="width:100%" >
          <thead>
            <tr>
              <th>no</th>
              <th>division code</th>
              <th>position code</th>
              <th>position name</th>
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
            <label class="control-label col-sm-4" style="text-align:left" for="division_code">Division Code :</label>
            <div class="col-sm-8">
              <input type="text" style="width:100%" class="form-control" id="dd_division_code" name="division_code">
              <label id="err_division_code" style="text-align:left;color:red;margin-top:3px" for="division_code"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="position_code">Position Code :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="position_code" name="position_code">
              <label id="err_position_code" style="text-align:left;color:red;margin-top:3px" for="position_code"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="position_desc">Position Desc :</label>
            <div class="col-sm-8">
              <input type="text" style="width:100%" class="form-control" id="position_desc" name="position_desc">
              <label id="err_position_desc" style="text-align:left;color:red;margin-top:3px" for="position_desc"></label>
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

      $("#dd_division_code").kendoDropDownList({
                dataTextField: "text",
                dataValueField: "value",
                optionLabel: " -- Select -- ",
                dataSource: [
                  { text: "HCGS",value:"HCGS" },
                  { text: "SMDV",value:"SMDV" },
                  { text: "ISDV",value:"ISDV" },
                  { text: "CPMD",value:"CPMD" },
                ]
            });

  });

  function reset_position(){
    $("#dd_division_code").data("kendoDropDownList").value(-1);
    $("#position_code").val("");
    $("#position_desc").val("");
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
            "url": "<?php echo base_url().'position/ajax_list'?>",
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

    function add_position()
    {
      reset_position();
      save_method = 'add';
      $('#myModal').modal({
          show: 'true',
          keyboard: false,
          backdrop: 'static'
      });

      $('.modal-title').text('TAMBAH POSITION'); // Set Title to Bootstrap modal title
    }

    function edit_position(pid)
    {
      save_method = 'update';

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('position/ajax_edit/')?>/" + pid,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           console.log(data);
            reset_position();
            $('#dd_division_code').data("kendoDropDownList").value(data.division_code);
            $('#position_code').val(data.position_code);
            $('#position_desc').val(data.position_desc);
            $('#is_active').prop('checked', data.is_active == '1'? true : false);
            $('#pid').val(data.pid);

            $('#myModal').modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            }); // show bootstrap modal when complete loaded
            $('.modal-title').text('EDIT POSITION'); // Set title to Bootstrap modal title
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
      var position = {
        pid : $("#pid").val(),
        division_code : $("#dd_division_code").data("kendoDropDownList").value(),
        position_code : $("#position_code").val(),
        position_desc : $("#position_desc").val(),
        is_active : check,
      }

      if(save_method == 'add') {
        url = "<?php echo site_url('position/ajax_add')?>";
      } else {
        url = "<?php echo site_url('position/ajax_update')?>";
      }

       // ajax adding data to database
      $.ajax({
        url : url,
        type: "POST",
        data: position,
        dataType: "JSON",
        success: function(data){
           //if success close modal and reload ajax table
           if(data.status == "success"){
             swal("Good Job!","data berhasil disimpan","success");
             $("#err_division_code").text("");
             $("#err_position_code").text("");
             $("#err_position_desc").text("");
             $('#myModal').modal('toggle');
           }else{
             $("#err_division_code").text(data.pesan.division_code);
             $("#err_position_code").text(data.pesan.position_code);
             $("#err_position_desc").text(data.pesan.position_desc);
             if(data.pesan.remark_pos != ""){
               swal("",data.pesan.remark_pos,'error');
             }
           }
           reload_table();
        }
      });
    }

    function delete_position(pid){
      if(confirm('Are you sure delete this data?')) {
        // ajax delete data to database
          $.ajax({
            url : "<?php echo site_url('position/ajax_delete')?>/"+pid,
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
