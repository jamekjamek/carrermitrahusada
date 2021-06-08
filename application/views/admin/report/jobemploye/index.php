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
                        <div class="row">
                            <div class="col-6">
                                <form action="">
                                    <div class="form-group row">
                                        <label for="jobid" class="col-sm-2 col-form-label">Filter</label>
                                        <div class="col-sm-6">
                                            <select class="form-control" name="jobid">
                                                <?php foreach ($jobs as $job) : ?>
                                                    <option value="<?= $this->encrypt->encode($job->id) ?>"><?= $job->name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-4">
                                            <button class="btn btn-primary"> <i class="ik ik-search"></i>Cari</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row my-4">
                            <div class="col-6">
                                <?php if ($this->input->get('jobid')) : ?>
                                    <a href="<?= base_url('admin/report/pdfregistrant?jobid=' . $this->input->get('jobid')); ?>" class="btn btn-danger" target="_blank"> <i class="ik ik-printer"></i>Cetak</a>
                                <?php else : ?>
                                    <a href="<?= base_url('admin/report/pdfregistrant'); ?>" class="btn btn-danger" target="_blank"> <i class="ik ik-printer"></i>Cetak</a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Job</th>
                                    <th>Nama Pendaftar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($allData as $data) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $data->name; ?></td>
                                        <td><?= $data->fullname; ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/report/detail/' . $this->encrypt->encode($data->id));  ?>" class="btn btn-icon btn-warning" title="Detail"><i class="ik ik-book-open"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>