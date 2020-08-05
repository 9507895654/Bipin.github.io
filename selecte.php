
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User comment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <style>
    body{
        background:lightgreen;
    }
    h1{
        text-align: center;
    text-transform: uppercase;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: bold;
    color: #dd0712;
    font-size: 30px;
    border-bottom: 4px solid blue;
    }
    table{
        width:80%;
        height:auto;
        background:blue;
        margin:auto;
    }
    th,td{
        text-align:center;
        color:white;
        font-size:20px;
        font-family:cursive;
        border:1px solid red;
        padding:10px;
    }
    .fa{
        color:yellow;
        font-size:20px;
    }
    .fa-trash{
        color:red;
    }
    </style>
</head>
<body>
<h1>User massage</h1>
   <div class="container">
   <div class="data">
   <table>
   <thead>
   <tr>
   <th>Id</th>
   <th>Email Id</th>
   <th>Massage</th>
   <th>Reply</th>
   <th colspan="2">Operation</th>
   </tr>
   </thead>
   <tbody>

   <?php
include 'web.php';
$selectquery = "select * from mass";
$query = mysqli_query($con,$selectquery);
$num = mysqli_num_rows($query);


while($res = mysqli_fetch_array($query)){
    ?>
    <tr>
    <td><?php echo $res['id']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['massage']; ?></td>
    <td>Reply</td>
    <td><i class="fa fa-pencil-square-o" aria-hidden="true"></i></td>
    <td><i class="fa fa-trash" aria-hidden="true"></i></td>
    </tr>
    
}

<?php
}
?>



  
   </tbody>
   </table>
   </div>
   </div>
    
</body>
</html>