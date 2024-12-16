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
      .b2
      {

        border-radius: 50px;
        border-style:solid;
        height: 200px;
        width:200px;
        margin: 100px;
        text-align:center;
        padding-top: 100px;
        background:red ;
      }
      a:hover{color:yellow;}
      #b1
      {

        border-radius: 50px;
        border-style:solid;
        height: 200px;
        width:200px;
        margin: 50px,500px;
        text-align:center;
        padding-top: 100px;
        background:red ;
      }
      .b3:hover
      {
        border-radius: 50px;
        border-style:solid;
        height: 200px;
        width:200px;
        margin:50px,500px;
        text-align:center;  
        background:#fff;
        padding: 100px,100px,12px,12px;
        color:blue;
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
    <h1>Welcome
       
    
    <div id="b1" class="b3">
      <a href="loginst.php">login</a>
    </div>

    
    


    
  </body>
</html>