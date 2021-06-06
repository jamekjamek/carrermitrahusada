<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                <h2>Karir<em>.</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= $this->uri->segment(1) === null || $this->uri->segment(1) === 'job' ? "active" : ""; ?>">
                        <a class="nav-link" href="<?= base_url() ?>">Home
                        </a>
                    </li>
                    <?php if (session()) : ?>
                        <li class="nav-item <?= $this->uri->segment(1) === 'profile' ? "active" : ""; ?>">
                            <a class="nav-link" href="<?= base_url('profile/index') ?>">Profil</a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item <?= $this->uri->segment(1) === 'auth' ? "active" : ""; ?>">
                            <a class="nav-link" href="<?= base_url('auth') ?>">Akun</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>