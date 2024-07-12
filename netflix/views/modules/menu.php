<div id="Menu">
          <a href="<?php print(URL); ?>netflix/Index/index">
            <div id="Logo"></div>
          </a>
          <div class="menu" id="visible">
            <a href="">
              <div class="miMenu">
                <span>Menu</span><b class="ion-arrow-down-b"></b>
              </div>
            </a>
              <div class="categorias">
                <div class="arrow ion-arrow-up-b" id="ca"></div>
                <div class="cuadro">

                  <div class="content-top1 cuadros" id="main">
                    <p><a href="">Peliculas</a></p>

                  </div>

                  <div class="content-top1 cuadros">
                      <p><a href="">Series</a></p>

                  </div>
                </div>
              </div>
          </div>
          <div class="menu">
            Menu
          </div>
          <div class="menu">
            Menu
          </div>
          <div class="menu">
            Menu
          </div>
          <div class="menu">
            Menu
          </div>
          <div class="menu">
            Menu
          </div>
          <?php include MODULE."look.php"; ?>
          <div class="iniciarSesion">
              <a href="#">
                  <div class="inicioDeSesion">
                    <img src="<?php print(URL); ?>netflix/public/assets/fondo2.jpg">
                    <span>Richard </span><b class="ion-arrow-down-b"></b>
                  </div>
                  <div class="submenu">
                    <div class="arrow ion-arrow-up-b"></div>
                    <div class="cuadro">
                      <div class="usuario">
                        <img src="<?php print(URL); ?>netflix/public/assets/fondo2.jpg">
                        <span>Cristhiam</span>
                      </div>
                      <div class="usuario">
                        <img src="<?php print(URL); ?>netflix/public/assets/fondo2.jpg">
                        <span>Cristhiam</span>
                      </div>
                      <div class="usuario">
                        <img src="<?php print(URL); ?>netflix/public/assets/fondo2.jpg">
                        <span>Cristhiam</span>
                      </div>
                      <a href="#">Administrar perfiles</a>
                      <a href="#">Tu cuenta</a>
                    </div>
                  </div>
              </a>
          </div>
      </div>

      <script>
        $.ajax({
          url:"<?php print(URL);?>netflix/Categoria/getAll",
          type: "GET"
          }).done(function(r){
            console.log(r);
            r.map(function(n){
              $(".content-top1").append(
                '<p><a href="">'+n.descripcion+'</a></p>');
                console.log(n);
            });
          });
      </script>
