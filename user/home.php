<section id="awal">
    <div class="container-fluid text-center" style="padding-top: 15%;">
        <h1 class="display-4"><strong>SELAMAT DATANG</strong></h1>
        <p class="lead">Ini adalah website penjualan paket wisata <i>tour and travel</i> terbesar dan terbaik di
            Indonesia</p>
        <hr class="my-4">
        <p>Memberikan harga yang terjangkau dan pelayanan yang sangat cepat</p>
        <a class="btn btn-primary btn-lg" href="#about" role="button">Learn more</a>
    </div>
</section>
<div class="container py-5">
    <div class="row text-center">
        <div class="col">
            <h2>Rekomendasi</h2>
        </div>
    </div>
</div>
<div class="container mb-5" id="card">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
            $query = mysqli_query($koneksi, "SELECT *FROM tb_items ORDER BY harga ASC LIMIT 3");
            foreach($query as $data){
          ?>
        <div class="col">
            <div class="card h-100">
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
<div id="about" class="container-fluid about pt-5 pb-5">
    <div class="container text-center py-5">
        <h2 class="display-2"><strong>About</strong></h2>
        <h5>Tentang Website Ini</h5>
    </div>
    <div class="container text-center">
        <div class="row pt-5">
            <div class="col-md-12">
                <p style="font-size:x-large;">T&T merupakan sebuah perusahaan yang bergerak di bidang <i>tour and
                        travel</i> penjualan paket
                    wisata yang selalu memberikan pelayanan yang terbaik, ramah dan profesional.

                    Sejak berdirinya hingga kini, kami terus berusaha berbenah diri melakukan
                    pengembangan-pengembangan sebagai salah satu bentuk komitmen kami.

                    Dengan semangat komitmen tinggi untuk meningkatkan pelayanan, kami telah mengembangkan sistem
                    yang telah terintegrasi langsung dengan sistem milik maskapai penerbangan indonesia.

                    Sistem ini diharapkan mampu memberikan informasi detail harga beserta jadwal keberangkatan rute
                    domestik dan rute internasional.

                    Selain pengembangan sistem, pengembangan sumber daya manusia pun menjadi hal penting bagi kami
                    untuk memaksimalkan pelayanan kepada konsumen dan mitra bisnis kami.</p>
            </div>
        </div>
    </div>
</div>