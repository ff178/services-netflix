<?php include MODULE."header.php"; ?>
  <body>
      <?php include MODULE."menu.php"; ?>
      <div class="subirVideo">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="upload">
                <input type="file" name="url" id="file" class="inputfile" />
                <label class="ion-android-upload" for="file">  Elige un video</label>
            </div>
            <input type="submit" name="submit" value="Subir" />
        </form>
      </div>
  </body>
</html>
