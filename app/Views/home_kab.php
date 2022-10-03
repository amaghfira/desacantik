<section id="daftar-desa" class="wow fadeIn">
    <div class="container">
        <header class="section-header">
            <br>
            <h3>Desa Cantik <?= $nama_kab; ?></h3>
        </header>

        <div class="row row-eq-height justify-content-center">
            <?php if ($desa) : ?>
                <?php foreach ($desa as $des) : ?>
                    <div class="col-lg-4 mb-4">
                        <div class="card wow bounceInUp">
                            <img src="<?= base_url(); ?>/img/fotodepan/<?= $des['path_foto']; ?>" alt="" srcset="">
                            <div class="card-body">
                                <h5 class="card-title"><?= $des['nama_desa']; ?></h5>
                                <p class="card-text"><?= implode(' ', array_slice(explode(' ', $des['deskripsi']), 0, 30)) . '...'; ?></p>
                                <?php $url = strtolower(preg_replace('/\s+/', '', $des['nama_desa'])); ?>
                                <a href="<?= current_url(); ?>/<?= $url; ?>" class="readmore">Lihat</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>