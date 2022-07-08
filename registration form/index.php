<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
      <h1>Welcome to our University!</h1>
      <p class="text">please fill out the form to apply in our University</p>
      <form action="" method="post">
        <div class="name">
         <label class="label" for="name">Name</label>
         <input type="text" name="name" id="name" class="input" placeholder="Enter your name">
        </div>
        <div class="email">
         <label class="label" for="email">Email</label>
         <input type="email" name="email" id="email" class="input" placeholder="Enter your email address">
        </div>
        <div class="number">
         <label class="label" for="num">Contact number</label>
         <input type="tel" name="number" id="num" class="input" placeholder="Enter your phone number">
        </div>
        <div class="branch">
         <label class="label" for="branch">Branch</label>
         <input type="text" name="branch" id="branch" class="input">
        </div>
        <div class="button">
        <button type="submit" name="submit">Submit</button>
      </div>
      </form>
    
    
    </div> 
</body>
</html>
<?php

$username="root";
$pass='';
$db="registration form";
$server="localhost";

$con=mysqli_connect($server,$username,$pass,$db);


if(isset($_POST['submit']))
{
  $name=$_POST['name'];
  $email=$_POST['email'];
  $num=$_POST['number'];
  $branch=$_POST['branch'];

  $insert_query="INSERT INTO `uni admission form`(name, email, contact, branch) 
  VALUES ('$name','$email','$num','$branch')";

  $inserted=mysqli_query($con,$insert_query);
  if($inserted){
    ?>
    <script> alert("form submitted")</script>
 <?php

  }
  else{
    ?>
    <script>alert("Not inserted")</script>
    <?php
  }
}






?>