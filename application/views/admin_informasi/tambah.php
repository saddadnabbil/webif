<div class="container">

        <div class="row justify-content-md-center">
            <div class="col-md-6">

                <div class="card" style="background-color: white;">
                    <div class="card-header" style="background-color: #F6B459; color: white;">
                        Form Add Information
                    </div>
                    <div class="card-body ">
                        <form action="" method="post">
                            <div class="form-group m-3">
                                <input type="text" class="form-control mb-2" id="matkul" name="matkul" placeholder="Subject">
                                <small class="form-text text-danger"><?= form_error('matkul'); ?></small>
                            </div>
                            
                            <div class="form-group m-3">
                                <input type="text" class="form-control mb-2" id="judul" name="judul" placeholder="Title">
                                <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                            </div>
                            <div class="form-group m-3">
                                <input type="text" class="form-control mb-2" id="deadline" name="deadline" placeholder="Deadline">
                                <small class="form-text text-danger"><?= form_error('deadline'); ?></small>
                            </div>
                            <div class="form-group m-3">
                                <textarea type="text" class="form-control" class="form-control mb-2" id="deskripsi" name="deskripsi" rows="3" placeholder="Description"></textarea>
                                <small class="form-text text-danger"><?= form_error('deskripsi'); ?></small>
                            </div>
                            <div class="form-group m-3">
                                <button type="submit" name="tambah" class="btn btn-warning float-end" style=" background-color: #F6B459; color: white;" >Add Information</button>
                                <button type="submit" name="edit" class="btn btn-warning float-end mx-2" style=" background-color: #F6B459; color: white;" ><a href="<?= base_url();?>admin_informasi" class="float-end mx-2" style=" background-color: #F6B459; color: white; text-decoration: none;">Back</a></button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

</div>