	<img class="wave" src="<?= base_url('assets/'); ?>img/login/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?= base_url('assets/'); ?>img/login/computer.svg">
		</div>
		<div class="login-content">
			<form class="user" action="" method="post" action="<?= base_url('auth'); ?>">
				<img src="<?= base_url('assets/'); ?>img/login/avatar2.svg">
				<h3 class="title">Login</h3>

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
				<?= form_error('email', '<small class="text-danger text-right">', '</small>'); ?>

				<div class="input-div pass">
					<div class="i"> 
						<i class="fas fa-lock"></i>
					</div>
					<div class="div form-group">
           		    	<h5>Password</h5> 
						   <input type="password" class="input" id="password" name="password" >
						</div>
					</div>
					<?= form_error('password', '<small class="text-danger text-right my-1">', '</small>'); ?>
					<button type="submit" class="btn">Login</button>
            	<a href="<?= base_url(''); ?>auth/forgotpassword" class="small text-center mb-1">Forgot Password?</a>
				<a class="small text-center"  href="<?= base_url('auth/registration'); ?>">Create an Account</a>
            </form>
        </div>
    </div>
    
