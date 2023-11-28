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
        #szavazas_gomb{
            margin-top:20px;
            margin-left:20px;

        }
        #szavazas_gomb :hover{
            transition: width 2s;
        background-color: orange;
            
        }
        .szavaz_form{
            background-color: lightblue;
            
        }
    </style>
    <?php 
     print "<h1>Szavazás</h1>"

    ?>
    <div class="szavaz_form">

<?php 
if (!isset($_SESSION["szavazott"])) {
    print"   
        <form name='szavaz' action='szavazas_ir.php' method='post' target='kisablak' >
        <label for='szavazas'>Melyik a kedvenc autó márkád?</label>
        <ol>
            <li><input type='radio' id='autok' value='1' name='autok'> BMW </li>
            <li><input type='radio' id='autok' value='2' name='autok'> AUDI</li>
            <li><input type='radio' id='autok' value='3' name='autok'> FORD</li>
            <li><input type='radio' id='autok' value='4' name='autok'> OPEL</li>
            <li><input type='radio' id='autok' value='5' name='autok'> SKODA</li>
            <li><input type='radio' id='autok' value='6' name='autok'> SUZUKI</li>
            
        </ol>
        <br>

        <input type='submit' id='szavazas_gomb' value='Elküldés'>
        </form>";
}
else{
    print"
    <p>A szavazás állása: </p>
    ";
}

?>
    <iframe src=""  name="kisablak" frameborder="0" ></iframe>
    </div>

</body>
</html>