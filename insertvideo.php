

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link rel="stylesheet" href="stylec.css">
</head>
<body>
    <div class="upload">
    <form action="" method="POST">
    <input type="text" name="cname" id="cname" placeholder="Channel Name"><br></br>
    <input type="file" name="file" id="file"><br></br>
    <input type="text" name="title" id="title"placeholder="Tittle"><br></br>
    <button name="Upload" value="upload">UPLOAD</button>
    </form>
    </div>
   

</body>
</html>
<?php
include 'web.php';

if(isset($_POST['Upload'])){
   
    $cname = $_POST['cname'];
    $file = $_POST['file'];
    $title = $_POST['title'];

    $insertquery = "INSERT INTO `videos`( `Channel Name`, `file`, `Tittle`) VALUES ('$cname',' $file',' $title')";

    $res = mysqli_query($con,$insertquery);
    if($res){
        ?>
        <script>
        alert("video uploaded successfully");
        </script>
        <?php
    }else{
        ?>
        <script>
        alert("video uploaded notsuccessfully");
        </script>
        <?php
    }
      
}



?>