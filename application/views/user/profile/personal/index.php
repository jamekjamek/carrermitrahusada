<div class="col-lg-8">
    <div class="blog-post">
        <div class="down-content">
            <h4>Data Diri</h4>
            <div class="row">
                <?php if ($employe->photo !== null) : ?>
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="https://skaliklik.com/assets/frontend/img/customer/profile/1612362799.png" class="rounded-circle" alt="Image Profile">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($employe->photo_full_body !== null) : ?>
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="https://skaliklik.com/assets/frontend/img/customer/profile/1612362799.png" class="rounded-circle" alt="Image Profile">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <form class="mt-4" action="" method="POST">
                <div class="form-group row">
                    <label for="fullname" class="col-sm-3 col-form-label">Nama lengkap</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= form_error('fullname') ? "is-invalid" : ""; ?>" id="fullname" placeholder="Masukan nama lengkap" name="fullname" value="<?= set_value('fullname') ? set_value('fullname') : $employe->fullname; ?>">
                        <?= form_error('fullname', '<label class="invalid-feedback">', '</label>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" readonly class="form-control <?= form_error('email') ? "is-invalid" : ""; ?>" id="email" placeholder="Masukan Email" name="email" value="<?= set_value('email') ? set_value('email') : $employe->email; ?>">
                        <?= form_error('email', '<label class="invalid-feedback">', '</label>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nickname" class="col-sm-3 col-form-label">Nama Panggilan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= form_error('nickname') ? "is-invalid" : ""; ?>" id="nickname" name="nickname" placeholder="Masukan nama panggilan" value="<?= set_value('nickname') ? set_value('nickname') : $employe->nickname; ?>">
                        <?= form_error('nickname', '<label class="invalid-feedback">', '</label>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="placeofbirth" class="col-sm-3 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= form_error('placeofbirth') ? "is-invalid" : ""; ?>" id="placeofbirth" placeholder="Masukan tempat lahir" name="placeofbirth" value="<?= set_value('placeofbirth') ? set_value('placeofbirth') : $employe->place_of_birth; ?>">
                        <?= form_error('placeofbirth', '<label class="invalid-feedback">', '</label>'); ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="dateofbirth" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control <?= form_error('dateofbirth') ? "is-invalid" : ""; ?>" id="dateofbirth" placeholder="Masukan tempat lahir" name="dateofbirth" value="<?= set_value('dateofbirth') ? set_value('dateofbirth') : $employe->date_of_birth; ?>">
                        <?= form_error('dateofbirth', '<label class="invalid-feedback">', '</label>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="dateofbirth" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="lakilaki" <?= $employe->gender === 'L' ? 'checked="checked"' : ''; ?> value="L">
                            <label class="form-check-label" for="lakilaki">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="perempuan" <?= $employe->gender === 'P' ? 'checked="checked"' : ''; ?> value="P">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="fullname" class="col-sm-3 col-form-label">Agama</label>
                    <div class="col-sm-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="religion" id="islam" <?= $employe->religion === 'Islam' ? 'checked="checked"' : ''; ?> value="Islam">
                            <label class="form-check-label" for="islam">Islam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="religion" id="kristen" <?= $employe->religion === 'Kristen' ? 'checked="checked"' : ''; ?> value="Kristen">
                            <label class="form-check-label" for="kristen">Kristen</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="religion" id="hindu" <?= $employe->religion === 'Hindu' ? 'checked="checked"' : ''; ?> value="Hindu">
                            <label class="form-check-label" for="hindu">Hindu</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="religion" id="budha" <?= $employe->religion === 'Budha' ? 'checked="checked"' : ''; ?> value="Budha">
                            <label class="form-check-label" for="budha">Budha</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="religion" id="katholik" <?= $employe->religion === 'Katholik' ? 'checked="checked"' : ''; ?> value="Katholik">
                            <label class="form-check-label" for="katholik">Katholik</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fullname" class="col-sm-3 col-form-label">Status</label>
                    <div class="col-sm-9">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="kawin" <?= $employe->status === 'kawin' ? 'checked="checked"' : ''; ?> value="kawin">
                            <label class="form-check-label" for="kawin">Kawin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="belumkawin" <?= $employe->status === 'belumkawin' ? 'checked="checked"' : ''; ?> value="belumkawin">
                            <label class="form-check-label" for="belumkawin">Belum Kawin</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="height" class="col-sm-3 col-form-label">Tinggi Badan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= form_error('height') ? "is-invalid" : ""; ?>" id="height" placeholder="Masukan tinggi badan" name="height" value="<?= set_value('height') ? set_value('height') : $employe->height ?>">
                        <?= form_error('height', '<label class="invalid-feedback">', '</label>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="identitynumber" class="col-sm-3 col-form-label">Nomor KTP/SIM</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= form_error('identitynumber') ? "is-invalid" : ""; ?>" id="identitynumber" placeholder="Masukan nomor identitas" name="identitynumber" value="<?= set_value('identitynumber') ? set_value('identitynumber') : $employe->identity_number ?>">
                        <?= form_error('identitynumber', '<label class="invalid-feedback">', '</label>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="address" class="col-sm-3 col-form-label">Alamat lengkap sesuai KTP</label>
                    <div class="col-sm-9">
                        <textarea name="address" id="" cols="30" rows="5" class="form-control <?= form_error('address') ? "is-invalid" : ""; ?>"><?= set_value('address') ? set_value('address') : $employe->address; ?></textarea>
                        <?= form_error('address', '<label class="invalid-feedback">', '</label>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="residence" class="col-sm-3 col-form-label">Alamat tempat tinggal</label>
                    <div class="col-sm-9">
                        <textarea name="residence" id="" cols="30" rows="5" class="form-control <?= form_error('residence') ? "is-invalid" : ""; ?>"><?= set_value('residence') ? set_value('residence') : $employe->residence; ?></textarea>
                        <?= form_error('residence', '<label class="invalid-feedback">', '</label>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="handphone" class="col-sm-3 col-form-label">Nomor HP</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= form_error('handphone') ? "is-invalid" : ""; ?>" id="handphone" name="handphone" placeholder="Masukan nomor handphone" value="<?= set_value('handphone') ? set_value('handphone') : $employe->handphone; ?>">
                        <?= form_error('handphone', '<label class="invalid-feedback">', '</label>') ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-3 col-form-label">Nomor Telpon</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= form_error('phone') ? "is-invalid" : ""; ?>" id="phone" name="phone" placeholder="Masukan nomor telpon" value="<?= set_value('phone') ? set_value('phone') : $employe->phone; ?>">
                        <?= form_error('phone', '<label class="invalid-feedback">', '</label>') ?>
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