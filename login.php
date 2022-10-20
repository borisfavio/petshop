<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema | Incos</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/AdminLTE.min.css">

</head>
<body>
   <style type="text/css">
      body{
         /*background-color: #031320;*/
         /*background-color: #CCC;*/
      }
      section#login-usuarios{
         color: #242424;
         background-color: rgba(255, 255, 255, 0.5);
         border-radius: 5px;
         padding: 20px;
         margin: 0 auto;
         margin-top: 160px;
         width: 450px;
         box-shadow: 10px 10px 30px rgba(0, 0, 0, 0.8);
      }
      section#login-usuarios h4{
         margin-top: 20px;
         margin-bottom: 20px;
      }
      form.formulario{
         margin-top: 30px;
      }
      @media only screen and (max-width: 768px){
         section#login-usuarios{ 
            width: 80%;
            margin-top: 10px;
         }   
      }
   </style>        
   <section class="container">
      <section id="login-usuarios">
         <?php
            if (isset($_GET['error'] )) {
               $e=$_GET['error'];
               if ($e==1) {
                  echo '
                     <section class="alert alert-danger text-center">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Error!</strong> Usuario o Contraseña incorrecta
                     </section>
                  ';
               }  
               if ($e==2) {
                  echo '
                     <section class="alert alert-danger text-center">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <strong>Error!</strong> debe ingresar un usuaro o contrasena valida.
                     </section>
                  ';
               } 
            }
         ?>
         <h3 class="text-center"><strong>INICIAR SESION</strong></h3>
         <form method="post">
            <div class="form-group">
               <input type="text" name="usr" id="usr" class="form-control input-lg" placeholder="Usuario">
            </div>
            <div class="form-group">
               <input type="password" name="pwd" id="pwd" class="form-control input-lg" placeholder="Contraseña">
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-success btn-block btn-lg">INGRESAR</button>
            </div>

         </form>
      </section>
   </section>


</body>
</html>