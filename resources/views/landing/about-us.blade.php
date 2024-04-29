@extends('master')
@section('title', 'About Us')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs">
            <div class="page-header d-flex align-items-center" style="background-image: url('');">
                <div class="container position-relative">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-6 text-center">
                            <h2>Tentang Kami</h2>
                        </div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ol>
                        <li><a href="{{ url('/') }}">Beranda</a></li>
                        <li>Tentang Kami</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container" data-aos="fade-up">
                <section id="call-to-action2" class="call-to-action2">
                    <div class="container text-center" data-aos="zoom-out">
                        <a href="https://youtu.be/OOKDKQJhInM?si=YXXK55nDW_1fdyTz" class="glightbox play-btn"></a>
                        <h3>Video Profile BPBD Kota Surabaya</h3>
                    </div>
                </section>
                <div class="row justify-content-between gy-4 mt-4">
                    <div class="col-lg-8">
                        <div class="portfolio-description">
                            <h2>SUTAS (Surabaya Tanggap Selamat)</h2>
                            <p>
                                SUTAS (Surabaya Tanggap Selamat) adalah sebuah platform untuk memfasilitasi pelaporan
                                kejadian bencana yang terjadi di wilayah Surabaya. Dengan menggunakan SUTAS, masyarakat
                                memiliki kemudahan dan kecepatan dalam memberikan informasi terkait bencana yang sedang
                                terjadi,sehingga memungkinkan pihak berwenang, termasuk badan penanggulangan bencana dan
                                lembaga kemanusiaan, untuk merespons dengan lebih efektif dalam memberikan bantuan dan
                                mengkoordinasikan upaya tanggap darurat. Melalui platform ini, upaya-upaya tanggap
                                darurat dapat lebih terkoordinasi dan tepat sasaran, dengan harapan dapat mengurangi
                                dampak yang ditimbulkan oleh bencana tersebut
                                bagi masyarakat Surabaya.
                            </p>
                            <p>
                                Selain itu, SUTAS juga memberikan manfaat dalam hal peningkatan kesadaran masyarakat
                                akan potensi risiko bencana yang ada di sekitar mereka. Dengan adanya akses yang mudah
                                untuk melaporkan kejadian bencana, masyarakat menjadi lebih teredukasi tentang
                                langkah-langkah yang dapat diambil untuk mengurangi risiko dan persiapan yang perlu
                                dilakukan dalam menghadapi bencana. Hal ini dapat membantu dalam membangun budaya
                                tanggap bencana yang kuat di kalangan masyarakat Surabaya, sehingga mereka lebih siap
                                dan mampu bertindak dengan cepat dan tepat saat menghadapi situasi darurat.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="portfolio-info">
                            <img src="{{ asset('img/about-2.jpg') }}" alt="BPBD"
                                class="img-fluid rounded-4 mb-4">
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->
    </main><!-- End #main -->
@endsection
