<div class="container">

        <div class="row justify-content-md-center">
            <div class="col-md-6">

                <div class="card">
                    <div class="card-header">
                        Form Tambah Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group m-3">
                                <input type="text" class="form-control mb-2" id="nama" name="nama" placeholder="Nama">
                                <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                            </div>
                            
                            <div class="form-group m-3">
                                <input type="text" class="form-control mb-2" id="nim" name="nim" placeholder="NIM">
                                <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                            </div>
                            <div class="form-group m-3">
                                <input type="text" class="form-control mb-2" id="jurusan" name="jurusan" placeholder="Jurusan">
                                <small class="form-text text-danger"><?= form_error('jurusan'); ?></small>
                            </div>
                            <div class="form-group m-3">
                                <input type="text" class="form-control mb-2" id="email" name="email" placeholder="Email">
                                <small class="form-text text-danger"><?= form_error('email'); ?></small>
                            </div>
                            <div class="form-group m-3">
                                <button type="submit" name="tambah" class="btn btn-primary float-end" >Tambah Data</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

</div>