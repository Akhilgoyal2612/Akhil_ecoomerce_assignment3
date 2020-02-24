<?php 
include 'submit.php';
?>
<!DOCTYPE HTML>  
<html>
<head>
<style>
.form {
    padding: 100px;
    max-width: 500px;
    margin: 0 auto;
    border: 1px grey;
    background: #ffffff;   
}
.error {color: red;}
</style>
</head>
<body>  
<div class=form>
	<h1 style=text-align:center;>Validation</h1>
		
		<form method="post" action="index.php">  
		  Username: <input type="text" name="name" value="" >
		  <span class="error">
		  	<?php if(in_array("Enter your Name.<br>",$error)) 
		  			echo "Enter your Name.<br>"; ?>
		  </span>
		  <br><br>
            
		  Age: <input type="number" name="age" value="" >
		  <span class="error">
              
		  	<?php if(in_array("Enter your age(Should be between 18 to 120)<br>",$error)) 
		  		  echo "Enter your age(Should be between 18 to 120)<br>"; ?>
		  </span>
		  <br><br>
            
		  Password: <input type="Password" name="psd" value="" >
            
		  <span class="error">
		  	<?php if(in_array("Choose Password(not less than 6 characters)<br>",$error)) 
		  	      echo "Choose Password(not less than 6 characters)<br>"; ?>  	   
		   </span>
		  <br><br>
            
		  City: <input type="text" name="city" value="" >
		  <span class="error"> 
		  	<?php if(in_array("Enter your city.<br>",$error)) 
		  	      echo "Enter your city.<br>"; ?>
		  	</span>
		  <br><br>
		  Country: <input type="text" name="country" value="" >
		  <span class="error">
		  	<?php if(in_array("Enter your country.<br>",$error)) 
		  	      echo "Enter your country.<br>"; ?>
		  </span>
		  <br><br>
		  <input type="submit" name="submit" value="Submit" >  
		</form>
    </div>
</body>
</html>