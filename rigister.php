

<?php

$conn = mysqli_connect('localhost','root','','sfaf');



if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $pass = $_POST['password'];
   $rollid = $_POST['rollid'];
   $email = $_POST['email'];
   $mobno = $_POST['mobno'];
   $yos = $_POST['yos'];
   $branch=$_POST['branch'];


   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO st_reg(roll_no,name,password,email,mobile,year,branch) 
         VALUES('$rollid','$name','$pass','$email','$mobno','$yos','$branch')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>
<html>
  <head>
    <title>Registration</title>
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
             width:50%;
            text-align:center;
             border-color:blue;
              border-style:solid;
             border-width:1px;
		 border-radius:10px;
             height:90%;
            
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
               
               <a href="">Registration</a>&nbsp;&nbsp;&nbsp;&nbsp;
               
           </div>
          </div>
      </div>
<br><br><br><br><br>

 
     <center><h1><b>Register</b></h1></center>
	<div class="lgcls">
            
             <div class="lgframe"><br><br><br>
                 <div class="lgwrt"><br><br>
                       <font size=2>Please fill in your details</font size>
<form name="myform" action="cseop.html" onsubmit="valid()">
				<pre><b><font size=4>
                <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
Username:       <input type="text" name="fname" value="" id="usrnme"><br>
Create Password:<input type="password" name="password" value="" id="pswrd"><br>
Roll No:        <input type="text" name="rollno" value="" id="rollid"><br>
E-mail:         <input type="text" name="mail"><br>
Mobile:         <input type="number" name="mobno"><br>               
Year of Study:  <select name="yos">
		    <option>1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		    <option>2</option>
		    <option>3</option>
		    <option>4</option>
		    </select><br>
Branch:         <select name="branch">
		    <option>Computer Science</option>
		    <option>Information Technology</option>
		    <option>ECE</option>
		    <option>Electical and Electronics</option>
   		    <option>CIVIL</option>
		    <option>ECM</option>
		    </select>

		    
</font></b><br></pre><br>
				<input type="submit" class="lgnbtn" value="REGISTER"><br>
                        </div>  
</form>    
             </div>
        </div>     
 
   <script>
function valid()
{
  var c=0;
  var fname=document.myform.fname;
  var password=document.myform.password;
  var mail=document.myform.mail.value;
  var mobno=document.myform.mobno;
  var yostud=document.myform.yostud;
  var branch=document.myform.branch;
  var rollno=document.myform.rollno;

 if(fname.value.length <=0){
   alert("Name must be required");
   fname.focus();
   return false;
 }
 if(password.value.length <=7){
   alert("Password must of atleast 8 characters");
   password.focus();
   return false;
 }
if(rollno.value.length <=0){
   alert("Roll no. must be required");
   rollno.focus();
   return false;
 }

if(mobno.value.length<10){
 alert("mobile number must be 10 numbers");
 return false;
}
return false;
}

</script>
   
  </body>
</html>