<body class="bg-gradient-light">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                            <img class="mb-4" img src="<?php echo base_url('assets/img/registrasi.png') ?>" alt="" width="110" height="110">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun</h1>
                            </div>
                            <form method="post" action="<?php echo base_url('index.php/registrasi/index') ?>" class="user">
                                
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Masukkan Nama" name="nama">
                                        <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Masukkan Username" name="username">
                                <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Masukkan Email" name="email">
                                <?php echo form_error('email', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Masukkan No. Telepon" name="telepon">
                                <?php echo form_error('telepon', '<div class="text-danger small ml-2">', '</div>') ?>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password_1">
                                            <?php echo form_error('password_1', '<div class="text-danger small ml-2">', '</div>') ?>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="Password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Ulang Password" name="Password_2">
                                    </div>
                                </div>
                              <button type="submit" class="btn btn-primary btn-user btn-block">Daftar
                              </button>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('index.php/auth/login') ?>">Sudah Mempunyai Akun? Silahkan Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>