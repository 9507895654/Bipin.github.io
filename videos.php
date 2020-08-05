<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> </div>
   <link rel="stylesheet" href="styleb.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>
    <nav>
     <div class="main">
     <h3 class="logo">Videos</h3>
    
     <div class="search"> <input type="search" name="search" id="search" onkeyup="myFunction()" placeholder="Search">
     </div>
     <div><i class="fa fa-search" aria-hidden="true"></i> </div>
     <div> <a href="insertvideo.php"><i class="fa fa-upload" aria-hidden="true"></i></a></div>
     <div class="p"><p>Welcome:-</p></div> -->
</div>
     <?php
     include 'web.php';
     $query =  "SELECT * FROM `videos` order by id ASC";
     $queryfire = mysqli_query($con,$query);
     $num = mysqli_num_rows($queryfire);

     if($num>0){
         while($vide = mysqli_fetch_array($queryfire)){
             ?>

  
            <div class="dd">
            <form action="">
                <div class="card">
                    <h3> <?php echo $vide['Channel Name'] ?></h3>
                    <div class="card_body">
                        <video src="<?php echo $vide['file'] ?>" width="300px" height="300px"></video>
                        <h4 id="Tittle"> <?php echo $vide['Tittle'] ?> </h4>

                    </div>
                </div>

            </form>
           
                        
                          
         
                          
                         
         

         </div>
         </div>
         </div>        
            

        
           
       
            
         
<?php

         } 
         
     } 

     ?>
     <!-- </div> -->
     </nav>


   
</body>
</html>


