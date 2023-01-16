<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $pass = md5($_POST['password']);
    $rollid = md5($_POST['roll_no']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $mobno = md5($_POST['mobno']);
    $branch = $_POST['branch'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      /*if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];*/
         header('location:cseop.html');

      /*}elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }*/

   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>
<html>
  <head>
    <title>Login</title>
    <style>
         .topnav {
        
           background-color:#1100fc;
           position: fixed;
           top:0;
           overflow: hidden;
           height:11%;
           width:100%;
         }
         .topnav a {
           float: left;
           color: white;
           text-align: center;
           padding: 20px;
           text-decoration: none;
           font-size: 20px;

         }
         .topnav a:hover {
           
            background-color:#FFFFF0;
            color: black;
         }
         .topnav a.active {
            background-color: #04AA6D;
            color: white;
         }
         .topnav-right {
            float: right;
            color:white;
         }

	   .lgcls{
             padding-left:35%;
          }
         .lgframe{
             display:flex;
             width:45%;
             text-align:center;
             border-color:blue;
              border-style:solid;
             border-width:1px;
		 border-radius:10px;
             height:50%;
            
          }
          .lgframe > div{
              width:80%;
          }
          .lgwrt{
              margin:5px;
              text-align:center;
              padding-left:40px;
          } 
          .lgnbtn{
                width:40%;
              height:25px;
              background-color:blue;
              color:white;
          } 
          .lgnbtn a{
              color:white;
	    }
</style>
  </head>
  <body>
      <div class="topnav">
          <div class="topnav_left">
			&nbsp;&nbsp;&nbsp;<img src="logo.jpg" height="63px" width="80px">
	    
          <div class="topnav-right">
               
               <a href="">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
               
           </div>
          </div>
      </div>
<br><br><br><br><br>
 
      <center><h1><b>Login</b></h1></center>
	<div class="lgcls">
            
             <div class="lgframe"><br><br><br>
                 <div class="lgwrt"><br><br>
                       <font size=2>Please fill in your details</font size>
				<pre><b><font size=4>
                <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
E-mail:  <input type="email" name="email" required placeholder="enter your email"><br>
Password:<input type="password" name="password" required placeholder="enter your password"></font>
<input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="rigister.php">register now</a</b><br></pre><br><br><br><br>
				<button class="lgnbtn"><b><a class="reflnk0" name="submit">Login</a></b></button><br>
                        </div>      
             </div>
        </div>     
  </body>
</html>