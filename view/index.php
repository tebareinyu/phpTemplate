<?php

setlocale(LC_ALL, "es_ES");
$modulo = "Formulario";
$nav = '0';

require_once "../controller/assets/svrurl.php";
require_once "../controller/assets/validacion.php";
require_once "../controller/assets/inicio.php";

//Validacion de login
$login = new seguridad;
$login->seguridadLogin();

$pm_nombre = $_SESSION['template_nombre'];
$pm_email = $_SESSION['template_email'];
$pm_tipo = $_SESSION['template_tipo'];
$pm_acceso = $_SESSION['template_acceso'];

?>
<!-- Usuario -->
<a id="tipodeusuario" class="hide"><?php echo $pm_tipo ?></a>
<!-- Usuario -->
<?php
////Requerir NAVMENU
require "../controller/assets/menunav.php";
?>

<!-- BODDY -->
<div id="bodysecon" class="row"> 
  

  <div class="row container">
    <div class="col s12">
    <h1>Hola Mundo</h1>
    <form action="#">
    <p>
      <label>
        <input type="checkbox" />
        <span>Red</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" checked="checked" />
        <span>Yellow</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Filled in</span>
      </label>
    </p>
    <p>
      <label>
        <input id="indeterminate-checkbox" type="checkbox" />
        <span>Indeterminate Style</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" checked="checked" disabled="disabled" />
        <span>Green</span>
      </label>
    </p>
    <p>
      <label>
        <input type="checkbox" disabled="disabled" />
        <span>Brown</span>
      </label>
    </p>
  </form>
  <div class="divider"></div>
  <div class="section">
    <h5>Section 1</h5>
    <p>Stuff</p>
  </div>
  <div class="divider"></div>
  <div class="section">
    <h5>Section 2</h5>
    <p>Stuff</p>
  </div>
  <div class="divider"></div>
  <div class="section">
    <h5>Section 3</h5>
    <p>Stuff</p>
  </div>
    </div>
  </div>

</div>
<!--Datos-->
<!-- BODDY -->

<!-- SCRIPTS CARGA -->
<?php
require_once "../controller/assets/scripts.php";
?>
<!-- SCRIPTS CARGA -->

<!-- SCRIPTS -->
<script>


</script>
<!-- SCRIPTS  -->


<!-- Fin HTML -->
<?php
require_once "../controller/assets/fin.php";
?>