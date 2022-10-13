<!-- form unggah -->
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <strong>Form Unggah Laporan Desa Cantik</strong>
        </div>

        <div class="card-body">
            <div class="mt-2">
                <?php if (session()->has('message-file')) : ?>
                    <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                        <?= session()->getFlashdata('message-file') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <?php $validation = \Config\Services::validation(); ?>
            </div>
            <label for="">Upload File Laporan</label>
            <form action="<?= base_url(); ?>/simpan-laporan" method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <div class="mb-3">
                        <input type="file" name="file" class="" id="file" required accept=".pdf, .docx, .doc">
                    </div>
                </div>

                <div class="d-grid">
                    <button class="btn btn-success" type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>