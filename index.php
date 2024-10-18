<?php
$modulo = "Login";

require_once "controller/assets/validacion.php";

//Validacion de login
$login = new seguridad;
$login->iniciologin();

require_once "controller/assets/svrurl.php";
require_once "controller/assets/inicio.php";

?>


<div class="row animated fadeIn" style="margin-bottom: 0;"><!-- row principal-->


  <!-- CARD BLANCO -->
    <div class="row center" style="margin-top: 30vh;">
      <div class="col s12">
              <h4 style="color: black;">Login</h4>
              <h5 style="color: black;">Ingrese los siguientes datos:</h5>
      </div>
      <div class="col s8 offset-s4">
        <form id="login" accept-charset="utf-8" action="">
          <div class="row">
            <div class="col s12 m12">
              <div class="left">
                <span class="black-text" style="font-size: 18px;">Correo</span>
              </div>
            </div>
            <div class="col s12 m8">
              <div class="input-field col s11 m8">
                <input type="email" name="mail" id="mail" class="validate black-text login-input" required>
              </div>
            </div>
            <div class="col s12 m12">
              <div class="left">
                <span class="black-text" style="font-size: 18px;">Contraseña</span>
              </div>
            </div>
            <div class="col s12 m8">
              <div class="input-field col s11 m8">
                <input type="password" name="contra"  id="pass" required class="validate black-text login-input">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s12 m12">
              <div class="col s4 offset-s4 m5">
                <div class="left">
                  <input type="submit" id="botonlogin" class=" colorP btn-large  white-text" value="Ingreso" style="font-size: 18px; border-radius: 7px;">
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>


  <!-- Derechos reservados -->
  <div class="row center">
    <div class="col s12" style="position: fixed; bottom: 0;">
      <span class="black-text" style="font-size: 20px;"> Universidad Regional <a class="black-text" href=""></a></span>
    </div>
  </div>
  <!-- Derechos reservados -->

</div><!-- row principal-->
<!-- row principal-->

<!-- SCRIPTS CARGA -->
<?php
require_once "controller/assets/scripts.php";
?>
<!-- SCRIPTS CARGA -->
<script type="text/javascript" src="<?php echo SERVERURL; ?>app/js/login.js"></script>

<!-- Fin HTML -->
<?php
require_once "controller/assets/fin.php";
?>