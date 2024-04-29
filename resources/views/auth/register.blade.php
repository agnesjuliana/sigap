@extends('master')
@section('title', 'Register')

@section('content')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Daftar Akun</h2>
                <p>Daftar Akun dan Segera Laporkan Bencana di Tempat Anda</p>
            </div>
            <div class="row gx-0 gy-4">
                <div class="col-lg-8">
                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <img src="{{ asset('img/signup-img.svg') }}" alt="Login Image" class="signup-img"
                            width="600">
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="{{ route('register.post') }}" method="post" role="form" class="php-email-form"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mt-3 mb-3">
                            <label class="mb-1" for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Lorem Ipsum" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-1" for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="lorem@gmail.com" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-1" for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="lorem"
                                required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-1" for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="********" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-1" for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                                placeholder="********" required>
                        </div>
                        <div class="text-center"><button type="submit">Daftar</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection