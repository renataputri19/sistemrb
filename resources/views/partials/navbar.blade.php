

{{-- <nav class="bg-white h-14 flex justify-between items-center px-6">
    <a href="/" class="text-lg font-semibold text-gray-700">
        <!-- Insert Logo Here -->
        BPS Kota Batam
    </a>

        @if(Request::is('/'))
            <div class="flex items-center space-x-4">
                <a href="#beranda" class="text-gray-700 hover:text-green-600">Beranda</a>
                <a href="#tentang-epss" class="text-gray-700 hover:text-green-600">Tentang EPSS</a>
                <a href="#romantik" class="text-gray-700 hover:text-green-600">Romantik</a>
                <a href="#simbatik" class="text-gray-700 hover:text-green-600">Simbatik</a>
                <a href="#indah" class="text-gray-700 hover:text-green-600">Indah</a>
                <a href="#hubungi-kami" class="text-gray-700 hover:text-green-600">Hubungi Kami</a>
                <a href="{{ url('/login') }}" class="text-green-600 hover:text-green-800">Login</a>
                <a href="{{ url('/epss') }}" class="text-green-600 hover:text-green-800">EPSS</a>
            </div>
        @else
            <div class="flex items-center space-x-4">
                <a href="{{ url('/epss') }}" class="text-gray-700 hover:text-green-600">EPSS</a>
                <a href="{{ url('/sdi') }}" class="text-gray-700 hover:text-green-600">Prinsip SDI</a>
                <a href="{{ url('/kualitas-data') }}" class="text-gray-700 hover:text-green-600">Kualitas Data</a>
                <a href="{{ url('/proses-bisnis-statistik') }}" class="text-gray-700 hover:text-green-600">Proses Bisnis Statistik</a>
                <a href="{{ url('/kelembagaan') }}" class="text-gray-700 hover:text-green-600">Kelembagaan</a>
                <a href="{{ url('/statistik-nasional') }}" class="text-green-600 hover:text-green-800">Statistik Nasional</a>
                <a href="{{ url('/dashboard') }}" class="text-green-600 hover:text-green-800">Dashboard Perencanaan</a>
                <a href="{{ url('/list-opd') }}" class="text-green-600 hover:text-green-800">List OPD</a>
                @if(Auth::check())
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
                @endif
        
            </div>
        @endif

    
</nav> --}}



<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('img/Logo BPS Kota Batam Artboard 1 .png') }}" alt="BPS Kota Batam Logo" height="70">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" style="z-index: 100" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                @if(Request::is('/'))
                    <li class="nav-item">
                        <a href="#beranda" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="#hubungi-kami" class="nav-link">Hubungi Kami</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/epss') }}" class="nav-link">Reformasi Birokrasi</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/login') }}" class="nav-link">Login</a>
                    </li>
                    
                    <!-- More nav items -->
        
                @else
                    <!-- Nav items for other pages -->
                    <li class="nav-item">
                        <a href="{{ url('/epss') }}" class="nav-link {{ Request::is('epss') ? 'active' : '' }}">EPSS</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/sdi') }}" class="nav-link {{ Request::is('sdi') ? 'active' : '' }}">Prinsip SDI</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/kualitas-data') }}" class="nav-link {{ Request::is('kualitas-data') ? 'active' : '' }}">Kualitas Data</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/proses-bisnis-statistik') }}" class="nav-link {{ Request::is('proses-bisnis-statistik') ? 'active' : '' }}">Proses Bisnis Statistik</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/kelembagaan') }}" class="nav-link {{ Request::is('kelembagaan') ? 'active' : '' }}">Kelembagaan</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/statistik-nasional') }}" class="nav-link {{ Request::is('statistik-nasional') ? 'active' : '' }}">Statistik Nasional</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        @if(Auth::check())
                            <a href="{{ route('logout') }}" 
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                            class="nav-link">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endif
                    </li>
                    <!-- More nav items -->
                @endif
            </ul>
        </div>
    </div>
</nav>
