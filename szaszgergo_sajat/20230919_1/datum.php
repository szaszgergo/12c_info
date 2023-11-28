<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datum</title>
</head>
<body>
    <h1>Dátum,Idő</h1>
    <?php 
    

    print "Az oldal betöltési ideje: ".date("y-m-d-h-i-s");
print ("<hr>");
print "Mai dátum: 2023. Szeptember 26. Kedd /".date("y-m-d") ;

$honapok = ["","Január","Február","Március","Április","Május","Juniús","Juliús","Augusztus","Szeptember","Október","November","December"];
$napok = ["","Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat", "Vasárnap"];


print "A mai dátum ".date("Y. "). $honapok[date("n")]. " ". $napok[date("N")] ." " .date("h:i:s");
echo "<hr>";
echo "100 nap múlva:";
$most=time();
$szaznapmulva=$most+ 100*24*60*60;
echo date(" y.m.d",$szaznapmulva);
echo "<br>";
$mikulas = mktime(0, 0, 0, 12, 6, 2023);
$hanynapmulva = floor(($mikulas - time()) / (24 * 60 * 60));
echo date("y.m.d", $mikulas);
echo "<br>";
print "Hány nap múlva jön a mikulás" . " ".$hanynapmulva;

$szuletes=mktime(0, 0, 0, 8, 15, 2005);
$hanynaposvagyok=floor((time() -$szuletes  ) / (24 * 60 * 60));
echo"<br>";
echo "Ennyi napos vagyok: "." ". $hanynaposvagyok;





    ?>
</body>
</html>