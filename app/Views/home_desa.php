<section id="hero" class="d-flex align-items-center">
    <?php foreach ($desa as $d) : ?>
        <div class="container position-relative" data-aos="fade-up" align="center" data-aos-delay="100">
            <img src="<?= base_url(); ?>/img/bps.png" class="img-fluid" alt="" />
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Selamat Datang di Desa Cantik (Cinta Statistik)</h1>
                    <h2>Desa <?= $d['nama_desa']; ?>, <?= $d['nama_kabkot']; ?></h2>
                </div>
            </div>
            <div class="text-center">
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>
    <?php endforeach; ?>
</section><!-- End Hero -->

<br>
<main id="main">
    <?php foreach ($desa as $d) : ?>
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tentang Desa <?= $d['nama_desa']; ?></h2>
                </div>

                <div class="row content">
                    <div class="col-lg-12">
                        <iframe src="https://www.arcgis.com/apps/mapviewer/index.html?url=https://arcgis-spasial.kaltimprov.go.id/arcgis/rest/services/GEOPORTALSMD/MapServer" width="100%" height="600"></iframe>
                        <hr>
                    </div>
                </div>
                <div class="row content">
                    <div class="col-lg-12">
                        <p><?= $d['deskripsi']; ?></p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row justify-content-end">

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="<?= $d['jml_penduduk']; ?>" data-purecounter-duration="5" class="purecounter"></span>
                            <p>Jumlah Penduduk</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="<?= $d['jarak_kantor_camat']; ?>" data-purecounter-duration="5" class="purecounter"></span>
                            <p>Jarak kantor kepala desa ke kantor camat (Km)</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="<?= $d['waktu_tempuh']; ?>" data-purecounter-duration="2" class="purecounter"></span>
                            <p>Waktu tempuh dari kantor kepala desa ke kantor camat (Menit)</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="<?= $d['jarak_kantor_bupati']; ?>" data-purecounter-duration="2" class="purecounter"></span>
                            <p>Jarak tempuh dari kantor kepala desa/lurah ke kantor bupati/walikota (km)</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->
    <?php endforeach; ?>

    <!-- =========== Pilih variabel section ============== -->
    <section id="daftar-desa" class="wow fadeIn">
        <div class="container">
            <header class="section-header">
                <h3>Potensi Ekonomi Desa</h3>
            </header>

            <div class="row content">
                <div class="col-lg-12">
                    <div class="">
                        <table class="table table-bordered table-striped" id="tabel-master">
                            <thead class="thead-dark">
                                <tr style="text-align: center;">
                                    <th>Daftar Industri</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($potensieko) : ?>
                                    <?php foreach ($potensieko as $p) : ?>
                                        <tr>
                                            <td><?php echo $p['daftar_industri']; ?></td>
                                            <td><?php echo $p['jml']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <br>
                    </div>
                </div>
            </div>

    </section>
    <br>

    <!-- ========= Galeri Foto Section ============ -->
    <section id="galeri" class="wow fadeIn">
        <header class="section-header">
            <h3>Galeri Foto</h3>
        </header>
        <link rel="stylesheet" href="<?= base_url(); ?>/dist/scss/css/style.css">
        <ul class="honeycomb" lang="es">
            <?php foreach ($fotodesa as $foto) : ?>
                <li class="honeycomb-cell">
                    <img class="honeycomb-cell__image" src="<?= base_url(); ?>/img/fotodesa/<?= $foto['path_foto']; ?>">
                    <div class="honeycomb-cell__title"><?= $foto['ket']; ?></div>
                </li>
            <?php endforeach; ?>
            <li class="honeycomb-cell honeycomb__placeholder"></li>
        </ul>
        </div>
    </section> <!-- End Galeri Section -->

    <br><br>

    <!-- =========== Kontak section ============== -->
    <section id="kontak" class="wow fadeIn">
        <div class="container">
            <header class="section-header">
                <h3>Hubungi Kami</h3>
            </header>
            <hr>
            <!-- Section kontak deskripsi -->
            <div class="container">
                <div class="row" style="margin: 0px 10px 10px 10px; text-align:justify;">
                <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        <?php foreach ($desa as $des) : ?>
                            <p><i class="fa fa-home fa-1x" aria-hidden="true"></i> <b>Kantor Desa:</b> <br> <?= $des['kantor_desa']; ?> </p>
                            <p><i class="fa fa-phone fa-1x" aria-hidden="true"></i> <b>Telepon:</b> <br> <?= $des['no_telp']; ?></p>
                            <p><i class="fa fa-envelope fa-1x" aria-hidden="true"></i> <b>Email:</b> <br> <?= $des['email']; ?></p>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-4">
                        <p><i class="fa fa-clock-o fa-1x" aria-hidden="true"></i> <b>Jam Operasional:</b></p>
                        <p>
                            <b>Hari Kerja:</b> <br>
                            Senin - Kamis: 07.30 WITA - 16.00 WITA <br>
                            Jumat: 07.30 - 11.00 WITA
                        </p>
                        <p>
                            <b>Libur:</b> <br>
                            Sabtu, Minggu, dan Hari Libur Nasional
                        </p>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
    </section>
</main>



<script>
    $(document).ready(function() {

        $('#tabel-master tfoot th').each(function() {
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="Search ' + title + '" />');
        });

        var tabel = $("#tabel-master").DataTable({
            "responsive": false,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            initComplete: function() {
                // Apply the search
                this.api().columns().every(function() {
                    var that = this;

                    $('input', this.footer()).on('keyup change clear', function() {
                        if (that.search() !== this.value) {
                            that
                                .search(this.value)
                                .draw();
                        }
                    });
                });
            }
        });

        tabel.buttons().container()
            .appendTo('#tabel-master_wrapper .col-md-6:eq(0)');


        $('#tabel-var tfoot th').each(function() {
            var title = $(this).text();
            $(this).html('<input type="text" placeholder="Search ' + title + '" />');
        });

        var tabel = $("#tabel-var").DataTable({
            "responsive": false,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            initComplete: function() {
                // Apply the search
                this.api().columns().every(function() {
                    var that = this;

                    $('input', this.footer()).on('keyup change clear', function() {
                        if (that.search() !== this.value) {
                            that
                                .search(this.value)
                                .draw();
                        }
                    });
                });
            }
        });

        tabel.buttons().container()
            .appendTo('#tabel-var_wrapper .col-md-6:eq(0)');

    });
</script>