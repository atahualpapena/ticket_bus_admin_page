$('input[type="submit"]').mousedown(function(){
    $(this).css('background', '#2ecc71');
  });
  $('input[type="submit"]').mouseup(function(){
    $(this).css('background', '#1abc9c');
  });
  
  $('#loginform').click(function(){
    $('.login').fadeToggle('slow');
    $(this).toggleClass('green');
  });
  
  
  
  $(document).mouseup(function (e)
  {
      var container = $(".login");
  
      if (!container.is(e.target) // if the target of the click isn't the container...
          && container.has(e.target).length === 0) // ... nor a descendant of the container
      {
          container.hide();
          $('#loginform').removeClass('green');
      }
  });


  $('#login').on('click',function(){
      $.ajax({
            url: BASE_URL+'acceder',
            method:'POST',
            dataType:'json',
            data:{
                _token: $('input[name=_token]').val(),
                email:$('#email').val(),
                password:$('#password').val()
            }
      }).done(function(result){
        if(result.status > 0)
        {
                window.location.href = BASE_URL +'bus';
                return false;
        }
        toastr.warning(result.msn, 'Advertencia');
      }).error(function(result){
        
      }); 
  });