@extends('master')
@section('title', 'Edukasi Bencana')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Edukasi Bencana</h2>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li>Edukasi Bencana</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio" class="portfolio sections-bg">
            <div class="container" data-aos="fade-up">

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                    <div class="row gy-4 portfolio-container">

                        <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <a href="https://youtu.be/atbeX2bQtj4?si=I1FZasRAdjtYlKR8"
                                    data-gallery="portfolio-gallery-app" class="glightbox play-btn"><img
                                        src="{{ asset('assets/img/edukasi-bencana/prabencana.jfif') }}" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="#" title="More Details">Penanganan Bencana:
                                            <br>Prabencana</a></h4>
                                    <p>Tahap prabencana mencakup pencegahan, mitigasi, dan kesiapsiagaan, yang bertujuan
                                        untuk mengurangi risiko bencana dan mempersiapkan respons efektif saat bencana
                                        terjadi.</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                            <div class="portfolio-wrap">
                                <a href="https://youtu.be/IJFVib4YiXA?si=9wHryL9a5sdcmiUh"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('assets/img/edukasi-bencana/saatbencana.jpeg') }}" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="#" title="More Details">Penanganan Bencana: Saat Bencana</a></h4>
                                    <p>Saat bencana terjadi, tanggap darurat bencana melibatkan serangkaian kegiatan
                                        yang dilakukan secara cepat untuk mengurangi dampak buruk yang ditimbulkan.</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                            <div class="portfolio-wrap">
                                <a href="https://youtu.be/rPUw8Er5JX8?si=1M3sn0YEox_r4bZc"
                                    data-gallery="portfolio-gallery-app" class="glightbox"><img
                                        src="{{ asset('assets/img/edukasi-bencana/pascabencana.jpeg') }}" class="img-fluid"
                                        alt=""></a>
                                <div class="portfolio-info">
                                    <h4><a href="#" title="More Details">Penanganan Bencana: Pascabencana</a>
                                    </h4>
                                    <p>Saat ini, pasca bencana mencakup dua tahap utama: rehabilitasi, yang fokus pada
                                        pemulihan sementara, dan rekonstruksi, yang bertujuan membangun kembali secara
                                        berkelanjutan.</p>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->
@endsection
