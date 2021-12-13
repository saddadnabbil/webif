<div class="container">

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
                        <?php endif; ?>    
                    </div>
                </div>    

                
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Matkul</th>
                        <th scope="col">Assignment</th>
                        <th scope="col">Deadline</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach( $informasi as $inf ) : ?>
                        <tr>
                        <th scope="row"><?= $i;?></th>
                        <td><?= $inf['matkul'] ?></td>
                        <td><?= $inf['judul'] ?></td>
                        <td><?= $inf['deadline'] ?></td>
                        <td>
                            <a href="<?= base_url(); ?>admin_informasi/detail/<?= $inf['id']; ?>" class="badge bg-primary float-start my-1" style="text-decoration: none;">detail</a>
                            <a href="<?= base_url(); ?>admin_informasi/edit/<?= $inf['id']; ?>" class="badge bg-success float-start mx-2 my-1" style="text-decoration: none;">edit</a>
                            <a href="<?= base_url(); ?>admin_informasi/hapus/<?= $inf['id']; ?>" class="badge bg-danger float-start  my-1 " style="text-decoration: none;" onclick="return confirm('Are you sure you want to mahasiswa data <?= $inf['matkul']; ?>?');">hapus</a>
                        </td>
                        </tr>
                        <?php $i++; ?>   
                        <?php endforeach; ?>     
                    </tbody>
                    </table>
                
                <?= $this->pagination->create_links(); ?>
            </div>
            
        </div>
                      
</div>