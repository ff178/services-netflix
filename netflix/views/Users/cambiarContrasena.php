<?php include MODULE."header.php"; ?>
  <body>
      <?php include MODULE."menu.php"; ?>
      <div class="miCuenta">
        <h2>Cambiar contraseña</h2>
        <div class="detallesCuenta" id="pass">
            <div class="anchoTotal">
                <form action="">
                    <div class="formulario">
                        <p>Contraseña Actual</p>
                        <input type="password" placeholder="Contraseña actual">
                    </div>
                    <div class="formulario">
                        <p>Contraseña nueva (4-60 caracteres)</p>
                        <input type="password" placeholder="Contraseña actual">
                    </div>
                    <div class="formulario">
                        <p>Confirmar contraseña nueva</p>
                        <input type="password" placeholder="Contraseña actual">
                    </div>
                    <div class="botoncitos">
                        <input type="submit" value="Guardar">
                        <button>Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
      </div>
      <div class="fondoGris">
      </div>
  </body>
</html>