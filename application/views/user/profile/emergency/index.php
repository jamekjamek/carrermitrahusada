<div class="col-lg-8">
    <div class="blog-post">
        <div class="down-content">
            <h4>Data Kontak Darurat</h4>
            <form class="mt-4" action="" method="POST">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Nama lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= form_error('name') ? "is-invalid" : ""; ?>" id="name" placeholder="Masukan nama lengkap" name="name" value="<?= set_value('name') ? set_value('name') : @$emergency->name; ?>">
                        <?= form_error('name', '<label class="invalid-feedback">', '</label>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="handphone" class="col-sm-3 col-form-label">Nomor HP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= form_error('handphone') ? "is-invalid" : ""; ?>" id="handphone" name="handphone" placeholder="Masukan nomor handphone" value="<?= set_value('handphone') ? set_value('handphone') : @$emergency->handphone; ?>">
                        <?= form_error('handphone', '<label class="invalid-feedback">', '</label>') ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="relationship" class="col-sm-3 col-form-label">Hubungan</label>
                    <div class="col-sm-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="relationship" id="Ayah" value="Ayah" <?= @$emergency->relationship === "Ayah" ? 'checked="checked"' : ''; ?>>
                            <label class="form-check-label" for="Ayah">Ayah</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="relationship" id="Ibu" value="Ibu" <?= @$emergency->relationship === "Ibu" ? 'checked="checked"' : ''; ?>>
                            <label class="form-check-label" for="Ibu">Ibu</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="relationship" id="Saudara" value="Saudara" <?= @$emergency->relationship === "Saudara" ? 'checked="checked"' : ''; ?>>
                            <label class="form-check-label" for="Saudara">Saudara</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="relationship" id="Sahabat" value="Sahabat" <?= @$emergency->relationship === "Sahabat" ? 'checked="checked"' : ''; ?>>
                            <label class="form-check-label" for="Sahabat">Sahabat</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3 offset-sm-3">
                        <button class="btn btn-primary" type="submit">Update Profile</button>
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