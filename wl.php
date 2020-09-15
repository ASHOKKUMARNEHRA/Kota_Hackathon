<?php  














session_start();  
  
if(!$_SESSION['email'])  
{  
  
    header("Location: l.php");//redirect to login page to secure the welcome page without login access.  
}  
  
?>  
  
<html>  
<head>  
  
    <title>  
        Registration  
    </title>  
</head>  
  
<body> 
<center>
<h1 style="font-size: 50px">Welcome To Smart Medical Facilities Portal</h1><br>  </center> 






<?php  
echo $_SESSION['email'];  
?>  
  
  
<h1><a href="lo.php">Logout here</a> </h1>  
  
  
</body>  
  
</html>  
