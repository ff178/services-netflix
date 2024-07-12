 <?php include MODULE."header.php"; ?>

     <body>
         <div id="splash" style="position: absolute; top: 0px; bottom: 0px; left: 0px; right: 0px; z-index: 10;">
             <div id="calcomania">
                 <div id="picCalco"><img src="<?php print(URL); ?>webApp/public/assets/netflix.jpg"></div>
                 <div id="loadCalco"><img src="<?php print(URL); ?>webApp/public/assets/king.gif"></div>

             </div>
         </div>
         <div id="main">
             <!-- keep empty -->
         </div>
     </body>
</html>
<script>
$('#splash').ready()
{
   $('#main').load('http://54.213.230.248/services-netflix/webApp/Series/series');
   setTimeout(function() {
       $('#main').ready(function() {
           $('#splash').remove();
           window.location.href = "http://54.213.230.248/services-netflix/webApp/Series/series";
       });
   }, 3000);
}

</script>
