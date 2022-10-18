<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
    echo '<h1>Hello PHP</h1>';

    $Id = 18;

    // echo $Id;

    var_dump($Id);

//datatype
?>

    <h3>   <?= $Id ?>   </h3>
    <h3> <?php echo $Id; ?> </h3>


    <!-- PHP String Function  -->
    <?php
    $stringChar = 'Hello Steve';
    $Strlen = strlen($stringChar);
    $strWordCount = str_word_count($stringChar);
    $StringRev = strrev($stringChar);
    $stringFind = strpos($stringChar, 'Steve');
    $stringReplace = str_replace('Steve', 'Diana', $stringChar);

    echo "Length of String: <b>$stringChar</b> is $Strlen <br>"; //Length of string
    echo "Word of String: <b>$stringChar</b> is $strWordCount  <br>"; //Word of string
    echo "Reverse of String: <b>$stringChar</b> is $StringRev  <br>"; //Reverse of string
    echo "Find of String: <b>$stringChar</b> is $stringFind   <br>"; //Find of String

    echo "Replace of String: <b>$stringChar</b> is $stringReplace   <br>";

//Replace of String
?>


<h1>Math Function</h1>
<?php
echo '<h5>Area of Surface</h5>';
$radius = 6;
$SurfaceArea = 4 * pi() * $radius * $radius; //4*3.141*6*6
echo "Surface Area is $SurfaceArea";

echo '<h5>Min function</h5>';

echo min(0, 90, 80, -270) . '<br>';

echo '<h5>Max function</h5>';

echo max(0, 90, 80, -270) . '<br>';
?>


<h3>CONSTANT VARIABLE</h3>


<?php
echo 'CONSTANT VARIABLE <br>';

define('Hello', 'Whats new in PHP', true);

echo hello;
?>

    
</body>
</html>