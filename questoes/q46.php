<?php
/*
include
*/

echo "Antes do include<br>";

include 'config_ausente.php';

echo "Depois do include<br>";
?>

<?php
/*
require
*/

echo "Antes do require<br>";

require 'config_ausente.php';

echo "Depois do require<br>";
?>

<?php
/*
Enquanto o Include gera aviso e continua; require gera erro fatal e para o programa.
*/
?>


