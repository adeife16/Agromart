<?php 
	$title = "Create Moderator";
	require_once 'header.php';
?>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Moderator</h1>
      </div>

      <div class="row justify-content-center">
      	<div class="col-md-8">
          <div class="card shadow h-100 py-2">
            <div class="card-body">
                            <form class="form" method="post" id="signup-form" action="" enctype="multipart/form-data">
                                <div class="form-row justify-content-center">
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>First name: <span>*</span></label>
                                        <input class="form-control" type="text" name="fname" id="fname">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Last name<span>*</span></label>
                                        <input class="form-control" type="text" name="lname" id="lname">
                                        <div class="invalid-feedback">Please enter last name!</div>
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Email Address: <span>*</span></label>
                                        <input class="form-control" type="email" name="email" id="email">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Password: <span>*</span></label>
                                        <input class="form-control" type="password" name="password" id="password">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Retype password: <span>*</span></label>
                                        <input class="form-control" type="password" name="con_pass" id="con_pass">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Picture Upload: <span>*</span></label>
                                        <div class="alert"></div>
                                        <div id='img_container'><img id="preview" src="../assets/images/user.png" alt="your image" width="100" height="100" title=''/></div> 
                                        <div class="input-group"> 
                                            <div class="custom-file">
                                                <input type="file" id="inputGroupFile01" class="imgInp custom-file-input" name="picture" aria-describedby="inputGroupFileAddon01" accept="jpg, jpeg">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group--block mt-5 text-right">
                                        <button class="btn btn-success btn-lg" type="button" id="signup">Submit</button>
                                    </div>
                                </div>
                            </form>
              </div>
            </div>
          </div>
      	</div>
      </div>

<?php 
	require_once 'footer.php';
?>