<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treasure Map</title>
</head>
<body>
    <?php
    $clue = "find the hidden treasure at the golden island";
    $new = str_replace("golden", "mystic", $clue);
    $conv = strtoupper($new);
    //var_dump($conv);
    echo $conv;


    ?>

</body>
</html>