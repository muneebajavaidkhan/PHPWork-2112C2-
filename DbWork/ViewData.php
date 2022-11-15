<?php include 'connection.php'; ?>
<?php include 'header.php'; ?>

<a href="index.php" class = "btn btn-primary m-5">INSERT MORE RECORDS</a>

<?php
$query = 'select * from student';
$res = mysqli_query($con, $query); //1//0 // $data = mysqli_fetch_assoc($res); // echo '<pre>'; // print_r($data); // echo '</pre>';
$rowCount = mysqli_num_rows($res);
if ($rowCount > 0) { ?>
    <table class = "container table table-bordered mt-5">
            <tr>
                <th>StudentId</th>
                <th>Name</th>
                <th>Fees</th>
                <th>Education</th>
                <th>Gender</th>
                <th>City</th>
                <th>Courses</th> 
                <th></th>             
            </tr>

            <?php while ($data = mysqli_fetch_assoc($res)) {
                echo '<tr>'; ?>

                    <td> <?= $data['StdId'] ?>  </td> 
                    <td>  <?= $data['StduentName'] ?></td> 
                    <td> <?= $data['Fess'] ?></td>
                    <td> <?= $data['Education'] ?></td>
                    <td> <?= $data['Gender'] ?></td>
                    <td> <?= $data['City'] ?></td>
                    <td> <?= $data['Courses'] ?></td>   
                    <td> <a href="" class = "btn btn-primary">Edit</a> </td> 
                    <td> <a href=""  class = "btn btn-danger">Delete</a> </td>             
                <?php echo '</tr>';
            } ?>

    </table>
<?php } else {echo 'No Record founds';}
 ?>
