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
    


<div class="container mt-5">
 <h2 class = "text-center">Card Image</h2>
        <div class="row">
       
            <?php
            $Img = [
                'product-1.jpg',
                'product-2.jpg',
                'product-3.jpg',
                'product-4.jpg',
            ];
            for ($i = 0; $i <= 3; $i++) { ?>


            <div class=" col-lg-3">
                 
            
                <div class="card">
                    <img class="card-img-top" src="  <?= @$Img[$i] ?>  " alt="Card image" style="width:100%">
                    <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                    </div>
                </div>  
            </div>
            
            <?php }
            ?>

            




        </div>
       
  </div>
</body>
</html>