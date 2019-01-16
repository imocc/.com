<?php  
session_start();

$sesionnombre= $_SESSION['usuarionombre'];
$sesioncorreo= $_SESSION['usuariocorreo'];
$sesioncontraseña= $_SESSION['usuariocontra'];
$sesionapellido = $_SESSION['usuarioapellido'];

if ($sesionnombre == "" ||   $sesionapellido == "" || $sesioncorreo == "" || $sesioncontraseña== "" ) {

header("Location:error.html");
 die();
}
?>
<!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/portfolio-item.css" rel="stylesheet">
  </head>
  <center>
  <body>
    <!--PRELOADER-->
    <div id="preloader">
      <div id="status"><center>
        <img style="position: center;
        background-color: ;
        border-radius: 50%;
        border-color: ;
       " alt="logo" src="img/loader.gif"  ></center><center><p class="introx">....Cargando</p></center>
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
  background-image: url("https://thumb.ibb.co/cYACFz/loading.gif");
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
  background: url("https://thumb.ibb.co/cYACFz/loading.gif") no-repeat center center
}

</style>
<script type="text/javascript">
  
  //preloader
    $("#status").fadeOut(); 
    $("#preloader").delay(4500).fadeOut("slow"); 
    
</script>

<header id="header" style="position: fixed;">
 <!-- Navigation -->
   
    
      <h1 style="margin-right: 5px;"><font color="#ffffffff;">IMOC</font></h1>
       
       

   
</header>

  <!-- Portfolio Item Row -->
  <div class="shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: -10px;">
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="img/bien.png"  width="150px" height="150px" alt="">
        

        </div>

        <div class="col-md-4" style="margin-right: -80px;">
          <h3 class="my-3">Bienvenido</h3>
     <p class="" style="color: #0665a2;font-size: 23px;">     
 <?php  echo  $_SESSION['usuarionombre']."&nbsp".$_SESSION['usuarioapellido']; ?> </p>
          <!--<p class="text-success" style="text-align: justify;">esto es lo que podras hacer con IMOC</p>-->
    <br><br>
    <label>¿Por qué usar IMOC?</label>

          <ul style="margin-right: 10px; text-align: justify;">
            <li class="text-success">1)Incluye Malla actualizada de cada carrera </li>
            <li class="text-success">2)Cuenta con Buscadores de Libros .</li>
            <li class="text-success">3) Permite guardar notas o eventos.</li>
            <li class="text-success">4) Te permite realizar </li>
          </ul>
        </div>

  </div>
<select name="" class="form"  style="width: 300px;">
  <option> ---Elije tu Carrera--- </option>

  <option value="">INGENIERIA DE SISTEMAS E INFORMATICA</option>
  <option value="">INGENIERIA CIVIL</option>
  <option value="">INGENIERIA AGRONOMA</option>
  <option value="">INGENIERIA AGROINDUSTRIAL</option>
  <option value="">INGENIERIA EN ENERGIA</option>
  <option value="">INGENIERIA MECANICA</option>
  <option value="">EDUCACION SECUNDARIA</option>
  <option value="">EDUCACION PRIMARIA</option>
  <option value="">EMFERMERIA</option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>

</select>
<br><br>


      </div>
      <!-- /.row -->



<a href="IMOC/index.php">
<button type="button" class="btn btn-primary  btn-lg " >EMPEZAR</button><br>
<!--<button type="button" class="btn btn-success  btn-lg"">COMPARTIR</button>-->
</a>



  <style type="text/css" media="screen">
@media screen and (max-width: 1020px) {

  button{
  width:100%;
  }
   select{
 width:100%;
 }

}

 select{
   width: 600px;
 }

.check{
  width: 20px;
  height: 20px;
  margin-right: 120px;
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
        border-bottom: solid 1px rgba(160, 160, 160, 0.3);
        height: 3.5em;
        left: 0;
        line-height: 3.5em;
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 10000;
    }
      
    .box_l{
  margin-left: 30px;
  margin-top: -30px;
}

        #header form {
            margin: 0;
        }

            #header form input {
                display: inline-block;
                height: 2.5em;
                position: relative;
                top: -2px;
                vertical-align: middle;
            }

        #header #search {
            -moz-transition: all 0.5s ease;
            -webkit-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
            max-width: 0;
            opacity: none;
            overflow: hidden;

          
            white-space: nowrap;
        }

            #header #search input {
                width: 12em;
            }

            #header #search.visible {
                max-width: 12.5em;
                opacity: 1;
                padding: 0 0.5em 0 0;
            }

        @media screen and (max-width: 980px) {

            #header .links {
                display: none;
            }
        }
        @media screen and (max-width: 736px) {
            #header {
                height: 2.75em;
                line-height: 2.75em;
            }

                #header h1 {
                    padding: 0 0 0 1em;
                }

                #header .main .search {
                    display: none;
                }

        }
        li{
          list-style: none;
        }
  header{

background-color:#0665a2;
height: 50px;
width: 100%;
  z-index: 9999;
  position: fixed;
  z-index: -1;
  bottom: 0;
  width: 100%;
  height: 50px;
  opacity: 20px;
  z-index: 1;
  top: 0;
  left: 0;
  border-bottom: 1px solid #0665a2;   
  display: block;
  padding: 0px 15px 5px 15px;
  background: #0665a2;        
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -ms-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;


  }
  button{
    width: 600px;

  }

  html,body {
-webkit-font-smoothing:antialiased;
-webkit-text-size-adjust:100%;

color:#000;
font-size:15px;
font-family:"Oxygen", HelveticaNeue, "Helvetica Neue",
Helvetica, Arial, sans-serif;


}
*,::before,::after {
box-sizing:border-box;
}

* {
-webkit-tap-highlight-color:rgba(0,0,0,0);
-webkit-tap-highlight-color:transparent;
}








  .u{
    width: 300px;
    height: 40px;
    font-size: 25px ;
    font-family:"Oxygen", HelveticaNeue, "Helvetica Neue",
Helvetica, Arial, sans-serif;

  }


  .sect{ 
margin-top: 50px;

   }
  .fr{
width: 100%;
height: 30px;

  }
  input{
    width: 220px;
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
  footer{

    width: 100%;
    
    background-color:#ed3 ;

  }

/* Media Queries
================================================== */

@media only screen and (max-width:600px) {
   .sect{

    width: 100%;
   }
   button{
    width: 100%;
   }
    button{
  width:900px;
  }

}
@media screen and (max-width: 992px) {
button{
 width: 50%;
 }

}


@media screen and (max-width: 46.5em) {
    button{
  width:100%;
  }

}

@media screen and (max-width: 25em) {
   button{
  width:100%;
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
  </body>
</center>
  </html>