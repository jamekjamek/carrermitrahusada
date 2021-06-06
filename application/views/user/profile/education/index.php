<div class="col-lg-8">
    <div class="blog-post">
        <div class="down-content">
            <h4>Data Pendidikan Terakhir</h4>
            <form class="mt-4" action="" method="POST">
                <div class="form-group row">
                    <label for="institution" class="col-sm-3 col-form-label">Institusi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= form_error('institution') ? "is-invalid" : ""; ?>" id="institution" placeholder="Masukan Institusi" name="institution" value="<?= set_value('institution') ? set_value('institution') : @$education->institution; ?>">
                        <?= form_error('institution', '<label class="invalid-feedback">', '</label>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="regency" class="col-sm-3 col-form-label">Kabupaten</label>
                    <div class="col-sm-9">
                        <select class="get-regency form-control <?= form_error('regency') ? "is-invalid" : ""; ?>" name="regency" style="width: 100%;">
                            <option value="<?= @$education->kabupaten_id ?>"><?= @$education->kabupaten; ?></option>
                        </select>
                        <?= form_error('regency', '<label class="invalid-feedback">', '</label>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="major" class="col-sm-3 col-form-label">Jurusan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= form_error('major') ? "is-invalid" : ""; ?>" id="major" name="major" placeholder="Masukan Jurusan" value="<?= set_value('major') ? set_value('major') : @$education->major; ?>">
                        <?= form_error('major', '<label class="invalid-feedback">', '</label>') ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="graduation" class="col-sm-3 col-form-label">Tahun Kelulusan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= form_error('graduation') ? "is-invalid" : ""; ?>" id="graduation" name="graduation" placeholder="Masukan tahun kelulusan" value="<?= set_value('graduation') ? set_value('graduation') : @$education->graduation_year; ?>">
                        <?= form_error('graduation', '<label class="invalid-feedback">', '</label>') ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gpa" class="col-sm-3 col-form-label">IPK/Nilai</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= form_error('gpa') ? "is-invalid" : ""; ?>" id="gpa" name="gpa" placeholder="Masukan Nilai Akhir / IPK" value="<?= set_value('gpa') ? set_value('gpa') : @$education->gpa; ?>">
                        <?= form_error('gpa', '<label class="invalid-feedback">', '</label>') ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="relationship" class="col-sm-3 col-form-label">Lanjut Pendidikan</label>
                    <div class="col-sm-9 mt-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="continue" id="1" value="1" <?= @$education->is_continue === "1" ? 'checked="checked"' : ''; ?>>
                            <label class="form-check-label" for="1">Ya</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="continue" id="0" value="0" <?= @$education->is_continue === "0" ? 'checked="checked"' : ''; ?>>
                            <label class="form-check-label" for="0">Tidak</label>
                        </div>
                        <?= form_error('continue', '<label class="text-danger">', '</label>') ?>
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

<?php if ($this->session->flashdata('success')) : ?>
    <!--jika brhasil -->
    <div class="flashdata" data-flashdata=" <?= $this->session->flashdata('success') ?>" data-type="success"></div>
<?php elseif ($this->session->flashdata('error')) : ?>
    <div class="flashdata" data-flashdata=" <?= $this->session->flashdata('error') ?>" data-type="error"></div>
    <!--jika gagal -->
<?php endif; ?>