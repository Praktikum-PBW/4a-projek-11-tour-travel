<section class="py-lg-2">
    <div class="container p-5">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card cardLog border-0 shadow rounded-3 my-5">
                    <div class="login card-body p-4 p-sm-5">
                        <h1 class="card-title text-center mb-5 fs-5"><i class="bi bi-person-fill"></i><strong>Sign
                                Up</strong></h1>
                        <hr class="w-25 mx-auto">
                        <form class="row g-3" action="index.php?page=signup_create" method="POST">
                            <div class="col">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="username"
                                    placeholder="Masukkan Username" required>
                            </div>
                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Masukkan Password" required>
                            </div>
                            <div class="col-12">
                                <label for="nama_cust" class="form-label">Nama Lengkap</label>
                                <input type="text" name="nama_cust" class="form-control" id="nama_cust"
                                    placeholder="Masukkan Nama Lengkap" required>
                            </div>
                            <div class="col-12">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="alamat"
                                    placeholder="Masukkan Alamat" required>
                            </div>
                            <div class="col-12">
                                <label for="no_telp" class="form-label">Nomor HP</label>
                                <input type="text" name="no_telp" class="form-control" id="no_telp"
                                    placeholder="Masukkan Nomor HP" required>
                            </div>
                            <input type="hidden" name="status" value="user">
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                    <label class="form-check-label" for="gridCheck">
                                        I agree all statements in <a href="#" class="term-service"
                                            style="color: black;">Terms of service</a>
                                    </label>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" name="buat"
                                    type="submit">Sign Up</button>
                            </div>
                            <div class="d-grid text-center">
                                <a href="index.php?page=signin" style="color: black;"> Sudah punya akun</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>