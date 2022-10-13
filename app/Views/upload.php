<!-- form unggah -->
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <strong>Form Unggah Data Desa Cantik</strong>
        </div>

        <div class="card-body">
            <p>
                1. Unduh template yang telah disediakan <br>
                2. Isi file excel tersebut dengan <b>mengikuti aturan yang tertera di dalamnya</b><br>
                3. Unggah File excel yang telah terisi data monitoring <br>
                4. Format yang diijinkan: .xlsx
            </p>
            <br>

            <a href="<?= base_url(); ?>/download" class="btn btn-dark">Unduh Template</a>
            <br><br><br>
            <div class="mt-2">
                <?php if (session()->has('message-desa')) : ?>
                    <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                        <?= session()->getFlashdata('message-desa') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if (session()->has('message-landmark')) : ?>
                    <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                        <?= session()->getFlashdata('message-landmark') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if (session()->has('message-foto')) : ?>
                    <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                        <?= session()->getFlashdata('message-foto') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if (session()->has('message-file')) : ?>
                    <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                        <?= session()->getFlashdata('message-file') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <?php if (session()->has('message-gagal')) : ?>
                    <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                        <?= session()->getFlashdata('message-gagal') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <?php $validation = \Config\Services::validation(); ?>
            </div>
            <label for="">Upload File Excel</label>
            <form action="<?= base_url(); ?>/simpan-excel" method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <input type="file" name="file" class="" id="file" required accept=".csv, .xls, .xlsx">
                    </div>
                </div>
                <br>
                <label for="">Upload Foto Dokumentasi</label>
                <p>Foto yang diunggah dapat lebih dari 1.</p>
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <input type="file" name="foto[]" class="" id="foto" multiple required>
                    </div>
                </div>

                <div class="d-grid">
                    <button class="btn btn-success" type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>