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
    height: 420px;
    overflow-y: auto;
  }
  label {
      font-weight: normal !important;
  }
  /* .k-dropdown .k-dropdown-wrap{
      height: 34px;
  } */

  input.uniform-input, select.uniform-multiselect, textarea.uniform{
    height: 300px;
  }

  @media only screen and (max-width: 768px) {
    /* For mobile phones: */
    #btn_batal,#btn_batal1,#btn_simpan1,#btn_simpan2,#btn_simpan_edit{
      width: 100% !important;
      margin: 0px 0px 3px 0px!important;
    }
}
</style>
  <input type="text" id="pid" disabled hidden/>
  <input type="text" id="pid_min_gpa"disabled hidden/>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12">
        <button class="btn btn-primary1" onclick="add_posisi()"><i class="glyphicon glyphicon-plus"></i> Tambah Posisi Lowongan</button>
        <br />
        <br />
        <table id="table_grid" class="display nowrap table table-bordered" cellspacing="0" style="width:100%" >
          <thead>
            <tr>
              <th>No</th>
              <!-- <th>Judul Rekrutmen</th> -->
              <th>Kode Posisi</th>
              <th>Position Title</th>
              <th>Employee Type</th>
              <th>Level</th>
              <th>education</th>
              <!-- <th>Min. GPA</th> -->
              <th>Work Location</th>
              <th>Job Description</th>
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
        <h4 class="modal-title">TAMBAH POSISI</h4>
      </div>
      <div id="crot" class="modal-body">
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="kode_posisi">Kode Posisi :</label>
            <div class="col-sm-8">
              <input type="text" class="k-textbox" id="kode_posisi" style="width:100%" name="kode_posisi">
              <label id="err_kode_posisi" style="text-align:left;color:red;margin-top:3px" for="kode_posisi"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="position_title">Position Title :</label>
            <div class="col-sm-8">
              <input type="text" id="dd_position_title" name="position_title" style="width:100%">
              <label id="err_position_title" style="text-align:left;color:red;margin-top:3px" for="position_title"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="employee_type">Employee Type :</label>
            <div class="col-sm-8">
              <input type="text" id="dd_employee_type" name="employee_type" style="width:100%">
              <label id="err_employee_type" style="text-align:left;color:red;margin-top:3px" for="employee_type"></label>
            </div>
          </div>
          <div class="form-group" id="form_contract">
            <label class="control-label col-sm-4" style="text-align:left" for="contract">contract :</label>
            <div class="col-sm-8">
              <input type="text" id="dd_contract" name="contract" style="width:30%">
              <label id="err_contract" style="text-align:left;color:red;margin-top:3px" for="contract"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="level">Level :</label>
            <div class="col-sm-8">
              <input type="text" style="width:100%" id="dd_level" name="level">
              <label id="err_level" style="text-align:left;color:red;margin-top:3px" for="level"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="education">Education :</label>
            <div class="col-sm-8">
              <input type="text" id="dd_education" name="education">
              <label id="err_education" style="text-align:left;color:red;margin-top:3px" for="education"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="jurusan">Jurusan :</label>
            <div class="col-sm-8">
              <select multiple class="form-control" id="jurusan" name="jurusan">
              </select>
              <label id="err_jurusan" style="text-align:left;color:red;margin-top:3px" for="jurusan"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="min_gpa">Min. GPA :</label>
            <div class="col-sm-12">
              <table id="table_grid_detail" class="display nowrap table table-bordered" cellspacing="0" style="width:100%" >
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Jurusan</th>
                    <th>Min. GPA</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
              <label id="err_min_gpa" style="text-align:left;color:red;margin-top:3px" for="min_gpa"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="usia">Usia :</label>
            <div class="col-sm-8">
              <input type="text" class="k-textbox" id="usia" name="usia" style="width:100%">
              <label id="err_usia" style="text-align:left;color:red;margin-top:3px" for="usia"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="jenis_kelamin">Jenis Kelamin :</label>
            <div class="col-sm-8">
              <input type="text" id="dd_jenis_kelamin" name="jenis_kelamin" style="width:100%">
              <label id="err_jenis_kelamin" style="text-align:left;color:red;margin-top:3px" for="jenis_kelamin"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="status_pernikahan">Status Pernikahan :</label>
            <div class="col-sm-8">
              <input type="text" id="dd_status_pernikahan" name="status_pernikahan" style="width:100%">
              <label id="err_status_pernikahan" style="text-align:left;color:red;margin-top:3px" for="status_pernikahan"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="work_location">Work Location :</label>
            <div class="col-sm-8">
              <input type="text" id="dd_work_location" name="work_location" style="width:100%">
              <label id="err_work_location" style="text-align:left;color:red;margin-top:3px" for="work_location"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="job_description">Job Description :</label>
            <div class="col-sm-8">
              <textarea type="text" rows="8" class="form-control" id="job_description" name="job_description" style="width:100%"></textarea>
              <label id="err_job_description" style="text-align:left;color:red;margin-top:3px" for="job_description"></label>
            </div>
          </div>
        </form>
      </div>
      <div id="foot1" class="modal-footer">
          <button type="button" id="btn_simpan1" onclick="save(0)" style="width:49%;" class="btn btn-success1 form-control"><span class="glyphicon glyphicon-floppy-disk" style="color:white"></span> SIMPAN</button>
          <button type="button" id="btn_batal1" style="width:49%;" class="btn btn-default form-control" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> BATAL</button>
      </div>
      <div id="foot2" class="modal-footer" hidden>
          <button type="button" id="btn_simpan2" onclick="save(0)" style="width:20%;" class="btn btn-success1 form-control"><span class="glyphicon glyphicon-floppy-disk" style="color:white"></span> SIMPAN</button>
          <button type="button" id="btn_simpan_edit" onclick="save(1)" style="width:40%;" class="btn btn-primary1 form-control"><span class="glyphicon glyphicon-floppy-saved" style="color:white"></span> SIMPAN & EDIT KEMBALI</button>
          <button type="button" id="btn_batal" style="width:20%; margin-right:9%" class="btn btn-default form-control" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> BATAL</button>
      </div>
    </div>

  </div>
</div>

<div class="modal fade" id="myModalMinGPA" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">EDIT MINIMAL GPA</h4>
      </div>
      <div id="crot" class="modal-body">
        <form class="form-horizontal" action="/action_page.php">
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="jurusan_detail">Jurusan :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="jurusan_detail" disabled name="jurusan_detail" style="width:100%">
              <label id="err_jurusan_detail" style="text-align:left;color:red;margin-top:3px" for="jurusan_detail"></label>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-4" style="text-align:left" for="min_gpa">Min. GPA :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="min_gpa" name="min_gpa" style="width:100%">
              <label id="err_min_gpa" style="text-align:left;color:red;margin-top:3px" for="min_gpa"></label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
          <button type="button" id="btn_simpan_gpa" onclick="save_min_gpa()" style="width:48%;" class="btn btn-default form-control">SIMPAN</button>
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
    load_grid_detail();

    $("#dd_position_title").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { text: "Enginering Group Leader",value:"Enginering Group Leader" },
                { text: "Production Group Leader",value:"Production Group Leader" },
              ]
          });
    $("#dd_jenis_kelamin").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { text: "Pria",value:"1" },
                { text: "Wanita",value:"0" },
              ]
          });

     $("#dd_status_pernikahan").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                {text:"Lajang",value:"Lajang"},
                {text:"Menikah",value:"Menikah"},
                {text:"Cerai",value:"Cerai"},
              ]
          });
    $("#dd_employee_type").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { text: "Pro-Hire",value:"Pro-Hire" },
                { text: "Contract",value:"Contract" },
              ],
              change:function(e){
                var dataItem = this.dataItem(e.sender.oldIndex);
                if(dataItem.value == 'Contract'){
                  $("#form_contract").show();
                }else{
                  $("#form_contract").hide();
                  $("#dd_contract").data("kendoDropDownList").value(-1);
                }
              }
          });
    $("#dd_contract").kendoDropDownList({
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

    $("#dd_level").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { text: "Dept. Head",value:"Dept. Head" },
                { text: "Section. Head",value:"Section. Head" },
                { text: "Officer",value:"Officer" },
                { text: "Trainee",value:"Trainee" },
                { text: "Internship",value:"Internship" },
              ]
          });

    $("#dd_education").kendoDropDownList({
              dataTextField: "text",
              dataValueField: "value",
              optionLabel: " -- Select -- ",
              dataSource: [
                { text: "SMA/SMK",value:"SMA/SMK" },
                { text: "D-III",value:"D-III" },
                { text: "S1/D-IV",value:"S1/D-IV" },
                { text: "S2",value:"S2" },
              ],
              change:function(e){
                var dataItem = this.dataItem(e.sender.oldIndex);
                var education = {
                  edu : dataItem.value,
                }
                $.ajax({
                  url : "<?php echo site_url('m_jurusan/ajax_jurusan')?>",
                  type: "POST",
                  data: education,
                  dataType: "JSON",
                  success: function(data)
                  {
                    $("#jurusan option").remove();
                    for (var i = 0; i < data.length; i++) {
                      $("#jurusan").append("<option value='"+data[i].pid+"'>"+ data[i].jurusan+" ("+data[i].kode_jurusan+")</option>");
                    }
                  }
                });
              }
          });

  $("#dd_work_location").kendoDropDownList({
            dataTextField: "text",
            dataValueField: "value",
            optionLabel: " -- Select -- ",
            dataSource: [
              { text: "HO",value:"HO" },
              { text: "Job Site",value:"Job Site" },
            ]
        });
  });

  function reset_posisi(){
    // $("#kode_jurusan").val("");
    // $('#pid_rekrutmen').data("kendoDropDownList").value(-1);
    $("#jurusan option").remove();
    $('#kode_posisi').val("");
    $('#pid').val("");
    $("#dd_position_title").data("kendoDropDownList").value(-1);
    $("#dd_employee_type").data("kendoDropDownList").value(-1);
    $("#dd_contract").data("kendoDropDownList").value(-1);
    $("#form_contract").hide();
    $("#dd_level").data("kendoDropDownList").value(-1);
    // $("#jurusan").val(),
    $("#dd_education").data("kendoDropDownList").value(-1);
    $("#dd_status_pernikahan").data("kendoDropDownList").value(-1);
    $("#dd_jenis_kelamin").data("kendoDropDownList").value(-1);
    // $("#min_gpa").val(-1);
    $("#usia").val("");
    $("#dd_work_location").data("kendoDropDownList").value(-1);
    $("#job_description").val("");

    $('#err_kode_posisi').text("");
    $("#err_position_title").text("");
    $("#err_employee_type").text("");
    $("#err_contract").text("");
    $("#err_level").text("");
    $("#err_jurusan").text("");
    $("#err_education").text("");
    $("#err_status_pernikahan").text("");
    $("#err_jenis_kelamin").text("");
    $("#err_usia").text("");
    $("#err_work_location").text("");
    $("#err_job_description").text("");

  }

  function load_grid() {
      table = $('#table_grid').DataTable({
        "scrollX": true,
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo base_url().'m_posisi/ajax_list'?>",
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

    function load_grid_detail() {
        // var gpa = {
        //   pid_posisi : $("#pid").val(),
        // }
        table_detail = $('#table_grid_detail').DataTable({
          // "scrollX": true,
          "processing": true, //Feature control the processing indicator.
          "serverSide": true, //Feature control DataTables' server-side processing mode.
          // Load data for the table's content from an Ajax source
          "bLengthChange": false,
          "bFilter": false,
          "bInfo": false,
          "ajax": {
              "url": "<?php echo base_url().'m_posisi/ajax_list_detail'?>",
              "type": "POST",
              "data": function(d){
                d.pid_posisi = $("#pid").val();
              }
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

    function add_posisi()
    {
      save_method = 'add';
      $('#myModal').modal({
          show: 'true',
          keyboard: false,
          backdrop: 'static'
      });
      $("#foot1").show();
      $("#foot2").hide();
      reset_posisi();
      reload_table();
      $('.modal-title').text('TAMBAH POSISI'); // Set Title to Bootstrap modal title
    }

    function edit_posisi(pid)
    {
      save_method = 'update';

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('m_posisi/ajax_edit/')?>/" + pid,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           // console.log(data);
            reset_posisi();
            // $('#kode_jurusan').val(data.kode_jurusan);
            $('#dd_education').data("kendoDropDownList").value(data.education);
            // $('#pid_rekrutmen').data("kendoDropDownList").value(data.pid_rekrutmen);
            $('#jurusan').val(data.jurusan);
            $('#pid').val(data.pid);
            $('#kode_posisi').val(data.kode_posisi);
            $("#dd_position_title").data("kendoDropDownList").value(data.position_title);
            $("#dd_employee_type").data("kendoDropDownList").value(data.employee_type);
            $("#dd_contract").data("kendoDropDownList").value(data.contract);
            $("#dd_level").data("kendoDropDownList").value(data.level);
            // $("#jurusan").val(),
            $("#dd_jenis_kelamin").data("kendoDropDownList").value(data.jenis_kelamin);
            $("#dd_status_pernikahan").data("kendoDropDownList").value(data.status_pernikahan);
            $("#usia").val(data.usia);
            $("#dd_education").data("kendoDropDownList").value(data.education);
            $("#min_gpa").val(data.min_gpa);
            $("#dd_work_location").data("kendoDropDownList").value(data.work_location);
            $("#job_description").val(data.job_description);

            if(data.employee_type != "Contract"){
              $("#form_contract").hide();
              $("#dd_contract").data("kendoDropDownList").value(-1);
            }else{
              $("#form_contract").show();
            }

            var education = {
              edu : data.education,
            }

            var posisi = {
              pid_posisi : data.pid,
            }

            $.ajax({
              url : "<?php echo site_url('m_jurusan/ajax_jurusan')?>",
              type: "POST",
              data: education,
              dataType: "JSON",
              success: function(dataEdu)
              {
                $("#jurusan option").remove();
                for (var i = 0; i < dataEdu.length; i++) {
                  $("#jurusan").append("<option value='"+dataEdu[i].pid+"'>"+ dataEdu[i].jurusan+" ("+dataEdu[i].kode_jurusan+")</option>")
                }

                $.ajax({
                  url : "<?php echo site_url('m_posisi/ajax_select_posisi')?>",
                  type: "POST",
                  data: posisi,
                  dataType: "JSON",
                  success: function(dataSelect)
                  {
                    var selectPID = [];

                    for(var i = 0; i<dataSelect.length;i++){
                      selectPID.push(dataSelect[i].pid_jurusan);
                    }
                    console.log(selectPID);
                    $("#jurusan").val(selectPID);
                    // $.each(selectPID,function(i,e){
                    //   $("#jurusan option[value='"+e+"']").prop("selected",true);
                    // });
                  }
                });
              }
            });

            $("#foot1").hide();
            $("#foot2").show();
            reload_table();
            $('#myModal').modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            }); // show bootstrap modal when complete loaded
            $('.modal-title').text('EDIT POSISI LOWONGAN'); // Set title to Bootstrap modal title
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }

    function edit_posisi_detail(pid)
    {
      save_method = 'update';

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('m_posisi/ajax_edit_detail/')?>/" + pid,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
           console.log(data);
            // reset_posisi_detail();
            $('#pid_min_gpa').val(data.pid);
            $('#min_gpa').val(data.min_gpa);
            $('#jurusan_detail').val(data.jurusan);

            $('#myModalMinGPA').modal({
                show: 'true',
                keyboard: false,
                backdrop: 'static'
            }); // show bootstrap modal when complete loaded

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
      });
    }

    function save(stateSave){
      var url;
      // alert($('#pid_rekrutmen').data("kendoDropDownList").value());
      var posisi = {
        pid : $("#pid").val(),
        // pid_rekrutmen : $('#pid_rekrutmen').data("kendoDropDownList").value(),
        position_title : $("#dd_position_title").data("kendoDropDownList").value(),
        employee_type : $("#dd_employee_type").data("kendoDropDownList").value(),
        kode_posisi : $('#kode_posisi').val(),
        contract : $("#dd_contract").data("kendoDropDownList").value(),
        level : $("#dd_level").data("kendoDropDownList").value(),
        jurusan : $("#jurusan").val(),
        education : $("#dd_education").data("kendoDropDownList").value(),
        jenis_kelamin : $("#dd_jenis_kelamin").data("kendoDropDownList").value(),
        status_pernikahan : $("#dd_status_pernikahan").data("kendoDropDownList").value(),
        usia : $("#usia").val(),
        work_location : $("#dd_work_location").data("kendoDropDownList").value(),
        job_description : $("#job_description").val(),
      }
      console.log(posisi);
      if(save_method == 'add') {
        url = "<?php echo site_url('m_posisi/ajax_add')?>";
      } else {
        url = "<?php echo site_url('m_posisi/ajax_update')?>";
      }

       //ajax adding data to database
      $.ajax({
        url : url,
        type: "POST",
        data: posisi,
        dataType: "JSON",
        success: function(data){
          //if success close modal and reload ajax table
          console.log(data);
          if(save_method == 'update' && data.status == "success" && stateSave != 1) {
            swal("Good Job!","data berhasil disimpan","success");
            $('#myModal').modal('toggle');
          }

          if(save_method == 'update' && data.status == "success" && stateSave == 1) {
            alert("data berhasil disimpan.");
            swal("Good Job!","data berhasil disimpan.","success");
          }

          if(data.status == "success" && save_method != 'update' ){
            $("#pid").val(data.pid);
            save_method = 'update';
            $("#foot1").hide();
            $("#foot2").show();
            swal("Good Job!","data berhasil disimpan, silahkan edit min GPA jika diperlukan.","success");
          }

          if(data.status != "success"){
            $('#err_kode_posisi').text(data.pesan.kode_posisi);
            $("#err_position_title").text(data.pesan.position_title);
            $("#err_employee_type").text(data.pesan.employee_type);
            $("#err_level").text(data.pesan.level);
            $("#err_jurusan").text(data.pesan.jurusan);
            $("#err_education").text(data.pesan.education);
            $("#err_status_pernikahan").text(data.pesan.status_pernikahan);
            $("#err_jenis_kelamin").text(data.pesan.jenis_kelamin);
            $("#err_usia").text(data.pesan.usia);
            $("#err_work_location").text(data.pesan.work_location);
            $("#err_job_description").text(data.pesan.job_description);
            $("#err_contract").text(data.pesan.contract);
            swal("","data gagal disimpan",'error');
          }else{
            $('#err_kode_posisi').text("");
            $("#err_position_title").text("");
            $("#err_employee_type").text("");
            $("#err_level").text("");
            $("#err_jurusan").text("");
            $("#err_education").text("");
            $("#err_status_pernikahan").text("");
            $("#err_jenis_kelamin").text("");
            $("#err_usia").text("");
            $("#err_work_location").text("");
            $("#err_job_description").text("");
            $("#err_contract").text("");
          }
          reload_table();
        }
      });
    }


    function save_min_gpa(){
      var url;
      // alert($('#pid_rekrutmen').data("kendoDropDownList").value());
      var posisi_detail = {
        pid : $("#pid_min_gpa").val(),
        jurusan_detail : $("#jurusan_detail").val(),
        min_gpa : $("#min_gpa").val(),
      }

      url = "<?php echo site_url('m_posisi/ajax_update_detail')?>";
       //ajax adding data to database
      $.ajax({
        url : url,
        type: "POST",
        data: posisi_detail,
        dataType: "JSON",
        success: function(data){         //if success close modal and reload ajax table
            $('#myModalMinGPA').modal('toggle');
           alert("data berhasil disimpan.")
           reload_table();
        }
      });
    }

    function delete_posisi(pid){
      if(confirm('Are you sure delete this data?')) {
        // ajax delete data to database
          $.ajax({
            url : "<?php echo site_url('m_posisi/ajax_delete')?>/"+pid,
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
      table_detail.ajax.reload(null,false);
    }
  </script>
<?php get_template('footer');?>
