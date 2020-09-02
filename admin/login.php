<?php 
  session_start();
  if(isset($_SESSION["usuario"])){
    header("location: bienvenida2.php");
  }  
?>
<html>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="shortcut icon" href="../images/login2.png">
<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
<link rel="shortcut icon" href="../images/favicon.png">
<style>
	* { box-sizing: border-box; padding:0; margin: 0; }

body {
	font-family: "HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;
  color:white;
  font-size:12px;
  background-image: url(../images/fondo_login5.jpg);
  background-size: 100% 100%;
  background-repeat: no-repeat;
}

form {
 	background:#111; 
  border-radius:0.4em;
  border:1px solid #191919;
  overflow:hidden;
  position:relative;
  box-shadow: 0 5px 10px 5px rgba(0,0,0,0.2);
}

form:after {
  content:"";
  display:block;
  position:absolute;
  height:1px;
  width:100px;
  left:20%;
  background:linear-gradient(left, #111, #444, #b6b6b8, #444, #111);
  top:0;
}

form:before {
 	content:"";
  display:block;
  position:absolute;
  width:8px;
  height:5px;
  border-radius:50%;
  left:34%;
  top:-7px;
  box-shadow: 0 0 6px 4px #fff;
}

.inset {
 	padding:20px; 
  border-top:1px solid #19191a;
}

form h1 {
  font-size:18px;
  text-shadow:0 1px 0 black;
  text-align:center;
  padding:15px 0;
  border-bottom:1px solid rgba(0,0,0,1);
  position:relative;
}

form h1:after {
 	content:"";
  display:block;
  width:250px;
  height:100px;
  position:absolute;
  top:0;
  left:50px;
  pointer-events:none;
  transform:rotate(70deg);
  background:linear-gradient(50deg, rgba(255,255,255,0.15), rgba(0,0,0,0));
  
}

label {
 	color:#666;
  display:block;
  padding-bottom:9px;
}

input[type=text],
input[type=password] {
 	width:100%;
  padding:8px 5px;
  color: white;
  background:linear-gradient(#1f2124, #27292c);
  border:1px solid #222;
  box-shadow:
    0 1px 0 rgba(255,255,255,0.1);
  border-radius:0.3em;
  margin-bottom:20px;
}

label[for=remember]{
 	color:white;
  display:inline-block;
  padding-bottom:0;
  padding-top:5px;
}

input[type=checkbox] {
 	display:inline-block;
  vertical-align:top;
}

.p-container {
 	padding:0 20px 20px 20px; 
}

.p-container:after {
 	clear:both;
  display:table;
  content:"";
}

.p-container span {
  display:block;
  float:left;
  color:#0d93ff;
  padding-top:8px;
}

input[type=submit] {
 	padding:5px 20px;
  border:1px solid rgba(0,0,0,0.4);
  text-shadow:0 -1px 0 rgba(0,0,0,0.4);
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 10px 10px rgba(255,255,255,0.1);
  border-radius:0.3em;
  background:#0184ff;
  color:white;
  float:right;
  font-weight:bold;
  cursor:pointer;
  font-size:13px;
}
.mt-40{
  margin-top: 40px;
  }

input[type=submit]:hover {
  box-shadow:
    inset 0 1px 0 rgba(255,255,255,0.3),
    inset 0 -10px 10px rgba(255,255,255,0.1);
}

input[type=text]:hover,
input[type=password]:hover,
label:hover ~ input[type=text],
label:hover ~ input[type=password] {
 	background:#27292c;
}
.scroll{

  overflow-x: hidden;
  }
</style>
<body class="scroll">
  <!--<hr class="separator">-->
  <div class="row">
        <div class="form-group col-md-12">
          <center>
          <img src="../images/logo.png" style="width:20%;" alt="logo">
        </center>
        </div>
      </div>
      
      <div class="container">
        <form action="" id="formulario-inicia" class="mt-40 col-xs-12 col-md-4 col-md-offset-4" method="post" onsubmit="iniciaSession();return!1;">
          <h1>Panel de Control</h1>
          <div id="cajaError" class="hidden col-md-12 alert alert-info text-center">
            Usuario y contraseña no válidos.
          </div>

          <div class="inset">
          <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" required="required" id="usuario">
          </p>
          <p>
            <label for="password">Contraseña</label>
            <input type="password" name="password" required="required" id="password">
          </p>
          </div>
          <p class="p-container">
            <a href="bienvenida2.php">
            <input type="submit" name="" id="" value="Iniciar Sesion"></a>
          </p>
        </form>
      </div>

  <script type="text/javascript">
    function iniciaSession(){
      $("#cajaError").addClass("hidden");
      $.ajax({
        url: "ajax/inicia.php",
        data: $("#formulario-inicia").serialize(),
        type: "post",
        success: function(recibo){
          if(recibo){
            $("#cajaError").removeClass("hidden");
          }else{
            location.href = "inicia.php";
          }
         
        }
      });
      
    }
  </script>
</body>
</html>