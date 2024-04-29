@extends('master')
@section('title', 'Login')

@section('content')

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Login Akun</h2>
                <p>Masuk Akun dan Segera Laporkan Bencana di Tempat Anda</p>
            </div>
            <div class="row gx-0 gy-4">
                <div class="col-lg-8">
                    <div class="info-container d-flex flex-column align-items-center justify-content-center">
                        <img src="{{ asset('img/login-img.svg') }}" alt="Login Image" class="login-img" width="350">
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="{{ route('login.post') }}" method="post" role="form" class="php-email-form"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="mb-1" for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="lorem@gmail.com" required>
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-1" for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="********" required>
                        </div>
                        <div class="text-center"><button type="submit">Masuk</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
