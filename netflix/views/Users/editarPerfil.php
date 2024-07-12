<?php include MODULE."header.php"; ?>
<?php
   $url = $_GET["url"];
   $url = explode("/", $url);
   $params = ( isset($url[2]) && $url[2] != null ) ? $url[2] : null;
?>
  <body>
      <div id="Menu">
          <div id="Logo"></div>
      </div>
      <div class="perfilesContent" id="newProfile">
        <form method="post" id="userForm" name="userForm">
          <h3 class="li" id="e">Editar perfil</h3>
          <h3 class="li" id="a">Añadir perfil</h3>
          <div class="perfiles" id="nuevo">
              <div class="perfil content-top1">
                  <img id="imgPerfil" src="<?php print(URL); ?>netflix/public/assets/fondo2.jpg" alt="">
                  <div class="item"><input type="text" name="user" id="user" placeholder=""></div>
                  <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $params; ?>">
              </div>
          </div>
          <div class="adminPerfil" id="botones">
              <input type="submit" value="Guardar">
              <a href="<?php print(URL); ?>netflix/Users/perfiles">Cancelar</a>
              <input type="submit" value="Eliminar Perfil">
          </div>
          </form>
      </div>
  </body>



  <script type="text/javascript">
  var user = {};
    $.ajax({
      url:"<?php print(URL);?>Users/seePerfil/<?php echo $params; ?>",
      type: "GET"
      }).done(function(r){
        //console.log(r);

        r.map(function(n){
          if(n.idUsuario == "<?php echo $params; ?>"){

          }
          //console.log(user);
          //console.log(n);


        });
      });
  </script>
  <script type="text/javascript">
    //---------------------------------Validaciones----------------------------------------
    var perfil = $("#user")[0];
    var id = $("#idUsuario")[0];

    console.log(id);
    var data = {};

    $("#userForm").submit(function( e ) {
      e.preventDefault();





      data = {

        nombre: perfil.value,
        idUsuario: id.value
      }

      console.log(data);
      if(validate(perfil.value) == false){
          alert("Nombre de perfil no Valido");
      }else{
      $.post('<?php print(URL);?>Users/update/', data,
          function(r){
            console.log(r);
            if(r != 1){
              alert("Gozaste y actualizaste!!!");
            }else{
              window.location.href = '<?php print(URL);?>Users/perfiles/';
            }
      }).fail(function(){
            console.log("error");
      });
    }
  });


  </script>
</html>
