<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <?php 
    if (isset($_GET['p'])) $p= $_GET['p'];
    else $p="";

    if ($p=="rolunk") {
        $cim="Weiss rolunk";
    }
    
    else if ($p=="vendegkonyv") {
      $cim="Weiss vendegkonyv";
    }
    else  if ($p=="szavazasok") {
      $cim="Weiss szavazas";
    }
    else  if ($p=="kepgaleria") {
      $cim="Weiss kepgaleria";
    }
    else  if ($p=="elerhetoseg") {
      $cim="Weiss elerhetoseg";
    }
    else  if ($p=="") {
      $cim="A Weiss és php";
    }
    else{
      $cim="Weiss 404";
        
    }
 
    
        
    ?>
    <title><?=$cim;?></title>
</head>
<body>
    <!--NAV-BAR-->
    <div id="menu">
    <a href="./">Kezdőoldal</a>
    <a href="./?p=rolunk">Rólunk</a>
    <a href="./?p=vendegkonyv">Vendégkönyv</a>    
    
    <a href="./?p=szavazasok">Szavazások</a>
    <a href="./?p=kepgaleria">Képgaléria</a>  
    <a href="./?p=elerhetoseg">Elérhetőség</a>
    </div>
    <!--NAV-BAR-->
   <?php 
    if (isset($_GET['p'])) $p= $_GET['p'];
    else $p="";

    if ($p=="rolunk") {
      include("rolunk.php");
    }
    
    else if ($p=="vendegkonyv") {
      include("vendegkonyv.php");
    }
    else  if ($p=="szavazasok") {
      include("szavazasok.php");
    }
    else  if ($p=="kepgaleria") {
      include("kepgaleria.php");
    }
    else  if ($p=="elerhetoseg") {
       include("elerhetoseg.php");
    }
    else  if ($p=="") {
        print "<h1>Akciók, aktualitások</h1>";
    }
    else{
     print"<h1>404 Nem található ilyen oldal! </h1>";
        
    }
 

    $fajlnev = "latogatok/".date("Ymd") . ".txt";
    if (!file_exists($fajlnev)) {
     $fp= fopen($fajlnev,"w");
      fwrite($fp,"0");
      fclose($fp);

      
    }

    $fp= fopen($fajlnev,"r");
    $n = fread($fp,filesize($fajlnev));
    fclose($fp);

    if (!isset( $_SESSION["alma"])) {
      $_SESSION['alma']='eper';


      $n++;
  
      $fp= fopen($fajlnev,"w");
      fwrite($fp,$n);
      fclose($fp);
    }
 


    
    print_r (" <hr>Az oldalt eddig: ".$n." látogatója volt. ");
    ?>
    <div style="clear:both;"></div>
    
</body>
</html>