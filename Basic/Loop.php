<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action = "Loop.php" method = "post">
        <input type="number" name = "num" placeholder = "Enter num">
        <input type="Submit" value = "Submit" name = "btn">

    </form>


    <?php if (isset($_POST['btn'])) {
        $number = $_POST['num']; //2

        $i = 1;
        while ($i <= 10) {
            //1<=10//2<=10

            $res = $number * $i; //2 = 2 * 1//4 = 2 * 2
            echo "$number * $i = $res <br>";
            $i++; //2 = 1+1
        }
    } ?>
</body>
</html>