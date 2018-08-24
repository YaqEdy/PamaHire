<?php get_template('header');?>
<div class="container">
            <form class="form-horizontal" id="form-user" role="form" action="tambah">
                <h2 style="color:#00b1b3!important">Isi Form</h2>
                <h5>Silahkan lakukan registrasi dengan mengisi data diri berikut dengan benar dan lengkap!</h5>
                <div class="form-group">
                    <label for="nama_lengkap" class="col-sm-3 control-label">Nama Lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" name="username" id="username" placeholder="Minimal 6 Karakter" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ulangi_password" class="col-sm-3 control-label">Ulangi Password</label>
                    <div class="col-sm-9">
                        <input type="password" name="password_ulangi" id="password_ulangi" placeholder="Minimal 6 Karakter" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="nomor_handphone" class="col-sm-3 control-label">Nomor handphone</label>
                    <div class="col-sm-9">
                        <input type="text" name="nomor_handphone" id="nomor_handphone"  class="form-control">
                    </div>
                </div>
            </form> <!-- /form -->
            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button id="submit-user" style="background-color:#00b1b3!important;color:white;" class="btn btn-block">Daftar</button>
                </div>
            </div>
        </div> <!-- ./container -->


        <div class="footer">
          <div class="footer-inner">
            <div class="container">
              <div class="row">
                <div class="span12"> &copy; 2018 <a href="#">pamahire.com</a>  </div>
                <!-- /span12 -->
              </div>
              <!-- /row -->
            </div>
            <!-- /container -->
          </div>
          <!-- /footer-inner -->
        </div>
        <!-- /footer -->
        <!-- Le javascript
        ================================================== -->

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo get_template_directory(dirname(__FILE__), 'js/') ;?>jquery-3.3.1.min.js"></script>
        <script src="<?php echo get_template_directory(dirname(__FILE__), 'js/') ;?>bootstrap.min.js"></script>
        <script>
        $("#submit-user").click(function(){
          var action = $('#form-user').attr('action');

          //var mass_action_type = $('#form-user #mass_action_type').val();

          // if(action == 'mass'){
          //   var datatosend = $('#tbl-user input').serialize() + '&mass_action_type='+mass_action_type;
          // }
          // else{
          var datatosend = $('#form-user').serialize();
          // }
          console.log(datatosend);

          $.ajax('http://localhost:8080/PAMAhire/user/action/tambah', {
            dataType : 'json',
            type : 'POST',
            data: datatosend,
            success: function(data){
              console.log(data);
              if(data.status == 'success'){
                alert('yuhii');
              }

            }

          });
        });
        </script>
        </body>
  </html>
