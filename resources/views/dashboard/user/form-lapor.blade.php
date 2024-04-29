@extends('master')
@section('title', 'Laporkan Bencana')

@section('content')
    <main id="main">
        <section id="report" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Laporkan Bencana</h2>
                    <p>Segera Laporkan Bencana di Tempat Anda</p>
                </div>
                <div class="row gx-lg-0 gy-4">
                    <div class="col-lg-4">
                        <div class="info-container d-flex flex-column align-items-center justify-content-center">
                            <div class="info-item d-flex">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h4>Lokasi:</h4>
                                    <p>Jl. Jemursari Tim. II No.2, Jemur Wonosari, Kec. Wonocolo, Surabaya, Jawa Timur
                                        60237</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-phone flex-shrink-0"></i>
                                <div>
                                    <h4>Hotline:</h4>
                                    <p>(031) 99860466</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex">
                                <i class="bi bi-clock flex-shrink-0"></i>
                                <div>
                                    <h4>Jam Kerja:</h4>
                                    <p>24 Jam</p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <form action="{{ route('user.form-lapor.post') }}" method="post" role="form" class="php-email-form"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-3">
                                <select class="form-control" name="type" id="type" required>
                                    <option value="">Pilih jenis bencana</option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->type_id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="description" rows="7" placeholder="Description" required></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <div id="map" style="height: 300px"></div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="latitude" id="latitude"
                                    placeholder="Latitude" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="longitude" id="longitude"
                                    placeholder="Longitude" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Address" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="file" class="form-control" name="image" id="image"
                                    onchange="getPreviewImage(event)" required>
                                <div class="mt-3 mb-3" id="preview"></div>
                            </div>
                            <div class="text-center"><button type="submit">Kirim Laporan</button></div>
                        </form>
                    </div><!-- End Contact Form -->
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBc8FlCC20cSAqDWNQ9ZwCwkWnxCRvapk"></script>
    <script src="{{ asset('js/gmap.js') }}"></script>
    <script>
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
@endsection