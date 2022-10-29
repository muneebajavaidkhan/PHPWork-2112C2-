<?php

// echo '<pre>';
// print_r($_GET);
// echo '</pre>';

if (isset($_GET['btn'])) {
    $Email = $_GET['email'];
    $Password = $_GET['pswd'];

    if ($Email == '' || $Password == '') {
        echo "<script>alert('Please fill all fields');</script>"; //abc@gmail.com 123
    } else {
        if ($Email == 'Admin@gmail.com' && $Password == 'Admin123') {
            echo "<script>alert('Login Successfully');</script>";
            echo "<p>Admin Login: $Email  </p>";
            echo "<p>Admin Password: $Password  </p>";
        } else {
            echo "<script>alert('Login Failed');</script>";
        }
    }
}

?>
