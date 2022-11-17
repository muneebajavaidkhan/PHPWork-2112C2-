<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>SINGLE DIMENSIONAL INDEXED ARRAY</h1>
    <?php
    $color = ['orange', 'blue', 'Pink', 'Black']; //0//1/

    // echo $color[3];
    echo '<pre>';
    print_r($color);
    echo '</pre>';

    echo '<ul>';
    for ($i = 0; $i <= 3; $i++) {
        echo "<li>Array[$i] => $color[$i]</li>";
    }
    echo '</ul>';
    ?>

    <h1>SINGLE DIMENSIONAL ASSOCIATIVE ARRAY</h1>

    <?php
    $Stud = ['Name' => 'Abc', 'Age' => 15, 'Education' => 'Matric'];

    // echo $Stud['Name'];
    // echo '<pre>';
    // print_r($Stud);
    // echo '</pre>';

    foreach ($Stud as $key => $Val) {
        //abc b//15//matric

        echo "Stud[$key] => $Val <br>";
    }
    ?>

<h1>MULTI DIMENSIONAL WITH INDEX ARRAY</h1>

<?php
$Studs = [
    ['Abc', 'Inter', 17], //00 //01//02
    ['Xyz', 'Matric', 15], //10//11/12
    ['Efg', 'Graduate', 22], //20//21//22
];

// echo '<pre>';
// print_r($Studs);
// echo '</pre>';

echo $Studs[0][2];
for ($row = 0; $row <= 2; $row++) {
    //0<=2 = yes
    echo '<ul>';
    for ($col = 0; $col <= 2; $col++) { //1<=2
        //3<3
        echo '<li>' . $Studs[$row][$col] . '</li>'; //$Stud[0][0] = Abc //Inter//17
    }
    echo '</ul>';
}
?>
<h1>MULTI DIMENSIONAL WITH ASSOCIATIVE ARRAY</h1>

<?php $StudMarks = [
    'Student1' => ['PHP' => 70, 'MVC' => 90, 'MYSQL' => 90],
    'Student2' => ['PHP' => 50, 'MVC' => 70, 'MYSQL' => 60],
    'Student3' => ['PHP' => 60, 'MVC' => 40, 'MYSQL' => 40],
]; ?>
<table border = 1>
    <?php foreach ($StudMarks as $key => $Val) {
        //Student3

        echo '<tr>';
        echo '<th colspan = "6">' . $key . '</th>';
        echo '</tr>';

        echo '<tr>';
        foreach ($Val as $key2 => $Val2) {
            //PHP => 70
            echo '<th>' . $key2 . '</th>';
            echo '<td>' . $Val2 . '</td>';
        }
        echo '</tr>';
    } ?>

</table>



</body>
</html>