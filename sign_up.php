<?php
	include "connection.php"
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="sign_up_style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">

        <div class="signin-signup">
          
          <form action="#"  method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="Email" placeholder="Username/Email id" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="Mobile" placeholder="Password/Mobile number" />
            </div>
            <input type="submit"  name="sub" value="Login" class="btn solid" /> 
          </form>

          <form action="#" class="sign-up-form" method="post">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="Parent" placeholder="Enter Parent's Name" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="Email" placeholder="Enter Email ID" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="tel" name="Mobile" placeholder="Enter Mobile Number" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="text" name="Student" placeholder="Enter Student's Name" />
            </div>
        
            <input type="submit" class="btn" name="sign" value="Sign up" />
            <p class="social-text"></p>
            <div class="social-media">
             
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Cerebro Kids Finance Learners Program</h3>
            <br>
            <h4>Sooner they start stronger their basics are!</h4>
            <p>
              Book FREE class and get upto 100% scholarship
              <br>
              <span style="color:darkred">Click below to join</span>
              <br>
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="image/1.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Cerebro Kids Finance Learners Program</h3>
            <p>
              Already joined
              <br>
              <span style="color:darkred">Sign in to continue your journey</span>
              <br>
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="image/2.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>

    <?php

 		if(isset($_POST['sign']))
 		{

 			mysqli_query($db,"INSERT INTO `user_inf` VALUES('$_POST[Parent]','$_POST[Email]','$_POST[Mobile]','$_POST[Student]');");
 		?>
 		<script type="text/javascript">
 			alert("Registration successful");
 		</script>
 		<?php

 		}
 	?>

 	<?php

 		if(isset($_POST['sub']))
 		{
 			$count=0;
 			$res=mysqli_query($db,"SELECT *FROM 'user_inf' WHERE Email='$_POST[Email]' && Mobile='$_POST[Mobile]';");
 			$count=mysqli_num_rows($res);

 			if($count==0)
 			{
 				?>
 				<script type="text/javascript">
 				alert("The username and password didn't match");
 				</script>
 				<?php
 			}
 			else
 			{
 				?>
 				<script type="text/javascript">
 				alert("successfully login");
 			    </script> 			
 				<?php
 			}
 		}
 		?>
  </body>
</html>
