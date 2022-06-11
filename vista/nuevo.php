
<?php  /*
  require_once("layouts/header2.php");
?>

<div class="registro">
<i class="fa-solid fa-user-plus" name="re"></i>

<h1>Registro de usuario</h1>   
<form action="" method="get">


<div class ="pa">
         
         <div class="nombre">
            
             <input type="text" required placeholder="Nombre" name="nombre">
        
           
         </div>
         
         <div class="apellido">
             <input type="text" required placeholder="Apellido" name="apellido">
          
         </div> 
     </div>
   
     <div class="pa2">
          <div class="username">
             <input type="text" required placeholder="Nombre de Usuario" name="nombredeusuario"> 
 
         </div>
         
         <div class="password">
             <input type= "password" required placeholder=" Contraseña" name="contrasenia">
            
 
         </div>
     </div>
     
     <div class="pa3">
         <div class="email">
             <input type="email" required placeholder="Correo" name="correo">
         </div>
 
         <div class="passwordagain">
             <input type="password" required placeholder="Confirmar contraseña">
         </div>
     </div>
    
     <div class="aceptar">
 
         He leido y acepto los terminos
    </div>

    <input type="submit" class="btn btn-1" name="btn" value="GUARDAR"><br>
    <input type="hidden" name="n" value="guardar"> 
    <!-- para iniciar sesion en tal caso -->
</form>

</div>
<?php 
require_once("layouts/footer.php");
?>