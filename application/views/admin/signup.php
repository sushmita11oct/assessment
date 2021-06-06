<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
   <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Include the above in your HEAD tag  -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<style type="text/css">
body {
background-color: #808000;
font-family: 'Ubuntu', sans-serif;
}
.main {
text-align: center;
background-color: #E6E6FA;
width: 900px;
height: 1350px;
margin: 7em auto;


}
.submit1 {
cursor: pointer;
border-radius: 5em;
color: #fff;
background: linear-gradient(to right, #9C27B0, #E040FB);
border: 0;
padding-left: 400px;
padding-right: 400px;
padding-bottom: 10px;
padding-top: 10px;
font-family: 'Ubuntu', sans-serif;
margin-left:2%;
font-size: 13px;
box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
}


.un {
width: 76%;
color:#0000FF;
font-weight: 700;
font-size: 14px;
letter-spacing: 1px;
background: rgba(136, 126, 126, 0.04);
padding: 10px 20px;
border: none;
border-radius: 20px;
outline: none;
box-sizing: border-box;
border: 2px solid rgba(0, 0, 0, 0.02);
margin-bottom: 50px;
margin-left: 46px;
text-align: center;
margin-bottom: 27px;
font-family: 'Ubuntu', sans-serif;
}
.sign {
padding-top: 40px;
color: #8C55AA;
font-family: 'Ubuntu', sans-serif;
font-weight: bold;
font-size: 23px;
}



</style>
<body>
	

<div class="main">
<br>
<hr>



<?php echo validation_errors(); ?>

	<a href="<?php echo base_url().'login';?>" class="sign">Log in</a>
	<p class="sign"><u>Create Account</u></p>

<form action="<?php echo base_url().'Login/signup';?>" name="signupForm" id="signupForm" method="post">

		<table>
			<label>First name </label>  
			<br> 
		  	<input type="text" class="un" id="first_name" name="first_name" placeholder="enter your first  name" required>
		<br><br>
			<label>Last name</label>
			<br>
		  	<input type="text" class="un" id="last_name" name="last_name" placeholder="enter your last name " required>
         <br><br>
		<label>Email address</label>
		<br>
		<input type="email" class="un" id="email" name="email" placeholder="enter your email Address" required>
	<br><br>

		<label>Phone</label>
		<br>
		<input type="number" class="un" id="phone" name="phone" placeholder="enter your Phone Number" required>
	
	<br><br>
		<label> Address</label>
        <br>
		<input type="text" id="address" name="address" class="un"  placeholder="enter your Address" required >
         <br><br>

		  <label>City</label>
		  <br>
		  <input type="text" id="city" name="city" class="un"   placeholder="enter your City"required>
		<br><br>

		  <label>State</label>
		  <br>
          <input type="text" id="state" name="state" class="un"  placeholder="enter your State" required >
<br><br>

		  <label>Country</label>
		  <br>
          <input type="text" id="country" name="country" class="un"  placeholder="enter your Country"required>
<br><br>
	
		<label>zip</label>
		<br>
		<input type="number" id="zip" name="zip" class="un"  placeholder="enter your Zip Code"required>
	<br><br>
		
		<label>Create password</label>
		<br>
	    <input class="un" id="password" name="password" type="password"  placeholder="Create Password" required>
	<br><br>
       <button type="submit" class="submit1" id="save" name="save" method="post"> Register  </button>
       
                                           
</form>
<br>
<hr>
</div>		</table>


</body>
</html>

