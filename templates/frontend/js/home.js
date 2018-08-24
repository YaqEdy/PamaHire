$("#btn_login").click(function(){
  var action = $('#form-user').attr('action');

  var datatosend = $('#form-login').serialize();
  // }
  console.log(datatosend);

  $.ajax('http://localhost:8080/PAMAhire/user/login', {
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
