<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form action="SuperGlobal.php" method = "post">
    <div class="form-group">
      <label for="email">Email:</label> 
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary" name = "btn">Submit</button>
  </form>
</div>
    

<?php if (isset($_POST['btn'])) {
    $Email = $_POST['email'];
    $Password = $_POST['pswd'];

    echo $Email . '<br>';
    echo $Password;
} ?>


<table border = 1>
        <tr>
            <th>Email</th>
            <th>Password</th>
        </tr>


        <tr>
            <td>   <?= @$Email ?> </td>
            <td>   <?= @$Password ?> </td>
        </tr>
</table>

</body>
</html>