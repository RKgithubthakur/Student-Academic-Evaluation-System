
<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:admin.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <style>
          button{
          width: 200px;
          padding: 15px 0;
          text-align: center;
          margin: 20px 10px;
          border-radius: 25px;
          font-weight: bold;
          border:2px solid #009688;
          background:transparent;
          color:#fff;
          cursor: pointer;
          position: relative ;
          overflow: hidden;
      }
      span{
          background:#009688;
          height: 100%;
          width: 0;
          border-radius: 25x;
          position: absolute;
          left:0;
          bottom: 0;
          z-index: -1;
          transition: 0.5s;
      }
      button:hover span{
          width: 100%;
          
      }
      button:hover{
          border: none;
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
    color:#000;
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
  <div class="navbar">
        <img src="apple-touch-icon.png" class="logo">
        <ul>
          <li><a href="mainhome.php">Home</a></li>
          <li><a href="admin.php">admin</a></li>
          <li><a href="loginst.php">student</a></li>
          <li><a href="faculty.php">faculty</a></li>
        </ul>
      </div>
  <div style="text-align:center; color:orange;">
    <h1>welcome</h1>
    <h1>Admin page</h1>
    </div>
  <div style="text-align:center;  border-style: solid; margin-top:100px;
      border-radius:20px;">
          <button type="button"><span></span><ul><li><a href="registerfac.php">register faculty</a></li></ul></button>
          <button type="button"><span></span><a href="signadmin.php">register student</a></button>
          
   </div>
  </body>
</html>