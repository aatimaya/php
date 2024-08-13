<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lets laugh together!!!!</title>
</head>
<body>
    <?php
    

 $jokes = array("Why couldn't the skeleton go to school?
 His heart just wasn’t in it.", "What did one plate say to the other?
 Dinner is on me!", "What do you get from a pampered cow?
 Spoiled milk!");
 $randomvalue = rand(0,2);
 $randomjokes = $jokes[$randomvalue];
 echo $randomjokes;
 
 ?>
 
</body>
</html>