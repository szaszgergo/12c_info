<?php

    session_start() ;

    print_r( $_POST ) ;

    if( !file_exists("szavazatok.txt") )
    {
        $fp = fopen( "szavazatok.txt", "w" ) ;
        fclose( $fp ) ;
    }

    $fp = fopen( "szavazatok.txt", "a" ) ;
    fwrite( $fp, $_POST["marka"] ) ;
    fclose( $fp ) ;

    $_SESSION["szavazott"] = "igen" ;

?>

<script>

    alert('Köszönjük a szavazatodat!');
    parent.location.href = parent.location.href;

</script>