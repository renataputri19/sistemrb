@extends('layouts.main')

@section('title', 'EPSS')


@section('content')



<div class="container-jadwal" data-aos="fade-up">
    <!-- Other content -->
    
    <h2 class="text-center mb-4">Dashboard Perencanaan Statistik Sektoral 2024</h2>
    <div class="text-center mb-4">
        <a href="https://docs.google.com/spreadsheets/d/1IIvd6kYLBMrfgjXQkLBo9J8CubXH-zbibo3yjGIiGV8/edit?usp=sharing" target="_blank" class="btn btn-primary">Open Spreadsheet</a>
    </div>

    <!-- Responsive iframe wrapper -->
    <div class="iframe-container">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfeQPUsQdUjOYw2C2g9LpdfTkHxieoi-5LYw4eYNLkdHFJB3Q/viewform?embedded=true">Loading…</iframe>
    </div>
    
    <!-- Other content -->
</div>



    <section class="hero-section-logged-in">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h1 class="hero-title">Evaluasi Penyelenggaraan Statistik Sektoral (EPSS)</h1>
                    <p class="hero-text">Peraturan Badan Pusat Statistik Nomor 3 Tahun 2022 tentang Evaluasi Penyelenggaraan Statistik Sektoral (EPSS). EPSS adalah suatu proses penilaian secara sistematis melalui verifikasi & validasi informasi terhadap hasil penilaian mandiri untuk mengukur tingkat kematangan penyelenggaraan statistik sektoral di instansi pemerintah (Instansi Pusat dan Pemerintah Daerah)</p>
                </div>
                <div class="col-lg-5">
                    <div class="rating-table-responsive" data-aos="fade-up">
                        <table class="table rating-table">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2" class="text-center bg-success text-white">Predikat Nilai IPS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-primary text-white">
                                    <td>4,2 - 5,0</td>
                                    <td>Memuaskan</td>
                                </tr>
                                <tr class="bg-info text-white">
                                    <td>3,5 - <4,2</td>
                                    <td>Sangat Baik</td>
                                </tr>
                                <tr class="bg-secondary text-white">
                                    <td>2,6 - <3,5</td>
                                    <td>Baik</td>
                                </tr>
                                <tr class="bg-warning text-dark">
                                    <td>1,8 - <2,6</td>
                                    <td>Cukup</td>
                                </tr>
                                <tr class="bg-danger text-white">
                                    <td><1,8</td>
                                    <td>Kurang</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-after-hero" style="background-color: #ffffff;">
        <section class="section-after-hero-1">
            <div class="container">
                <div class="row">
                    <!-- Prinsip SDI Column -->
                    <div class="col-md-6 mb-4" data-aos="fade-up">
                        <div class="p-4 border">
                            <h2 class="h5">Prinsip SDI</h2>
                            <ul>
                                <li>Standar Data Statistik</li>
                                <li>Metadata Statistik</li>
                                <li>Interoperabilitas Data</li>
                                <li>Kode Referensi dan/atau Data Induk</li>
                            </ul>
                            <a href="/sdi" class="stretched-link">File Bukti Dukung...</a>
                        </div>
                    </div>
                    <!-- Kualitas Data Column -->
                    <div class="col-md-6 mb-4" data-aos="fade-up">
                        <div class="p-4 border">
                            <h2 class="h5">Kualitas Data</h2>
                            <ul>
                                <li>Relevansi</li>
                                <li>Akurasi</li>
                                <li>Aktualitas & Ketepatan Waktu</li>
                                <li>Aksesibilitas</li>
                                <li>Keterbandingan & Konsistensi</li>
                            </ul>
                            <a href="/kualitas-data" class="stretched-link">File Bukti Dukung...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-after-hero-2 py-5">
            <div class="container">
                <div class="row">
                    <!-- Proses Bisnis Statistik Column -->
                    <div class="col-md-6 mb-4" data-aos="fade-up">
                        <div class="p-4 border">
                            <h2 class="h5">Proses Bisnis Statistik</h2>
                            <ul>
                                <li>Perencanaan Data</li>
                                <li>Pengumpulan Data</li>
                                <li>Pemeriksaan Data</li>
                                <li>Penyebarluasan Data</li>
                            </ul>
                            <a href="/proses-bisnis-statistik" class="stretched-link">File Bukti Dukung...</a>
                        </div>
                    </div>
                    <!-- Kelembagaan Column -->
                    <div class="col-md-6 mb-4" data-aos="fade-up">
                        <div class="p-4 border">
                            <h2 class="h5">Kelembagaan</h2>
                            <ul>
                                <li>Profesionalitas</li>
                                <li>SDM yang Memadai dan Kapabel</li>
                                <li>Pengorganisasian Statistik</li>
                            </ul>
                            <a href="/kelembagaan" class="stretched-link">File Bukti Dukung...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    

        <section class="section-after-hero-3 py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6" data-aos="fade-up">
                        <div class="p-4 border">
                            <h2 class="h5">Statistik Nasional</h2>
                            <ul>
                                <li>Pemanfaatan Data Statistik</li>
                                <li>Pengolahan Kegiatan Statistik</li>
                                <li>Penguatan SSN Berkelanjutan</li>
                            </ul>
                            <a href="/statistik-nasional" class="stretched-link">File Bukti Dukung...</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>


    

@endsection
