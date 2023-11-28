<?php
session_start();
print_r($_POST);
if (!file_exists("szavazatok.txt")) {
   $fp= fopen("szavazatok.txt","w");
    fclose($fp);
}
$fp= fopen("szavazatok.txt","a");
fwrite($fp,$_POST['autok']);
fclose($fp);

$_SESSION['szavazott']="igen";

?>

<script>
alert('Köszi a szavazatott ');
    parent.location.href=parent.location.href;
</script>