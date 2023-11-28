<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 
    ?>
    <style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 100%;
}

div.desc {
  padding: 15px;
  text-align: center;
}



.zoom {
  transition: transform .2s; /* Animation */

  margin: 0 auto;
}

.zoom:hover {
  transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
  width: 200px;
  height: 200px;
}




</style>






 <!--NAV-BAR-->
 <div id="menu">
    <a href="./?p=kepgaleria">Iskoláról</a>
    <a href="./?p=kepgaleria&q=macska">Macskák</a>
    <a href="./?p=kepgaleria&q=kutya">Kutyák</a>    
    </div>
    <!--NAV-BAR-->
   <?php 

   
    if (isset($_GET['q'])) $q= $_GET['q'];
    else $q="";
    if ($q=="") {
        include("iskola.php");
      }

    if ($q=="macska") {
      include("macska.php");
    }
    
    else if ($q=="kutya") {
      include("kutya.php");
    }
    else  if ($q=="") {
        print '
       
        <div class="gallery">
        <a target="_blank" href="kepek_iskola/iskola1.jfif">
        <div class="zoom">  
        <img src="kepek_iskola/iskola1.jfif" alt="aasdads" width="600" height="400">
        </div>
        </a>
        <div class="desc">Iskola bejárata.</div>
      </div>
      
      <div class="gallery">
        <a target="_blank" href="kepek_iskola/kep2.png">
          <img src="kepek_iskola/kep2.png" alt="Forest" width="600" height="400">
        </a>
        <div class="desc">Iskola felülnézetből.</div>
      </div>
      
      <div class="gallery">
        <a target="_blank" href="kepek_iskola/iskola5.jfif">
          <img src="kepek_iskola/iskola5.jfif" alt="Northern Lights" width="600" height="400">
        </a>
        <div class="desc">Iskola aulája.</div>
      </div>
      
      <div class="gallery">
        <a target="_blank" href="kepek_iskola/iskola4.jfif">
          <img src="kepek_iskola/iskola4.jfif" alt="Mountains" width="600" height="400">
        </a>
        <div class="desc">Iskola tanárainkkal.</div>
      </div>
      
      ';
    }
    else{
     print"<h1>404 Nem található ilyen oldal! </h1>";
        
    }
 
    
        
    ?>


<div style="clear:both;"></div>

</body>
</html>