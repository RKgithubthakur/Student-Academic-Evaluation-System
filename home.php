
<?php
session_start();
if(!isset($_SESSION['username']))
{
    header('location:login.php');
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
   -
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

  <div class="container">
      <div class="row">
        <div class="col md-12 mt-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card title text-center">Search your result Here</h4>
            </div>
            <div class="card body">
                <div class="row">
                  <div class="col md-12 mt-4 text-center">
                    <form action="" method="POST">
                      <div class="form-group ">
                       <input type="text" name="get_id" placeholder="Eneter id" required></br></br>
                       <input type="text" name="stname" placeholder="Eneter name" required>
                      </div>
                        </br>
                      <button type="submit" name="search_by_id" class="btn btn-primary">search</button>
                    </form>
                  </div>
                </div>
                <?php



  if($_SERVER['REQUEST_METHOD']=='POST')
{
        include 'connect.php';
        $stid=$_POST['get_id'];
        $stname=$_POST['stname'];
        
        $sql="select * from record where stid='$stid' and stname='$stname'";
        $result=mysqli_query($c,$sql);

            
?>
                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="id">id</th>
                        <th scope="name">Name</th>
                        <th scope="password">Password</th>
                        <th scope="cs501">cs501</th>
                        <th scope="cs502">cs502</th>
                        <th scope="cs503">cs503</th>
                        <th scope="cs504">cs504</th>
                        <th scope="intern">intern</th>
                        <th scope="activity">activity</th>
                      </tr>
                    </thead>
                    
                      <?php
                        if(mysqli_num_rows($result)>0)
                        {
                          while($row=mysqli_fetch_array($result))
                          {

                          
                      ?>
                      <tr>
                        <th scope="row">1</th>
                        <td><?php echo $row['stid'] ?></td>
                        <td><?php echo $row['stname'] ?></td>
                        <td><?php echo $row['password'] ?></td>
                        <td><?php echo $row['cs501'] ?></td>
                        <td><?php echo $row['cs502'] ?></td>
                        <td><?php echo $row['cs503'] ?></td>
                        <td><?php echo $row['cs504'] ?></td>
                        <td><?php echo $row['intern'] ?></td>
                        <td><?php echo $row['activity'] ?></td>
                  
                      </tr>
                      <?php
                        }
                        }
                        else
                        {
                      ?>
                      <td colspan="6">No match found</td>
                      <?php
          
                        }    
                      }
                    

          
                      ?>
                    
                  </table>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>