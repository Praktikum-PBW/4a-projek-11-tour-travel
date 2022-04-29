<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Data User</h4>
            <a href="index.php?page=dashboard_create" class="btn btn-primary">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Nomor Telepon</th>
                        <th>Status</th>
                        <th>Akun dibuat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_user");
                $no = 1;
                foreach ($query as $data){
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['username']?></td>
                        <td><?= $data['nama_cust']?></td>
                        <td><?= $data['alamat']?></td>
                        <td><?= $data['no_telp']?></td>
                        <td><?= $data['status']?></td>
                        <td><?= $data['dibuat']?></td>
                        <td>
                            <div class="btn-group">
                                <a href="index.php?page=user_details&id_cust=<?= $data['id_cust']?>"
                                    class="btn btn-sm btn-warning">Details</a>
                                <a href="index.php?page=user_delete&id_cust=<?= $data['id_cust']?>"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah anda yakin?')">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>