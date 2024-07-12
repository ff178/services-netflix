<?php include MODULE."header.php"; ?>
  <body>
      <div id="Menu">
          <div id="Logo"></div>
      </div>
      <div class="loginContent">
          <div class="cuadro">
              <div class="content">
                <h3>Iniciar sesión</h3>
                <form method="post" id="loginForm" name="loginUsuario">
                    <div class="registro">
                        <label>Email</label>
                        <input type="email" name="email" id="email" maxlength="254" required >
                    </div>
                    <div class="registro">
                        <label>Contraseña</label>
                        <input type="password" name="password" id="password" minlength="6"  maxlength="128" required>
                    </div>
                    <a href="#">¿Olvidaste tu contraseña?</a>
                    <div class="registro">
                        <input type="submit" value="Iniciar sesión">
                    </div>
                    <p>¿Primera vez en Netflix? <a href="<?php print(URL); ?>netflix/Users/registro">Suscríbete ya.</a></p>
                </form>
            </div>
          </div>
      </div>
      <div class="fondo">
          <img src="<?php print(URL); ?>netflix/public/assets/fondo2.jpg">
      </div>

      <script type="text/javascript">
        //---------------------------------Validaciones----------------------------------------
        var mail = $("#email")[0];
        var password = $("#password")[0];
        var data = {};

        $("#loginForm").submit(function( e ) {
          e.preventDefault();

          if(validate(mail.value) == false){
              alert("Email no Valido");
          }

          if(validate(password.value) == false){
              alert("Contraseña no Valida");
          }

          data = {
            email: mail.value,
            password : password.value
          }

          $.post('<?php print(URL);?>netflix/Users/iniciarSesion/', data,
              function(r){
                console.log(r);
                if(r != 1){
                  alert("Usuario o Contraseña Incorrectos");
                }else{
                  window.location.href = '<?php print(URL);?>netflix/Users/perfiles/';
                }
          }).fail(function(){
                console.log("error");
          });

        });


      </script>
  </body>
</html>
