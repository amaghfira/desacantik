<section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" align="center" data-aos-delay="100">
        <img src="<?= base_url(); ?>/img/logo-bps.png" class="img-fluid" alt="" width="100px" />
        <span>&nbsp;&nbsp;&nbsp;</span>
        <img src="<?= base_url(); ?>/img/logo-pemprov.png" class="img-fluid" alt="" width="70px" />
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 text-center">
                <h1>Selamat Datang di Portal Desa Cinta Statistik</h1>
                <h2>Provinsi Kalimantan Timur</h2>
            </div>
        </div>
        <div class="text-center">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </div>
</section><!-- End Hero -->

<br>
<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tentang Desa Cantik</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6">
                    <img src="<?= base_url(); ?>/img/logodescan.png" class="img-fluid" alt="" width="80%">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" style="text-align: justify ;">
                    <p>
                        Berdasarkan Undang-Undang Nomor 6 Tahun 2014 tentang Desa dan Peraturan Presiden Nomor 39 Tahun 2019 tentang Satu Data Indonesia (SDI), pemerintah desa/kelurahan menjadi penyelenggara kegiatan statistik di wilayahnya masing-masing sehingga peran desa/kelurahan sebagai satuan wilayah terkecil menjadi sangat penting. Hal ini karena desa/kelurahan tidak lagi menjadi objek pembangunan, melainkan sebagai subjek dan ujung tombak pembangunan. Oleh karena itu, sebagaimana tertuang dalam Rencana Pembangunan Jangka Menengah Nasional (RPJMN) periode 2020-2024, diperlukan penguatan tata kelola pemerintahan desa/kelurahan untuk mengembangkan wilayah guna mengurangi kesenjangan dan menjamin pemerataan. Kebijakan desentralisasi dan otonomi daerah menjadi instrumen utama dalam memberikan peluang bagi pemerintah desa/kelurahan untuk membangun desa/kelurahan serta meningkatkan kemandirian dan daya saing desa/kelurahan.
                    </p>
                    <p>
                        Program Pembinaan Desa Cantik adalah sebuah program peningkatan kompetensi aparat desa/kelurahan dalam pengelolaan dan pemanfaatan data pada desa/kelurahan dengan bentuk komunitas statistik desa/kelurahan sehingga perencanaan pembangunan desa/kelurahan lebih tepat sasaran
                    </p>
                    <a href="#daftar-desa" class="btn-learn-more">Lihat Daftar Desa</a>
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
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="5" class="purecounter"></span>
                        <p>Jumlah Kabupaten</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-purecounter-start="0" data-purecounter-end="103" data-purecounter-duration="5" class="purecounter"></span>
                        <p>Jumlah Kecamatan</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-purecounter-start="0" data-purecounter-end="1046" data-purecounter-duration="2" class="purecounter"></span>
                        <p>Jumlah Desa</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2" class="purecounter"></span>
                        <p>Jumlah Desa Cantik</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->
    <link type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link type="text/css" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css" rel="stylesheet" />
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('#example').DataTable({
                "scrollY": "40vh",
                "scrollX": true,
                "scrollCollapse": true,
                "paging": false,
                "autoWidth": false,
                "bJQueryUI": true,
                dom: 'Bfrtip',
                buttons: [
                    'pageLength', 'copy', 'csv', 'excel', 'pdf', 'print'
                ],
                lengthMenu: [
                    [-1, 10, 25, 50, 100],
                    ['Tampilkan Semua', '10 baris', '25 baris', '50 baris', '100 baris']
                ]
            });
        });
    </script>
    <!-- ======= Cta Section ======= -->
    <section id="daftar-desa" class="wow fadeIn">
        <div class="container">
            <header class="section-header">
                <h3>Daftar Desa Cantik</h3>
            </header>

            <div class="row row-eq-height justify-content-center">

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <div class="card-body">
                            <img src="<?= base_url(); ?>/img/logokab/paser.png" class="img-fluid" alt="" width="65px" />
                            <h5 class="card-title">Kabupaten Paser</h5>
                            <p class="card-text"></p>
                            <a href="<?= base_url(); ?>/paser" class="readmore">Lihat</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <div class="card-body">
                            <img src="<?= base_url(); ?>/img/logokab/kubar.png" class="img-fluid" alt="" width="45px" />
                            <h5 class="card-title">Kabupaten Kutai Barat</h5>
                            <p class="card-text"></p>
                            <a href="<?= base_url(); ?>/kubar" class="readmore">Lihat</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <div class="card-body">
                            <img src="<?= base_url(); ?>/img/logokab/kukar.png" class="img-fluid" alt="" width="50px" />
                            <h5 class="card-title">Kabupaten Kutai Kartanegara</h5>
                            <p class="card-text"></p>
                            <a href="<?= base_url(); ?>/kukar" class="readmore">Lihat</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row row-eq-height justify-content-center">

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <div class="card-body">
                            <img src="<?= base_url(); ?>/img/logokab/kutim.png" class="img-fluid" alt="" width="90px" />
                            <h5 class="card-title">Kabupaten Kutai Timur</h5>
                            <p class="card-text"></p>
                            <a href="<?= base_url(); ?>/kutim" class="readmore">Lihat</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <div class="card-body">
                            <img src="<?= base_url(); ?>/img/logokab/berau.png" class="img-fluid" alt="" width="90px" />
                            <h5 class="card-title">Kabupaten Berau</h5>
                            <p class="card-text"></p>
                            <a href="<?= base_url(); ?>/berau" class="readmore">Lihat</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <div class="card-body">
                            <img src="<?= base_url(); ?>/img/logokab/ppu.png" class="img-fluid" alt="" width="90px" />
                            <h5 class="card-title">Kabupaten Penajam Paser Utara</h5>
                            <p class="card-text"></p>
                            <a href="<?= base_url(); ?>/ppu" class="readmore">Lihat</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row row-eq-height justify-content-center">

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <div class="card-body">
                            <img src="<?= base_url(); ?>/img/logokab/balikpapan.png" class="img-fluid" alt="" width="50px" />
                            <h5 class="card-title">Kota Balikpapan</h5>
                            <p class="card-text"></p>
                            <a href="<?= base_url(); ?>/balikpapan" class="readmore">Lihat</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <div class="card-body">
                            <img src="<?= base_url(); ?>/img/logokab/samarinda.png" class="img-fluid" alt="" width="50px" />
                            <h5 class="card-title">Kota Samarinda</h5>
                            <p class="card-text"></p>
                            <a href="<?= base_url(); ?>/samarinda" class="readmore">Lihat</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card wow bounceInUp">
                        <div class="card-body">
                            <img src="<?= base_url(); ?>/img/logokab/bontang.png" class="img-fluid" alt="" width="50px" />
                            <h5 class="card-title">Kota Bontang</h5>
                            <p class="card-text"></p>
                            <a href="<?= base_url(); ?>/bontang" class="readmore">Lihat</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script type="text/javascript">
        $(document).ready(function() {

            $("#tampil").click(function() {
                $(this).after('<div id="loader"><img src="../../img/spinnerloading.gif" alt="loading data" /></div>');
                $.get('themes/loadDirektori.php?id_var=' + $("#id_var").val(), function(data) {
                    $("#dataSet").html("");
                    $("#dataSet").html(data);
                    $('#loader').slideUp(200, function() {
                        $(this).remove();
                    });
                });
            });
        });
    </script>
</main><!-- End #main -->