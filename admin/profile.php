<?php
 
 $id_login = $_SESSION['id_login'];
 $data = mysqli_query($koneksi,"SELECT *  FROM tbl_login WHERE id_login = '$id_login'");

 $user = mysqli_fetch_array($data);
 ?>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profile</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
              <div class="card-header bg-primary text-light">
                Detail Profile
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-lg-1">Nama</th>
                            <th style="width: 2px;">:</th>
                            <th><?php echo $user['nama_login'] ?></th>
                        </tr>
                        <th class="col-lg-1">Email</th>
                        <th>:</th>
                        <th><th><?php echo $user['email'] ?></th></th>
                    </tr>
                    <th class="col-lg-1">Username</th>
                    <th>:</th>
                    <th><th><?php echo $user['username'] ?></th></th>
                </table>
            </table>
        </div>
    </div>    
</div>

</div>