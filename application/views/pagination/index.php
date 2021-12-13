
<div class="container">
    <div class="row">
        <div class="col-md-10">
            
            <h3>Daftar Data Mahasiswa</h3>

            
            <table class="table table-default">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $i = 1; 
                    foreach( $mahasiswa as $mhs ) : ?>
                    <tr>
                    <th><?= $i++; ?></th>
                    <td><?= $mhs['nama']; ?></td>
                    <td><?= $mhs['nim']; ?></td>
                    <td>
                        <a href="" class="badge badge-primary">detail</a>
                        <a href="" class="badge badge-warning">edit</a>
                        <a href="" class="badge badge-danger">hapus</a>
        
                    </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>