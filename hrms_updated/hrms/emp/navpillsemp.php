 <div>
       <nav style="background-color: black !important;border:1px solid #787878 "  class="navbar navbar-default ">
               <div class="container-fluid">
                  <ul class="nav navbar-nav navbar-left">
                    	<li>
                     <a  href="#"><img src="../Assets/images/samvad-logo.png" style="width: 160px;height: 30px"></a>
                 	</li>
                 </ul>
                  
                   
                   <ul class="nav navbar-nav navbar-right">
                     
                     <li><a href="logout.php" style="color:white !important"><span class="glyphicon glyphicon-log-out fa-lg"></span> Logout</a></li>
                   </ul>
                 </div>
          </nav>
     </div>
   



 <div class="col-md-3">
 	<div id="sidebar">
	 <nav   class="sidenav  navbar-inverse">
	        
				<div class="navbar-header">
	      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
	      			</button>
	     			 <a class="navbar-brand" href="#"><p id="hrms" style="color: white;">HRMS</p></a>
	    		</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	                  
			<ul class="nav nav-pills nav-stacked  navbar-inverse"  >
					
					<li class="dropdown">
						<a class="list" href="employeeLoggedin1.php"><span><i class="fa fa-home fa-2x"></i></span>  Home</a>
					</li>
					<li class="dropdown">
						<a  class="dropdown-toggle list" data-toggle="dropdown" href="#">Edit Data<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="editByemployee.php" id="adddept">Edit Information</a>
							</li>
							<li>
								<a href="changePwd.php" id="editdept">Change Password</a>
							</li>
						</ul>
					</li>

					<li class="dropdown">
						<a  class="dropdown-toggle list" data-toggle="dropdown" href="#">Leave Data<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="datetimepicker.php" id="adddept">Leave Request</a>
							</li>
							<li>
								<a href="myLeaves.php" id="editdept">My Leaves</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
	    
	   </nav>
	</div>	
	</div>	
	</div>		
			<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("sidebar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
