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
  <style>
  </style>
<body>

  <nav></nav>

<div class="row">
  <div id="login-page" class="row">
      <form class="login-form" action="log.php?op=in" method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="img/logo.jpg" alt="" class="circle responsive-img valign profile-image-login">
            <p class="center login-form-text"> Material Login Admin </p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" name="userid">
            <label for="username" class="">Username</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
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

</body>
</html>

  