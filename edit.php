<!doctype html>
<html lang="en">
  <head>
    <!-- START HEADER -->
    <?php include_once('inc/header.php'); ?>
    <!-- END HEADER -->
  </head>

  <body>
  <!-- START NAVBAR -->
    <?php include_once('inc/navbar2.php'); ?>
    <!-- END NAVBAR -->
      <div class="wrapper">
        <!-- CONTENT -->
            <div class="container">
                <div class="row edit-p-t edit-p-b fadeIn animated">
                  <div class="col-xl-2 col-lg-2 col-md-1"></div>
                  <div class="col-xl-8 col-lg-8 col-md-10">
                      <div class="card edit-border edit-padding">
                          <div class="card-body">
                              <div class="edit-font1 edit-border-bottom">แก้ไขข้อมูล</div>
                              <div class="row mt-3">
                                  <div class="col-xl-6 col-md-6 col-lg-6 col-12 mt-3">
                                      <div class="edit-font2">ชื่อ</div>
                                      <input type="text" class = "edit-form" name="" placeholder="ชื่อ">
                                  </div>
                                  <div class="col-xl-6 col-md-6 col-lg-6 col-12 mt-3">
                                      <div class="edit-font2">นามสุกล</div>
                                      <input type="text" class = "edit-form" name="" placeholder="นามสุกล">
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-xl-6 col-md-6 col-lg-6 col-12 mt-3">
                                      <div class="edit-font2">อีเมล</div>
                                      <input type="email" class = "edit-form" name="" placeholder="อีเมล">
                                  </div>
                                  <div class="col-xl-6 col-md-6 col-lg-6 col-12 mt-3">
                                      <div class="edit-font2">เบอร์โทรศัพท์</div>
                                      <input type="text" class = "edit-form" name="" placeholder="เบอร์โทรศัพท์">
                                  </div>
                              </div>
                              <div class="row pt-5">
                                 <div class="col-xl-12 text-lg-right text-center">
                                    <button type="button" class="btn-edit">บันทึก</button>
                                 </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-2 col-lg-2 col-md-1"></div>
                </div>
            </div>
        <!-- END CONTENT -->
      </div>

    <!-- START FOOTER -->
    <?php include_once('inc/footer.php'); ?>
    <!-- END FOOTER -->

    <!-- START FOOTER SCRIPT -->
    <?php include_once('inc/footer-script.php'); ?>
    <!-- END FOOOTER SCRIPT -->


  </body>
</html>
