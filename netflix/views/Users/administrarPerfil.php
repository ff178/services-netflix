<?php include MODULE."header.php"; ?>
  <body>
      <div id="Menu">
          <div id="Logo"></div>
      </div>
      <div class="perfilesContent">
          <h3>Administrar perfiles:</h3>
          <div class="content-top1 perfiles">






              <div class="perfil">
                  <div class="masExterno">
                    <a href="#">
                        <div class="mas">
                            <a href="<?php print(URL); ?>netflix/Users/editarPerfil"><div class="simbolo">+</div></a>
                        </div>
                    </a>
                  </div>
                  <p>Agregar perfil</p>
              </div>
          </div>
          <div class="adminPerfil">
              <a href="<?php print(URL); ?>netflix/Users/perfiles">Listo</a>
          </div>
      </div>
  </body>
  <script>
    $.ajax({
      url:"<?php print(URL);?>netflix/Users/getUsersByCuenta",
      type: "GET"
      }).done(function(r){
        console.log(r);
        r.map(function(n){
          $(".content-top1").append(
            '<div class=" perfil"><img id="edit" src="<?php print(URL); ?>netflix/public/assets/fondo2.jpg" alt=""><p>'+n.nombre+'</p><a href="<?php print(URL); ?>netflix/Users/editarPerfil/'+n.idUsuario+'"><div class="icono ion-edit"></div></a></div>');
            console.log(n);
        });
      });
  </script>
</html>
