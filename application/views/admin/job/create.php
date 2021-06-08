<div class="main-content">
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-edit bg-blue"></i>
                        <div class="d-inline">
                            <h5><?= $title; ?></h5>
                            <span><?= $subtitle; ?></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><?= $title; ?></h3>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="jobname" class="col-sm-3 col-form-label">Nama Job</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control <?= form_error('jobname') ? "is-invalid" : ""; ?>" id="jobname" placeholder="Masukan nama job" name="jobname" autofocus value="<?= set_value('jobname'); ?>">
                                    <?= form_error('jobname', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="opentime" class="col-sm-3 col-form-label">Pembukaan</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control <?= form_error('opentime') ? "is-invalid" : ""; ?>" id="opentime" name="opentime" value="<?= set_value('opentime'); ?>">
                                    <?= form_error('opentime', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="closetime" class="col-sm-3 col-form-label">Penutupan</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control <?= form_error('closetime') ? "is-invalid" : ""; ?>" id="closetime" name="closetime" value="<?= set_value('closetime'); ?>">
                                    <?= form_error('closetime', '<div class="invalid-feedback">', '</div>'); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-sm-3 col-form-label">Image</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control-file" required id="image" name="image" accept=".jpg,.jpeg,.png">
                                    <small id="imageHelp" class="form-text text-info">Wajib jpg, jpeg, png dengan Ukuran wajib 720 x 480 pixel.</small>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="qualification">Kualifikasi</label>
                                <small id="imageHelp" class="form-text text-danger">Sangat di sarankan untuk meng-copy field ini sebelum menyimpannya.</small>
                                <textarea class="form-control html-editor <?= form_error('qualification') ? "is-invalid" : ""; ?>" rows="10" name="qualification"><?= set_value('qualification'); ?></textarea>
                                <?= form_error('qualification', '<div class="invalid-feedback">', '</div>'); ?>
                            </div>
                            <button class="btn btn-success" type="submit">Simpan</button>
                            <a href="<?= base_url('admin/job'); ?>" class="btn btn-danger">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>