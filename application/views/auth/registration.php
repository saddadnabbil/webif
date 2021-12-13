	<img class="wave" src="<?= base_url('assets/'); ?>img/login/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?= base_url('assets/'); ?>img/login/computer.svg">
		</div>
		<div class="login-content ">
			<form class="user" action="" method="post" action="<?= base_url('auth'); ?>">
				<img src="<?= base_url('assets/'); ?>img/login/avatar2.svg">
				<h3 class="title">Registration</h3>

				<?= $this->session->flashdata('flash'); ?>

				<div class="input-div pass">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div form-group">
           		   		<h5>Nama</h5>
           		   		<input type="text" class="input" id="name" name="name" >
					</div>
				</div>
				<?= form_error('name', '<small class="text-danger">', '</small>'); ?>

				<div class="input-div pass">
           		   <div class="i">
           		   		<i class="fas fa-university"></i>
           		   </div>
           		   <div class="div form-group">
           		   		<h5>NIM</h5>
           		   		<input type="text" class="input" id="nim" name="nim" >
					</div>
				</div>
				<?= form_error('nim', '<small class="text-danger">', '</small>'); ?>

				
           		<div class="input-div pass">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div form-group">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input" id="email" name="email"  >
					</div>
					
				</div>
				<?= form_error('email', '<small class="text-danger text-right">', '</small>'); ?>

				<div class="input-div pass">
           		   <div class="i">
           		   		<i class="fas fa-university"></i>
           		   </div>
           		   <div class="div form-group">
           		   		<h5>Password</h5>
           		   		<input type="password" class="input" id="password1" name="password1" >
					</div>
				</div>
				<?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
				
				
				<div class="input-div pass">
					<div class="i"> 
						<i class="fas fa-lock"></i>
					</div>
					<div class="div form-group">
           		    	<h5>Confirm Password</h5> 
						   <input type="password" class="input" id="password2" name="password2" >
					</div>
				</div>
					
					<button type="submit" class="btn">Regist</button>
            	    <a href="<?= base_url('auth/forgotpassword'); ?>"class="small text-center mb-1">Forgot Password?</a>
                    <a class="small text-center"  href="<?= base_url('auth'); ?>">Already have an account? Login!</a>
            </form>
        </div>
    </div>
    
