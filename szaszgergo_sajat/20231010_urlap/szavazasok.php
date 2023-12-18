<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <h1>Szavazz!</h1>

    <style>
        form { margin: 36px 48px; }
    </style>

</head>
<body>

<?php

   if( !isset($_SESSION["szavazott"]) )
   
   print "

    <form action='szavazas_ir.php' method='POST' target='kisablak'>

        <input type='radio' name='mark' value='1'>Mercédesz <br>
        <input type='radio' name='marka' value='2'>Audi     <br>
        <input type='radio' name='marka' value='3'>BMW      <br>
        <input type='radio' name='marka' value='4'>Ferrari  <br><br>

        <input type='submit'> <br><br>

    </form>

    ";

    else {

    $fp = fopen("szavazatok.txt", "r") ;
    $sz = fread($fp, filesize("szavazatok.txt")) ;
    fclose($fp) ;

    $n = array(0,0,0,0,0) ;

    for ( $i=0; $i<strlen($sz); $i++ ) $n[$sz[$i]]++ ;

    $s = array_sum($n) ;
    $szaz[1] = round($n[1] / $s * 100);
    $szaz[2] = round($n[2] / $s * 100);
    $szaz[3] = round($n[3] / $s * 100);
    $szaz[4] = round($n[4] / $s * 100);

    print "
    <style>

        p#allas { margin: 24px; }
        p#allas span { display: inline-block; width: 100px; }
        p#allas bar { display: inline-block; height: 12px; background-color: #444; }

    </style>    

    <br>

    <p id='allas'> <b>A szavazás állása $s szavazat alapján:</b> <br><br>

        <span>Mercédesz:</span> <bar style='width: " . $szaz[1]*5 . "px'; title=" . $szaz[1] . "%></bar> <br>
        <span>Audi:</span>      <bar style='width: " . $szaz[2]*5 . "px'; title=" . $szaz[2] . "%></bar> <br>
        <span>BMW:</span>       <bar style='width: " . $szaz[3]*5 . "px'; title=" . $szaz[3] . "%></bar> <br>
        <span>Ferrari:</span>   <bar style='width: " . $szaz[4]*5 ."px'; title=" . $szaz[4] . "%></bar> <br> <br>    

    </p>

    ";}

?>

    <iframe name='kisablak'></iframe><br><br>

</body>
</html>