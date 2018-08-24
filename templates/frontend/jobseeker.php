<?php get_template('header_jobseeker');?>
<style>
  div.image-single-item {
    border: 1px solid #dfdfdf;
    padding: 2px;
    width: 100px;
    height: 100px;
    display: inline-block;
    margin-right: 5px;
  }

  .profile {
    margin: 20px 0;
  }

  /* Profile sidebar */
  .profile-sidebar {
    padding: 20px 0 10px 0;
    background: #fff;
  }

  .profile-userpic img {
    float: none;
    margin: 0 auto;
    width: 50%;
    height: 50%;
    -webkit-border-radius: 50% !important;
    -moz-border-radius: 50% !important;
    border-radius: 50% !important;
  }

  .profile-usertitle {
    text-align: center;
    margin-top: 20px;
  }

  .profile-usertitle-name {
    color: #5a7391;
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 7px;
  }

  .profile-usertitle-job {
    text-transform: uppercase;
    color: #5b9bd1;
    font-size: 12px;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .profile-userbuttons {
    text-align: center;
    margin-top: 10px;
  }

  .profile-userbuttons .btn {
    text-transform: uppercase;
    font-size: 11px;
    font-weight: 600;
    padding: 6px 15px;
    margin-right: 5px;
  }

  .profile-userbuttons .btn:last-child {
    margin-right: 0px;
  }

  .profile-usermenu {
    margin-top: 30px;
  }

  .profile-usermenu ul li {
    border-bottom: 1px solid #f0f4f7;
  }

  .profile-usermenu ul li:last-child {
    border-bottom: none;
  }

  .profile-usermenu ul li a {
    color: #93a3b5;
    font-size: 14px;
    font-weight: 400;
  }

  .profile-usermenu ul li a i {
    margin-right: 8px;
    font-size: 14px;
  }

  .profile-usermenu ul li a:hover {
    background-color: #fafcfd;
    color: #5b9bd1;
  }

  .profile-usermenu ul li.active {
    border-bottom: none;
  }

  .profile-usermenu ul li.active a {
    color: #5b9bd1;
    background-color: #f6f9fb;
    border-left: 2px solid #5b9bd1;
    margin-left: -2px;
  }

  /* Profile Content */
  .profile-content {
    padding: 20px;
    background: #fff;
    min-height: 460px;
  }
</style>

<div class="container">
  <div class="row profile">
  <div class="col-md-3">
    <div class="profile-sidebar">
      <!-- SIDEBAR USERPIC -->
      <div class="profile-userpic">
        <img src="http://localhost:8080/PAMAhire/uploads/2018/Mar/05/1/abdul.jpg" class="img-responsive" alt="">
      </div>
      <!-- END SIDEBAR USERPIC -->
      <!-- SIDEBAR USER TITLE -->
      <div class="profile-usertitle">
        <div class="profile-usertitle-name">
          Marcus Doe
        </div>
        <div class="profile-usertitle-job">
          Developer
        </div>
      </div>
      <!-- END SIDEBAR USER TITLE -->
      <!-- SIDEBAR BUTTONS -->
      <div class="profile-userbuttons">
        <button type="button" class="btn btn-success btn-sm">Follow</button>
        <button type="button" class="btn btn-danger btn-sm">Message</button>
      </div>
      <!-- END SIDEBAR BUTTONS -->
      <!-- SIDEBAR MENU -->
      <div class="profile-usermenu">
        <ul class="nav">
          <li class="active">
            <a href="#">
            <i class="glyphicon glyphicon-home"></i>
            Overview </a>
          </li>
          <li>
            <a href="#">
            <i class="glyphicon glyphicon-user"></i>
            Account Settings </a>
          </li>
          <li>
            <a href="#" target="_blank">
            <i class="glyphicon glyphicon-ok"></i>
            Tasks </a>
          </li>
          <li>
            <a href="#">
            <i class="glyphicon glyphicon-flag"></i>
            Help </a>
          </li>
        </ul>
      </div>
      <!-- END MENU -->
    </div>
  </div>
  <div class="col-md-9">
          <div class="profile-content">

            <img src="http://localhost:8080/PAMAhire/uploads/2018/Mar/05/1/abdul.jpg" class="img-thumbnail" alt="Cinque Terre" width="200" height="236">
            <input type="file" name="userfile" id="userfile"/>

          </div>

          <input id="datepicker" value="10/10/2011" title="datepicker" style="width: 100%" />
  </div>
</div>
</div>



  <script src="<?php echo get_template_directory(dirname(__FILE__), 'js/') ;?>bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory(dirname(__FILE__), 'js/');?>ajaxupload.js"></script>
  <script>
  // $(document).ready(function() {
                // create DatePicker from input HTML element
                $("#datepicker").kendoDatePicker();

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
            // });
  // $(function(){
  //   $(window).hashchange(function(){
  //   var hash = $.param.fragment();
  //   alert('xxxx');
  //     //ajax_upload('foto');
  //   });
  //
  // });

  /*
  $("#userfile").onselect = function(){
    alert("yuhuu");
    ajax_upload("profile");
  };
*/
  ajax_upload('profile');

  function ajax_upload(type){
    new AjaxUpload('userfile', {
        action: '../PAMAhire/media/action/tambah/'+type,
        name: 'userfile',
        responseType: "json",
        onSubmit: function(file, extension) {
          alert('Mohon menunggu sebentar...');
        },
        onComplete: function(file, response) {
          console.log(response);
          if(response.success == 'TRUE'){
            if(type == 'artikel') {
              $('#userfile').before(
                  '<img src='+response.img+' class="featured_image" />'  +
                  '<input class="span7" type="text" id="featured_image" name="featured_image" value="'+response.img_original+'" />' +
                  '<input type="hidden" id="featured_image_thumbnail" name="featured_image_thumbnail" value="'+response.img+'" />' +
                  '<button class="btn btn-danger" id="remove_featured_image"><i class="icon-remove"></i>Hapus Featured Image</button>'
                );
              $('#userfile').hide();
            }
            else if(type == 'profile'){
              $('.image-list-wrap').append(
                  '<div class="image-single-item">'+
                  '  <a class="btn btn-primary remove-img-btn"><i class="icon-remove"></i></a>'+
                  '  <img src="'+response.img_original+'" />'+
                  '  <input type="hidden" name="post_image[]" value="'+response.img_original+'" />'+
                  '</div>'
                );
            }
          }
        }
      });
  }
  </script>
  </body>
  </html>
