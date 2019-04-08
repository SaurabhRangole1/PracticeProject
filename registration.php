<!DOCTYPE html>
<html>
 <head>
	<title>Login</title>

   <!--Navigation bar and background colour-->
    <link rel="stylesheet" type="text/css" href="navigationbar.css"> 

	   <style>

        /*box around the registration field*/
         .box{
          border: 2px solid black;
          outline: rgb(220,220,220) solid 10px;
          margin: auto;  
          padding: 20px;
          text-align: center;

        }
        

        /*align input field vs labels of registration i.e all iput fiels are go in right hand side*/
        .right
        {
          float: right;
          margin-right: 40%;
        }

        
        /*Submit button*/

        .button {
          background-color: #333; /* blackish grey */
          border: none;
          color: white;
          padding: 15px 32px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 16px;
          margin: 4px 2px;
          cursor: pointer;
         -webkit-transition-duration: 0.4s; /* Safari */
          transition-duration: 0.4s;
         }

        .button1 {
         box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
         }
    	</style>
 </head>
	
  <body>
    <!--Navigation Bar-->
		<ul>
       <li><a class="active" href="#home">Registration</a></li>
       <li><a href="login.php">login</a></li>
       <li><a href="#contact">Contact</a></li>
       <li><a href="#about">About</a></li>
     </ul>

       <div class="box">
         <form action="registrationConnection.php" method="post">
           First Name:<input type="text" name="firstname" class="right" required><br><br><br><br>
           Last Name:<input type="text" name="lastname" class="right" require><br><br><br><br>
           UserName: <input type="text" name="username"class="right" require><br><br><br><br>
           Password: <input type="password" name="pwd" maxlength="8" class="right" required><br><br><br><br>
           Confirm Password : <input type="text" name="password" maxlength="8"class="right" required><br><br><br><br>
           Mobile number: <input type="text" name="mobilenumber"class="right" required><br><br><br><br>
           address: <input type="text" name="address" class="right" required><br><br><br><br>
           <input type="submit" class="button button1">
         </form>
       </div>
   </body>
</html>