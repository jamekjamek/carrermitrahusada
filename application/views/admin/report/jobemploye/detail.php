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
                        <h3>
                            <strong>
                                Data Pendaftaran
                            </strong>
                        </h3>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-3">Nama Pendaftar</dt>
                            <dd class="col-sm-9"><?= $detail->fullname; ?></dd>
                            <dt class="col-sm-3">Pilihan Job</dt>
                            <dd class="col-sm-9"><?= $detail->name; ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <!-- IDENTITAS DIRI -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <strong>
                                Identitas Diri
                            </strong>
                        </h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Identitas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">CV</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <dl class="row mt-4 ml-2">
                                    <dt class="col-sm-3">Nama Pendaftar</dt>
                                    <dd class="col-sm-9"><?= $personal->fullname; ?></dd>
                                    <dt class="col-sm-3">Email</dt>
                                    <dd class="col-sm-9"><?= $personal->email; ?></dd>
                                    <dt class="col-sm-3">Nama Panggilan</dt>
                                    <dd class="col-sm-9"><?= $personal->nickname; ?></dd>
                                    <dt class="col-sm-3">Tanggal Lahir</dt>
                                    <dd class="col-sm-9"><?= $personal->place_of_birth . ', ' . date('d-m-Y', strtotime($personal->date_of_birth)); ?></dd>
                                    <dt class="col-sm-3">Jenis Kelamin</dt>
                                    <dd class="col-sm-9"><?= $personal->gender; ?></dd>
                                    <dt class="col-sm-3">Agama</dt>
                                    <dd class="col-sm-9"><?= $personal->religion; ?></dd>
                                    <dt class="col-sm-3">Status</dt>
                                    <dd class="col-sm-9"><?= strtoupper($personal->status); ?></dd>
                                    <dt class="col-sm-3">Tinggi Badan</dt>
                                    <dd class="col-sm-9"><?= $personal->height; ?> cm</dd>
                                    <dt class="col-sm-3">Nomor KTP/SIM</dt>
                                    <dd class="col-sm-9"><?= $personal->identity_number; ?></dd>
                                    <dt class="col-sm-3">Alamat KTP</dt>
                                    <dd class="col-sm-9"><?= $personal->address; ?></dd>
                                    <dt class="col-sm-3">Alamat Tempat Tinggal</dt>
                                    <dd class="col-sm-9"><?= $personal->residence; ?></dd>
                                    <dt class="col-sm-3">Nomor Hp</dt>
                                    <dd class="col-sm-9"><?= $personal->handphone; ?></dd>
                                    <dt class="col-sm-3">Nomor Telpon</dt>
                                    <dd class="col-sm-9"><?= $personal->phone; ?></dd>
                                </dl>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <?php if ($personal->cv === null) : ?>
                                    <h4> CV Belum di Upload</h4>
                                <?php else : ?>
                                    <embed src="<?= base_url('assets/cv/' . $personal->cv) ?>" class="mt-4" type="application/pdf" height="800px" width="100%">
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- KELUARGA DAN TANGGUNGAN -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong>Data Keluarga dan Tanggungan</strong></h3>
                    </div>
                    <div class="card-body">
                        <?php foreach ($datafamily as $family) : ?>
                            <dl class="row mt-4 ml-2">
                                <dt class="col-sm-3">Hubungan</dt>
                                <dd class="col-sm-9"><?= $family->relationship; ?></dd>
                                <dt class="col-sm-3">Nama</dt>
                                <dd class="col-sm-9"><?= $family->name; ?></dd>
                                <dt class="col-sm-3">Jenis Kelamin</dt>
                                <dd class="col-sm-9"><?= $family->gender; ?></dd>
                                <dt class="col-sm-3">Pendidikan Terakhir</dt>
                                <dd class="col-sm-9"><?= $family->last_education; ?></dd>
                                <dt class="col-sm-3">Tanggal lahir</dt>
                                <dd class="col-sm-9"><?= $family->place_of_birth . ', ' . date('d-m-Y', strtotime($family->date_of_birth)); ?></dd>
                            </dl>
                            <hr />
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- KONTAK DARURAT -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong>Kontak Darurat</strong></h3>
                    </div>
                    <div class="card-body">
                        <?php if ($emergency != null) : ?>
                            <dl class="row mt-4 ml-2">
                                <dt class="col-sm-3">Hubungan</dt>
                                <dd class="col-sm-9"><?= $emergency->relationship; ?></dd>
                                <dt class="col-sm-3">Nama</dt>
                                <dd class="col-sm-9"><?= $emergency->name; ?></dd>
                                <dt class="col-sm-3">Jenis Kelamin</dt>
                                <dd class="col-sm-9"><?= $emergency->handphone; ?></dd>
                            </dl>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- PENDIDIKAN TERAKHIR -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong>Pendidikan Terakhir</strong></h3>
                    </div>
                    <div class="card-body">
                        <?php if ($education != null) : ?>
                            <dl class="row mt-4 ml-2">
                                <dt class="col-sm-3">Institusi</dt>
                                <dd class="col-sm-9"><?= $education->institution; ?></dd>
                                <dt class="col-sm-3">Kota/Kabupaten</dt>
                                <dd class="col-sm-9"><?= $education->kabupaten; ?></dd>
                                <dt class="col-sm-3">Jurusan</dt>
                                <dd class="col-sm-9"><?= $education->major; ?></dd>
                                <dt class="col-sm-3">Tahun Lulus</dt>
                                <dd class="col-sm-9"><?= $education->graduation_year; ?></dd>
                                <dt class="col-sm-3">IPK/Nilai Akhir</dt>
                                <dd class="col-sm-9"><?= $education->gpa; ?></dd>
                                <div class="alert bg-danger alert-danger text-white mt-3 ml-2" role="alert">
                                    <?= $education->is_continue === '1' ? 'Akan' : 'Tidak akan'; ?>
                                    Melanjutkan pendidikan
                                </div>
                            </dl>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- PENDIDIKAN NON FORMAL -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <strong>
                                Pendidikan Non Formal
                            </strong>
                        </h3>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="organisation-tab" data-toggle="tab" href="#organisation" role="tab" aria-controls="organisation" aria-selected="true">Pengalaman Organisasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="training-tab" data-toggle="tab" href="#training" role="tab" aria-controls="training" aria-selected="false">Riwayat Pelatihan</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="language-tab" data-toggle="tab" href="#language" role="tab" aria-controls="language" aria-selected="false">Bahasa Asing</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="organisation" role="tabpanel" aria-labelledby="organisation-tab">
                                <?php if ($organisation != null) : ?>
                                    <dl class="row mt-4 ml-2">
                                        <dt class="col-sm-3">Nama Organisasi</dt>
                                        <dd class="col-sm-9"><?= $organisation->name; ?></dd>
                                        <dt class="col-sm-3">Posisi</dt>
                                        <dd class="col-sm-9"><?= $organisation->position; ?></dd>
                                        <dt class="col-sm-3">Tahun</dt>
                                        <dd class="col-sm-9"><?= $organisation->year; ?></dd>
                                    </dl>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="training" role="tabpanel" aria-labelledby="training-tab">
                                <?php if ($training != null) : ?>
                                    <dl class="row mt-4 ml-2">
                                        <dt class="col-sm-3">Nama Pelatihan</dt>
                                        <dd class="col-sm-9"><?= $training->name; ?></dd>
                                        <dt class="col-sm-3">Tahun</dt>
                                        <dd class="col-sm-9"><?= $training->year; ?></dd>
                                    </dl>
                                <?php endif; ?>
                            </div>

                            <div class="tab-pane fade" id="language" role="tabpanel" aria-labelledby="language-tab">
                                <?php if ($language != null) : ?>
                                    <dl class="row mt-4 ml-2">
                                        <dt class="col-sm-3">Bahasa Asing</dt>
                                        <dd class="col-sm-9">

                                            <?= $language->name; ?>
                                            <strong>
                                                <?= $language->is_listen === '1' ? ' Mendengar,' : ''; ?>
                                                <?= $language->is_read === '1' ? ' Membaca,' : ''; ?>
                                                <?= $language->is_write === '1' ? ' Menulis.' : ''; ?>
                                            </strong>
                                        </dd>
                                    </dl>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- RIWAYAT PEKERJAAN -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong>Riwayat Pekerjaan</strong></h3>
                    </div>
                    <div class="card-body">
                        <?php foreach ($jobhistory as $job) : ?>
                            <dl class="row mt-4 ml-2">
                                <dt class="col-sm-3">Perusahan</dt>
                                <dd class="col-sm-9"><?= $job->name; ?></dd>
                                <dt class="col-sm-3">Bidang</dt>
                                <dd class="col-sm-9"><?= $job->business_field; ?></dd>
                                <dt class="col-sm-3">Alamat</dt>
                                <dd class="col-sm-9"><?= $job->address; ?></dd>
                                <dt class="col-sm-3">Periode</dt>
                                <dd class="col-sm-9"><?= date('d-m-Y', strtotime($job->start)) . ' s/d ' . date('d-m-Y', strtotime($job->finish)); ?></dd>
                                <dt class="col-sm-3">Jabatan awal</dt>
                                <dd class="col-sm-9"><?= $job->start_position; ?></dd>
                                <dt class="col-sm-3">Jabatan akhihr</dt>
                                <dd class="col-sm-9"><?= $job->finish_position; ?></dd>
                                <dt class="col-sm-3">Gaji</dt>
                                <dd class="col-sm-9"><?= "Rp " . number_format($job->salary, 2, ',', '.'); ?></dd>
                                <dt class="col-sm-3">Alasan berhenti kerja</dt>
                                <dd class="col-sm-9"><?= $job->reason; ?></dd>
                            </dl>
                            <hr />
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- LAIN-LAIN -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>
                            <strong>
                                Lain-lain
                            </strong>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>
                                <strong>
                                    1. Dari mana anda mengatahui lowongan kerja di RS. Mitra Husada
                                </strong>
                            </label>
                            <input class="form-control-plaintext" readonly value="<?= $etc->question_one; ?>">
                        </div>
                        <div class="form-group">
                            <label>
                                <strong>
                                    2. Apakah anda pernah melamar kerja di RS Mitra Husada sebelumnya
                                </strong>
                            </label>
                            <input class="form-control-plaintext" readonly value="<?= $etc->question_two === '1' ? "Iya" : "Tidak"; ?>">
                        </div>

                        <?php if ($etc->when_question_two !== null) : ?>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><strong> Kapan :</strong></label>
                                <div class="col-sm-11">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $etc->when_question_two; ?>">
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ($etc->position_question_two !== null) : ?>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><strong> Posisi :</strong></label>
                                <div class="col-sm-11">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $etc->position_question_two; ?>">
                                </div>
                            </div>
                        <?php endif; ?>


                        <div class="form-group">
                            <label>
                                <strong>
                                    3. Apakah saat ini anda melamar kerja di perusahaan/rs lain?
                                </strong>
                            </label>
                            <input class="form-control-plaintext" readonly value="<?= $etc->question_three === '1' ? "Iya" : "Tidak"; ?>">
                        </div>

                        <?php if ($etc->position_question_three !== null) : ?>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><strong> Posisi :</strong></label>
                                <div class="col-sm-11">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $etc->position_question_three; ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label>
                                <strong>
                                    4. Apakah saat ini anda terikat kontrak dengan perusahaan/rs lain?
                                </strong>
                            </label>
                            <input class="form-control-plaintext" readonly value="<?= $etc->question_four === '1' ? "Iya" : "Tidak"; ?>">
                        </div>
                        <div class="form-group">
                            <label>
                                <strong>
                                    5. Apakah anda memilki pekerjaan part time ?
                                </strong>
                            </label>
                            <input class="form-control-plaintext" readonly value="<?= $etc->question_five === '1' ? "Iya" : "Tidak"; ?>">
                        </div>
                        <?php if ($etc->where_question_five !== null) : ?>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><strong> Dimana:</strong></label>
                                <div class="col-sm-11">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $etc->where_question_five; ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($etc->position_question_five !== null) : ?>
                            <div class="form-group row">
                                <label class="col-sm-1 col-form-label"><strong> Posisi:</strong></label>
                                <div class="col-sm-11">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $etc->position_question_five; ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label>
                                <strong>
                                    6. Apakah anda pernah mengalami sakit keras atau menjalani perawatan intensif?
                                </strong>
                            </label>
                            <input class="form-control-plaintext" readonly value="<?= $etc->question_six === '1' ? "Iya" : "Tidak"; ?>">
                        </div>
                        <?php if ($etc->when_question_six !== null) : ?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><strong> Kapan:</strong></label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $etc->when_question_six; ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($etc->disease_question_six !== null) : ?>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"><strong> Sakit Apa:</strong></label>
                                <div class="col-sm-10">
                                    <input type="text" readonly class="form-control-plaintext" value="<?= $etc->disease_question_six; ?>">
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label>
                                <strong>
                                    7. Apabila diterima, kapan anda mulai bekerja
                                </strong>
                            </label>
                            <input class="form-control-plaintext" readonly value="<?= $etc->question_seven; ?>">
                        </div>
                        <div class="form-group">
                            <label>
                                <strong>
                                    8. Berapa besar gaji yang anda harapkan?
                                </strong>
                            </label>
                            <input class="form-control-plaintext" readonly value="<?= "Rp " . number_format($etc->question_eight, 2, ',', '.'); ?>">
                        </div>
                        <div class="form-group">
                            <label>
                                <strong>
                                    9. Apakah anda mempunyai saudara atau teman yang bekerja di RS Mitra Husada husada ?
                                </strong>
                            </label>
                            <input class="form-control-plaintext" readonly value="<?= $etc->question_nine === '1' ? "Iya" : "Tidak"; ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>