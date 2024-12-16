
  <?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        include 'connect.php';
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="select * from admin where username='$username' and password='$password'";
        $result=mysqli_query($c,$sql);

        if($result)
        {
            $num=mysqli_num_rows($result);
            if($num>0)
            {
              echo" <html>
              <head>
              <script>
            alert('succesful inserted');
              </script>
              </head>
              </html>";
              session_start();
              $_SESSION['username']=$username;
              
              header('location:adminhome.php');
            }
            else
            {
              echo" <html>
              <head>
              <script>
            alert('invalid');
              </script>
              </head>
              </html>";
            }
            
        }
        
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  </head>
  <body class="bg-dark">
  
    <h1 class="text-info text-center p-3">ADMIN LOGIN PAGE</h1>
    <div class="bg-info">
    <h1 style="text-align:center;">LOGIN PAGE</h1>

    <div class="container text-center">
  <form action="admin.php" method="POST">


  <div class="mb-3">
    
    <input type="text" class="form-control w-50 m-auto" name="username" id="username" placeholder="Enter  name" require="required">

  </div>
  <div class="mb-3">
   
    <input type="text" class="form-control w-50 m-auto" name="password" id="password" placeholder="Enter your password" 
    require="required" maxLength="10" minLength="4">

  </div>

  <button type="submit" class="btn btn-dark my-4">login</button>
  
</form>
</div>
  </body>

    
</html>
