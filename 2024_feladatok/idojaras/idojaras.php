<?php
		$fu   = fopen( "https://api.infojegyzet.hu/idojaras/" , "r" ) ;

		$json = "";
		while (!feof($fu))  $json .= fread($fu, 1024);

		fclose( $fu ) ;

		$adat = json_decode( $json ) ;

$orszag=($adat->location->country);
$telepules=($adat->location->region);

for ($i=0; $i < 3; $i++) { 
    $ido=date("Y-m-d",strtotime("+$i day"));
    $dayOfWeek = date("l", strtotime($ido));
    echo $dayOfWeek; 
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>idojaras</title>

<style>
    #asd{
        background-color: aqua;
        display:inline-block;
        margin:1px;
        width:4%;
        text-align:center;
    }
</style>
</head>
<body>





<table>
<tr>
<td><?php echo $orszag ?></td>
<td><?php echo $telepules ?></td>

</table> 

<?php
    

    for ($i=0; $i <count($adat->forecast->forecastday[0]->hour) ; $i++) { 
        print"<div id='asd'>
        <p>".$i.":00<p>
        <p>".$adat->forecast->forecastday[0]->hour[$i]->temp_c."°</p>
        <p>".$adat->forecast->forecastday[0]->hour[$i]->cloud."%</p>
        <p>".$adat->forecast->forecastday[0]->hour[$i]->chance_of_rain."%</p>
        <p>".$adat->forecast->forecastday[0]->hour[$i]->wind_kph."kph</p>
        </div>";
    }


    for ($i=0; $i <count($adat->forecast->forecastday[1]->hour) ; $i++) { 
        print"<div id='asd'>
        <p>".$i.":00<p>
        <p>".$adat->forecast->forecastday[1]->hour[$i]->temp_c."°</p>
        <p>".$adat->forecast->forecastday[1]->hour[$i]->cloud."%</p>
        <p>".$adat->forecast->forecastday[1]->hour[$i]->chance_of_rain."%</p>
        <p>".$adat->forecast->forecastday[1]->hour[$i]->wind_kph."kph</p>
        </div>";
    }



    for ($i=0; $i <count($adat->forecast->forecastday[2]->hour) ; $i++) { 
        print"<div id='asd'>
        <p>".$i.":00<p>
        <p>".$adat->forecast->forecastday[2]->hour[$i]->temp_c."°</p>
        <p>".$adat->forecast->forecastday[2]->hour[$i]->cloud."%</p>
        <p>".$adat->forecast->forecastday[2]->hour[$i]->chance_of_rain."%</p>
        <p>".$adat->forecast->forecastday[2]->hour[$i]->wind_kph."kph</p>
        </div>";
    }
    ?>


  
</body>
</html>