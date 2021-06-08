<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="main-banner header-text">
    <div class="container-fluid">
        <div class="owl-banner owl-carousel">
            <?php foreach ($jobs as $job) : ?>
                <div class="item">
                    <img src="<?= base_url(); ?>assets/images/<?= $job->image; ?>" alt="">
                    <div class="item-content">

                        <div class="main-content">
                            <div class="meta-category">
                                <span><?= date('d/m/Y', strtotime($job->open_time)); ?> - <?= date('d/m/Y', strtotime($job->close_time)); ?></span>
                            </div>

                            <a href="#">
                                <h4><?= $job->name; ?></h4>
                            </a>

                            <ul class="post-info">
                                <li><a href="#">View Job</a> </li>
                            </ul>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Banner Ends Here -->

<section class="blog-posts grid-system">
    <div class="container">
        <div class="all-blog-posts">
            <h2 class="text-center">Job Tersedia</h2>
            <br>
            <div class="row">
                <?php foreach ($jobs as $job) : ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-thumb">
                                <img src="<?= base_url(); ?>assets/images/<?= $job->image; ?>" alt="">
                            </div>
                            <div class="down-content">
                                <span><?= date('d/m/Y', strtotime($job->open_time)); ?> - <?= date('d/m/Y', strtotime($job->close_time)); ?></span>
                                <a href="jobs.html">
                                    <h4><?= $job->name; ?></h4>
                                </a>
                                <p>
                                    <?php
                                    $today  = date('Y-m-d');
                                    if ($today > $job->close_time) : ?>
                                        <label class="badge badge-danger">Pendaftaran Tutup</label>
                                    <?php else : ?>
                                        <label class="badge badge-success">Pendaftaran dibuka</label>
                                    <?php endif; ?>
                                </p>
                                <div class="post-options">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="post-tags">
                                                <li><i class="fa fa-bullseye"></i></li>
                                                <li><a href="<?= base_url('job/detail/' . $this->encrypt->encode($job->id)) ?>">Lihat Job</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>