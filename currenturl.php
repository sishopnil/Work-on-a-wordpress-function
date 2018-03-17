<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Current URL</title>
  </head>
  <body>
  <div id="id"> </div>
   <script type="text/javascript">
    var n=document.location.href;
  </script>
  <form class="" action="submit.php" method="post">
  <input type="hidden" id="url"  name="link" size="50" value=""/><br>
   <input type="submit" name="" value="Click Here">
   </form>
   <?php
         echo "<script type='text/javascript'> document.getElementById('url').value=n; </script>";

   ?>



  </body>
</html>
