<!DOCTYPE html>
<html>
 <head>
	<title>Login</title>

   <!--Navigation bar and background colour-->
   <link rel="stylesheet" type="text/css" href="navigationbar.css"> 

	 <style>
      
      /*search bar*/
        input[type=text] {
         width: 130px;
         box-sizing: border-box;
         border: 2px solid #ccc;
         border-radius: 4px;
         font-size: 16px;
         background-color: white;
         background-image: url('searchicon.png');
         background-position: 10px 10px; 
         background-repeat: no-repeat;
         padding: 12px 20px 12px 40px;
         -webkit-transition: width 0.4s ease-in-out;
         transition: width 0.4s ease-in-out;
        }

        input[type=text]:focus {
         width: 100%;
        }

      /* three different divs */

    * {
       box-sizing: border-box;
      }

      .box {
       float: left;
       width: 33%;
       padding: 50px;
      }

      .clearfix::after {
        content: "";
        clear: both;
        display: table;
      }

       /*button*/

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
       <li><a class="active" href="registration.php">Registration</a></li>
       <li><a href="login.php">login</a></li>
       <li><a href="#Contact">Contact</a></li>
       <li><a href="#about">About</a></li>
       <li> <a href="index.php"> logout</a></li>
       <input type="text" name="search" placeholder="Search.."> 
    </ul>


     <!--Divs conatining products-->
        <div class="clearfix">
         <div class="box" style="background-color:#ddd">
          <img src="1.jpg" alt="Trulli" width="300" height="180">
          <h1> Bugatti Veyron</h1>
           <h2>Price : 12 crore</h2>
           <h4>Description</h4>
             Fuel Type : Petrol<br>             
             Mileage : 6 Kmpl<br>
             Engine : 7993 CC<br>
             Transmission : Automatic<br>
             Power : 1001bhp@6000rpm<br>
             Torque : 1250Nm@2200-5500rp<br><br>
             <input type="submit" class="button button1" value='buy'>
         </div>

         <div class="box" style="background-color:#ddd">
           <img src="2.jpg" alt="Trulli" width="300" height="180">
          <h1> Ferari GTC4</h1>
           <h2>Price : 10 crore</h2>
           <h4>Description</h4>
             Fuel Type : Petrol<br>             
             Mileage : 8 Kmpl<br>
             Engine : 4993 CC<br>
             Transmission : Automatic<br>
             Power : 1001bhp@6000rpm<br>
             Torque : 1050Nm@2200-3500rp<br><br>
             <input type="submit" class="button button1" value='buy'>
         </div>


         <div class="box" style="background-color:#ddd">
          <img src="3.jpg" alt="Trulli" width="300" height="180">
          <h1> Centenario </h1>
           <h2>Price : 11 crore</h2>
           <h4>Description</h4>
             Fuel Type : Petrol<br>             
             Mileage : 8 Kmpl<br>
             Engine : 6593 CC<br>
             Transmission : Automatic<br>
             Power : 1001bhp@6000rpm<br>
             Torque : 1150Nm@2200-5500rp<br><br>
             <input type="submit" class="button button1" value='buy'>
         </div>


     </div>

     <div class="clearfix">
         <div class="box" style="background-color:#ddd">
           <img src="4.jpg" alt="Trulli" width="300" height="180">
          <h1> Koenigsegg Agera R</h1>
           <h2>Price : 12 crore</h2>
           <h4>Description</h4>
             Fuel Type : Petrol<br>             
             Mileage : 5 Kmpl<br>
             Engine : 8653 CC<br>
             Transmission : Automatic<br>
             Power : 1001bhp@6000rpm<br>
             Torque : 1370Nm@2200-5500rp<br><br>
             <input type="submit" class="button button1" value='buy'>
         </div>


         <div class="box" style="background-color:#ddd">
           <img src="5.jpg" alt="Trulli" width="300" height="180">
          <h1> Porsche GTR</h1>
           <h2>Price : 4 crore</h2>
           <h4>Description</h4>
             Fuel Type : Petrol<br>             
             Mileage : 6 Kmpl<br>
             Engine : 4293 CC<br>
             Transmission : Automatic<br>
             Power : 1001bhp@6000rpm<br>
             Torque : 1450Nm@2200-5500rp<br><br>
             <input type="submit" class="button button1" value='buy'>
         </div>


         <div class="box" style="background-color:#ddd">
           <img src="6.jpg" alt="Trulli" width="300" height="180">
          <h1> Paganni Zonda</h1>
           <h2>Price : 14 crore</h2>
           <h4>Description</h4>
             Fuel Type : Petrol<br>             
             Mileage : 6 Kmpl<br>
             Engine : 8293 CC<br>
             Transmission : Automatic<br>
             Power : 1001bhp@6000rpm<br>
             Torque : 1250Nm@2200-5500rp<br><br>
             <input type="submit" class="button button1" value='buy'>
         </div>


     </div>

      <div class="clearfix">
         <div class="box" style="background-color:#ddd">
          <img src="7.jpg" alt="Trulli" width="300" height="180">
          <h1> Mc Lauren Safire</h1>
           <h2>Price : 8 crore</h2>
           <h4>Description</h4>
             Fuel Type : Petrol<br>             
             Mileage : 5 Kmpl<br>
             Engine : 6993 CC<br>
             Transmission : Automatic<br>
             Power : 1001bhp@6000rpm<br>
             Torque : 1150Nm@2200-5500rp<br><br>
             <input type="submit" class="button button1" value='buy'>
         </div>


         <div class="box" style="background-color:#ddd">
           <img src="8.jpg" alt="Trulli" width="300" height="180">
          <h1> Mc Lauren GTA</h1>
           <h2>Price : 7 crore</h2>
           <h4>Description</h4>
             Fuel Type : Petrol<br>             
             Mileage : 4 Kmpl<br>
             Engine : 6593 CC<br>
             Transmission : Automatic<br>
             Power : 1001bhp@6000rpm<br>
             Torque : 1350Nm@2200-5500rp<br><br>
             <input type="submit" class="button button1" value='buy'>
         </div>


         <div class="box" style="background-color:#ddd">
          <img src="9.jpg" alt="Trulli" width="300" height="180">
          <h1> Lamborghini spider </h1>
           <h2>Price : 4 crore</h2>
           <h4>Description</h4>
             Fuel Type : Petrol<br>             
             Mileage : 3 Kmpl<br>
             Engine : 3993 CC<br>
             Transmission : Automatic<br>
             Power : 1001bhp@6000rpm<br>
             Torque : 999Nm@2200-5500rp<br><br>
             <input type="submit" class="button button1" value='buy'>
         </div>


     </div>

     <div class="clearfix">
         <div class="box" style="background-color:#ddd">
           <img src="10.jpg" alt="Trulli" width="300" height="180">
          <h1> Lamborghini Huracan</h1>
           <h2>Price : 3 crore</h2>
           <h4>Description</h4>
             Fuel Type : Petrol<br>             
             Mileage : 7 Kmpl<br>
             Engine : 29993 CC<br>
             Transmission : Automatic<br>
             Power : 1001bhp@6000rpm<br>
             Torque : 1150Nm@2200-5500rp<br><br>
             <input type="submit" class="button button1" value='buy'>
         </div>


         <div class="box" style="background-color:#ddd">
           <img src="11.jpg" alt="Trulli" width="300" height="180">
          <h1> Maybach S6</h1>
           <h2>Price : 18 crore</h2>
           <h4>Description</h4>
             Fuel Type : Petrol<br>             
             Mileage : 9 Kmpl<br>
             Engine : 6993 CC<br>
             Transmission : Automatic<br>
             Power : 1001bhp@6000rpm<br>
             Torque : 1050Nm@2200-5500rp<br><br>
             <input type="submit" class="button button1" value='buy'>
         </div>


         <div class="box" style="background-color:#ddd">
          <img src="12.jpg" alt="Trulli" width="300" height="180">
          <h1> Audi R8</h1>
           <h2>Price : 5 crore</h2>
           <h4>Description</h4>
             Fuel Type : Petrol<br>             
             Mileage : 4 Kmpl<br>
             Engine : 3993 CC<br>
             Transmission : Automatic<br>
             Power : 1001bhp@6000rpm<br>
             Torque : 1250Nm@2200-5500rp<br><br>
             <input type="submit" class="button button1" value='buy'>
         </div>


     </div>

	</body>
</html>