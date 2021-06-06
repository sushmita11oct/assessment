<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signin</title>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
</head>
<style type="text/css">
body {
background-color: #F3EBF6;
font-family: 'Ubuntu', sans-serif;
}
div.error {
margin-bottom: 15px;
margin-top: -6px;
margin-left: 58px;
color: red;
}
.main {
background-color: #FFFFFF;
width: 400px;
height: 400px;
margin: 2em auto;
border-radius: 1em;
box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
}
.sign {
padding-top: 40px;
color: #8C55AA;
font-family: 'Ubuntu', sans-serif;
font-weight: bold;
font-size: 23px;
}
.un {
width: 76%;
color: rgb(38, 50, 56);
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
form.form1 {
padding-top: 40px;
}
.pass {
width: 76%;
color: rgb(38, 50, 56);
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
.un:focus, .pass:focus {
border: 2px solid rgba(0, 0, 0, 0.18) !important;
}
.submit {
cursor: pointer;
border-radius: 5em;
color: #fff;
background: linear-gradient(to right, #9C27B0, #E040FB);
border: 0;
padding-left: 40px;
padding-right: 40px;
padding-bottom: 10px;
padding-top: 10px;
font-family: 'Ubuntu', sans-serif;
margin-left: 35%;
font-size: 13px;
box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
}
.forgot {
text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
color: #E1BEE7;
padding-top: 15px;
}
button {
text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
color: #E1BEE7;
text-decoration: none
}
@media (max-width: 600px) {
.main {
border-radius: 0px;
}
</style>


<body>
<div class="main">


<?php $errorMsg=$this->session->userdata('errorMsg'); ?>
<?php if(!empty($errorMsg)) {?>
<div class="" role="alert">
<?php echo $errorMsg;?>
</div><?php }?>



<form action="<?php echo base_url().'login';?>" name="loginForm" id="loginForm" method="post">
<p class="sign" align="center">Sign in</p>
 
    
    <input type="text" class="un" id="username" value="<?php echo set_value('username');?>"  name="username" placeholder="enter username">
   <p><?php echo form_error('username'); ?>


    
    <input type="password" class="pass" id="password" value="<?php echo set_value('password');?>" name="password" placeholder="Enter password">
    <p><?php echo form_error('password'); ?>

 
  
  <button type="submit" class="submit">Submit</button>
</form>
</div>


</body>
</html>


