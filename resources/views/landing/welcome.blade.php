@extends('master')
@section('title', 'Sigap - Pelayanan Tanggap Darurat Bencana')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="beranda" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Sigap, </h2>
                    <p>Sampaikan Laporan Bencana Langsung ke Pemerintah
                        <br>Wujudkan Keselamatan Bersama!
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        @guest
                            <a href="{{ route('login') }}" class="btn-get-started">Masuk</a>
                            <a href="{{ route('register') }}" class="btn-watch-video d-flex align-items-center"><span>Daftar Akun</span></a>
                        @else
                            @if(Auth::user()->role === 'ADMIN')
                                <a href="{{ route('admin.home') }}" class="btn-get-started">Dashboard</a>
                            @else
                                <a href="{{ route('user.home') }}" class="btn-get-started">Dashboard</a>
                            @endif
                        @endguest
                    </div>
                    
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('img/hero-img.svg') }}" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="100">
                </div>
            </div>
        </div>
        <div class="icon-boxes position-relative">
            <div class="container position-relative">
                <div class="row gy-4 mt-5">
                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-exclamation-octagon"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Lapor Bencana</a></h4>
                        </div>
                    </div><!--End Icon Box -->
                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-telephone"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Kontak Darurat</a></h4>
                        </div>
                    </div><!--End Icon Box -->
                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-journal-bookmark"></i></div>
                            <h4 class="title"><a href="" class="stretched-link">Panduan Evakuasi</a></h4>
                        </div>
                    </div><!--End Icon Box -->
                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-book"></i></div>
                            <h4 class="title"><a href="edukasi-bencana.php" class="stretched-link">Edukasi Bencana</a></h4>
                        </div>
                    </div><!--End Icon Box -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= Stats Counter Section ======= -->
        <section id="stats-counter" class="stats-counter">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Data Bencana Jawa Timur 2024</h2>
                    <p>Sumber: <a href="https://dibi.bnpb.go.id/">https://dibi.bnpb.go.id/</a></p>
                </div>
                <div class="row gy-4 align-items-center">
                    <div class="col-lg-6">
                        <img src="{{ asset('img/stats-img.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="54" data-purecounter-duration="3"
                                class="purecounter"></span>
                            <p><strong>Bencana</strong> </p>
                        </div><!-- End Stats Item -->
                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="3"
                                class="purecounter"></span>
                            <p><strong>Meninggal Dunia</strong> </p>
                        </div><!-- End Stats Item -->
                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="16" data-purecounter-duration="3"
                                class="purecounter"></span>
                            <p><strong>Luka-Luka</strong></p>
                        </div><!-- End Stats Item -->
                        <div class="stats-item d-flex align-items-center">
                            <span data-purecounter-start="0" data-purecounter-end="53159" data-purecounter-duration="3"
                                class="purecounter"></span>
                            <p><strong>Mengungsi dan Menderita</strong></p>
                        </div><!-- End Stats Item -->
                    </div><!-- End Stats Item -->
                </div>
            </div>
        </section>
        <!-- End Stats Counter Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container text-center" data-aos="zoom-out">
                <a href="https://youtu.be/IJFVib4YiXA?si=SEP5JAfwQRd8ZFlc" class="glightbox play-btn"></a>
                <h3>Tanggap Darurat Bencana</h3>
                <p> Tanggap Darurat Bencana adalah langkah cepat dan koordinasi yang diambil oleh pemerintah, lembaga
                    kemanusiaan, dan masyarakat untuk memberikan bantuan dan penanganan kepada korban bencana alam atau
                    kejadian
                    darurat lainnya dengan tujuan mengurangi dampak negatifnya serta memulihkan situasi kembali normal.</p>
                <a class="cta-btn" href="#">Call To Action</a>
            </div>
        </section>
        <!-- End Call To Action Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq">
            <div class="container" data-aos="fade-up">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <div class="content px-xl-5">
                            <h3>Frequently Asked <strong>Questions</strong></h3>
                            <p>
                                Tanggap Darurat Bencana melibatkan evakuasi, bantuan medis, pembangunan tempat penampungan,
                                koordinasi
                                dengan lembaga dan relawan, serta penyebaran informasi keselamatan.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-8">

                        <div class="accordion accordion-flush" id="faqlist" data-aos="fade-up" data-aos-delay="100">

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-1">
                                        <span class="num">1.</span>
                                        Bagaimana meningkatkan kesiapsiagaan bencana?
                                    </button>
                                </h3>
                                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Meningkatkan kesiapsiagaan bencana melibatkan serangkaian langkah proaktif untuk
                                        mengurangi risiko
                                        dan merespons dengan cepat saat bencana terjadi. Hal ini mencakup pendidikan
                                        masyarakat tentang
                                        risiko bencana, penyusunan rencana tanggap darurat yang jelas, pelatihan reguler
                                        untuk tim tanggap
                                        darurat, pembangunan infrastruktur yang tahan bencana, penggunaan teknologi untuk
                                        pemantauan dan
                                        peringatan dini, serta kerjasama antar lembaga dan komunitas untuk meningkatkan
                                        resiliensi dan
                                        respons terhadap bencana.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-2">
                                        <span class="num">2.</span>
                                        Apa yang harus dilakukan saat terjebak dalam situasi darurat?
                                    </button>
                                </h3>
                                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Saat terjebak dalam situasi darurat, yang terpenting adalah tetap tenang dan
                                        melakukan evaluasi
                                        cepat terhadap situasi. Setelah itu, ambil langkah-langkah yang diperlukan untuk
                                        meningkatkan
                                        keselamatan diri dan orang lain, termasuk menggunakan pengetahuan dan keterampilan
                                        yang relevan,
                                        serta mencari bantuan secepat mungkin jika diperlukan.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-3">
                                        <span class="num">3.</span>
                                        Bagaimana akses layanan medis darurat?
                                    </button>
                                </h3>
                                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">

                                        Langkah-langkah dalam Tanggap Darurat Bencana meliputi evakuasi korban, penyediaan
                                        bantuan medis dan
                                        logistik, pembangunan tempat penampungan sementara, koordinasi dengan lembaga dan
                                        relawan bencana,
                                        serta penyebaran informasi kepada masyarakat terkait langkah-langkah keselamatan dan
                                        bantuan yang
                                        tersedia.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-4">
                                        <span class="num">4.</span>
                                        Apa langkah-langkah pemulihan setelah bencana?
                                    </button>
                                </h3>
                                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Langkah-langkah pemulihan setelah bencana meliputi evaluasi kerusakan,
                                        pendistribusian bantuan
                                        darurat kepada korban, pembangunan kembali infrastruktur yang rusak, pemberian
                                        bantuan psikososial
                                        kepada para korban yang trauma, mengembangkan rencana tanggap darurat yang lebih
                                        baik untuk masa
                                        depan, dan memobilisasi sumber daya baik dari pemerintah maupun organisasi
                                        kemanusiaan untuk
                                        mendukung proses pemulihan jangka panjang.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->

                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-content-5">
                                        <span class="num">5.</span>
                                        Bagaimana cara mencegah kecelakaan selama bencana?
                                    </button>
                                </h3>
                                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                    <div class="accordion-body">
                                        Untuk mencegah kecelakaan selama bencana, langkah-langkah yang dapat diambil
                                        termasuk meningkatkan
                                        kesadaran akan risiko yang terkait dengan jenis bencana tertentu, mempersiapkan
                                        rencana darurat
                                        keluarga atau komunitas, mengikuti prosedur evakuasi yang telah ditetapkan,
                                        memperkuat bangunan agar
                                        tahan terhadap guncangan, memiliki peralatan darurat seperti kit pertolongan
                                        pertama, dan
                                        mendengarkan peringatan dan petunjuk resmi dari otoritas yang berwenang.
                                    </div>
                                </div>
                            </div><!-- # Faq item-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Frequently Asked Questions Section -->
    </main><!-- End #main -->
@endsection
