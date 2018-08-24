<?php get_template('header');?>
<style>
  .hr_shadow{
  border:none;
  height: 20px;
 	width: 90%;
	height: 50px;
	margin-top: 0;
	border-bottom: 1px solid #2c3e50;
	box-shadow: 0 12px 12px -12px #2c3e50;
  margin: -50px auto 10px;
}
.center_div{
    margin: 0 auto;
  /* value of your choice which suits your alignment */
}

.form-control:focus {
  border-color: #2c3e50;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px #2c3e50 !important;
}
</style>
<div class="container">
  <div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
  <div class="panel panel-default" style="padding:20px;">
            <form class="form-horizontal" style="margin-bottom:30px;">

                <div class="form-group">

                    <div class="col-sm-10 col-sm-offset-1">
                      <h1 style="color:#2c3e50!important">Data Diri</h1>
                      <h5>Perusahaan perlu mengetahui data diri Anda, seperti nama, tempat dan
        tanggal lahir, alamat Anda dan sebagainya. Juga bagaimana perusahaan
        dapat menghubungi Anda.</h5>
                      <hr class="hr_shadow"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <label>Nama :</label>
                        <input type="text" name="nama" id="nama" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                      <label>Jenis Kelamin :</label>
                        <div class="row">
                            <div class="col-sm-3">
                                <label class="radio-gender">
                                    <input type="radio" id="priaRadio" value="Pria"> Pria
                                </label>
                            </div>
                            <div class="col-sm-3">
                                <label class="radio-gender">
                                    <input type="radio" id="wanitaRadio" value="Wanita"> Wanita
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                      <label>Tempat Lahir :</label>
                        <select id="tempat_lahir" class="form-control">
                            <option>Afghanistan</option>
                            <option>Bahamas</option>
                            <option>Cambodia</option>
                            <option>Denmark</option>
                            <option>Ecuador</option>
                            <option>Fiji</option>
                            <option>Gabon</option>
                            <option>Haiti</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <label>Tanggal Lahir :</label>
                        <input type="date" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12 col-sm-offset-2">
                      <label>Status :</label>
                        <div class="row">
                            <div class="col-sm-2">
                                <label class="radio-status">
                                    <input type="radio" id="menikahRadio" value="Pria"> Menikah
                                </label>
                            </div>
                            <div class="col-sm-2">
                                <label class="radio-status">
                                    <input type="radio" id="lajangRadio" value="Wanita"> Lajang
                                </label>
                            </div>
                            <div class="col-sm-2">
                                <label class="radio-status">
                                    <input type="radio" id="jandaRadio" value="Pria"> Janda
                                </label>
                            </div>
                            <div class="col-sm-2">
                                <label class="radio-status">
                                    <input type="radio" id="dudaRadio" value="Wanita"> Duda
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group" hidden>
                    <div class="col-sm-7 col-sm-offset-2">
                        <label>Jumlah Anak :</label>
                        <input type="text" name="jumlah_anak" id="jumlah_anak" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <label>Agama</label>
                        <select id="agama" class="form-control">
                            <option>Islam</option>
                            <option>Kristen</option>
                            <option>Katholik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <label>Hobi :</label>
                        <input type="text" name="hobi" id="hobi" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <label>Blog :</label>
                        <input type="text" name="blog" id="blog" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <label>Alamat Sekarang :</label>
                        <textarea placeholder="Enter Address Here.." id="alamat_sekarang" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <label>Negara Sekarang :</label>
                        <select id="negara_sekarang" class="form-control">
                            <option>Indonesia</option>
                            <option>Kristen</option>
                            <option>Katholik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                      <label>Provinsi Sekarang :</label>
                        <select id="provinsi_sekarang" class="form-control">
                            <option>Indonesia</option>
                            <option>Kristen</option>
                            <option>Katholik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                      <label>Kota Sekarang :</label>
                        <select id="kota_sekarang" class="form-control">
                            <option>Indonesia</option>
                            <option>Kristen</option>
                            <option>Katholik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <label>Kode Pos :</label>
                        <input type="text" name="kode_pos" id="kode_pos" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-3 col-sm-offset-2">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="alamat_asal_sekarang"> Alamat Asal (Alamat KTP) = Alamat Sekarang</a>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                      <label>Alamat Asal :</label>
                        <textarea placeholder="Sesuai dengan alamat KTP" id="alamat_asal" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                      <label>Negara Asal :</label>
                        <select id="negara_asal" class="form-control">
                            <option>Indonesia</option>
                            <option>Kristen</option>
                            <option>Katholik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                      <label>Provinsi Asal :</label>
                        <select id="provinsi_asal" class="form-control">
                            <option>Indonesia</option>
                            <option>Kristen</option>
                            <option>Katholik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                      <label>Kota Asal :</label>
                        <select id="kota_asal" class="form-control">
                            <option>Indonesia</option>
                            <option>Kristen</option>
                            <option>Katholik</option>
                            <option>Hindu</option>
                            <option>Budha</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-7 col-sm-offset-2">
                        <a id="submit-data-diri" style="background-color:#2c3e50!important;color:white;" class="btn btn-block">Simpan</a>
                    </div>
                </div>
            </form> <!-- /form -->
          </div>


        </div>
        </div>
        </div> <!-- ./container -->


        <!-- <div class="footer">
          <div class="footer-inner">
            <div class="container">
              <div class="row">
                <div class="span12"> &copy; 2018 <a href="#">pamahire.com</a>  </div> -->
                <!-- /span12 -->
              <!-- </div> -->
              <!-- /row -->

            <!-- </div>
          </div> -->
            <!-- /container -->
          <!-- </div> -->
          <!-- /footer-inner -->
        <!-- </div> -->
        <!-- /footer -->
        <!-- Le javascript
        ================================================== -->

        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo get_template_directory(dirname(__FILE__), 'js/') ;?>jquery-3.3.1.min.js"></script>
        <script src="<?php echo get_template_directory(dirname(__FILE__), 'js/') ;?>bootstrap.min.js"></script>
        <script>
        $("#submit-data-diri").click(function(){
          alert("yuhu");
          // var action = $('#form-user').attr('action');
          //
          // //var mass_action_type = $('#form-user #mass_action_type').val();
          //
          // // if(action == 'mass'){
          // //   var datatosend = $('#tbl-user input').serialize() + '&mass_action_type='+mass_action_type;
          // // }
          // // else{
          // var datatosend = $('#form-user').serialize();
          // // }
          // console.log(datatosend);
          //
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
        </body>
  </html>
