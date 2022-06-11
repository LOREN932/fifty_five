<?php  /*
require_once("layouts/header.php");
?>

<div class="formulario">
        <i class="fa-regular fa-circle-user" name="circulo"></i>
        <h1>Inicio de sesion</h1>

        <form method="get" action="">
            <div class="username">
                <i class="fa-solid fa-user" name="usuario"></i>
             
                <input type="text" required="" name="n_usuario">
                <label>Nombre de usuario</label>
            </div>
            <div class="password">
                <i class="fa-solid fa-lock" name="candado"></i>
                <input type="password" required="" name="contrasenia">
                <label>Contraseña</label>
            </div>
            <div class="recordarcontraseña">

                <a href="recuperar contraseña.html">¿Olvidaste tu contraseña?</a> 
                
            </div>
            <input type="submit" value="Ingresar">
            <input type="hidden" name="n" value="login"> 
            <div class="registrarse">
               <a href=index.php?n=nuevo>Quiero registrarme</a> 
            </div>
        </form>
    </div>

<?php 
require_once("layouts/footer.php");
?>