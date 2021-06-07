<div class="col-lg-8">
    <div class="blog-post">
        <div class="down-content">
            <h4>Upload CV</h4>
            <form class="mt-4" action="<?= base_url('profile/upload') ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="cv" class="col-sm-3 col-form-label">Upload CV</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file <?= form_error('cv') ? "is-invalid" : ""; ?>" id="cv" name="cv" accept=".pdf">
                        <?= form_error('cv', '<label class="invalid-feedback">', '</label>'); ?>
                    </div>
                </div>


                <div class="row my-4">
                    <div class="col-sm-3 offset-sm-3">
                        <button class="btn btn-primary" type="submit">Upload</button>
                    </div>
                </div>
                <?php if ($employe->cv != null) : ?>
                    <hr />
                    <h4>Preview</h4>
                    <embed src="<?= base_url('assets/cv/' . $employe->cv) ?>" type="application/pdf" height="800px" width="100%">
                    <hr />
                <?php endif; ?>
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