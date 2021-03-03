<?php



$dbname = 'coronaviruspmm';
$host = 'coronaviruspmm.mysql.dbaas.com.br';
$user = 'coronaviruspmm';
$pass = 'pmmcorona2020';



$con = mysqli_connect("coronaviruspmm.mysql.dbaas.com.br", "coronaviruspmm", "pmmcorona2020");

mysqli_select_db ( $con, $dbname );

?>