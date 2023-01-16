
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login.php');
}
?>
<html>
<head>
	<title>SF&F</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styllll.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="topnav">
          <div class="topnav_left">
			&nbsp;&nbsp;&nbsp;<img src="logo.jpg" height="63px" width="80px">
	    
          <div class="topnav-right">
          <span><?php echo $_SESSION['admin_name'] ?></span>
               <a href="#home"><i class="fa fa-home" style="font-size: 24px"></i>&nbsp;Home</a>    
               <a href="#aboutsec"><i class="fa fa-user-circle"></i>&nbsp;About</a> 
               <a href="login.php"><i class="fa fa-id-badge"></i>&nbsp;Login</a>
               <a href="rigister.php"><i class="fa fa-user"></i>&nbsp;Sign Up</a>
               
               <a href="#contact"><i class="fa fa-phone"></i>&nbsp;Contact</a>
           </div> 
          </div>
      </div>
     <br> <br><br><br> 
      <div  id="home" class="frhead">
      	    <img class="imgcls1" src="frimg.jpeg">
      	    
      	    <div class="wrtheadm"><br><b><p class="wrthead">Student Facts And Figures</p></b>
      	    	<font  class="wrtfont" color="white" size="4">&nbsp;&nbsp;&nbsp;
      	    	Come and gather your requirements in this pool </font><br>
      	    	<font  class="wrtfont" color="white" size="4">where you 
      	    	can discover all your queries at a single place </font>

      	    </div>
       </div>
       <br><br><br>
       <center><p class="offerpara"><b>We Offer:</b></p></center>
      
      
      <div class="outdiv">
       <div class="matt">
       	<div class="mattimg">
       		<img src="material.jpg" height="70%" width="100%">
       	</div>
       	<div class="mattwrt">
       	     <center>Collect revelant materials</center>
       	 </div>
       	</div>
 
         <div class="matt">
       	<div class="mattimg">
       		<img src="pdf.png" height="70%" width="100%">
       	</div>
       	<div class="mattwrt">
       	     <center>Pdf links- unitwise</center>
       	 </div>
       	</div>

       	<div class="matt">
       	<div class="mattimg">
       		<img src="video.png" height="70%" width="100%">
       	</div>
       	<div class="mattwrt">
       	     <center>Video links- topic wise</center>
       	 </div>
       	</div>
    </div>
       </div>


<div class="outdiv">
       <div class="matt">
       	<div class="mattimg">
       		<img src="prevpap.jpg" height="70%" width="100%">
       	</div>
       	<div class="mattwrt">
       	     <center>Previous years papers</center>
       	 </div>
       	</div>
 
         <div class="matt">
       	<div class="mattimg">
       		<img src="udates.png" height="70%" width="100%">
       	</div>
       	<div class="mattwrt">
       	     <center>Branchwise- updates</center>
       	 </div>
       	</div>

       	<div class="matt">
       	<div class="mattimg">
       		<img src="announcement.jpg" height="70%" width="100%">
       	</div>
       	<div class="mattwrt">
       	     <center>Overall announcements</center>
       	 </div>
       	</div>
       </div>
       </div>

 <div class="lgcls">
             <center><h2><p id="login" class="lgnp"><br><br>Login/Sign Up</p></h2</center>
             <div class="lgframe"><br><br><br>
                 <div class="lgwrt">
                      <center><u><h3>Login/Sign Up</h3></u></center><br><br>
                       <center>Don't have an account??<br><br>
                       <button class="sgnbtn" onclick="signin()"><a href="rigister.php"></a>Sign Up</button> <br><br>
                       Have an account?<br><br>
                      <button class="lgnbtn" onclick="lgin()"><a href="login.php"></a>Login</button> </center>
                  </div>      
             </div>
        </div>     
  
      <br><br><br><br><br><br><br><br><br>
      <div class="abtdiv">
           <div class="wrtabt"><br><br>
               <center><h2><p id="aboutsec"><br><br><br><br>About</p></h2></center>
               <center><hr width=80% color="white" height="0.5px"></center><br><br><br><br><br>
               <center>Students may face a difficulty in finding all the relevant information regarding a topic at a particular point of time. It may be about
               the topics related to studies or any important updates or announcement. So this website will help thosde students to find all their 
                required information at a single platform.
                It gives a detailed information about any subject from any semester together in a website.
               So its easy to learn.Students could gather all related information at single place;</center><br><br><br><br><br><br><br><br><br><br>

            </div>

           <div class="contact">
               <center><h2><p id="contact"><br>Contact</p></h2></center>
               <center><hr width="50%" color="white"></center><br><br><br><br>
                 <center>sreevaniramisetti@gmail.com<br>
                bandiraja2018@gmail.com<br>
                sharmilapooja8025@gmail.com<br>
                raghavendraudamula007@gmail.com<br>
                pavanpebbuli44@gmail.com<center><br><br><br>
            </div>
      </div>



<script>
	 function signin()
         {
             window.location.href="regis.html";
         }
          function lgin()
         {
             window.location.href="lgin.html";
         }
     
     </script>


  </body>
  </html>
 