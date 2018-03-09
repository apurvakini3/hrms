<!DOCTYPE html>
<html>
<head>
	<title>front page</title>
	<?php include "headerFiles.php"; ?>
</head>

<body>


        <div>
	    <nav style="background-color: black !important; border:1px solid #787878  " class="navbar navbar-default ">
	        
				<div class="navbar-header">
	      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
	      			</button>
	     			  <ul class="nav navbar-nav navbar-left">
                    	<li>
                     <a  href="#"><img src="../Assets/images/samvad-logo.png" style="width: 160px;height: 30px"></a>
                 	</li>
                 </ul>
                  
	    		</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                   <ul class="nav navbar-nav navbar-right">
	                     <li><a href="adminLogin.php"  style="color:white !important">
	                     	<span class="glyphicon glyphicon-log-out fa-lg"></span> Logout</a>
	                     </li>
	                   </ul>
	            </div>
	        
	    </nav>
	</div>
     </div>

<div class="row" style="margin: 10px;">
		<div class="col-md-4 spacing">
			<a href="tabledept.php">
			<div class="design-button" style="background-color: #3BB525; border: 1px solid #3BB525;"> 
				<p class="button-text">Departments <span ><i class="icon_space fa fa-university fa-3x"></i></span></p>
				<p class="tagline text-center" style="background-color: #3EA52C">Departments</p>
			</div>
		</a>
		</div>

		<div class="col-md-4 spacing">
			<a href="admin_cards.php">
			<div class="design-button" style="background-color: #EE3737;border: 1px solid #EE3737;"> 
				<p class="button-text">Employees Info <span ><i class="icon_space fa fa fa-user fa-3x"></i></span></p>
				<p class="tagline text-center" style="background-color: #D33737">Manage data</p>
			</div>
			</a>
		</div>

		<div class="col-md-4 spacing">
			<a href="tableleave.php">
			<div class="design-button" style="background-color:#F6941F;border: 1px solid #F6941F;"> 
				<p class="button-text">Manage Leave <span ><i class="icon_space fa fa-sign-out fa-3x"></i></span></p>
				<p class="tagline text-center" style="background-color: #E48514">Leave Managment</p>
			</div>
		</a>
		</div>

</div>

<div class="row " style="margin: 10px;">
	<div class="col-md-4 spacing">
		<a href="empattendence.php">
			<div class="design-button" style="background-color:#2FBBB7;border: 1px solid #2FBBB7;  "> 
				<p class="button-text">Attendence <span ><i class="icon_space fa fa-pencil-square-o fa-3x"></i></span></p>
				<p class="tagline text-center" style="background-color: #309E9A">Attendence</p>
			</div>
			</a>
		</div>
</div>





</body>
</html>