<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7 text-center">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="col-md-7">
            <div class="card p-3 py-4">
                <div class="text-center"> <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="100" class="rounded-circle m-0"> </div>
                <div class="text-center mt-3"> <button class=" btn btn-secondary p-1 px-4 rounded text-white"  style="border: none;" >Active</button>
                    <h5 class="mt-2 mb-0"><?= $user['name']; ?></h5> <span><?= $user['email']; ?></span>
                    <div class="px-4 mt-1">
                        <small class="d-flex align-items-start" ><b>NIM</b>&emsp;&emsp;&emsp;: <?= $user['nim']; ?>   </small>
                        <small class="d-flex align-items-start"><b>Address</b>&emsp;: <?= $user['alamat']; ?>   </small>
                        <small class="d-flex align-items-start"><b>TT Lahir</b>&emsp;: <?= $user['tanggal_lahir']; ?>   </small>
                        <p class="justify-content-start fonts">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                    </div>
                    <ul class="social-list">
                        <li><i class="fa fa-facebook"></i></li>
                        <li><i class="fa fa-dribbble"></i></li>
                        <li><i class="fa fa-instagram"></i></li>
                        <li><i class="fa fa-linkedin"></i></li>
                        <li><i class="fa fa-google"></i></li>
                    </ul>
                    <div class="buttons"> 
                        <a href="<?= base_url(); ?>admin"><button class="btn btn-outline px-4 back">Kembali</button></a>   
                        <a href="<?= base_url(); ?>admin/edit" ><button class="btn btn-primary px-4 ms-3 edit" >Edit</button></a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>