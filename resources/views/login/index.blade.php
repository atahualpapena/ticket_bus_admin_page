<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat UI Login</title>
  
  
  
      <link rel="stylesheet" href="{{asset('css/login.css')}}">

  
</head>

<body>
  <div id="wrap">
  <div id="regbar">
    <div id="navthing">
      <h2><a href="#" id="loginform">Login</a> </h2>
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
           <fieldset>
             <label  >Usuario</label>
             {{ csrf_field() }} 
             <input type="email" id="email" placeholder="example@example.com" />
             <label >Contraseña</label>
             <input type="password" id="password" placeholder="Clave" />
             <input type="submit" id="login"  value="Acceder" />
 
           </fieldset>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script>
  var BASE_URL = '{{url('/')}}/';
  </script>
    <script src="{{asset('js/login/index.js')}}"></script>

</body>
</html>
