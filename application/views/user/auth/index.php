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
<?php if ($this->session->flashdata('success')) : ?>
    <!--jika brhasil -->
    <div class="flashdata" data-flashdata=" <?= $this->session->flashdata('success') ?>" data-type="success"></div>
<?php elseif ($this->session->flashdata('error')) : ?>
    <div class="flashdata" data-flashdata=" <?= $this->session->flashdata('error') ?>" data-type="error"></div>
    <!--jika gagal -->
<?php endif; ?>

<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="down-contact">
                    <div class="row">
                        <div class="col-lg-6 offset-md-3">
                            <div class="sidebar-item contact-form">
                                <div class="sidebar-heading">
                                    <h2>LOGIN</h2>
                                </div>
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" id="email" name="email" placeholder="Masukan Nama Lengkap" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<p class="invalid-feedback">', '</p>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control <?= form_error('password') ? 'is-invalid' : ''; ?>" id="password" name="password" placeholder="Masukan Password" value="<?= set_value('password'); ?>">
                                        <?= form_error('password', '<p class="invalid-feedback">', '</p>'); ?>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="pull-left">
                                            <button type="submit" class="main-button">Login</button>
                                        </div>
                                        <div class="pull-right">
                                            <a href="<?= base_url('auth/register') ?>">Daftar</a>
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