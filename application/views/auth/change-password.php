<img class="wave" src="<?= base_url('assets/'); ?>img/login/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?= base_url('assets/'); ?>img/login/computer.svg">
		</div>
		<div class="login-content">
			<form class="user" action="" method="post" action="<?= base_url('auth/changepassword'); ?>">
				<img src="<?= base_url('assets/'); ?>img/login/avatar2.svg">
				<h3 class="title">Forgot your password?</h3>

				<?= $this->session->flashdata('flash'); ?>


				<div class="input-div pass">
					<div class="i"> 
                        <i class="fas fa-lock"></i>
					</div>
					<div class="div form-group">
           		   		<h5>Password</h5>
           		   		<input type="password" class="input" id="password1" name="password1" >
					</div>
				</div>
                <?= form_error('password', '<small class="text-danger text-right my-1">', '</small>'); ?>

                <div class="input-div pass">
					<div class="i"> 
						<i class="fas fa-lock"></i>
					</div>
					<div class="div form-group">
           		    	<h5>Confirm Password</h5> 
						   <input type="password" class="input" id="password2" name="password2" >
					</div>
				</div>
					<button type="submit" class="btn">Change Password</button>
				<a class="small text-center"  href="<?= base_url('auth'); ?>">Back to login?</a>
            </form>
        </div>
    </div>
    
