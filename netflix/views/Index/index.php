 <?php include MODULE."header.php"; ?>
  <body>
      <div id="Menu">
          <div id="Logo"></div>
          <div class="iniciarSesion">
              <a href="<?php print(URL); ?>netflix/Users/login">
                  <button>Iniciar sesion</button>
              </a>
          </div>
      </div>
      <div class="mainContent">
          <div class="mainTitle">
              <h2>See what's next.</h2>
              <p>Disfruta donde quieras. Cancela cuando quieras.</p>
              <a href="<?php ?>netflix/Users/registro">
                <button>Disfruta un mes gratis</button>
              </a>
          </div>
      </div>
      <div class="fondo">
          <img src="<?php print(URL); ?>netflix/public/assets/fondo.jpg">
      </div>
  </body>
</html>
