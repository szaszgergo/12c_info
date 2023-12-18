<?php

    session_start() ;

    print_r( $_POST ) ;

    if( !file_exists("commentek.txt") )
    {
        $fp = fopen( "commentek.txt", "w" ) ;
        fclose( $fp ) ;
    }

    $fp = fopen( "commentek.txt", "a" );
    $email=$_POST["email"];
    $nev=$_POST["nev"];
    $szamolas=$_POST["szamolas"];
    $komment=$_POST["komment"];
    $kep=$_POST["image"];
    $datum=date("Y-m-d h:i:s");
    $adatok="$email;$nev;$szamolas;$komment;$kep;$datum\n";
    fwrite( $fp,$adatok);
    fclose( $fp );



?>

