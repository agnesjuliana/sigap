@extends('master')
@section('title', 'Dashboard Admin')

@section('css')
    <link href="{{ asset('css/dashboard-user.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    @if (Auth::user()->role == 'ADMIN')
        <section id="dashboard-user" class="hero">
            <div class="container position-relative">
                <div class="row gy-5 align-items-center" style="height: 70vh;" data-aos="fade-in">
                    <div
                        class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                        <h2>Selamat Datang Admin, <u>{{ Auth::user()->name }}</u></h2>
                        <p>Sampaikan Laporan Bencana Langsung ke Pemerintah
                            <br>Wujudkan Keselamatan Bersama!
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="{{ asset('img/hero-img.svg') }}" class="img-fluid" alt="" data-aos="zoom-out"
                            data-aos-delay="100">
                    </div>
                </div>
            </div>
        </section>

        <section id="report" class="contact" style="padding-top:32px">
            <div class="container" data-aos="fade-up">
                <div class="section-header" style="padding-bottom:16px">
                    <h2>Laporan Pengaduan</h2>
                </div>
                <div class="d-flex justify-content-end mb-3">
                    <button type="button" style="padding-left:16px" class="btn btn-response">
                        <svg width="23px" height="23px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#fffCCCCCC" stroke-width="0.336"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g id="Interface / Download">
                                    <path id="Vector" d="M6 21H18M12 3V17M12 17L17 12M12 17L7 12" stroke="#fff" stroke-width="1.9200000000000004" stroke-linecap="round" stroke-linejoin="round"></path>
                                </g>
                            </g>
                        </svg>
                        <a href={{route('admin.report.generate')}}>Generate Laporan</a>
                    </button>
                </div>
                <div class="wrap-table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Report ID</th>
                                <th scope="col">Pelapor</th>
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
                                    <td>{{ $report->user->name }}</td>
                                    <td>{{ $report->type->name }}</td>
                                    <td>{{ $report->longitude }}</td>
                                    <td>{{ $report->latitude }}</td>
                                    <td>{!! $report->status == 'Pending'
                                        ? '<span class="badge" style="background-color: #f85a40;">Pending</span>'
                                        : '<span class="badge" style="background-color: #0077b6;">Selesai</span>' !!}</td>
                                    <td>
                                        <button type="button" style="padding: 0; text-align:center;" class="btn"
                                            data-bs-toggle="modal" data-bs-target="#response{{ $report->report_id }}">
                                            <svg fill="#fff" version="1.1" id="Layer_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="21px" height="21px"
                                                viewBox="-27.6 -27.6 147.20 147.20" enable-background="new 0 0 92 92"
                                                xml:space="preserve" transform="rotate(0)" stroke="#fff">
                                                <g id="SVGRepo_bgCarrier" stroke-width="0">
                                                    <rect x="-27.6" y="-27.6" width="147.20" height="147.20" rx="73.6"
                                                        fill="#00b6a1" strokewidth="0"></rect>
                                                </g>
                                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke="#CCCCCC" stroke-width="0.184"></g>
                                                <g id="SVGRepo_iconCarrier">
                                                    <path id="XMLID_1009_"
                                                        d="M80.7,43.7C73.4,36.4,63,32.4,51,31.7V21c0-1.6-1.2-3.1-2.7-3.7c-1.5-0.6-3.3-0.3-4.5,0.9l-24.7,25 c-1.5,1.6-1.6,4.1,0,5.6l24.6,25c1.1,1.2,3.1,1.5,4.6,0.9c1.5-0.6,2.7-2.1,2.7-3.7V60.2C59,60,77.8,60.8,84.6,73c0.7,1.3,2,2,3.4,2 c0.3,0,0.6,0,1-0.1c1.8-0.5,3.1-2,3.1-3.9C92,70.4,92.1,55.1,80.7,43.7z M46.3,52.4c-2,0.2-3.3,1.9-3.3,4v4.8L28,46l15-15.2v4.8 c0,2.2,1.6,4,3.8,4c21.5,0,30.6,10.3,34.5,19.1C67.2,50.3,47.4,52.3,46.3,52.4z M31.5,68.2c1.5,1.6,1.5,4.1,0,5.7 c-0.8,0.8-1.8,1.2-2.8,1.2c-1,0-2.1-0.4-2.8-1.2l-24.6-25c-1.5-1.6-1.5-4.1,0-5.6l24.6-25c1.6-1.6,4.1-1.6,5.6,0 c1.6,1.6,1.6,4.1,0,5.7L9.6,46L31.5,68.2z">
                                                    </path>
                                                </g>
                                            </svg>
                                        </button>
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

                                <!-- Modal detail -->
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
                                                        <h6 class="label-h6">Foto</h6>
                                                        <div class="img-container">
                                                            <img src="{{ asset('storage/' . $report->reportFile->img_path) }}"
                                                                alt="img" class="detail-img">
                                                        </div>
                                                    </div>
                                                    <div class="content-detail">
                                                        <h6 class="label-h6">Petugas</h6>
                                                        <p>{{ $report->responses->first()->user->name ?? '-' }}</p>
                                                    </div>
                                                    <div class="content-detail">
                                                        <h6 class="label-h6">Tanggapan</h6>
                                                        <p>{{ $report->responses->first()->description ?? '-' }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal response -->
                                <div class="modal fade" id="response{{ $report->report_id }}" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Buat Tanggapan</h1>
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
                    {{ $reports->links() }}
                </div>
            </div>
        </section>
    @endif
@endsection

{{-- <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form> --}}
