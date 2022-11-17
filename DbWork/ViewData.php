<?php include 'connection.php'; ?>
<?php include 'header.php'; ?>

<a href="index.php" class = "btn btn-primary m-5">INSERT MORE RECORDS</a>

<?php
$query = 'select * from student';
if (isset($_GET['srch'])) {
    $searches = $_GET['search']; //abc
    $query = "select * from student where StduentName like '%$searches%' or Education like '%$searches%'
    ";
}
$res = mysqli_query($con, $query);
$rowCount = mysqli_num_rows($res);
?>


<form action = "" method = "get" >
                <div class="input-group col-lg-6 container mb-5 mt-3">
                    <input type="text" class="form-control" placeholder="Search" name = "search"> 
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary" name = "srch" >Search</button>
                        <a href="ViewData.php" class = "btn btn-primary ml-3">Reset</a>
                    </div>
                        
                </div>
                
</form>

<?php if ($rowCount > 0) { ?>
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
                    <td> <a href="Edit.php?id=<?= $data['StdId'] ?>" class = "btn btn-primary">Edit</a> </td> 
                    <td> <a href=""  class = "btn btn-danger">Delete</a> </td>             
                <?php echo '</tr>';
            } ?>

    </table>
<?php } else {echo 'No Record founds';} ?>
