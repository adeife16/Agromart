<?php 
	$title = "Login";
	require_once 'header.php';
?>
<style type="text/css">
	input{
		font-size: 1.5rem !important;
	}
</style>
	<main class="no-main">
		<section class="section--login">
			<div class="container">
				<div class="row justify-content-center">
                    <div class="col-md-4 col-lg-4">
                        <div class="login__box">
                            <div class="login__header">
                                <h3 class="login__login">LOGIN</h3>
                            </div>
                            <div class="login__content">
                                <div class="login__label">Login to your account.</div>
                                <form class="form" id="login-form" method="post" action="">
	                                <div class="form-group">
	                                    <input class="form-control" type="email" id="email" name="email" placeholder="Email Address">
	                                </div>
	                                <div class="form-group group-password">
	                                    <input class="form-control" type="password" name="password" id="password" placeholder="Password">
	                                </div>
                                </form>	
                                <button class="btn btn-success btn-lg" id="login-btn" type="button">Login</button>
                                <div class="form-group-append text-right">
                                    <a href="" class="text-orange">Forgot Password?</a>
                                </div>
                                <div class="form-group-append text-left">
                                    Don't have an account? <a href="<?php echo $web_link. "signup" ?>" class="text-orange">Sign up</a>
                                </div>
                        </div>
                    </div>
                </div>
			</div>
		</section>
	</main>
<?php 
	require_once 'footer.php';
?>