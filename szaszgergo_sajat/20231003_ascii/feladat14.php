<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ascii</title>
</head>
<body>
    <style>
h1
	{
		text-align		: center	;
		color			: #448		;
	}

	table
	{
		margin			: 24px auto	;
		border			: solid 1px #88C;
        width : 200px;

	}

	td
	{
		text-align		: center	;
		background-color	: #BBD		;
		color			: #224;
        width:100px;
	}

	tr:first-child td , tr:last-child td
	{
		background-color	: #88C		;
		font-weight		: bold		;
	}

	td:nth-child(3)
	{
		font-weight		: bold		;
	}
    </style>
    <table>
    <tr>

<td>  N  </td>
<td>   Σ N   </td>

</tr>
    <?php
    $osszeg = 0 ;
   for  ($i=1 ; $i <= 100; $i++){
    
        print " 
        <table>
        <tr>
        <td>$i</td>
        <td> ". ($osszeg = $i + $osszeg)." </td>
        </tr> 
        ";
    

   }

  
  
    ?>
   </table>

</body>
</html>