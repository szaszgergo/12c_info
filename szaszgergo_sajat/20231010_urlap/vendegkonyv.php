<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<style>
.vendegkonyv{
    margin:10px;
    padding:10px;
}
#elkuldes{
    font-size:15px;
}
</style>
<?php 
     print "<h1>Vendégkönyv</h1>"
    ?>
    <?php  
        $szam1=rand(1,100);
        $szam2=rand(1,100);
        $osszeg=$szam1+$szam2;
    print" <form action='komment_ir.php' name='vendegkonyv' method='POST' class='vendegkonyv' target='frame'>
    <label for=''>Új hozzászólás:</label><br>
    <textarea name='komment' id='komment' cols='30' rows='10'></textarea><br>
    <label for=''>Email:</label><br>
    <input type='text' id='email' name='email'>
    <br>
    <label for=''>Név:</label><br>
    <input type='text' id='nev' name='nev'>
    <br>
    <label for=''>Mennyi ".$szam1." + ".$szam2."?
    Számjegyekkel írja be!</label>
    <br>
    <input type='text' id='szamolas' name='szamolas'><br><br>
    <input type='file' name='image' class='form-control'><br><br>
    ".
    if ($osszeg==$_POST["szamolas"]) {
       asd
    }
    else{
        xd
    }
    
    ."
    <input type='submit' id='elkuldes' value='Elküldés'>
    </form> ";
    
    ?>
   
  


    <iframe name='frame'></iframe><br><br>



    
</body>
</html>