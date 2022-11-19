<?php include 'header.php'; ?>

<?php include 'connection.php'; ?>


<!-- insert Work -->
<?php if (isset($_POST['ins'])) {
    $Name = $_POST['name'];
    $gender = $_POST['gen'];
    $City = $_POST['city'];
    $Educ = $_POST['edu'];
    $Fees = $_POST['fee'];
    $Courses = $_POST['Course'];

    $cor = implode(',', $Courses); //array to string

    $query = "insert into student (StduentName,Education,Fess,Gender,City,Courses) values ('$Name','$Educ','$Fees', '$gender', '$City','$cor')";
    $res = mysqli_query($con, $query); //true //false

    if ($res) {
        echo "<script>alert('Data Inserted!! ');window.location.href = 'ViewData.php';</script>";
    } else {
        echo "<script>alert('Data not  Inserted!! ');window.location.href = 'ViewData.php';</script>";
    }
} ?>




<!-- Updated Work -->

<?php if (isset($_POST['Upd'])) {
    $StudentID = $_POST['StdID'];
    $Name = $_POST['name']; //xyz
    $gender = $_POST['gen'];
    $City = $_POST['city'];
    $Educ = $_POST['edu'];
    $Fees = $_POST['fee'];     
    $Courses = $_POST['Course'];

    $cor = implode(',', $Courses); //array to string

    $query = "update student set StduentName = '$Name', Education = '$Educ',Fess = '$Fees',Gender = '$gender',City = '$City',Courses = '$cor'
     where StdId = '$StudentID'";

    $res = mysqli_query($con, $query); //true //false

    if ($res) {
        echo "<script>alert('Data Updated!! ');window.location.href = 'ViewData.php';</script>";
    } else {
        echo "<script>alert('Data not Updated!! ');window.location.href = 'ViewData.php';</script>";
    }
} ?>


