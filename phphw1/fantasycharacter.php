<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fantasy Character</title>
</head>
<body>
    <?php
    $charname = "Gandalf, Aragorn, Legolas";
    $arr1 = explode(" ", $charname);
    var_dump($arr1);

    $result = array_map('strtolower',$arr1);
     echo "Converting to lowercase:";
     echo"\n";
    // echo $result;
    var_dump($result);
    echo"\n";
    
    $arr1 = implode("*", $result);
    var_dump($arr1);
   
   


    ?>

</body>
</html>