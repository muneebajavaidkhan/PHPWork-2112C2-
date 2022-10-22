<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>If CONDITIONAL STATEMENT</h3>
   <?php
   $num = -764;
   if ($num < 0) {
       echo 'Num is negative';
   }
   ?>

   <h3>IF Else CONDITIONAL STATEMENT</h3>

   <?php
   $side = 28.46;
   $perimeter = $side * 4.0;
   $area = $side * $perimeter;

   if ($side > 15 && $perimeter < 1000) { //28.46 > 15 && 113.84 //true && true = true
      
       $sideValue = $side;
       $perimeterValue = $perimeter;
       $AreaValue = $area;
   } else {
       $sideValue = 0;
       $perimeterValue = 0;
       $AreaValue = 0;
   }
   ?>

   <table border = 1>
        <tr>
            <th>Side</th>
            <td>  <input type="text" value =  "<?= $sideValue ?> " >     </td>
        </tr>
        <tr>
            <th>Perimeter</th>
            <td>  <input type="text" value =  "<?= $perimeterValue ?> " >     </td>
        </tr>
        <tr>
            <th>Area</th>
            <td>  <input type="text" value =  "<?= $AreaValue ?> " >     </td>
        </tr>
   </table>


</body>
</html>