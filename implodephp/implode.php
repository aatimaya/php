<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
<?php

$name = "          Aati       ";
echo strlen($name);
echo "\n";
echo strtoupper($name);
echo "\n";
echo strtolower($name);
echo("\n");
echo rtrim($name); //to reduce the sapi_windows_cp_get

$name = "Hello ,how are you?";
$newArr = ["test" , "teste"];
$arr = implode("-", $newArr);
$arr2 = explode(" ", $name);
var_dump($arr);
var_dump($arr2);

?>
</h1>
</body>
</html>


