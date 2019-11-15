<?php
include "phpqrcode/qrlib.php";  
//configúrelo en una ubicación grabable, un lugar para los archivos PNG generados temporalmente
$PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

//html prefijo de ubicación PNG
$PNG_WEB_DIR = 'temp/';

//Por supuesto que necesitamos derechos para crear temp dir
if (!file_exists($PNG_TEMP_DIR))
    mkdir($PNG_TEMP_DIR);

$filename = $PNG_TEMP_DIR.'test.png';

$matrixPointSize = 10;
/*
    Primer parámetro es el contenido
    Segundo parámetro el nombre de la imagen donde se guardara, debe ser PHP
    Tercer parámetro tipo de código puede ser QR_ECLEVEL_L, QR_ECLEVEL_H, QR_ECLEVEL_M, QR_ECLEVEL_Q
    Cuarto parámetro es el tamaño de los pixeles del código qr, este define el tamaño de la imagen
    Quinto parámetro es el tamaño de el marco del código qr
*/
QRcode::png('Limbert', $filename, QR_ECLEVEL_L, $matrixPointSize, 2); 

//Mostramos la imagen generada y guardada en el directorio establecido
echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" /><hr/>';  
?>