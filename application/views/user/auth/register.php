<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>ARE YOU READY ?</h4>
                        <h2>Ayoo segera gabung dengan kami</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Banner Ends Here -->


<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="down-contact">
                    <div class="row">
                        <div class="col-lg-6 offset-md-3">
                            <div class="sidebar-item contact-form">
                                <div class="sidebar-heading">
                                    <h2>Daftar</h2>
                                </div>
                                <form id="" action="" method="post">
                                    <div class="">
                                        <div class="form-group">
                                            <label for="fullname">Nama Lengkap</label>
                                            <input type="text" class="form-control <?= form_error('fullname') ? 'is-invalid' : ''; ?>" id="fullname" name="fullname" placeholder="Masukan Nama Lengkap" value="<?= set_value('fullname'); ?>">
                                            <?= form_error('fullname', '<p class="invalid-feedback">', '</p>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Masukan Email" value="<?= set_value('email'); ?>">
                                            <?= form_error('email', '<p class="invalid-feedback">', '</p>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Masukan Password" value="<?= set_value('password'); ?>">
                                            <?= form_error('password', '<p class="invalid-feedback">', '</p>'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="confirmpassword">Konfirmasi Password</label>
                                            <input type="password" class="form-control <?= form_error('confirmpassword') ? 'is-invalid' : ''; ?>" id="confirmpassword" name="confirmpassword" placeholder="Konfirmasi Password" value="<?= set_value('confirmpassword'); ?>">
                                            <?= form_error('confirmpassword', '<p class="invalid-feedback">', '</p>'); ?>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="pull-left">
                                                <button type="submit" class="main-button">Daftar</button>
                                            </div>
                                            <div class="pull-right">
                                                <a href="<?= base_url('auth') ?>">Login</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>