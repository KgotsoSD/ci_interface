<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="Assets/styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/boostrap.min.css"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
</head>


<style>
  
/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
  }
  
  /* Style the links inside the navigation bar */
  .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  /* Change the color of links on hover */
  .topnav a:hover {
    background-color: #ddd;
    color: black;
  }
  
  /* Add a color to the active/current link */
  .topnav a.active {
    background-color: #0704aa;
    color: white;
  }



  /*   */

  body {
    background-color:black ;
    font-family: "Open Sans", sans-serif;
    color:black;
    
    

  /*  margin-left: auto;
    margin-right: auto;
   clear: left;
    display: inline-block;*/
  }
  
  
  .myLogo {
      width:50px;
      height: 50px;
      margin-left: 40%;
      opacity: 0.0;
     
  }
  
  .logo-wrapper img{
    margin-left: 40%;
  
  }
  
  
  .imgk{
      width:100px;
      height: 100px;
  }
  h1, h6 {
    font-family: "Roboto", sans-serif;
  }
  
  
  .backgrnd{
      
      background-position: center;
   
      background-repeat: no-repeat;
      background-size: cover;
      position: relative;
  
    
  }
  
  .topnav-right {
    background-color: rgb(10, 1, 1);
    overflow: hidden;
  }
  
  .move{
  
          position: fixed;
          bottom: 0;
          right: 0;
        
      
  }
  
  .nav-link-wrapper:hover{
      color: black;
      position: fixed;
      bottom: 0;
      right: 0;
      padding-right:1000px ;
      padding-top: 1000px;
  
  }
  
  
  
  .topnav-right {
      background-color: #333;
      overflow: hidden;
  }
  
  .topnav-right a {
      float: right;
      color: rgb(255, 0, 170);
      text-align: right;
      padding: 140px 100px;
      text-decoration: none;
      font-size: 338px;
    }
  
    .topnav-right a:hover {
      background-color: #ddd;
      color: black;
    }
  
  
    h3 {
        color: black;
    }
    .content-wrapper {
      color: white; 
    }
  
  .about{
   position: center; 
  width:1300px;
  height:500px
  }
  
  .contact{
    position: botto; 
  width:100px;
  height:600px
  }
  
    /* New Style */
  
  .topnav-right{
    flex:1;
    text-align:right;
  }

  
  /*
  .topnav-right ul li{
  
   
    padding: 8px 12px;
    position: relative;
  
  
  }
  */
  .h1{
   margin-left: 50%;
   

  }
  .h3{
    margin-left: 45%;
    
  }
  
</style>

<body>


<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#About">About</a>
  <a href="#contact">Contact</a>
  <a href="https:localhost/profile/index">Profile</a>

 
</div>

<div class="panel">
	<div class="panel-heading">
		<div class="panel-title">Edit Account Details</div>				
	</div>  
	<div class="panel-body col-md-7">
		<form class="form-horizontal" role="form" method="POST" action="">				
			<?php if($message != '') { ?>
				<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $message; ?></div>                            
			<?php } ?>	
			<div class="form-group">
				<label for="firstname" class="col-md-3 control-label">First Name*</label>
				<div class="col-md-9">
					<input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?php echo $userDetail['first_name'];?>" >
				</div>
			</div>
			<div class="form-group">
				<label for="lastname" class="col-md-3 control-label">Last Name</label>
				<div class="col-md-9">
					<input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?php echo $userDetail['last_name'];?>" >
				</div>
			</div>					
			<div class="form-group">
				<label for="email" class="col-md-3 control-label">Email*</label>
				<div class="col-md-9">
					<input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo $userDetail['email'];?>" required>
				</div>
			</div>	
			<div class="form-group">
				<label for="email" class="col-md-3 control-label">Mobile</label>
				<div class="col-md-9">
					<input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $userDetail['mobile'];?>" >
				</div>
			</div>	
			<div class="form-group">
				<label for="lastname" class="col-md-3 control-label">Designation</label>
				<div class="col-md-9">
					<input type="text" class="form-control" name="designation" placeholder="Designation" value="<?php echo $userDetail['designation'];?>" >
				</div>
			</div>	
			<div class="form-group">
				<label for="gender" class="col-md-3 control-label">Gender</label>
				<div class="col-md-9">
					<label class="radio-inline">
						<input type="radio" name="gender" value="male" <?php if($userDetail['gender'] == 'male') { echo 'checked'; } ?> required>Male
					</label>;
					<label class="radio-inline">
						<input type="radio" name="gender" value="female" <?php if($userDetail['gender'] == 'female') { echo 'checked'; } ?> required>Female
					</label>
				</div>
			</div>	
			<div class="form-group">
				<label for="password" class="col-md-3 control-label">Password</label>
				<div class="col-md-9">
					<input type="password" class="form-control" name="passwd" placeholder="Password" value="">
				</div>
			</div>	
			<div class="form-group">
				<label for="password" class="col-md-3 control-label">Confirm Password</label>
				<div class="col-md-9">
					<input type="password" class="form-control" name="cpasswd" placeholder="Confirm Password" value="">
				</div>
			</div>						
			<div class="form-group">						                                  
				<div class="col-md-offset-3 col-md-9">
					<button id="btn-signup" type="submit" name="update" value="update_account" class="btn btn-info"><i class="icon-hand-right"></i>   Save Changes</button>			
				</div>
			</div>							
		</form>
	 </div>
</div>
</div>	



</body>
</html>