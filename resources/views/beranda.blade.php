@extends('layouts.main')

@section('title', 'Beranda')


@section('content')







    <section class="hero-section-logged-in">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">Contoh File dan Materi RB</h1>
                    <p class="hero-text">Link bukti dukung WBK BPS Kabupaten Semarang : https://s.bps.go.id/Pembangunan_ZI_3322</p>
                    <p class="hero-text">Link bukti dukung tambahan : http://s.bps.go.id/PersiapanZI3322_2023</p>
                    <p class="hero-text">Contoh bps kendal: http://s.bps.go.id/rbbpskendal</p>
                    <p class="hero-text">Contoh lainnya: http://s.bps.go.id/WorkshopZI2024 </p>
                    <p class="hero-text">Linktree Full BPS Batam: https://linktr.ee/bpsbatam </p>
                </div>
                <div class="col-lg-6">
                    <!-- You can add an image here or use an icon library like Font Awesome -->
                    <img src="{{ asset('img/6425301.png') }}" alt="Monitoring Illustration" class="img-fluid hero-image" data-aos="fade-up">
                </div>
            </div>
        </div>
    </section>

    

@endsection
