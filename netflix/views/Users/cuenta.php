<?php include MODULE."header.php"; ?>
  <body>
      <?php include MODULE."menu.php"; ?>
      <div class="miCuenta">
        <h2>Mi cuenta</h2>
        <div class="detallesCuenta">
            <div class="ancho3">
                <p>Suscripcion</p>
            </div>
            <div class="ancho6">
                <p id="correo">cristhiam579@gmail.com</p>
                <p>Contraseña: ******</p>
            </div>
            <div class="ancho3">
                <a id="plop" href=""><p>Vacio</p></a>
                <a href=""><p>Cambiar contraseña</p></a>
            </div>
        </div>
        <div class="detallesCuenta">
            <div class="ancho3">
                <p>Mi perfil</p>
            </div>
            <div class="ancho6">
                <div class="inicioDeSesion">
                    <img src="<?php print(URL); ?>netflix/public/assets/fondo2.jpg">
                    <span>Richard </span>
                </div>
            </div>
            <div class="ancho3">
                <a href=""><p>Administrar perfiles</p></a>

            </div>
        </div>
      </div>
      <div class="fondoGris">
      </div>
  </body>
</html>
