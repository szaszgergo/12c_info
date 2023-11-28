<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php  
    print("<h1>Első php programom</h1>");
 //  $a = 18;
   //$b = 6;
  if(isset($_GET['a'],$_GET['b']) && $_GET['a']*1!="" && $_GET['b']*1!="0" ){
    $a = $_GET['a'];    
    $b = $_GET['b'];
 
    echo "$a+$b=" .  ($a+$b). "<br>";
    echo "$a-$b=".($a-$b); 
    echo "<br>";
    echo "$a*$b=" . ($a*$b). "<br>";
    echo "$a/$b=" . round($a/$b,2). "<br>";
    echo "$a/$b=" . floor($a/$b). "<br>";
 
    echo "$a%$b=" . ($a%$b);
  }

  else
  {
    $elso = rand(10, 99);
    $masodik = rand(10, 99);
    print("skill issues  &#128128") .'<br>';
    print("használd így az url címet pl:  <a href='?a=".$elso."&b=".$masodik."'>?a=".$elso."&b=".$masodik." <a>");
    
  }



    

  // print_r($_SERVER);

 //  phpinfo();
    ?>
    <hr>
    <?php 

print_r($_GET);

    ?>
    
</body>
</html>