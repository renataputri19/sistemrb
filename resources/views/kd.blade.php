
@extends('layouts.main')

@section('title', 'Kualitas Data')


@section('content')

    <section class="section-hero-domain" style="background-color: #F5F7FA;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h1 class="domain-title text-center">Kualitas Data</h1>
                    <p class="domain-text">
                        "Serangkaian aksi yang terencana dan sistematis untuk memberikan keyakinan bahwa sebuah produk sesuai dengan kebutuhan pengguna” UNSD (2019)
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="section-indikator">
        <div class="container">
            <div class="row justify-content-center" data-aos="fade-up">
                <!-- Centered Column for Form -->
                <div class="col-md-8">
                    <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data" class="form-indikator">
                        @csrf
                        <div class="form-group">
                            <label for="indikator">Indikator:</label>
                            <select id="indikator" name="indikator" class="form-control">
                                @foreach($indikatorTitles as $key => $title)
                                    <option value="{{ $key }}">{{ $title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tingkat">Tingkat:</label>
                            <select id="tingkat" name="tingkat" class="form-control">
                                @foreach($tingkatTitles as $key => $title)
                                    <option value="{{ $key }}">{{ $title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="file">Upload file:</label>
                            <input type="file" name="files[]" class="form-control" id="file" multiple required>
                        </div>
                        <input type="hidden" name="domain" value="kualitas-data">
                        <input type="hidden" name="aspek" value="Relevansi">
                        <button type="submit" class="btn btn-primary mt-2">Upload</button>
                    </form>
    
                    {{-- <div class="uploaded-files mt-4">
                        <h2>File yang Diupload</h2>
                        @foreach ($file as $item)
                            <div class="file-item">
                                <p>{{ $item->tingkat }}</p>
                                <a href="{{ asset('/storage/'.$item->filename) }}">Download File</a>
                            </div>
                        @endforeach
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-3">
        <div id="indikatorCarousel" class="carousel slide" data-interval="false" data-aos="fade-up">
            <!-- Indicators -->
            <div class="carousel-indicators">
                @foreach(array_chunk(['kd1', 'kd2', 'kd3', 'kd4','kd5', 'kd6', 'kd7', 'kd8','kd9', 'kd10'], 2) as $chunkIndex => $indikatorChunk)
                    <button type="button" data-bs-target="#indikatorCarousel" data-bs-slide-to="{{ $chunkIndex }}" class="{{ $chunkIndex == 0 ? 'active' : '' }}" aria-current="{{ $chunkIndex == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $chunkIndex + 1 }}"></button>
                @endforeach
            </div>
    
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                @foreach(array_chunk(['kd1', 'kd2', 'kd3', 'kd4','kd5', 'kd6', 'kd7', 'kd8','kd9', 'kd10'], 2) as $chunkIndex => $indikatorChunk)
                    <div class="carousel-item {{ $chunkIndex == 0 ? 'active' : '' }}" data-interval="false">
                        <div class="row mb-4">
                            @foreach($indikatorChunk as $index => $indikator)
                                @php
                                $indikatorApproval = \App\Models\IndikatorApproval::where('indikator', $indikator)->first();
                                // $backgroundColor = $index % 2 === 0 ? '#F5F7FA' : '#FFFFFF';
                                @endphp
                
                                <div class="col-md-6">
                                    <div class="card mt-4">
                                        <div class="card-header">
                                            <h2 style="text-align: center;">{{ $indikatorTitles[$indikator] }}</h2>
                                        </div>
                                        <div class="card-body">
                                            @include('partials.indikator_approval_status', ['indikatorApproval' => $indikatorApproval])
                                            @include('partials.indikator_approval_form_sdi', ['indikator' => $indikator])
                                        
                                            @foreach(['tingkat1', 'tingkat2','tingkat3','tingkat4', 'tingkat5'] as $tingkat)
                                                @include('partials.file_item', ['files' => $files[$indikator][$tingkat] ?? [], 'tingkat' => $tingkat])
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
    
            <!-- Controls -->
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#indikatorCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#indikatorCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> --}}
    </div>

    <!-- At the bottom of your Blade file that lists the files -->
    @include('partials.approval_modal')

    <section style="height: 45px; background-color: #F5F7FA;">
        {{-- <h1>Romantik</h1> --}}
        <!-- Other Romantik content goes here -->
    </section>



    
    {{-- <!-- Section for Romantik -->
    <section style="height: 589px; background-color: #F5F7FA;">
        <h1>Romantik</h1>
        <!-- Other Romantik content goes here -->
    </section>

    <!-- Section for Simbatik -->
    <section style="height: 589px; background-color: #FFFFFF;">
        <h1>Simbatik</h1>
        <!-- Other Simbatik content goes here -->
    </section>

    <!-- Section for Indah -->
    <section style="height: 589px; background-color: #F5F7FA;">
        <h1>Indah</h1>
        <!-- Other Indah content goes here -->
    </section>

    <!-- Section for Hubungi Kami -->
    <section style="height: 589px; background-color: #FFFFFF;">
        <h1>Hubungi Kami</h1>
        <!-- Other Hubungi Kami content goes here -->
    </section> --}}

@endsection