@extends('master')
@section('title', 'Sigap - Pelayanan Tanggap Darurat Bencana')

@section('css')
    <link href="{{ asset('css/dashboard-user.css') }}" rel="stylesheet">
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet">
@endsection

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
                            <a href="{{ route('register') }}" class="btn-watch-video d-flex align-items-center"><span>Daftar
                                    Akun</span></a>
                        @else
                            @if (Auth::user()->role === 'ADMIN')
                                <a href="{{ route('admin.home') }}" class="btn-get-started">Dashboard</a>
                            @else
                                <a href="{{ route('user.home') }}" class="btn-get-started">Dashboard</a>
                            @endif
                        @endguest
                    </div>

                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('img/hero-img.svg') }}" class="img-fluid w-100" alt="" data-aos="zoom-out"
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

        <section id="report" class="contact" style="padding-top:16px">
            <div class="container" data-aos="fade-up">

                <div class="section-header" style="padding-bottom:16px">
                    <h2>Laporan Bencana Terbaru</h2>
                </div>
                <div class="wrap-table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                {{-- <th scope="col">Report ID</th> --}}
                                <th scope="col">Tipe</th>
                                <th scope="col">Longitude</th>
                                <th scope="col">Latitude</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reports as $index => $report)
                                <tr>
                                    <td>{{ $reports->firstItem() + $index }}</td>
                                    {{-- <td>{{ $report->report_id }}</td> --}}
                                    <td>{{ $report->type->name }}</td>
                                    <td>{{ $report->longitude }}</td>
                                    <td>{{ $report->latitude }}</td>
                                    <td>{!! $report->status == 'Pending'
                                        ? '<span class="badge" style="background-color: #f85a40;">Pending</span>'
                                        : '<span class="badge" style="background-color: #02A367;">Selesai</span>' !!}</td>
                                    <td>
                                        <button type="button" style="padding: 0;" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#detail{{ $report->report_id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
                                                height="30" viewBox="0 0 72 72" style="fill:#02A367;">
                                                <path
                                                    d="M36,12c13.255,0,24,10.745,24,24c0,13.255-10.745,24-24,24S12,49.255,12,36C12,22.745,22.745,12,36,12z M39,45	c0-0.901,0-6.099,0-7c0-1.657-1.343-3-3-3c-1.657,0-3,1.343-3,3c0,0.901,0,6.099,0,7c0,1.657,1.343,3,3,3C37.657,48,39,46.657,39,45	z M36,32c2.209,0,4-1.791,4-4c0-2.209-1.791-4-4-4s-4,1.791-4,4C32,30.209,33.791,32,36,32z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button" class="btn heart-button">
                                            <svg class="heart-outline" xmlns="http://www.w3.org/2000/svg" width="30"
                                                height="30" viewBox="0 0 24 24" fill="none" stroke="#02A367"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                <path
                                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                                                </path>
                                            </svg>
                                            <svg class="heart-fill" xmlns="http://www.w3.org/2000/svg" width="30"
                                                height="30" viewBox="0 0 24 24" fill="#02A367"
                                                style="display: none;">
                                                <path
                                                    d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z">
                                                </path>
                                            </svg>
                                        </button>
                                        <button type="button" style="padding: 0;" class="btn" data-bs-toggle="modal"
                                            data-bs-target="#response{{ $report->report_id }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                fill="#02A367" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M16 8c0 3.866-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7M5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0m4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="detail{{ $report->report_id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Bencana</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="wrap-detail">
                                                    <div class="content-detail">
                                                        <h6 class="label-h6">Tipe</h6>
                                                        <p>{{ $report->type->name }}</p>
                                                    </div>
                                                    <div class="content-detail">
                                                        <h6 class="label-h6">Deskripsi</h6>
                                                        <p>{{ $report->description }}</p>
                                                    </div>
                                                    <div class="content-detail">
                                                        <h6 class="label-h6">Tanggal Pengaduan</h6>
                                                        <p>{{ $report->created_at }}</p>
                                                    </div>
                                                    <div class="content-detail">
                                                        <h6 class="label-h6">Alamat</h6>
                                                        <p>{{ $report->address }}</p>
                                                    </div>
                                                    <div class="content-detail">
                                                        <h6 class="label-h6">Foto</h6>
                                                        <div class="img-container">
                                                            <img src="{{ asset('storage/' . $report->reportFile->img_path) }}"
                                                                alt="img" class="detail-img">
                                                        </div>
                                                    </div>
                                                    <div class="content-detail">
                                                        <h6 class="label-h6">Tanggapan</h6>
                                                        <p>{{ $report->tanggapan ?? '-' }}</p>
                                                    </div>
                                                </div>
                                                <div class="content-detail mt-3">
                                                    <h6 class="label-h6">Location</h6>
                                                    <div id="map" style="width: 100%; height: 400px;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="response{{ $report->report_id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Berikan Komentar</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('admin.response.post') }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <input type="hidden" name="report_id" value="{{ $report->report_id }}">
                                                    <input type="hidden" name="user_id" value="{{ Auth::user()->user_id }}">
                                                    <div class="form-group mt-3">
                                                        <textarea class="form-control" name="description" rows="7" placeholder="Tanggapan" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-response">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example" class="d-flex justify-content-end">
                        <ul class="pagination">
                            @if ($reports->currentPage() > 1)
                                <li class="page-item">
                                    <a class="page-link" href="{{ $reports->previousPageUrl() }}" aria-label="Previous">
                                        <span aria-hidden="true" style="color: #02A367;">&laquo;</span>
                                    </a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link disabled" href="" aria-label="Previous">
                                        <span aria-hidden="true" style="color: #02A367;">&laquo;</span>
                                    </a>
                                </li>
                            @endif
                            <!-- Pagination links -->
                            <!-- Here you should add the pagination links similar to the above example -->
                            <!-- End Pagination links -->
                            @if ($reports->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $reports->nextPageUrl() }}" aria-label="Next">
                                        <span aria-hidden="true" style="color: #02A367;">&raquo;</span>
                                    </a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link disabled" href="" aria-label="Next">
                                        <span aria-hidden="true" style="color: #02A367;">&raquo;</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div>
        </section>

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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBc8FlCC20cSAqDWNQ9ZwCwkWnxCRvapk"></script>
    <script>
        $(document).ready(function() {
            // Define the coordinates from the report
            var reportLatitude = {{ $report->latitude }};
            var reportLongitude = {{ $report->longitude }};

            // Initialize the map
            function initMap() {
                var reportLocation = {
                    lat: reportLatitude,
                    lng: reportLongitude
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 14,
                    center: reportLocation
                });
                var marker = new google.maps.Marker({
                    position: reportLocation,
                    map: map
                });
            }

            // Load the map
            google.maps.event.addDomListener(window, 'load', initMap);
        });

        function getPreviewImage(event) {
            var image = URL.createObjectURL(event.target.files[0]);
            var imgDiv = document.getElementById('preview');
            var newImg = document.createElement('img');

            imgDiv.innerHTML = '';
            newImg.src = image;
            newImg.width = '200';
            imgDiv.appendChild(newImg);
        }
    </script>
    <script>
        document.querySelectorAll('.heart-button').forEach(button => {
            button.addEventListener('click', function() {
                const outline = this.querySelector('.heart-outline');
                const fill = this.querySelector('.heart-fill');

                if (outline.style.display === 'none') {
                    outline.style.display = '';
                    fill.style.display = 'none';
                } else {
                    outline.style.display = 'none';
                    fill.style.display = '';
                }
            });
        });
    </script>

@endsection
