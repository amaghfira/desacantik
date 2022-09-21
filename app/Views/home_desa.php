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
                    <div class="col-lg-6">
                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1qs2GX4JiaGgBZRifCvTySH4ajOhNinJP" width="100%" height="600"></iframe>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p><?= $d['deskripsi']; ?></p>
                        <!-- <a href="#daftar-desa" class="btn-learn-more">Lihat Daftar Desa</a> -->
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
                            <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="5" class="purecounter"></span>
                            <p>Jarak kantor kepala desa ke kantor camat (Km)</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>
                            <p>Waktu tempuh dari kantor kepala desa ke kantor camat (Menit)</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                        <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="2" class="purecounter"></span>
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
                <h3>Direktori Data</h3>
            </header>

            <!-- Section pilih variabel -->
            <form method="post" id="var_form" enctype="multipart/form-data" action="<?= base_url(); ?>/Desa/getVar2">
                <div class="container" data-aos="fade-up">
                    <div class="row" style="margin: 0px 10px 10px 10px;">
                        <b> Pilih Variabel : </b><br />
                        <select name="id_var" id="id_var" class="form-control" style="width: 100%;">
                            <option value="">-- Pilih Variabel --</option>
                            <?php foreach ($landmark as $land) : ?>
                                <option value="<?= $land['jenis']; ?>"><?= $land['jenis']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <hr />
                        <input type="hidden" name="nama_desa" value="<?= $nama_desa; ?>">
                        <input type="hidden" name="action" value="add">
                        <input type="submit" class="getstarted scrollto" value="Tampilkan" id="tampil" />
                        <br /><br />
                        <div id="dataSet"><br /><br /><br /><br /><br /></div>
                    </div>
                </div>
            </form>
    </section>
    <br>


    <!-- ======= Potensi Section ======= -->
    <section id="potensi-desa" class="">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Potensi Ekonomi Desa <?= $d['nama_desa']; ?></h2>
            </div>

            <div class="row content">
                <div class="col-lg-12">
                    <div class="">
                        <table class="cell-border compact stripe hover" id="tabel-master">
                            <thead class="thead-light">
                                <tr style="text-align: center;" class="bg-info">
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
        </div>
    </section><!-- End Potensi Section -->


    <!-- ========= Galeri Foto Section ============ -->
    <section id="galeri" class="wow fadeIn">
        <header class="section-header">
            <h3>Galeri Foto</h3>
        </header>
        <link rel="stylesheet" href="<?= base_url(); ?>/dist/scss/css/style.css">
        <ul class="honeycomb" lang="es">
            <li class="honeycomb-cell">
                <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/1">
                <div class="honeycomb-cell__title">Diseño exclusivo</div>
            </li>
            <li class="honeycomb-cell">
                <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/2">
                <div class="honeycomb-cell__title">Impermeables</div>
            </li>
            <li class="honeycomb-cell">
                <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/3">
                <div class="honeycomb-cell__title">Tablero doble cara</div>
            </li>
            <li class="honeycomb-cell">
                <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/4">
                <div class="honeycomb-cell__title">Maletín de empaque</div>
            </li>
            <li class="honeycomb-cell">
                <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/5">
                <div class="honeycomb-cell__title">Antireflectivo<small>No vidrio</small></div>
            </li>
            <li class="honeycomb-cell">
                <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/6">
                <div class="honeycomb-cell__title">6 fichas<small>1 de repuesto</small></div>
            </li>
            <li class="honeycomb-cell">
                <img class="honeycomb-cell__image" src="https://source.unsplash.com/random/7">
                <div class="honeycomb-cell__title">Tablero magnético</div>
            </li>
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
                <div class="container" data-aos="fade-up">
                    <div class="row" style="margin: 0px 10px 10px 10px; text-align:center;">
                        <p><i class="fa fa-home fa-2x" aria-hidden="true"></i> Kantor Desa <?= $nama_desa; ?>: </p>
                        <p><i class="fa fa-phone fa-2x" aria-hidden="true"></i> Telepon: (0354) 780xxx</p>
                        <p><i class="fa fa-envelope fa-1x" aria-hidden="true"></i> Email: aulia.maghfira@bps.go.id</p>
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