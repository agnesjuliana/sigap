@extends('master')
@section('title', 'Dashboard User')

@section('css')
    <link href="{{ asset('css/dashboard-user.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="dashboard-user" class="hero">
        <div class="container position-relative">
            <div class="row gy-5" data-aos="fade-in">
                <div
                    class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                    <h2>Selamat Datang, <u>{{ Auth::user()->name }}</u></h2>
                    <p>Sampaikan Laporan Bencana Langsung ke Pemerintah
                        <br>Wujudkan Keselamatan Bersama!
                    </p>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="{{ route('user.form-lapor') }}" class="btn-get-started">Laporkan Bencana</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <img src="{{ asset('img/hero-img.svg') }}" class="img-fluid" alt="" data-aos="zoom-out"
                        data-aos-delay="100">
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <section id="report" class="contact" style="padding-top:16px">
        <div class="container" data-aos="fade-up">

            <div class="section-header" style="padding-bottom:16px">
                <h2>History Pengaduan</h2>
            </div>
            <div class="wrap-table">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Report ID</th>
                            <th scope="col">Tipe</th>
                            <th scope="col">Longitude</th>
                            <th scope="col">Latitude</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reports as $report)
                            <tr>
                                <td>{{ $report->report_id }}</td>
                                <td>{{ $report->type->name }}</td>
                                <td>{{ $report->longitude }}</td>
                                <td>{{ $report->latitude }}</td>
                                <td>{!! $report->status == 'Pending'
                                    ? '<span class="badge" style="background-color: #f85a40;">Pending</span>'
                                    : '<span class="badge" style="background-color: #0077b6;">Selesai</span>' !!}</td>
                                <td>
                                    <button type="button" style="padding: 0;" class="btn" data-bs-toggle="modal"
                                        data-bs-target="#detail{{ $report->report_id }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
                                            height="30" viewBox="0 0 72 72" style="fill:#0077b6;">
                                            <path
                                                d="M36,12c13.255,0,24,10.745,24,24c0,13.255-10.745,24-24,24S12,49.255,12,36C12,22.745,22.745,12,36,12z M39,45	c0-0.901,0-6.099,0-7c0-1.657-1.343-3-3-3c-1.657,0-3,1.343-3,3c0,0.901,0,6.099,0,7c0,1.657,1.343,3,3,3C37.657,48,39,46.657,39,45	z M36,32c2.209,0,4-1.791,4-4c0-2.209-1.791-4-4-4s-4,1.791-4,4C32,30.209,33.791,32,36,32z">
                                            </path>
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
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Pengaduan</h1>
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
                                                    <h6 class="label-h6">Petugas</h6>
                                                    <p>{{ $report->petugas ?? '-' }}</p>
                                                </div>
                                                <div class="content-detail">
                                                    <h6 class="label-h6">Tanggapan</h6>
                                                    <p>{{ $report->tanggapan ?? '-' }}</p>
                                                </div>
                                            </div>
                                        </div>
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
                                    <span aria-hidden="true" style="color: #0077b6;">&laquo;</span>
                                </a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link disabled" href="" aria-label="Previous">
                                    <span aria-hidden="true" style="color: #0077b6;">&laquo;</span>
                                </a>
                            </li>
                        @endif
                        <!-- Pagination links -->
                        <!-- Here you should add the pagination links similar to the above example -->
                        <!-- End Pagination links -->
                        @if ($reports->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $reports->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true" style="color: #0077b6;">&raquo;</span>
                                </a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link disabled" href="" aria-label="Next">
                                    <span aria-hidden="true" style="color: #0077b6;">&raquo;</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
@endsection

{{-- <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form> --}}
