<?php
if(isset($_POST['signup']))
{


  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $mycon=mysqli_connect("localhost","root","","login");
  $q="insert into hubnet values('$name','$email','$password')";
  $rec=mysqli_query($mycon,$q);
  echo "record saved!";
  
  mysqli_close($mycon); 
}

 if(isset($_POST['signin']))

 {
     $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mycon=mysqli_connect("localhost","root","","login");
    $q="select * from hubnet where email='$email' and password='$password'";
    $rec=mysqli_query($mycon,$q);
    
    if(mysqli_num_rows($rec)>0)
     {
         echo "Login!";
     }
    else{
        echo "login fail because invalid email or password!";
      
      }

 }

?>