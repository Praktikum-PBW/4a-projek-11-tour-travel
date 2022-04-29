<div class="container mt-5 mb-5" id="card">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            $query = mysqli_query($koneksi, "SELECT *FROM tb_items");
            foreach($query as $data){
          ?>
        <div class="col">
            <div class="card h-100">
                <input type="hidden" name="id_cust" value="<?=$data['no_items']?>">
                <div class="image mt-2 ms-2 me-2">
                    <img style="height: 245px;" src="../assets/images/<?=$data['thumbnail']?>" class="card-img-top"
                        alt="<?=$data['thumbnail']?>" title="<?=$data['thumbnail']?>">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $data['tujuan_wisata'] ?></h5>
                    <p class="card-text">
                        <label for="jmlh_hari" class="form-label">Jumlah Hari</label>
                        <input type="jmlh_hari" name="jmlh_hari" id="jmlh_hari" class="form-control" disabled
                            value="<?= $data['jmlh_hari']?>">
                    </p>
                    <p class="card-text">
                        <label for="jam_berangkat" class="form-label">Jam Berangkat</label>
                        <input type="jam_berangkat" name="jam_berangkat" id="jam_berangkat" class="form-control"
                            disabled value="<?= $data['jam_berangkat']?>">
                    </p>
                    <p class="card-text">
                        <label for="jam_tiba" class="form-label">Jam Tiba</label>
                        <input type="jam_tiba" name="jam_tiba" id="jam_tiba" class="form-control" disabled
                            value="<?= $data['jam_tiba']?>">
                    </p>
                    <p class="card-text">
                        <label for="transportasi" class="form-label">Transportasi
                            Berangkat</label>
                        <input type="transportasi" name="transportasi" id="transportasi" class="form-control" disabled
                            value="<?= $data['transportasi']?>">
                    </p>
                    <a href="indexs.php?page=details&no_items=<?= $data['no_items'] ?>"
                        class="btn btn-primary">Details</a>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
</div>