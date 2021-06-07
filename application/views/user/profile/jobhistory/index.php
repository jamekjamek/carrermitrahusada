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
                <a href="<?= base_url('profile/jobhistory/add') ?>" class="btn btn-primary">Tambah</a>
                <hr />
                <?php foreach ($jobhistory as $job) : ?>
                    <div class="ml-4">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group row">
                                    <label for="name" class="col-sm-5 col-form-label">Perusahaan</label>
                                    <div class="col-sm-7">
                                        <input type="text" readonly class="form-control-plaintext" id="name" value="<?= $job->name; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="business_field" class="col-sm-5 col-form-label">Bidang</label>
                                    <div class="col-sm-7">
                                        <input type="text" readonly class="form-control-plaintext" id="business_field" value="<?= $job->business_field ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="address" class="col-sm-5 col-form-label">Alamat</label>
                                    <div class="col-sm-7">
                                        <textarea cols="30" rows="3" readonly class="form-control-plaintext"><?= $job->address ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="periode" class="col-sm-5 col-form-label">Periode</label>
                                    <div class="col-sm-7">
                                        <input type="text" readonly class="form-control-plaintext" id="periode" value="<?= $job->start ?> s/d <?= $job->finish ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="startposition" class="col-sm-5 col-form-label">Jabatan Awal</label>
                                    <div class="col-sm-7">
                                        <input type="text" readonly class="form-control-plaintext" id="startposition" value="<?= $job->start_position ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="finishposition" class="col-sm-5 col-form-label">Jabatan Akhir</label>
                                    <div class="col-sm-7">
                                        <input type="text" readonly class="form-control-plaintext" id="finishposition" value="<?= $job->finish_position ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="salary" class="col-sm-5 col-form-label">Gaji Terakhir</label>
                                    <div class="col-sm-7">
                                        <input type="text" readonly class="form-control-plaintext" id="salary" value="<?= $job->salary ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="salary" class="col-sm-5 col-form-label">Alasan Berhenti</label>
                                    <div class="col-sm-7">
                                        <textarea cols="30" rows="3" readonly class="form-control-plaintext"><?= $job->reason ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-2 offset-sm-2">
                                <button class="btn btn-danger delete-jobhistory" data-id="<?= $this->encrypt->encode($job->id); ?>"><i class="fa fa-trash-o"></i> </button>
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