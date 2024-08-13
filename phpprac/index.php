<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // function finddate()
    // {
    //     return date('l');
    // }
    // $date = finddate();
    // $uppercase = strtoupper($date);
    // $len = strlen($date);
    // echo "Today is $uppercase. And the length is $len";

    // //uppertolower

    // function upper($string){
    //     $str1 = strtolower($string);
    //     echo "The $string is converted to $str1";

    // }
    //  upper("KIST");


    //array 
     //indexed array
    // $list = array("test1" , "test2", 2);
    // var_dump($list);

    // //associative aray
    // $list2 = array("name" => "Aati", "Çollege" => "KIST" , "age" => 20);
    // var_dump($list2);

   //multidimensional
//    $list3 = array(
//     array("Deepak" , 21),
//     array("Rahul" , 22),
//    );
   
   //associative with multidimensional
//    $student = array(
//     array("name" => "Aati", "department" => "BIT" , "id" => 12),
//     array("name" => "deepak", "department" => "BIT" , "id" => 128),
//     array("name" => "sandesh", "department" => "BIT" , "id" => 898)    
//     );
// var_dump($student);


//random jokes
// $jokes = array("joke1", "joke2" , "joke3");
// $randomvalue = rand(0,2);
// $randomjokes = $jokes[$randomvalue];
// echo $randomjokes;


//duplicate 

$randomstring = "aaaabbbccd";
$arrayofstring = str_split($randomstring);
// var_dump($string1);

echo"The duplicate errors in given string is :";

$counterArr = array();
foreach($arrayofstring  as $element){
    if(isset($counterArr[ $element])){
     //   $counterArr[$element]++;
        echo"duplicate";
        return;
    }
    else{
        $counterArr[$element]=1;
    }
}

var_dump($counterArr);












 ?>
</body>
</html>