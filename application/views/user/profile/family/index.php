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
                <a href="<?= base_url('profile/family/add') ?>" class="btn btn-primary">Tambah</a>
                <hr />
                <?php foreach ($families as $family) : ?>
                    <div class="ml-4 my-3">
                        <div class="form-group row">
                            <label for="status" class="col-sm-3 col-form-label">Hubungan</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="status" value="<?= $family->relationship ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="name" value="<?= $family->name; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="gender" value="<?= $family->gender; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="education" class="col-sm-3 col-form-label">Pendidikan</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="education" value="<?= $family->last_education; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="education" class="col-sm-3 col-form-label">Tanggal lahir</label>
                            <div class="col-sm-9">
                                <input type="text" readonly class="form-control-plaintext" id="education" value="<?= $family->place_of_birth . ', ' . $family->date_of_birth; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3 offset-sm-3">
                                <!-- <a href="" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a> -->
                                <button class="btn btn-danger btn-sm delete-family" data-id="<?= $this->encrypt->encode($family->id); ?>"><i class="fa fa-trash-o"></i></button>
                            </div>
                        </div>
                    </div>
                    <hr />
                <?php endforeach; ?>
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