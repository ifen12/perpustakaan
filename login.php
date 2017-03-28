<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  
<link rel="stylesheet" href="css/iconmaterial.css">
  <link rel="stylesheet" href="css/materialize.css">

  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="js/materialize.js"></script>
</head>
<body>
<a href="index.html"><i class="material-icons" style="color: #FFF">close</i></a>
<div class="container" style="margin-top:50px;">
  <div class="row">
    <div class="container">
    <div class="row">
    <div class="container">
      <div class="card-panel" style="background-color: white !important; padding: 10px !important; overflow: hidden !important ;">
        <form class="login-form" action="log.php?op=in" method="POST">
          <div class="row">
            <div class="input-field col s12 center">
              <img src="img/logo.jpg" alt="" class="circle responsive-img valign profile-image-login">
            </div>
          </div>
          <div class="row ">
            <div class="input-field col s12">
              <i class="material-icons prefix">person_pin</i>
              <input id="username" type="text" name="userid">
              <label for="username" class="">Username</label>
            </div>
          </div>
          <div class="row ">
            <div class="input-field col s12">
              <i class="material-icons prefix">lock</i>
              <input id="password" type="password" name="psw">
              <label for="password" class="">Password</label>
            </div>
          </div>
          <div class="row">          
            <div class="input-field col s12 m12 l12  login-text">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <button class="btn waves-effect waves-light col s12">Login</button>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6 m6 l6">
              <p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>
            </div>
            <div class="input-field col s6 m6 l6">
                <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>
            </div>          
          </div>

        </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>