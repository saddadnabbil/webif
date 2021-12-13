<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <p class="card-text mb-2 ">Email: <?= $mahasiswa['email']; ?></p>
                    <p class="card-text mb-2 ">NIM: <?= $mahasiswa['nim']; ?></p>
                    <p class="card-text mt-2">Jurusan: <?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url();?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>