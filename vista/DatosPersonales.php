<?php
require_once('layouts/header.php');
?>
  
  
  <div class="datos-personales">

       
       
<h2 class="titulo-datos">Gestión de información personal</h2>
<p class="info-datos">Esta es tu cuenta en FiftyFive. Edite su información personal y los ajustes de visibilidad en su Perfil de FiftyFive. Para observar más información, consulte nuestras Condiciones del Servicio o nuestra Política de Privacidad.</p>

<div class="container">

 <section class="secciones">
     <div class="formulario">
         
         <div >

             <form class="form-personal" method="post">

                 <label  for="nombre"> <span class="datos"> <strong>Nombre </strong> </span> </label><br>
                 <input  type="text" required="required" name="nombre" id="nombre"><br>
                 <label  for="nombre"> <span class="datos"> <strong>Apellido </strong> </span> </label><br>
                 <input  type="text" required="required" name="apellido" id="apellido"><br>
                 
                 <label for="email"> <span class="datos"> <strong>Correo electrónico</strong> </span> </label><br>
                 <input  type="email" required="required" name="email" id="email"><br>
                 <label  for="usuario"> <span class="datos"> <strong>Nombre de Usuario</strong> </span> </label><br>
                 <input  type="text" required="required" name="uruario" id="usuario"><br>
                 <label for="password"> <span class="datos-clave"> <strong>Contraseña</strong> </span> </label><br>
                 <input  type="password" required="required" name="password" id="password"><br>
                 <input id="submit-personal"  type="submit" value="Guardar">

             </form>
               
         </div>
     </div> 
    

 
 </section>

</div>

</div>



 

<script src="vista/script.js"></script>
  <!-- <?php
require_once('layouts/footer.php');
?>

/*
 <div class="datos-personales">

       
       
<h2 class="titulo-datos">Gestión de información personal</h2>
<p class="info-datos">Esta es tu cuenta en FiftyFive. Edite su información personal y los ajustes de visibilidad en su Perfil de FiftyFive. Para observar más información, consulte nuestras Condiciones del Servicio o nuestra Política de Privacidad.</p>

<div class="container">

 <section class="secciones">
     <div class="formulario">
         
         <div >

             <form class="form-personal" method="post">

                 <label  for="nombre"> <span class="datos"> <strong>Nombre completo</strong> </span> </label><br>
                 <input  type="text" required="required" name="nombre" id="nombre"><br>
                 <label  for="usuario"> <span class="datos"> <strong>Nombre de Usuario</strong> </span> </label><br>
                 <input  type="text" required="required" name="uruario" id="usuario"><br>
                 <label for="email"> <span class="datos"> <strong>Correo electrónico</strong> </span> </label><br>
                 <input  type="email" required="required" name="email" id="email"><br>
                 <label for="password"> <span class="datos-clave"> <strong>Contraseña</strong> </span> </label><br>
                 <input  type="password" required="required" name="password" id="password"><br>
                 <input id="submit-personal"  type="submit" value="Guardar">

             </form>
               
         </div>
     </div> 
    

 
 </section>

</div>

</div>


*/





