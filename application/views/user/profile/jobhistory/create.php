<div class="col-lg-8">
    <div class="blog-post">
        <div class="down-content">
            <div class="row justify-content-between">
                <div class="col-7">
                    <h4>Data Riwayat Pekerjaan</h4>
                </div>
            </div>
            <div class="my-2">
                <hr />
                <h4>Tambah Data</h4>
                <hr />
                <div class="ml-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <form action="" method="POST">
                                <div class="form-group row">
                                    <label for="corporatename" class="col-sm-3 col-form-label">Perusahaan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= form_error('corporatename') ? "is-invalid" : ""; ?>" id="corporatename" value="<?= set_value('corporatename') ?>" autofocus placeholder="Masukan nama perusahaan" name="corporatename">
                                        <?= form_error('corporatename', '<span class="invalid-feedback">', '</span>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="businessfield" class="col-sm-3 col-form-label">Bidang</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= form_error('corporatename') ? "is-invalid" : ""; ?>" id="businessfield" value="<?= set_value('businessfield') ?>" placeholder="Masukan bidang usaha" name="businessfield">
                                        <?= form_error('businessfield', '<span class="invalid-feedback">', '</span>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <textarea cols="30" rows="3" class="form-control <?= form_error('address') ? "is-invalid" : ""; ?>" name="address" placeholder="Masukan alamat"><?= set_value('address') ?></textarea>
                                        <?= form_error('address', '<span class="invalid-feedback">', '</span>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="start" class="col-sm-3 col-form-label">Tanggal Mulai</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control <?= form_error('start') ? "is-invalid" : ""; ?>" id="start" value="<?= set_value('start'); ?>" name="start">
                                        <?= form_error('address', '<span class="invalid-feedback">', '</span>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="finish" class="col-sm-3 col-form-label">Tanggal Berakhir</label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control <?= form_error('finish') ? "is-invalid" : ""; ?>" id="finish" value="<?= set_value('finish'); ?>" name="finish">
                                        <?= form_error('address', '<span class="invalid-feedback">', '</span>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="startposition" class="col-sm-3 col-form-label">Jabatan Awal</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= form_error('startposition') ? "is-invalid" : ""; ?>" id="startposition" value="<?= set_value('startposition'); ?>" name="startposition" placeholder="Masukan jabatan awal">
                                        <?= form_error('startposition', '<span class="invalid-feedback">', '</span>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="finishposition" class="col-sm-3 col-form-label">Jabatan Akhir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= form_error('finishposition') ? "is-invalid" : ""; ?>" id="finishposition" value="<?= set_value('finishposition'); ?>" name="finishposition" placeholder="Masukan jabatan akhir">
                                        <?= form_error('finishposition', '<span class="invalid-feedback">', '</span>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="salary" class="col-sm-3 col-form-label">Gaji Terakhir</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control <?= form_error('salary') ? "is-invalid" : ""; ?>" id="salary" value="<?= set_value('salary'); ?>" name="salary" placeholder="Masukan gaji terakhir">
                                        <?= form_error('salary', '<span class="invalid-feedback">', '</span>') ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="reason" class="col-sm-3 col-form-label">Alasan Berhenti</label>
                                    <div class="col-sm-9">
                                        <textarea cols="30" rows="3" class="form-control <?= form_error('reason') ? "is-invalid" : ""; ?>" name="reason" placeholder="Masukan alasan berhenti"><?= set_value('reason'); ?></textarea>
                                        <?= form_error('reason', '<span class="invalid-feedback">', '</span>') ?>
                                    </div>
                                </div>
                                <div class="col-sm-4 offset-sm-3">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>