<div class="col-lg-8">
    <div class="blog-post">
        <div class="down-content">
            <h4>Lain-lain</h4>
            <form class="mt-4" action="" method="POST">
                <div class="form-group">
                    <label for="questionOne">
                        <strong>
                            1. Dari mana anda mengatahui lowongan kerja di RS. Mitra Husada
                        </strong>
                    </label>
                    <input type="text" class="form-control <?= form_error("questionOne") ? "is-invalid" : ""; ?>" id="questionOne" placeholder="Masukan Jawaban anda" name="questionOne" value="<?= set_value("questionOne") ? set_value("questionOne") : $etc->question_one; ?>">
                    <?= form_error('questionOne', '<span class="invalid-feedback">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="questionTwo">
                        <strong>
                            2. Apakah anda pernah melamar kerja di RS Mitra Husada sebelumnya
                        </strong>
                    </label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="questionTwo" id="questionTwoYes" value="1" <?= set_value("questionTwo", $etc->question_two)  === '1' ? 'checked="checked"' : ''; ?>>
                        <label class="form-check-label" for="questionTwoYes">Iya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="questionTwo" id="questionTwoNo" value="0" <?= set_value("questionTwo", $etc->question_two) === '0' ? 'checked="checked"' : ''; ?>>
                        <label class="form-check-label" for="questionTwoNo">Tidak</label>
                    </div>
                </div>
                <div class="form-group whenqustionTwo <?= $etc->when_question_two === NULL ? 'd-none' : ''; ?>">
                    <label for="whenqustionTwo">Kapan ?</label>
                    <input type="date" class="form-control <?= form_error('whenqustionTwo') ? "is-invalid" : ""; ?>" id="whenqustionTwo" name="whenqustionTwo" value="<?= set_value('whenqustionTwo') ? set_value('whenqustionTwo') : $etc->when_question_two; ?>">
                    <?= form_error('whenqustionTwo', '<span class="invalid-feedback">', '</span>') ?>
                </div>

                <div class="form-group positionQuestionTwo <?= $etc->position_question_two === NULL ? 'd-none' : ''; ?>">
                    <label for="positionQuestionTwo">Posisi Apa ?</label>
                    <input type="text" class="form-control <?= form_error('positionQuestionTwo') ? "is-invalid" : ""; ?>" id="positionQuestionTwo" placeholder="Masukan jawaban anda" name="positionQuestionTwo" value="<?= set_value('positionQuestionTwo') ? set_value('positionQuestionTwo') : $etc->position_question_two; ?>">
                    <?= form_error('positionQuestionTwo', '<span class="invalid-feedback">', '</span>') ?>
                </div>

                <div class="form-group">
                    <label for="qustionThree">
                        <strong>
                            3. Apakah saat ini anda melamar kerja di perusahaan/rs lain?
                        </strong>
                    </label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="qustionThree" id="questionThreeYes" value="1" <?= set_value("qustionThree", $etc->question_three)  === '1' ? 'checked="checked"' : ''; ?>>
                        <label class="form-check-label" for="questionThreeYes">Iya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="qustionThree" id="questionThreeNo" value="0" <?= set_value("qustionThree", $etc->question_three)  === '0' ? 'checked="checked"' : ''; ?>>
                        <label class="form-check-label" for="questionThreeNo">Tidak</label>
                    </div>
                </div>

                <div class="form-group positionQuestionThree <?= $etc->position_question_three === NULL ? 'd-none' : ''; ?>">
                    <label for="positionQuestionThree">Posisi Apa ?</label>
                    <input type="text" class="form-control <?= form_error('positionQuestionThree') ? "is-invalid" : ""; ?>" id="positionQuestionThree" placeholder="Masukan jawaban anda" name="positionQuestionThree" value="<?= set_value('positionQuestionThree') ? set_value('positionQuestionThree') : $etc->position_question_three; ?>">
                    <?= form_error('positionQuestionThree', '<span class="invalid-feedback">', '</span>') ?>
                </div>

                <div class="form-group">
                    <label for="questionFour">
                        <strong>
                            4. Apakah saat ini anda terikat kontrak dengan perusahaan/rs lain?
                        </strong>
                    </label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="questionFour" id="questionFourYes" value="1" <?= set_value("questionFour", $etc->question_four) === '1' ? 'checked="checked"' : ''; ?>>
                        <label class="form-check-label" for="questionFourYes">Iya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="questionFour" id="questionFourNo" value="0" <?= set_value("questionFour", $etc->question_four)  === '0' ? 'checked="checked"' : ''; ?>>
                        <label class="form-check-label" for="questionFourNo">Tidak</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="questionFive">
                        <strong>
                            5. Apakah anda memilki pekerjaan part time ?
                        </strong>
                    </label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="questionFive" id="questionFiveYes" value="1" <?= set_value("questionFive", $etc->question_five) === '1' ? 'checked="checked"' : ''; ?>>
                        <label class="form-check-label" for="questionFiveYes">Iya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="questionFive" id="questionFiveNo" value="0" <?= set_value("questionFive", $etc->question_five) === '0' ? 'checked="checked"' : ''; ?>>
                        <label class="form-check-label" for="questionFiveNo">Tidak</label>
                    </div>
                </div>
                <div class="form-group whereQuestionFive <?= $etc->where_question_five === NULL ? 'd-none' : ''; ?>">
                    <label for="whereQuestionFive">Dimana ?</label>
                    <input type="text" class="form-control <?= form_error("whereQuestionFive") ? "is-invalid" : ""; ?>" id="whereQuestionFive" placeholder="Masukan jawaban anda" name="whereQuestionFive" value="<?= set_value("whereQuestionFive") ? set_value("whereQuestionFive") : $etc->where_question_five; ?>">
                    <?= form_error('whereQuestionFive', '<span class="invalid-feedback">', '</span>') ?>
                </div>
                <div class="form-group positionQuestionFive <?= $etc->position_question_five === NULL ? 'd-none' : ''; ?>">
                    <label for="positionQuestionFive">Posisi Apa ?</label>
                    <input type="text" class="form-control <?= form_error("positionQuestionFive") ? "is-invalid" : ""; ?>" id="positionQuestionFive" placeholder="Masukan jawaban anda" name="positionQuestionFive" value="<?= set_value("positionQuestionFive") ? set_value("positionQuestionFive") : $etc->position_question_five; ?>">
                    <?= form_error('positionQuestionFive', '<span class="invalid-feedback">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="questionSix">
                        <strong>
                            6. Apakah anda pernah mengalami sakit keras atau menjalani perawatan
                            intensif?
                        </strong>
                    </label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="questionSix" id="questionSixYes" value="1" <?= set_value("questionSix", $etc->question_six) === '1' ? 'checked="checked"' : ''; ?>>
                        <label class="form-check-label" for="questionSixYes">Iya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="questionSix" id="questionSixNo" value="0" <?= set_value("questionSix", $etc->question_six) === '0' ? 'checked="checked"' : ''; ?>>
                        <label class="form-check-label" for="questionSixNo">Tidak</label>
                    </div>
                </div>
                <div class="form-group whenQuestionSix <?= $etc->when_question_two === NULL ? 'd-none' : ''; ?>">
                    <label for="whenQuestionSix">Kapan ?</label>
                    <input type="date" class="form-control <?= form_error("whenQuestionSix") ? "is-invalid" : ""; ?>" id="whenQuestionSix" placeholder="Masukan jawaban anda" name="whenQuestionSix" value="<?= set_value("whenQuestionSix") ? set_value("whenQuestionSix") : $etc->when_question_six ?>">
                    <?= form_error('whenQuestionSix', '<span class="invalid-feedback">', '</span>') ?>
                </div>
                <div class="form-group diseaseQuestionSix <?= $etc->disease_question_six === NULL ? 'd-none' : ''; ?>">
                    <label for="diseaseQuestionSix">Penyakit Apa ?</label>
                    <input type="text" class="form-control <?= form_error("diseaseQuestionSix") ? "is-invalid" : ""; ?>" id="diseaseQuestionSix" placeholder="Masukan jawaban anda" name="diseaseQuestionSix" value="<?= set_value("diseaseQuestionSix") ? set_value("diseaseQuestionSix") : $etc->disease_question_six ?>">
                    <?= form_error('diseaseQuestionSix', '<span class="invalid-feedback">', '</span>') ?>
                </div>
                <div class="form-group">
                    <label for="questionSeven">
                        <strong>
                            7. Apabila diterima, kapan anda mulai bekerja
                        </strong>
                    </label>
                    <input type="date" class="form-control <?= form_error("questionSeven") ? "is-invalid" : ""; ?>" id="questionSeven" placeholder="Masukan jawaban anda" name="questionSeven" value="<?= set_value('questionSeven') ? set_value('questionSeven') : $etc->question_seven; ?>">
                    <?= form_error('questionSeven', '<span class="invalid-feedback">', '</span>') ?>
                </div>

                <div class="form-group">
                    <label for="questionEight">
                        <strong>
                            8. Berapa besar gaji yang anda harapkan?
                        </strong>
                    </label>
                    <input type="text" class="form-control <?= form_error("questionEight") ? "is-invalid" : ""; ?>" id="questionEight" placeholder="Masukan jawaban anda" name="questionEight" value="<?= set_value('questionEight') ? set_value('questionEight') : $etc->question_eight; ?>">
                    <?= form_error('questionEight', '<span class="invalid-feedback">', '</span>') ?>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">
                        <strong>
                            9. Apakah anda mempunyai saudara atau teman yang bekerja di RS Mitra Husada
                            husada ?
                        </strong>
                    </label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="questionNine" id="questionNineYes" value="1" <?= set_value("questionNine", $etc->question_nine) === '1' ? 'checked="checked"' : ''; ?>>
                        <label class="form-check-label" for="questionNineYes">Iya</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="questionNine" id="questionNineNo" value="0" <?= set_value("questionNine", $etc->question_nine) === '0' ? 'checked="checked"' : ''; ?>>
                        <label class="form-check-label" for="questionNineNo">Tidak</label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
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