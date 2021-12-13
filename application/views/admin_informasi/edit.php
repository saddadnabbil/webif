<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h3 class="h3 mb-4 text-gray-800 text-center" ><?= $judul; ?></h3>
    
    <div class="row justify-content-center">
            <div class="col-lg-8">

            <div class="card" style="background-color: white;">
                    <div class="card-header" style="background-color: #F6B459; color: white;">
                    Edit Information
                </div>
                <div class="card-body">
                    <?= form_open_multipart(); ?>
                    
                <div class="form-group row my-3">
                    <input type="hidden" name="id" value="<?= $informasi['id']; ?>">
                    <label for="matkul" class="col-sm-2 col-form-label">Subject</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="matkul" name="matkul" value="<?= $informasi['matkul']; ?>">
                    </div>
                </div>
                <div class="form-group row my-3">
                    <input type="hidden" name="id" value="<?= $informasi['id']; ?>">
                    <label for="judul" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" value="<?= $informasi['judul']; ?>">
                        <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <input type="hidden" name="id" value="<?= $informasi['id']; ?>">
                    <label for="deadline" class="col-sm-2 col-form-label">Deadline</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="deadline" name="deadline" value="<?= $informasi['deadline']; ?>">
                        <?= form_error('deadline', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <input type="hidden" name="id" value="<?= $informasi['id']; ?>">
                    <label for="deskripsi" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" class="form-control mb-2" id="deskripsi" name="deskripsi" rows="3" ><?= htmlspecialchars($informasi['deskripsi']); ?></textarea>
                        <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>
                <div class="form-group row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" name="submit" class="btn btn-primary float-end" style=" background-color: #F6B459; color: white; text-decoration: none; border-color: #F6B459; ">Save</button>
                        <button type="submit" name="edit" class="btn btn-warning float-end mx-2" style=" background-color: #F6B459; color: white;" ><a href="<?= base_url();?>admin_informasi" class="float-end mx-2" style=" background-color: #F6B459; color: white; text-decoration: none;">Back</a></button>
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