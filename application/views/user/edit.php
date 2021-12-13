<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center" ><?= $judul; ?></h1>
    
    <div class="row justify-content-center">
            <div class="col-lg-8">

            <div class="card outline-warning" style="background-color: white;">
                    <div class="card-header" style="background-color: #F6B459; color: white;">
                    Edit Profile
                </div>
                <div class="card-body">
                <?= form_open_multipart('user/edit'); ?>
                <div class="form-group row my-3">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label for="name" class="col-sm-2 col-form-label">Full name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim" name="nim" value="<?= $user['nim']; ?>">
                        <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label for="jurusan" class="col-sm-2 col-form-label">Major</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Informatika" value="<?= $user['jurusan']; ?>" >
                        <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label for="nohp" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="628xxxxxxxxx" value="<?= $user['nohp']; ?>" >
                        <?= form_error('nohp', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Damkar, Cilegon" value="<?= $user['alamat']; ?>" >
                        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label for="tanggal_lahir" class="col-sm-2 col-form-label">TT Lahir</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="17 augst 2003" value="<?= $user['tanggal_lahir']; ?>" >
                        <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label for="instagram" class="col-sm-2 col-form-label">Instagram</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="instagram" name="instagram" placeholder="amorazl_" value="<?= $user['instagram']; ?>" >
                        <?= form_error('instagram', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <label for="twitter" class="col-sm-2 col-form-label">Twitter</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="twitter" name="twitter" placeholder="amorazl_" value="<?= $user['twitter']; ?>" >
                        <?= form_error('twitter', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group row my-3">
                    <div class="col-sm-2">Picture</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="image" name="image">
                                    <label class="input-group-text" for="image" style="background-color: #F6B459; color: white;">Upload</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button class="btn btn-primary" style=" background-color: #F6B459; color: white; border: 0px;"><a href="<?= base_url();?>user_profile" class="float-end mx-2" style=" background-color: #F6B459; color: white; text-decoration: none;">Back</a></button>
                        <button type="submit" name="submit" class="btn btn-primary" style=" background-color: #F6B459; color: white; text-decoration: none; border-color: #F6B459; ">Save</button>
                    </div>
                </div>
            </form>

            </div>
        </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 