<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enchanted Spell Check</title>
</head>
<body>
    <?php
     $spell = "   ABRACADABRA   ";
     $new = trim($spell);
     var_dump($new);

     $lower=strtolower($new);
     echo("Converting to lowercase:");
     echo( $lower);
     echo("\n");
     if($lower == "abracadabra"){
        echo "The spell is correct ";
    }
    else
    {
        echo"the wizarding world is still at risk!";
    }





     ?>
    
</body>
</html>