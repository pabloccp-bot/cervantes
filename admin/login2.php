





<style>


   #login {
    z-index: 22;
}
#register, #login {
    position: absolute;
    top: 0px;
    width: 100%;
    background: #fff;
    padding: 20px;
}
.animate {
    -webkit-animation-duration: 0.5s;
    -webkit-animation-timing-function: ease;
    -webkit-animation-fill-mode: both;
    -moz-animation-duration: 0.5s;
    -moz-animation-timing-function: ease;
    -moz-animation-fill-mode: both;
    -o-animation-duration: 0.5s;
    -o-animation-timing-function: ease;
    -o-animation-fill-mode: both;
    -ms-animation-duration: 0.5s;
    -ms-animation-timing-function: ease;
    -ms-animation-fill-mode: both;
    animation-duration: 0.5s;
    animation-timing-function: ease;
    animation-fill-mode: both;
}
*, *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
body {
    color: #73879C;
    background: #2A3F54;
    font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
    font-size: 13px;
    font-weight: 400;
    line-height: 1.471;
}
body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
}
html {
    font-size: 10px;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
}
html {
    font-family: sans-serif;
    -ms-text-size-adjust: 100%;
    -webkit-text-size-adjust: 100%;
}
user agent stylesheet
html {
    color: -internal-root-color;
}
*, *:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
*:before, *:after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
} 
</style>
<div class="container-fluid row-fluid aligncenter header-login">
            <img src="img/logo.png">
        </div>

<div id="login" class="animate form">
                <section class="login_content">
                    <form class="form-signin" method="post" action="session">
                    	
                        <h1>Iniciar Sesión</h1>
                       	                       
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" name="login_email">
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Clave" name="login_pass" required="">
                        </div>
                        <input type="hidden" name="token" value="INcJ8O7Bqhu8MNe7HEyIgQ==">
                        <div>
                            <button class="btn btn-large btn-primary" type="submit">Ingresar</button>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br>
                            <div>
                                <p>
                                	©2016 Todos los derechos reservados.
                                	<br><strong>Mapper</strong>
                                </p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>