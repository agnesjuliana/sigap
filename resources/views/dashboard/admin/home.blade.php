@extends('master')
@section('title', 'Dashboard Admin')

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
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <a href="{{ route('admin.report') }}" class="btn-get-started">Pengaduan</a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <img src="{{ asset('img/hero-img.svg') }}" class="img-fluid" alt="" data-aos="zoom-out"
                            data-aos-delay="100">
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection

{{-- <form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form> --}}
