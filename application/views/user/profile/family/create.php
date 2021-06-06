<div class="col-lg-8">
    <div class="blog-post">
        <div class="down-content">
            <div class="row justify-content-between">
                <div class="col-7">
                    <h4>Data Keluarga dan Data Tanggungan</h4>
                </div>
            </div>
            <div class="my-2">
                <div class="ml-4">
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="fullname" value="Calon Karyawan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="fullname" value="<?= $employe->fullname ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="fullname" value="<?= $employe->gender ?>">
                        </div>
                    </div>
                </div>
                <hr />
                <h4>Tambah Data</h4>
                <hr />
                <form action="" method="POST">
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-3 col-form-label">Hubungan</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="relationship" id="Ayah" value="Ayah" checked="checked">
                                <label class="form-check-label" for="Ayah">Ayah</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="relationship" id="Ibu" value="Ibu">
                                <label class="form-check-label" for="Ibu">Ibu</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="relationship" id="Saudara" value="Saudara">
                                <label class="form-check-label" for="Saudara">Saudara</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control <?= form_error('name') ? "is-invalid" : ""; ?>" name="name" id="name" value="<?= set_value('name'); ?>" placeholder="Masukan nama">
                            <?= form_error('name', '<label class="invalid-feedback">', '</label>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="L" value="L" checked="checked">
                                <label class="form-check-label" for="L">Laki-laki</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="P" value="P">
                                <label class="form-check-label" for="P">Perempuan</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fullname" class="col-sm-3 col-form-label">Pendidikan</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education" id="SD" value="SD" checked="checked">
                                <label class="form-check-label" for="SD">SD</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education" id="SMP" value="SMP">
                                <label class="form-check-label" for="SMP">SMP</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education" id="SMA" value="SMA">
                                <label class="form-check-label" for="SMA">SMA</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education" id="D3" value="D3">
                                <label class="form-check-label" for="D3">D3</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="education" id="S1" value="S1">
                                <label class="form-check-label" for="S1">S1</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="placeofbirth" class="col-sm-3 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control <?= form_error('placeofbirth') ? "is-invalid" : ""; ?>" name="placeofbirth" id="placeofbirth" value="<?= set_value('placeofbirth'); ?>" placeholder="Masukan tempat lahir">
                            <?= form_error('placeofbirth', '<label class="invalid-feedback">', '</label>') ?>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="dateofbirth" class="col-sm-3 col-form-label">Tanggal lahir</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control <?= form_error('dateofbirth') ? "is-invalid" : ""; ?>" name="dateofbirth" id="dateofbirth" value="<?= set_value('dateofbirth'); ?>">
                            <?= form_error('dateofbirth', '<label class="invalid-feedback">', '</label>') ?>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="<?= base_url('profile/family'); ?>" class="btn btn-danger">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>