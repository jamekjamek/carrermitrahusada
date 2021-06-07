<div class="col-lg-8">
    <div class="blog-post">
        <div class="down-content">
            <h4>Data Pendidikan Non Formal</h4>
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pengalaman Organisasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Riwayat Pelatihan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Bahasa Asing</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <!-- RIWAYAT ORGANISASI -->
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    <form class="mt-4" action="<?= base_url('profile/organisation'); ?>" method="POST">
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Nama Organisasi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= form_error('name') ? "is-invalid" : ""; ?>" id="name" placeholder="Masukan Nama Organisasi" name="name" value="<?= set_value('name') ? set_value('name') : @$organisation->name; ?>">
                                <?= form_error('name', '<label class="invalid-feedback">', '</label>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="position" class="col-sm-3 col-form-label">Posisi</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= form_error('position') ? "is-invalid" : ""; ?>" id="position" name="position" placeholder="Masukan Posisi Terakhir" value="<?= set_value('position') ? set_value('position') : @$organisation->position; ?>">
                                <?= form_error('position', '<label class="invalid-feedback">', '</label>') ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-sm-3 col-form-label">Tahun Kelulusan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= form_error('year') ? "is-invalid" : ""; ?>" id="year" name="year" placeholder="Masukan tahun kelulusan" value="<?= set_value('year') ? set_value('year') : @$organisation->year; ?>">
                                <?= form_error('year', '<label class="invalid-feedback">', '</label>') ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Update Data</button>
                            </div>
                        </div>
                    </form>



                </div>
                <!-- RIWAYAT PELATIHAN -->
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <form class="mt-4" action="<?= base_url('profile/training'); ?>" method="POST">
                        <div class="form-group row">
                            <label for="trainingname" class="col-sm-3 col-form-label">Nama Pelatihan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= form_error('trainingname') ? "is-invalid" : ""; ?>" id="trainingname" placeholder="Masukan Nama Pelaihan" name="trainingname" value="<?= set_value('trainingname') ? set_value('trainingname') : @$training->name; ?>">
                                <?= form_error('trainingname', '<label class="invalid-feedback">', '</label>'); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="trainingyear" class="col-sm-3 col-form-label">Tahun Kelulusan</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= form_error('trainingyear') ? "is-invalid" : ""; ?>" id="trainingyear" name="trainingyear" placeholder="Masukan tahun" value="<?= set_value('trainingyear') ? set_value('trainingyear') : @$training->year; ?>">
                                <?= form_error('trainingyear', '<label class="invalid-feedback">', '</label>') ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Update Data</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- BAHASA ASING -->
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <form class="mt-4" action="<?= base_url('profile/language'); ?>" method="POST">
                        <div class="form-group row">
                            <label for="languagename" class="col-sm-3 col-form-label">Bahasa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control <?= form_error('languagename') ? "is-invalid" : ""; ?>" id="languagename" placeholder="Masukan Nama Pelaihan" name="languagename" value="<?= set_value('languagename') ? set_value('languagename') : @$language->name; ?>">
                                <?= form_error('languagename', '<label class="invalid-feedback">', '</label>'); ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-9 offset-sm-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="listen" value="1" name="listen" <?= @$language->is_listen === '1' ? "checked" : ""; ?>>
                                    <label class="form-check-label" for="listen">Mendengar</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="read" value="1" name="read" <?= @$language->is_read === '1' ? "checked" : ""; ?>>
                                    <label class="form-check-label" for="read">Membaca</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="write" value="1" name="write" <?= @$language->is_write === '1' ? "checked" : ""; ?>>
                                    <label class="form-check-label" for="write">Menulis</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 offset-sm-3">
                                <button class="btn btn-primary" type="submit">Update Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ($this->session->flashdata('success')) : ?>
    <!--jika brhasil -->
    <div class="flashdata" data-flashdata=" <?= $this->session->flashdata('success') ?>" data-type="success"></div>
<?php elseif ($this->session->flashdata('error')) : ?>
    <div class="flashdata" data-flashdata=" <?= $this->session->flashdata('error') ?>" data-type="error"></div>
    <!--jika gagal -->
<?php endif; ?>