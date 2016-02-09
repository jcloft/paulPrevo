<?php

$file="donorList.json";
$jsonStr = file_get_contents("php://input");
file_put_contents($file, $jsonStr, FILE_APPEND);
echo '{"success": true }';
?>