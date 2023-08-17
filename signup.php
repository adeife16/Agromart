<?php 
	$title = "Signup";
	require_once 'header.php';
?>

	<main class="no-main">
		<section class="section--registration">
			<div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="registration__box">
                            <h3 class="registration_title">Account Information</h3>
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
                                        <div id='img_container'><img id="preview" src="assets/images/user.png" alt="your image" width="100" height="100" title=''/></div> 
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
		</section>
	</main>
<?php 
	require_once 'footer.php';
?>