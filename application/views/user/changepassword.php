


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3 class="h3 mb-4 text-gray-800 text-center" ><?= $judul; ?></h3>
    
    <div class="row justify-content-center">
            <div class="col-lg-6">
            <div class="col-lg-20 text-center">
            <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="card" style="background-color: white;">
                    <div class="card-header" style="background-color: #F6B459; color: white;">
                    Change Password
                </div>
                <div class="card-body">
                <form action="<?= base_url('user/changepassword'); ?>" method="post">
                <div class="form-group row my-3">
                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                    <label for="current_password" class="col-sm-2 col-form-label">Current Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="current_password" name="current_password">
                        <?= form_error('current_password', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                    <label for="new_password1" class="col-sm-2 col-form-label">New Passowrd</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="new_password1" name="new_password1">
                        <?= form_error('new_password1l', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <input type="hidden" name="id" value="<?= $user['id']; ?>">
                    <label for="deadline" class="col-sm-2 col-form-label">Repeat Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="new_password2" name="new_password2">
                        <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary float-end" style=" background-color: #F6B459; color: white; text-decoration: none; border-color: #F6B459; ">Change</button>
                        <button type="submit" name="edit" class="btn btn-warning float-end mx-2" style=" background-color: #F6B459; color: white;" ><a href="<?= base_url();?>admin" class="float-end mx-2" style=" background-color: #F6B459; color: white; text-decoration: none;">Back</a></button>
                    </div>
                </div>


                </form>
                </div>
            </div>

            </div>
        </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 