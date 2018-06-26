<!-- NAVBAR2 -->
<div class="container mt-5">
		<div class="row">
			<nav class="navbar navbar-expand-lg d-lg-none d-md-block w-100">
				<a href="home.php">
			 	   <img class="nav-logo" src="/phama/assets/images/Logo-white-bg.png">
			 	</a>
			  	<button class="navbar-toggler btn-nav2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    	<i class="fa fa-bars" aria-hidden="true"></i>
			  	</button>	    
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav text-center w-100">
			    	  <?php $link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
			      <li class="nav-item <?php if($link == 'localhost/phama/course.php') echo 'active'; ?>">
			        <a class="nav-link" href="course.php">คอร์สเรียน</a>
			      </li>
			      <li class="nav-item <?php if($link == 'localhost/phama/.php') echo 'active'; ?>">
			        <a class="nav-link active" href="#">บทความ</a>
			      </li> 
			      <li class="nav-item">
					    <div class="row">
					      	<div class="col-xl-6 col-lg-6 col-12">
						        <div class="dropdown">
									<button class="btn dropbtn">
								   	   <div style="display: inline;">Mr.Pharma<i class="fa fa-caret-down ml-2" aria-hidden="true" style="display: inline;"></i>
								   	</button>
									<div class="dropdown-content">
									    <a href="edit.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>แก้ไขข้อมูล</a>
									    <a href="course.php"><i class="fa fa-book mr-2" aria-hidden="true"></i>คอร์สของฉัน</a>
									    <a href="home.php"><i class="fa fa-sign-out mr-2" aria-hidden="true"></i>ออกจากระบบ</a>
									</div>
								</div>
						    </div>
						</div>
			      </li>
			    </ul>
			  </div>
			</nav>	    
			<nav class="navbar navbar-expand-lg d-lg-block d-none w-100">
			  <div class="row justify-content-center">
			  	  <a href="home.php">
			 		 <img class="nav-logo" src="/phama/assets/images/Logo-white-bg.png">
			 	  </a>
			  </div>
				  	<button class="navbar-toggler navbar-light btn-nav2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    		<span class="navbar-toggler-icon"></span>
				  	</button>	    
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav justify-content-center w-100" >
			    	 <?php $link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
			      <li class="nav-item <?php if($link == 'localhost/phama/course.php') echo 'active'; ?>">
			        <a class="nav-link" href="course.php">คอร์สเรียน</a>
			      </li> 
			      <li class="nav-item <?php if($link == 'localhost/phama/.php') echo 'active'; ?>">
			        <a class="nav-link " href="#">บทความ</a>
			      </li>
			      <li class="nav-item">
					    <div class="row">
					      	<div class="col-xl-6 col-lg-6 col-12">
						       <div class="dropdown">
								   <button class="btn dropbtn">
								   	   <div style="display: inline;">Mr.Pharma<i class="fa fa-caret-down ml-2" aria-hidden="true" style="display: inline;"></i>
								   	</button>
									<div class="dropdown-content">
									    <a href="edit.php"><i class="fa fa-user mr-2" aria-hidden="true"></i>แก้ไขข้อมูล</a>
									    <a href="course.php"><i class="fa fa-book mr-2" aria-hidden="true"></i>คอร์สของฉัน</a>
									    <a href="home.php"><i class="fa fa-sign-out mr-2" aria-hidden="true"></i>ออกจากระบบ</a>
									</div>
								</div>
						    </div>
						</div>
			      </li>
			    </ul>
			  </div>
			</nav>	    
		</div>
</div>


<!-- END NAVBAR2 -->