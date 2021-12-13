<!-- <div class="container">

        <?php if( $this->session->flashdata('flash') ) : ?>
            <div class="row justify-content-md-center">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>  
            </div>
        <?php endif; ?>
        
        
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <div class="d-flex justify-content-center">
                    <h3>Informasi Tugas</h3>
                </div>
                <div class="col-mb-3">
                    <a href="<?= base_url() ?>mahasiswa/tambah" class='btn btn-primary'>Tambah Informasi Tugas</a>
                </div>
                
                

                <div class="row justify-content-md-center">
                    <div class="col-mb-3">
                        <form action="" method="post">
                            <div class="input-group">
                                <div class="input-group mb-2 mt-2">
                                <input type="text" class="form-control" placeholder="Cari informasi tugas (matkul/assignment/tanggal)" name="keyword">
                                <button class="btn btn-primary" type="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                        <?php if( empty($informasi) ) : ?>
                        <div class="alert alert-danger text-center" role="alert">
                            Hasil pencarian tidak ditemukan!
                        </div>
                        <?php endif; ?>     -->
                    </div>
                </div>    

                
    <a href="http://">Tambah Informasi</a>
    <header>Informasi Tugas</header>
    <?php $i = 1; ?>
    <?php foreach( $informasi as $inf ) : ?>
    <div class="container">
        <div class="card">
            <div class="box">
                <div class="content">
                    <img src="assets/img/informasi/bg.png">
                    <h3><?= $inf['judul'] ?></h3>
                    <p><?= $inf['matkul'] ?></p>
                    <p> <small>Deadline: <?= $inf['deadline'] ?></small></p>
                    <a href="<?= base_url(); ?>admin_informasi/detail/<?= $inf['id']; ?> ">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <?php $i++; ?>   
    <?php endforeach; ?> 
    

    
</body>
</html>
                <!-- <?= $this->pagination->create_links(); ?>
            </div>
            
        </div>
                      
</div> -->