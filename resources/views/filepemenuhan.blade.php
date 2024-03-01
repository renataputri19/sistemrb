
@extends('layouts.main')

@section('title', 'File Pemenuhan') 

@section('content')

    <section class="section-hero-domain" style="background-color: #F5F7FA;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="container-jadwal" data-aos="fade-up">
                        <!-- Other content -->
                        
                        <h2 class="text-center mb-4">Response Penginputan File RB (PEMENUHAN)</h2>
                        <div class="text-center mb-4">
                            <a href="https://docs.google.com/spreadsheets/d/13xsRAh9bnVcaD-zuUuAiPWf_fYDDpeXqn835jT4zIuA/edit?usp=sharing" target="_blank" class="btn btn-primary">Open Spreadsheet</a>
                        </div>
                
                        <!-- Responsive iframe wrapper -->
                        <div class="iframe-container">
                            <iframe src="https://docs.google.com/spreadsheets/d/13xsRAh9bnVcaD-zuUuAiPWf_fYDDpeXqn835jT4zIuA/edit?usp=sharing">Loading…</iframe>
                        </div>
                        
                        <!-- Other content -->
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
