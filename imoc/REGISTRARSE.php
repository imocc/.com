

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="theme-color" content="#0665a2">
	<title>IMOC</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


      <link rel="stylesheet" type="text/css" href="css/ventanadescarga/normalize.css" />
    <link rel="stylesheet" type="text/css" href="fonts/feather/style.css" />

    <link rel="stylesheet" type="text/css" href="css/ventanadescarga/dialog.css" />
    <!---script libreria js , para mostrame las alertas en los buttons--->
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="alert.js" type="text/javascript" charset="utf-8" async defer></script>



</head>
<center>
<body>

  <!--PRELOADER-->
    <div id="preloader">
      <div id="status"><center>
        <img alt="logo" src="img/loader.gif" ></center>
      </div>
      <br>

    </div>
    <!--/.PRELOADER fin , es lo mmaximo-->
    <style>

    /*------- 2) Preloader ------*/
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #0665a2;
  z-index: 999999;
}
.introx{
color: #fff;
}

.saa{
   width: 200px;
  height: 200px;
  position: absolute;
  left: 50%;
  top: 50%;
  
  background-repeat: no-repeat;
  background-position: center center;
  text-align: center;
  margin: -40px 0 0 -100px;
}
.saa img{
text-align: center;
  margin-top: -80px;

}


#status {
  width: 200px;
  height: 200px;
  position: absolute;
  left: 50%;
  top: 50%;
  background-image: url("img/loader.gif");
  background-repeat: no-repeat;
  background-position: center center;
  text-align: center;
  margin: -40px 0 0 -100px;
}
#status img {
  text-align: center;
  margin-top: -80px;
}
/* preloading images */
.owl-item.loading{
  min-height: 150px;
  background: url("img/loader.gif") no-repeat center center
}

</style>
<script type="text/javascript">
  
  //preloader
    $("#status").fadeOut(); 
    $("#preloader").delay(4500).fadeOut("slow");






    
</script>
	<script> 


 function iniciar(){
 nombre1=document.getElementById("nombre");

 nombre1.addEventListener("input", validacion, false);

 validacion();
 }
 function validacion(){
 if(nombre1.value=='' && nombre2.value==''){
 nombre1.setCustomValidity('inserte al menos un nombre');
 nombre1.style.background='#FFDDDD';
 }else{
 nombre1.setCustomValidity('');
 nombre1.style.background='#FFFFFF';
 }
 }
 window.addEventListener("load", iniciar, false);
 </script> 



		    <div class="shadow-lg p-3 mb-5 bg-blue rounded" style="background-color:#0665a2; ">
	<header id="header">
   
    <h1 style="margin-left: 15px;margin-top: 10px;" ><font color="#ffffffff" >IMOC</font></h1> 

    <button id="trigger-dialog" class="btn btn-info "  style="margin-left: -100px;height: 45px;margin-top: 5px;background-color:#007bff; width: 120px; font-size: 18px; "><font color="#ffffffff" >COMPARTIR</font></button>
  </header></div>










<!-------------------mostrando una ventana de opciones de compartir y descargra la app-->
<div class="dialog" id="dialog-1">
        <div class="mover-wrap dialog__content">
          <div class="handle"></div>
          <div class="mover">
            <div class="dialog__content-inner">
              <div class="dialog__header">
                <h2>COMPARTIR CON:</h2>
                <button class="action action--close">
                  <i class="icon icon--cross"></i>
                  <span class="text-hidden">Close dialog</span>
                </button>
              </div>
              <div class="dialog__body">
                <div class="actions">
                  <div class="mover__element">
                    <a href="#" class="action action--fav">
                     <i style="background-image: url("img/facebook.png");" class="fab fa-facebook-square "></i>
                      <span class="action__title">Facebook</span>
                      <span class="action__subline"></span>
                    </a>
                  </div>
                  <div class="mover__element">
                    <a href="#" class="action action--download">
                      <i class="icon icon--download icon--action"></i>
                      <span class="action__title">Gmail</span>
                      <span class="action__subline"></span>
                    </a>
                  </div>
                  <div class="mover__element">
                    <a href="#" class="action action--share">
                      <i class="icon icon--share icon--action"></i>
                      <span class="action__title">DESCARGAR APP</span>
                      <span class="action__subline"></span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="dialog__footer">
                <a href="#">Compartir : Solo en Facebook</a>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!----fin de la ventana modal--->
















































<div class="container-contact100">

  
  <center>

<img height="80px" width="80px" style="margin-left:20px;margin-top: 0px;
position: center;
box-shadow:    8px #0665a2;
border-radius: 40%;
  animation: 6s animateBorderThree ease infinite;



  
  @keyframes animateBorderThree {
  to {
    outline-color: 5px #0665a2;
    box-shadow: 0 0 5px #0665a2 ;
  }
  
}



" src="im.png"><br>

<style type="text/css">

  .ai{
    margin-right: 260px;

    margin-top: -250px;

  box-shadow:    12px #0665a2;
  animation: 6s animateBorderThree ease infinite;
}
@keyframes animateBorderThree {
  to {
    outline-color: 8px #0665a2;
    box-shadow: 0 0 0 6px #0665a2 ;
  }
  
}

  }
</style>







  <br><br>
	<section class="sect">
		

		<div class="fr">
      
<form id="main-contact-form" action="sesion.php" method="post" acept-charset="utf-8">
<p class="pq">NOMBRE</p>
<input   autocomplete="off"  type="name" name="nombre" required="required"  placeholder="Escribe tu primer nombre"><br><br>
<p class="pq">APELLIDO</p>
<input id="val_nombre" autocomplete="off"  type="text" name="apellido" required="required"  placeholder="Escribe tu primer apellido"   ><br><br>
	<p class="pq">CORREO</p>
<input autocomplete="off" required="required"  type="email" name="correo"  placeholder="Maycol@ejemplo.com"  
 pattern=".+\.com"   title="Solo se aceptan direcciones de correo bien formadas pertenecientes a servidores .com" ><br><br>
<p class="pw">CONTRASEÑA</p>
<input type="password" id="contraseña" name="contra" value="" placeholder="Ingrese una contraseña segura">
<br><br>
<div class="div_box">
<input class="check" type="checkbox" name="politica" value=""><label class="box_l">Aceptas todos los terminos de IMOC , recordandote que una vez que te registres , accedemos a tus datos adecuadamente.</label></div>
<br><br>
<br>
<button type="submit"   style="background-color: #085E53;width: 300px;letter-spacing: 2px;" class="btn btn-info " data-toggle="modal" data-target="#myModal">REGISTRARSE</button><br><br>

<br>
<!--<button type="submit" style="background-color: #007bff;width: 300px;letter-spacing: 2px;" class="btn btn-info " data-toggle="modal" data-target="#myModal">INICIAR CESION</button><br>--><br>

</form>

<?php 
$requisito=$_POST['politica'];


if (isset($requisito)) {
echo "bien";
}


 ?>






</div>
<br><br>
</section>
<style type="text/css" media="screen">
html,body {
-webkit-font-smoothing:antialiased;
-webkit-text-size-adjust:100%;
background-color:#eeeeee;
color:#000;
font-size:15px;
font-family:"Oxygen", HelveticaNeue, "Helvetica Neue",
Helvetica, Arial, sans-serif;
font-weight:300;
letter-spacing:.025rem;
line-height:1.618;
padding:1rem 0;
}
*,::before,::after {
box-sizing:border-box;
}


   #header {
        display: -moz-flex;
        display: -webkit-flex;
        display: -ms-flex;
        display: flex;
        -moz-justify-content: space-between;
        -webkit-justify-content: space-between;
        -ms-justify-content: space-between;
        justify-content: space-between;
        background-color:#0665a2;
        color: #fff;
        border-bottom: solid 1px rgba(160, 160, 160, 0.3);
        height: 3.5em;
        left: 0;
        line-height: 3.5em;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 10000;
    }
.div_box{
width: 280px;
height: 50px;
text-align: justify;
font-size: 15px;
}
.box_l{
	margin-left: 30px;
	margin-top: -30px;
}
input.btn_compartir{
	width: 300px;
	height: 30px;
	margin-top: -20px;
	
}
.pq{
	margin-right:  180px ;
}
.pw{margin-right:  150px ;}


* {
-webkit-tap-highlight-color:rgba(0,0,0,0);
-webkit-tap-highlight-color:transparent;
}
.check{
	width: 20px;
	height: 20px;
	margin-right: 120px;
}
	.sect{ 

margin-top: -30px;

	 }
	.fr{
width: 100%;
height: 50px;

	}
	.logo{
		margin-right: 800px;

	}
	input{
		width: 300px;
		height: 40px;
		position: center;
		letter-spacing: 0px;
		border-radius: 5px 5px 5px;
		box-shadow: 2px 2px #edae;
		font-family:"Oxygen", HelveticaNeue, "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-size: 15px;
		text-decoration: none;
		border-decoration:none;
		text-decoration-line: none;
	}
	.w{

		width: 280px;
		height: 40px;
	}


/* Media Queries
================================================== */

@media only screen and (max-width:600px) {
   .sect{

   	width: 100%;
   }
   .logo{
   		width: 100%;
   }

 
   .btn_compartir{
   		width: 100%;
   }

}

	</style>
	   
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>







<!-- /container -->
    <script src="js/ventanadescarga/draggabilly.pkgd.min.js"></script>
    <script src="js/ventanadescarga/dynamics.min.js"></script>
    <script src="js/ventanadescarga/main.js"></script>
    <script>
      (function() {
        var dialog = new DialogEl(document.getElementById('dialog-1'), {
          mainElement : {
            minscale : 0.6,
            minopacity : 0.5,
            //rX : 30,
            rY : 40
          },
          innerElements : {tx : 100, ty : 100},
          // the element is considered out of bounds if its center (x,y) is either 
          // x < outofbounds.x or x > win.width-outofbounds.x or
          // y < outofbounds.y or y > win.height - outofbounds.y
          outofbounds: {x : 0, y: 0}
        });

        document.getElementById('trigger-dialog').addEventListener('click', function(ev) {
          dialog.open();
        });
      })();
    </script>








  </body>








</center>
</html>