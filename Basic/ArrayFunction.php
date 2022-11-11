<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <h3>Sort Function Apply Index Array</h3>


    <?php
    $color = ['Blue', 'Orange', 'Red', 'Pink'];

    echo $color[2] . '<br>';

    sort($color); //assending order
    rsort($color); //desending order

    array_push($color, 'LightBlue'); //push

    array_pop($color); //pop

    $noofElement = count($color); //4 //Count

    echo $noofElement;
    echo '<ul>';
    for ($i = 0; $i < $noofElement; $i++) {
        echo "<li> Color[$i] => $color[$i] </li>"; //$color[3]
    }
    echo '</ul>';
    ?>

    <h3>Sort Function Apply Associative Array</h3>

 <h3>ASSOCIATIVE ARRAY ASSENDING ORDER</h3>
    <?php
    $students = ['Name' => 'Abc', 'Age' => 15, 'Education' => 'Inter'];

    asort($students); //by value in assending order
    ksort($students); //by Key in assending order

    foreach ($students as $Key => $val) {
        echo "Student[$Key] => $val <br>";
    }
    ?>

    <h3>ASSOCIATIVE ARRAY DESENDING ORDER</h3>
    <?php
    $students = ['Name' => 'Abc', 'Age' => 15, 'Education' => 'Inter'];

    arsort($students); //by value in desending order
    krsort($students); //by key in desending order

    foreach ($students as $Key => $val) {
        echo "Student[$Key] => $val <br>";
    }
    ?>



</body>
</html>