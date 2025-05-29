<?php
//require 'pastaQ48/funcoes.php';
//require 'pastaQ48/funcoes.php';
//Fatal error: Cannot redeclare saudacao()
require_once 'pastaQ48/funcoes.php';
require_once 'pastaQ48/funcoes.php';

/*
Com require_once, não há erro, pois o arquivo só é carregado uma vez, mesmo sendo chamado várias vezes
*/

echo saudacao();
?>
