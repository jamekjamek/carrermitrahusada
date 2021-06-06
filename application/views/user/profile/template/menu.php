<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>Blog</h4>
                        <h2>Our Recent Blog Posts</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Banner Ends Here -->

<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sidebar-item categories">
                                <div class="sidebar-heading">
                                    <h2>MENU</h2>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li class="<?= $this->uri->segment(2) === "index" ? 'active' : ''; ?>">
                                            <a href="<?= base_url('profile/index'); ?>">- Data Diri</a>
                                        </li>
                                        <li class="<?= $this->uri->segment(2) === "family" ? 'active' : ''; ?>">
                                            <a href="<?= base_url('profile/family') ?>">- Data Keluarga</a>
                                        </li>
                                        <li class="<?= $this->uri->segment(1) === "emergency" ? 'active' : ''; ?>">
                                            <a href="<?= base_url('emergency'); ?>">- Kontak Darurat</a>
                                        </li>
                                        <li><a href="#">- Pendidikan Formal</a></li>
                                        <li><a href="#">- Pendidikan Non Formal</a></li>
                                        <li><a href="#">- Riwayat Pekerjaan</a></li>
                                        <li><a href="#">- Lain-lain</a></li>
                                        <li><a href="<?= base_url('auth/logout') ?>">- Logout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>