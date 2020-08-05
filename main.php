<?php

include 'web.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

 <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container">
    <div> <h2 class="logo"> devloper bipin </h2>
    <div class="menu" id="maeu">
    <ul>
    <li> <a href="#" class="active"> home</a></li>
    <li> <a href="#"> contact</a></li>
    <li> <a href="about.php"> about</a></li>
    <li> <a href="#"> Sorcecode</a></li>
    </div>
   
    
    <input type="submit" name="" id="bar" value="MENU" onclick="show()">
    </div>
    </div>
    </ul>
    
    <div class="center">
        <div class="gh"> 
        <h1 class="letter"> Welcome to bipin kumar </h1>
        <p> About me</p>
        <h2> A website for <span class="bipin"> web devlopers</span></h2>
</div>
        <img src="w.png" alt="">
        <!-- <img src="f.png" alt=""> -->
        <img src="t.png" alt="">
        <img src="y.png" alt="">
    </div>
    <footer>
        <div class="ff">

    </footer>

    <script>
        function show(){
            document.getElementByid('menu')
            .style.display="block";
        }
    </script>
</body>
</html>