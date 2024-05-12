    <!-- ======= Header ======= -->
    <header id="header" class="header d-flex align-items-center">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                <h1>Sutas<span>.</span></h1>
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="dropdown">
                        <a href="#"><span>Layanan</span>
                            <i class="bi bi-chevron-down dropdown-indicator"></i>
                        </a>
                        <ul>
                            <li><a href="#">Lapor Bencana</a></li>
                            <li><a href="#">Kontak Darurat</a></li>
                            <li><a href="#">Panduan Evakuasi</a></li>
                            <li><a href="{{ route('edukasi-bencana') }}">Edukasi Bencana</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('about-us') }}">Tentang Kami</a></li>
                    @if (Auth::user())
                        @if (Auth::user()->role == 'ADMIN')
                            <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
                            <li><a href="{{ route('admin.report') }}">Laporan</a></li>
                            <li><a href="{{ route('admin.user') }}">User</a></li>
                        @elseif (Auth::user()->role == 'PETUGAS')
                            <li><a href="{{ route('petugas.home') }}">Dashboard</a></li>
                        @elseif (Auth::user()->role == 'USER')
                            <li><a href="{{ route('user.home') }}">Dashboard</a></li>
                        @endif
                    @endif
                    <li><a href="{{ route('logout') }}">Log Out</a></li>

                </ul>
            </nav><!-- .navbar -->

            <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
            <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

        </div>
    </header><!-- End Header -->
