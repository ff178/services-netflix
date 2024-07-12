<?php include MODULE."header.php"; ?>
  <body>


      <div id="all">
          <?php include MODULE."menu.php"; ?>
      </div>
      <div class="mainTitle" id="content">

      </div>
    </body>
</html>
<script>
    $.ajax({
              url:' <?php print(URL); ?>webApp/Series/getFiveStarSerie',
              method:'GET',
              contentType:'application/json'
          }).done(function(data){
              var js = JSON.parse(data);
              js.map(function(r){
                  $('.mainTitle').append(
                    '<div id="five"><div id="portada"><img src="<?php print(URL); ?>webApp/public/assets/netflix.jpg"></div><div id="title"><span>'+r.titulo+'</span></div><div id="ranking"><div id="star"><img src="<?php print(URL); ?>webApp/public/assets/star.svg"></div><div id="rank"><span>'+r.puntuacion+'</span></div></div></div>');
              });
          });
      $.ajax({
                    url:' <?php print(URL); ?>webApp/Series/getFourStarSerie',
                    method:'GET',
                    contentType:'application/json'
                }).done(function(data){
                    var js = JSON.parse(data);
                    js.map(function(r){
                        $('.mainTitle').append(
                          '<div id="four"><div id="portada"><img src="<?php print(URL); ?>webApp/public/assets/netflix.jpg"></div><div id="title"><span>'+r.titulo+'</span></div><div id="ranking"><div id="star"><img src="<?php print(URL); ?>webApp/public/assets/starS.svg"></div><div id="rank"><span>'+r.puntuacion+'</span></div></div></div>');
                    });
        });
</script>
