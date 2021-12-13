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

                


                <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">No</th>
									<th class="cell100 column2">Name</th>
									<th class="cell100 column3">NIM</th>
									<th class="cell100 column4">Action</th>
									<!-- <th class="cell100 column5">Spots</th> -->
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
                                
								<tr class="row100 body">
									<td class="cell100 column1">Like a butterfly</td>
									<td class="cell100 column2">Boxing</td>
									<td class="cell100 column3">9:00 AM - 11:00 AM</td>
									<td class="cell100 column4">Aaron Chapman</td>
									<td class="cell100 column5">10</td>
								</tr>
                            </body>
						</table>
					</div>
                    





                <!-- <table class="table rounded">
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
                            <a href="<?= base_url(); ?>admin_informasi/hapus/<?= $inf['id']; ?>" class="badge bg-danger float-start  my-1 " style="text-decoration: none;" onclick="return confirm('Apakah Anda yakin ingin menghainf data mahasiswa <?= $inf['matkul']; ?>?');">hapus</a>
                        </td>
                        </tr>
                        <?php $i++; ?>   
                        <?php endforeach; ?>     
                    </tbody>
                    </table> -->
                
                <?= $this->pagination->create_links(); ?>
            </div>
            
        </div>
                      
</div>