<!-- NAVBAR -->
<div class="container mt-5">
		<div class="row">
			<nav class="navbar navbar-expand-lg d-lg-none d-md-block w-100">
				<a href="home.php">
			 	   <img class="nav-logo" src="assets/images/Logo-white-bg.png"  alt="Logo">
			 	</a>
			  	<button class="btn navbar-toggler btn-nav2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    	<i class="fa fa-bars" aria-hidden="true"></i>
			  	</button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav text-center w-100">
			    	  <?php $link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
			      <li class="nav-item <?php if($link == 'workbythai-commerce.com/pharma/home.php') echo 'active'; ?>">
			        <a class="nav-link" href="home.php">คอร์สเรียน</a>
			      </li>
			      <li class="nav-item <?php if($link == 'workbythai-commerce.com/pharma/article2.php') echo 'active'; ?>">
			        <a class="nav-link active" href="article2.php">บทความ</a>
			      </li>
			      <li class="nav-item">
					    <div class="row">
					      	<div class="col-xl-6 col-lg-6 col-12">
						        <button type="button" class="btn btn-nav" data-toggle="modal" data-target="#exampleModal">ลงทะเบียน</button>
						    </div>
						    <div class="col-xl-6 col-lg-6 col-12">
						        <button type="button" class="btn btn-nav" data-toggle="modal" data-target="#exampleModal" >เข้าสู่ระบบ</button>
						    </div>
						</div>
			      </li>
			    </ul>
			  </div>
			</nav>
			<nav class="navbar navbar-expand-lg d-lg-block d-none w-100">
			  <div class="row justify-content-center">
			  	  <a href="home.php">
			 		 <img class="nav-logo" src="assets/images/Logo-white-bg.png">
			 	  </a>
			  </div>
				  	<button class="navbar-toggler navbar-light btn-nav2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				    		<span class="navbar-toggler-icon"></span>
				  	</button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav justify-content-center w-100" >
			    	 <?php $link = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];?>
			      <li class="nav-item <?php if($link == 'workbythai-commerce.com/pharma/home.php') echo 'active'; ?>">
			        <a class="nav-link" href="home.php">คอร์สเรียน</a>
			      </li>
			      <li class="nav-item <?php if($link == 'workbythai-commerce.com/pharma/article2.php') echo 'active'; ?>">
			        <a class="nav-link " href="article2.php">บทความ</a>
			      </li>
			      <li class="nav-item">
					    <div class="row">
					      	<div class="col-xl-6 col-lg-6 col-12">
						        <button type="button" class="btn btn-nav" data-toggle="modal" data-target="#exampleModal">ลงทะเบียน</button>
						    </div>
						    <div class="col-xl-6 col-lg-6 col-12">
						        <button type="button" class="btn btn-nav" data-toggle="modal" data-target="#exampleModal" >เข้าสู่ระบบ</button>
						    </div>
						</div>
			      </li>
			    </ul>
			  </div>
			</nav>
		</div>

<div class="modal fadeInDown animated" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
				      <div class="modal-header">
					      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
	                          <li class="nav-item">
	                            <a class="modal-nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">ลงเบียน</a>
	                          </li>
	                          <li class="nav-item">
	                            <a class="modal-nav-link " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">เข้าสู่ระบบ</a>
	                          </li>
	                      </ul>
				      </div>
				      <div class="modal-body">
					      <div class="tab-content p-4" id="pills-tabContent">
				              <div class="tab-pane fade show active fadeIn animated" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					              	<div class="row">
					              		<div class="col-12">
					              			<input type="text" class = "modal-form" name="" placeholder="ชื่อ-นามสกุล">
					              		</div>
					              		<div class="col-12 mt-2">
					              			<input type="text" class = "modal-form" name="" placeholder="อีเมล">
					              		</div>
					              		<div class="col-xl-6 col-md-6 col-12 mt-2">
					              			 <input type="password" class = "modal-form" name="" placeholder="รหัสผ่าน">
					              		</div>
					              		<div class="col-xl-6 col-md-6 co-12 mt-2">
					              			 <input type="password" class = "modal-form" name="" placeholder="ยืนยันรหัสผ่าน">
					              		</div>
					              		<div class="col-12 mt-2">
					              			<button type="button" class="btn btn-modal-1">ลงทะเบียน</button>
					              			<button type="button" class="btn btn-modal-2">ลงเบียนด้วย Facebook</button>
					                    </div>
					                </div>
					          </div>
				              <div class="tab-pane fadeIn animated" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
				              	        <div class="col-12">
					              			<input type="text" class = "modal-form" name="" placeholder="อีเมล">
					              		</div>
					              		<div class="col-12 mt-2">
					              			<input type="text" class = "modal-form" name="" placeholder="รหัสผ่าน">
					              		</div>
					              		<div class="col-12 mt-2">
					              		    <a href="course.php">
					              			   <button type="button" class="btn btn-modal-1">เข้าสู่ระบบ</button>
					              			</a>
					              			<button type="button" class="btn btn-modal-2">เข้าสู่ระบบด้วย Facebook</button>
					                    </div>
				              </div>

				      </div>
			    </div>
			  </div>
			</div>
	</div>
</div>


<!-- END NAVBAR -->
