<?php include 'header.php'; ?>

<?php include 'connection.php'; ?>


<?php if (isset($_POST['ins'])) {
    $Name = $_POST['name'];
    $gender = $_POST['gen'];
    $City = $_POST['city'];
    $Educ = $_POST['edu'];
    $Fees = $_POST['fee'];
    $Courses = $_POST['Course'];

    $cor = implode(',', $Courses);

    $query = "insert into student (StduentName,Education,Fess,Gender,City,Courses) values ('$Name','$Educ','$Fees', '$gender', '$City','$cor')";
    $res = mysqli_query($con, $query); //true //false

    if ($res) {
        echo "<script>alert('Data Inserted!! ');window.location.href = 'ViewData.php';</script>";
    } else {
        echo "<script>alert('Data not  Inserted!! ');window.location.href = 'ViewData.php';</script>";
    }
} ?>

<?php include 'footer.php'; ?>
