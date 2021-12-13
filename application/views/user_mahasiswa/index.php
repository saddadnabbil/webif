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
                    <h3>Daftar Mahasasiswa Informatika</h3>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col-mb-3">
                    <form action="" method="post">
                          <div class="input-group-append"> 
                              <div class="input-group mb-3"> 
                                <input type="text" class="form-control input-text btn-outline-warning"  style="background-color: white;" placeholder="Search Mahasiswa (name/nim/email)" name="keyword">
                                <button class="btn btn-outline-warning" type="submit">
                                <i class="fa fa-search"></i>
                                </button>
                              </div>
                          </div>
                        </form>
                        <?php if( empty($user) ) : ?>
                        <div class="alert alert-danger text-center" role="alert">
                          No search result found!
                        </div>
                        <?php endif; ?>        
                    </div>
                </div>    

                <table class="table" style="border-collapse: unset">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">NIM</th>
                        <th scope="col" >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach( $user as $us ) : ?>
                        <tr>
                        <th scope="row"><?= $i;?></th>
                        <td><?= $us['name'] ?></td>
                        <td><?= $us['nim'] ?></td>
                        <td>
                            <a href="<?= base_url(); ?>user_mahasiswa/detail/<?= $us['id']; ?>" class="badge float-start my-1" style="text-decoration: none; background-color: #F6B459;">detail</a>
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