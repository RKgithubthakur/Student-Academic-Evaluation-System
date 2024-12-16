<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        include 'connect.php';
        $userid=$_POST['userid'];
        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql="select * from faculty where username='$username'";
        $result=mysqli_query($c,$sql);

        if($result)
        {
            $num=mysqli_num_rows($result);
            if($num>0)
            {
                echo" user already exist";
               
            }
            else
            {
                $sql="insert into faculty(username,password) values('$username','$password')";
                $result=mysqli_query($c,$sql);
    
               if($result)
                {
                   echo" <html>
                    <head>
                    <script>
                  alert('succesful inserted');
                    </script>
                    </head>
                    </html>";
                 
                }
             else{
                  die(mysqli_error($c));
                 }
          
            }
            
        }
        
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIGN UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    .navbar{
    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.logo{
    width: 120px;
    cursor: pointer;

}
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin:0 20px;
    position: relative;
}
.navbar ul li a{
    text-decoration: none;
    color:#fff;
    text-transform: uppercase;

}
.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background:#009688;
    position:absolute;
    left: 0;
    bottom: 0px;
    transition: 0.5s;

}
.navbar ul li:hover::after{
    width: 100%;
}
.content{
    width: 100%;
}
  </style>
  </head>
  <body class="bg-dark">
  <div class="navbar">
        <img src="apple-touch-icon.png" class="logo">
        <ul>
          <li><a href="mainhome.php">Home</a></li>
          <li><a href="admin.php">admin</a></li>
          <li><a href="loginst.php">student</a></li>
          <li><a href="login.php">faculty</a></li>
          
        </ul>

      </div>
    <h1 class="text-info text-center p-3">FACULTY REGISTRATION PORTAL</h1>
    <div class="bg-info">
    <h1 style="text-align:center;">SIGN UP PAGE</h1>

    <div class="container text-center">
  <form action="registerfac.php" method="POST">

  <div class="mb-3">
    
    <input type="text" class="form-control w-50 m-auto" name="username" id="username" placeholder="Enter fac name" require="required">

  </div>
  <div class="mb-3">
   
    <input type="text" class="form-control w-50 m-auto" name="password" id="password" placeholder="Enter fac password" 
    require="required" maxLength="10" minLength="10">

  </div>

  
  
  <button type="submit" class="btn btn-dark my-4">sign up</button>
  
</form>
</div>
  </body>

    
</html>