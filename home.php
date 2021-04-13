<?php 
  session_start();
 ?>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style type="text/css">
      h2{
          text-align:center;
          padding:100px;
          margin:100px;
          font-size:30px;
          font-weight:bold;
          color:white;
         }
     body{
     background-image:url('home.png');
     background-repeat:no-repeat;
     background-position:center;
     background-size:cover;
     background-attachment:fixed;
     }
     a{
     text-align:center;
     margin:650px;
     text-decoration:none;
     color:white;}
     @media(max-width: 720px){
     h2{
      color:black;
      height:350px;
      font-size:60px;}
     a{
      font-size:40px;
      margin:400px;}
       
}
   </style>
</head>
<body>
    <h2>Hello,<?php echo $_SESSION['username'];?><br/><br/><br/></h2><br/>
    <a href="logout.php">LOGOUT</a>
</body>
</html>