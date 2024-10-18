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
  <h1>Hola Mundo</h1>

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