<img class="wave" src="<?= base_url('assets/'); ?>img/login/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?= base_url('assets/'); ?>img/login/computer.svg">
		</div>
		<div class="login-content">
			<form class="user" action="" method="post" action="<?= base_url('auth/forgotpassword'); ?>">
				<img src="<?= base_url('assets/'); ?>img/login/avatar2.svg">
				<h3 class="title">Forgot your password?</h3>

				<?= $this->session->flashdata('flash'); ?>

				<div class="input-div pass">
					<div class="i"> 
                        <i class="fas fa-user"></i>
					</div>
					<div class="div form-group">
           		   		<h5>Email</h5>
           		   		<input type="text" class="input" id="email" name="email"  >
					</div>
				</div>
                    <?= form_error('password', '<small class="text-danger text-right my-1">', '</small>'); ?>
					<button type="submit" class="btn">Reset Password</button>
				<a class="small text-center"  href="<?= base_url('auth'); ?>">Back to login?</a>
            </form>
        </div>
    </div>
    
