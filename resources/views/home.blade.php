@extends('layouts.main')

@section('title', 'Beranda')


@section('content')

<section id="beranda" class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1 class="hero-title mb-2" style="color:#717171;">Sistem Monitoring</h1>
          <h1 class="hero-title mt-2">Reformasi Birokrasi Batam</h1>
          <p class="hero-text">Portal ini bertujuan untuk menginput, memantau dan menilai bukti dukung mengenai Reformasi Birokrasi di Batam. </p>
          <a href="{{ url('/login') }}" class="btn btn-success mt-3 pt-2 ml-2 mr-2" data-aos="fade-up">Login</a>
        </div>
        <div class="col-lg-6">
          <!-- You can add an image here or use an icon library like Font Awesome -->
          <img src="{{ asset('img/6425301.png') }}" alt="Monitoring Illustration" class="img-fluid hero-image" data-aos="fade-up">
        </div>
      </div>
    </div>
  </section>

  
  


@endsection