<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}

?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        include 'connect.php';
        $stname=$_POST['get_id'];
        //$subname=$_POST['subname'];
        
        $sql="select * from record where stid='$stname'";
        $result=mysqli_query($c,$sql);

        if($result)
        {
          
            $num=mysqli_num_rows($result);
  
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>welcome home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      body{
        
       background-color:yellow;
      }
      
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
<body>
    <h1>hii</h1>
  <div class="navbar">
        <img src="apple-touch-icon.png" class="logo">
        <ul>
          <li><a href="mainhome.php">Home</a></li>
          <li><a href="admin.php">admin</a></li>
          <li><a href="loginst.php">student</a></li>
          <li><a href="login.php">faculty</a></li>
          
        </ul>

      </div>
    <h1 style="text-align:center; color:green;">
    !Hii
  <?php
       echo $_SESSION['username'];
    
  ?>
  </h1>
    </body>
    </html>