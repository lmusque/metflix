<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Watch <?php echo $_GET['title'] ?></title>
</head>
<body>
  <video controls src="./video_files/<?php echo $_GET['path'];?>" width= "1080" height= "720"></video>
</body>
</html>

<!-- checking if these exist -->
<?php
   if(isset($_GET['path']) and isset($_GET['title'])){
       $movie_filename = $_GET['path'];
       $movie_title= $_GET['title'];
   } else{
    echo "<h1>☠️ Error 404: Page Not Found ☠️</h1>";
   }
?>