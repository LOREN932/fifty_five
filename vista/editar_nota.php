<?php 
require_once('layouts/header.php');
?>
 <div class="contenido">
        <div class="text">
<h2>EDITAR ANOTACION</h2>
<br><br>
<form action="" method="get">
    <?php
    foreach($dato as $key => $value):
        foreach($value as $v):
        ?>
        <div class="edit_tarea2">
    
        <div class="bloc">
    <label for="descripcion_nota"> <strong>Descripción</strong> </label>     <br>
    <textarea  required="required" name="descripcion_nota" id="descripcion_nota" cols="100" rows="10"><?php echo $v['descripcion_nota'] ?></textarea>  <br>
    </div>

    <div class="bloc">
    



</div>

<div class="bloc">



</div>
<input type="hidden" value="<?php echo $v['id'] ?>" name="id"> <br>
    <input type="submit" class="submit-notas btn3" value="Editar">
    <input type="hidden" name="n" value="actualizar_nota"> 
        </div>
    <?php
        endforeach;
    endforeach;
    ?>
</form>

        
        </div>
 </div>
 <script src="vista/script.js"></script>
 <?php
require_once('layouts/footer.php');
?>