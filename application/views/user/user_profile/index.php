<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7 text-center">
            <?= $this->session->flashdata('message'); ?>
        </div>
        <div class="col-md-7">
            <div class="card p-8 py-4 px-5 ">
                <div class="text-center"> <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" width="100" class="rounded-circle m-0"> </div>
                <div class="text-center mt-3"> <button class=" btn btn-secondary p-1 px-4 rounded text-white"  style="border: none;" >Active</button>
                    <h5 class="mt-2 mb-0"><?= $user['name']; ?></h5> <span><?= $user['nim']; ?></span>
                    <div class="px-4 mt-1">
                        <!-- <small class="d-flex align-items-center" ><b>NIM</b>: </small> <small class="d-flex align-items-center" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?= $user['jurusan']; ?>   </small>
                        <small class="d-flex align-items-center"><b>Jurusan</b>: </small>
                        <small class="d-flex align-items-center"><b>Phone Number</b>: <?= $user['nohp']; ?>   </small>
                        <small class="d-flex align-items-center"><b>TT Lahir</b>: <?= $user['tanggal_lahir']; ?>   </small>
                        <small class="d-flex align-items-center"><b>Instagram</b>: <?= $user['instagram']; ?>   </small>
                        <small class="d-flex align-items-center"><b>Twitter</b>: <?= $user['twitter']; ?>   </small>
                        <p class="justify-content-start fonts"></p> -->


                        <table class="table table-borderless">
                            <tbody>
                            <tr>
                                <th  scope="row"><small class=" " ><b>Email</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </small> </th>
                                <td><small class="d-flex " ><?= $user['email']; ?>   </small></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th scope="row"><small class=" "><b>Jurusan</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </small></th>
                                <td><small class="d-flex " ><?= $user['jurusan']; ?>   </small></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th scope="row"><small class=""><b>Phone Number</b>&nbsp;&nbsp;: </small></th>
                                <td><small class="d-flex " ><?= $user['nohp']; ?>   </small></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th scope="row"><small class=""><b>TT Lahir</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </small></th>
                                <td><small class="d-flex " ><?= $user['tanggal_lahir']; ?>   </small></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th scope="row"><small class=""><b>Instagram</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </small></th>
                                <td><small class="d-flex " ><a href="https://www.instagram.com/<?= $user['instagram']; ?>" style=" color: black;" target="_blank"><?= $user['instagram']; ?></a></small></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th scope="row"><small class=""><b>Twtitter</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </small></th>
                                <td><small class="d-flex " ><a href="https://twitter.com/<?= $user['twitter']; ?>" style=" color: black;" target="_blank"><?= $user['twitter']; ?></a></small></td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <th scope="row"><small class=" " ><b>Address</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </small> </th>
                                <td><small class="d-flex " ><?= $user['alamat']; ?>   </small></td>
                            </tr>
                            </tbody>
                        </table>
                    <ul class="social-list">
                        <li><a href="https://twitter.com/<?= $user['twitter']; ?>" style=" color: #6c757d;" target="_blank"><i class="fa fa-twitter">  </i></a></li>
                        <li><a href="https://www.instagram.com/<?= $user['instagram']; ?>" style=" color: #6c757d;" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://wa.me/628<?= $user['nohp']; ?>" style=" color: #6c757d;" target="_blank"><i class="fa fa-phone"></i></a></li>
                    </ul>
                    <div class="buttons"> 
                        <a href="<?= base_url(); ?>user"><button class="btn btn-outline px-4 back">Back</button></a>   
                        <a href="<?= base_url(); ?>user/edit" ><button class="btn btn-primary px-4 ms-3 edit" >Edit</button></a>  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>