<html>
<head>
  <title> Sport Cars </title>
   

  <!--Navigation bar and background colour-->
  <link rel="stylesheet" type="text/css" href="navigationbar.css"> 

  <style>
   /*a box around the userid and password input fields*/
    .box{
          border: 2px solid black;
          outline: rgb(220,220,220) solid 10px;
          margin: auto;  
          padding: 20px;
          text-align: center;
        }
  </style>

</head>



  <body>
    <!--Navigation Bar-->
    <ul>
       <li><a class="active" href="registration.php">Registration</a></li>
       <li><a href="login.php">login</a></li>
       <li><a href="#contact">Contact</a></li> 
       <li><a href="#about">About</a></li>
        </ul>
     <!--Login inputs-->
      <div class= "box">
        <form action="loginConnection.php" method="post">
           Username: <input type="text" name="username"required><br><br>
           Password: <input type="password" name="password" maxlength="8" required><br><br>
           <input type="submit">
        </form>
      </div> 
   </body>
</html>