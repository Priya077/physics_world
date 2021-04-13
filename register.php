<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Registration</title>
      <style type="text/css">
          body{
               background-image:url('img2.jpg');
               background-repeat:no-repeat;
               background-position:center;
               background-size:cover;
               background-attachment:fixed;
              }
          h1{
             text-align:center;
             background-color:skyblue;
             padding:20px;
             margin:10px;
             color:blue;
             font-family:Sans-serif;
            }
          .navbar{
            padding:10px;
            font-family:sans-serif;
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
            color:white;
            font-size:20px;
            }
            ul li a:hover{
            color:darkblue;
            }

          h2{
             color:darkgreen;
             text-align:center;
             font-size:25px;
             padding:5px;
            }
        label{
              color:black;
              font-weight:bold;
              font-size:20px;
             }
    .registration{
             width:40%;
             margin:auto;
             background-color:rgba(255,255,255,0.2);
             border:2px solid white;
             padding:25px;
             border-radius:5px;
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
        ::placeholder{
                      color:yellow;
                      align:center;
                     font-size:15px;
                     }
         #sub{
              width:33%;
             color:yellow;
             border:2px solid white;
             border-radius:40px;
             padding:5px;
             background-color:rgba(0,0,0,0.5);
             font-size:18px;
             font-style:italic;
             }
      #sub:hover{
                 background-color:darkgreen;
                }
           a{
          text-decoration:none;
          font-size:25px;
          font-family:lucida handwriting;
          color:white;}
       @media (max-width: 720px){
             .registration{
                 width:80%;
                 margin:auto;
                }
             h1{
             height:100px;
             font-size:18px;}
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
            </div><br/>
      <h1>...Sign Up and Join Online Classes...</h1>
       <div class="registration">
          <form method="post" action="insert.php" id="contact">
              <h2>Registration Form</h2>
              <label>User Name :</label><br>
              <input type="text" name="uname" id="name" placeholder="Enter User Name....."required><br><br>
               <label>User Email Id :</label><br>
              <input type="email" name="email" id="name" placeholder="Enter User Email Id...."required><br><br>
              <label>User Mobile Number :</label><br>
              <input type="tel" name="mobile" id="name" placeholder="Enter User Mobile Number....."required><br><br>
               <label>School :</label><br>
                <input type="text" name="school" id="name" placeholder="Enter School's Name....."required><br><br>
               <label>City :</label><br>
                <input type="text" name="city" id="name" placeholder="Enter City Name....."required><br><br>
                 <label>Password :</label><br>
                <input type="text" name="password" id="name" placeholder="Enter Password....."required><br><br>
                 <label>Confirm Password :</label><br>
                <input type="text" name="confirm password" id="name" placeholder="Confirm password....."required><br><br>
                  <label>Gender:</label><br>
                <input type="radio" name="gender"/>Male<input type="radio" name="gender" />Female<input type="radio" name="gender" />Prefer not to say<br><br>
               <button type="submit" value="submit" id="sub" >Submit</button>&nbsp;&nbsp;<button type="reset" value="reset" id="sub">Reset</button>
          </form>
       </div>
        <a href="index.html">Back</a>


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