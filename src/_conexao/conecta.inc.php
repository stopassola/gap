<?php
setlocale(LC_ALL,"pt_BR");
date_default_timezone_set("Brazil/East");

try {
    $conn = new PDO($ini['type'].":host=".$ini['host'].";dbname=".$ini['name'], $ini['user'], $ini['pass']);
}
catch (PDOException $e){
    $erro = $e->getMessage();
}
?>