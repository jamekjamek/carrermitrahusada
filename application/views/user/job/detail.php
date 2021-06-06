<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
    <section class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-content">
                        <h4>AYO BERGABUNG DENGAN KAMI</h4>
                        <h2>SEGERA DAFTARKAN DIRI ANDA</h2>
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

<section class="blog-posts grid-system">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div>
                    <img src="<?= base_url() ?>assets/images/<?= $job->image; ?>" alt="" class="img-fluid wc-image">
                </div>

                <br>
            </div>

            <div class="col-md-7">
                <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                        Perioder Rekrutmen
                        <h2>
                            <i class="fa fa-calendar"></i> <?= date('d/m/Y', strtotime($job->open_time)) . ' - ' . date('d/m/Y', strtotime($job->close_time)) ?>
                        </h2>
                    </div>

                    <div class="sidebar-heading">
                        <h2 style="color: #f48840;"><?= $job->name; ?></h2>
                    </div>

                    <div class="content">
                        <div class="sidebar-heading">
                            <h2>Kualifikasi</h2>
                        </div>
                        <?= $job->qualification; ?>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="main-button">
                            <a href="<?= base_url('job/submitjob/' . $this->encrypt->encode($job->id)) ?>">APPLY NOW</a>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</section>