<html>
  <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style type="text/css">
        body{
               background-image:url('img1.jpg');
               background-repeat:no-repeat;
               background-position:center;
               background-size:cover;
               background-attachment:fixed;
              }
        .navbar{
            padding:10px;
            font-family:sans-serif;
            background-color:gray;
            }
            .nav-list{
            text-align:right;
           }
           span{ 
            font-size:28px;
            margin:0 20px;
            cursor:pointer;
            color:white;
            display:block;}
           ul{
            display:none;}
           ul li{
            display:inline-block;
            list-style:none;
            margin:6px;
           }
           ul li a{
            text-decoration:none;
            color:black;
            font-size:16px;
            }
            ul li a:hover{
            color:darkblue;
            }
        label{
              color:navy;
              font-weight:bold;
              font-size:30px;
             }
       .login{
             width:40%;
             margin:auto;
             background-color:rgba(255,255,255,0.7);
             border-radius:80px 0px 80px 0px;
             padding:20px;
             text-align:center;
            }
       #name,#text{
             width:66%;
             color:white;
             border:2px solid white;
             padding:5px;
             background-color:rgba(0,0,0,0.5);
             border-radius:40px;
             font-size:18px;
             font-style:italic;
             text-align:center;
             }
         #sub{
              width:32%;
             color:yellow;
             border:2px solid white;
             border-radius:40px;
             padding:5px;
             background-color:rgba(0,0,0,0.5);
             font-size:18px;
             font-style:italic;
             }
      #sub:hover{
                 background-color:black;
                }
          a{
          text-decoration:none;
          font-size:28px;
          font-weight:bold;
          color:MediumVioletRed;}
      a:hover{
         color:orangered;} 
    @media(max-width: 720px){
       .login{
             width:80%;
             margin:auto;
             padding:5px;
            }
       #name,#text{
          font-size:8px;}
      #sub{
         width:50%;}
       ul li{
        margin:3px;}
       ul li a{
          font-size:18px;
       }
}
    </style>
  </head>
   <body>
      <div class="navbar">
              <div class="nav-list">
                  <span onclick="myfunction()">&#9776;</span>
                <ul id="menu">
                  <li><a href="index.html">Home</a></li> 
                  <li><a href="about.html">About</a></li>
                  <li><a href="http://localhost/userregistration/login.php">Login</a></li> 
                  <li><a href="course.html">Course</a></li>
                  <li><a href="http://localhost/userregistration/register.php">Registration</a></li>
                  <li><a href="contact.html">Contact</a></li>
              </ul>
              </div>
            </div><br/><br/><br/><br/><br/>
          
         <div class="login">
             <form  action="validation.php" method="post">
              <label>User Id :</label><br>
              <input type="text" name="uname" id="name" required><br><br>
               <label>User Password:</label><br>
              <input type="text" name="password" id="name" required><br><br>
               <button type="submit" value="submit" id="sub">Sign in</button>&nbsp;&nbsp;
                   <button type="reset" value="reset" id="sub">Reset</button>
        <h2 style="color:blue">Not a member?</h2>
        <a href="http://localhost/userregistration/register.php">Sign Up</a>
         </form>
       </div>
      
      
        <script>
            function myfunction(){
               var x = document.getElementById("menu");
               if(x.style.display== "block")
                   x.style.display="none";
               else
                 x.style.display="block";
             }
        </script>
    </body>
</html>