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

        $i = 1; //intialization
        while ($i <= 10) {
            //condition
            //1<=10//2<=10

            $res = $number * $i; //2 = 2 * 1//4 = 2 * 2
            echo "$number * $i = $res <br>";
            $i++; //2 = 1+1 //incr
        }
    } ?>

    <form action = "Loop.php" method = "post">

        <input type="number" name = "num1" placeholder = "Enter num1">
        <input type="number" name = "num2" placeholder = "Enter num2">
        
        <input type="number" name = "Ite" placeholder = "no of Iterations">

        <input type="Submit" value = "Submit" name = "fib">

    </form>


    <?php if (isset($_POST['fib'])) {
        $Number1 = $_POST['num1']; //1
        $Number2 = $_POST['num2']; //1
        $Iter = $_POST['Ite']; //10

        echo $Number1 . '<br>'; //1
        echo $Number2 . '<br>'; //1

        for ($i = 0; $i < $Iter; $i++) {
            //1<10 //yes

            $Number3 = $Number1 + $Number2; // 1 + 2 = 3
            $Number1 = $Number2; //1
            $Number2 = $Number3; //2

            echo $Number3 . '<br>';
        }
    } ?>


</body>
</html>