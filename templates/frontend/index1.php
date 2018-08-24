<?php get_template('header');?>
<?php echo form_error('username');?>
<?php echo form_error('password');?>
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
  $("#btn_login").click(function(){

    var datatosend = {
        username : $("#username").val(),
        password : $("#password").val()
    }
    console.log(datatosend);

    $.ajax('http://localhost:8080/PAMAhire/user/login', {
      dataType : 'json',
      type : 'POST',
      data: datatosend,
      success: function(data){
        console.log(data);
        $("#dd_login").addClass("open");
        $("#dd_login_ex").attr("aria-expanded","true");
        if(data.status == 'success'){
          window.location.href = "http://localhost:8080/PAMAhire/jobseeker";
        }else{
          alert('login gagal');
        }

      }

    });
  });

</script>
</body>
</html>
