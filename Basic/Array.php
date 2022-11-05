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
    $color = ['orange', 'blue', 'Pink', 'Black'];

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
</body>
</html>