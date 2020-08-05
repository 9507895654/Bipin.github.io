
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="stylea.css">
    
</head>
<body>
    <div class="menu">
        <div class="logo"> <h2>Devloper Bipin </h2>
        <ul>
            <li> <a href="main.php"> Home</a></li>
            <li> <a href="#">web devlopment </a>
            <!-- <div class="submenu">
            <ul>
            <li> <a href="#"> HTML5 </a> </li>
            <li> <a href="#"> CSS3 </a> </li>
            <li> <a href="#"> JAVASCRIPT </a> </li>
            <li> <a href="#"> PHP MYSQL </a> </li>
            </ul>
            </div> -->
            </li>
            <li> <a href="#"> teach article</a></li>
            <li> <a href="videos.php"> videos</a></li>
           
        </ul>
    
    </div>

    </div>
    <div class="op">
    <img src="taj2.jpg" alt="" >
    <div class="er">
    <h2 class="he">Welcome to devloper bipin</h2></div>
    <div class="gh">
    <h1>house of the devloper and technology</h1>
    <a href="#" class="btn1">my vlog</a>
    <a href="#" class="btn2">my vlog</a>
    </div>
</div>
<div class="pre">
    <h1> Inportent notes </h1>
     <p>
  1. How to make Dropdown menu   <br>
2.  How to make  slide Effect background  <br>
 3. How to make Button function <br>
4.  How To make HTML table <br>
5.  How To Create  HTML form<br>
6. How To Get The Source Code<br>
7. How To Get The Source Code<br>
7. What is Media query in CSS<br>
9.  What is Grid in CSS3<br> 
10.  What is Flexbox in HTML<br>
11.  How to creat form validation in Javascript<br>
12. What is veriable in Javascript<br>
13. What is iframe in HTML<br>
14. What is overflow in css3<br>
15. What is make a Responsive Website<br>
16. What is Animations in css3.<br>
17.> What is Transitions in css3<br>
18. How to make pwgination<br>
19. How to Make image Gallery<br>
20. How to make Tooltips.<br>
</p>
</div>
<section>
<h1>About us </h1>
<div class="im">
    <div class="fl">
<img src="im.png" alt="">
</div>
<h1 class="head">we the web devloper</h1>

<p class="ww">Gram Seva  website is all about creativity and innovative work in the field of Technology.
We provide web development courses videos, MCS important videos and technology videos and articles. 
You will get all of my youtube videos source code and you are free to use it and make changes.

Please give us your valuable feedback and suggestions. We appreciate your opinions and will use it to evaluate changes and make improvements on our blog.

Here is my Youtube channel link  <a href=""></a> :</p>

</div>



<div id="foot">
<div class="con">
<h2>contect</h2>

<p>Whatsapp number:  9507895654</p><br>
  <p> sms number : 9507895654</p><br>
  <p>email id programerbipin@gmail.com</p>
  </div>
  <div id="page">
  <p> <a href="main.php">Home </a></p>
  <p> <a href="about.php">about </a></p>
  <p> <a href="contact.php">contact </a></p> 
  <p> <a href="teach.php">teach article </a></p>
  </div>
 
  <div id="for">
      <form action="" method="POST" onsubmit="return myform()">
          <input type="text" name="email" id="" placeholder="email"><br>
          <span id="email_error"> </span><br>
          <textarea name="textarea" id="" cols="30" rows="10" placeholder="write here massage....."></textarea><br>
          <span id="t_error"> </span><br>
          <button name="submit" id="send">send</button>
      </form>
  </div>
  </div>
  
    
 
</section>

<script>
    function myform(){
        var email = document.getElementById('email').value;
        var text = document.getElementById('textarea').value;
        if(email ==""){
           document.getElementById('email_error').innerHTML= "** please fill email id.."
           return false;
        }
        if(text ==""){
           document.getElementById('t_error').innerHTML= "** please write the massage.."
           return false;
        }
    }
</script>
<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>

</body>
</html>
<?php

include 'web.php';

if(isset($_POST['submit'])){
 $email  = $_POST['email'];
 $massage = $_POST['textarea'];

  

 $query = "INSERT INTO `mass`( email, massage) VALUES ('$email','$massage')";
 $res = mysqli_query($con,$query);

  if($res == TRUE){
      ?>
      <script>
          alert("Data inserted");
      </script>
      <?php
  }
else{
    ?>
    <script>
        alert("Data not inserted");
    </script>
    <?php
  }
}

 ?>
    