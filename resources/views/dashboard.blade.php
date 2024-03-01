@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')


    <section class="section-hero-domain" style="background-color: #F5F7FA;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="container-jadwal" data-aos="fade-up">
                        <!-- Other content -->
                        
                        <h2 class="text-center mb-4">Dashboard RB</h2>
                        <div class="text-center mb-4">
                            <a href="https://public.tableau.com/views/VisualisasiNilaiRB/Dashboard1?:language=en-US&publish=yes&:sid=&:display_count=n&:origin=viz_share_link" target="_blank" class="btn btn-primary">Open Dashboard</a>
                        </div>
                    
                
                        <div class='tableauPlaceholder' id='viz1709268867453' style='position: relative'>
                            <noscript>
                                <a href='#'><img alt='Dashboard 1 ' src='https://public.tableau.com/static/images/Vi/VisualisasiNilaiRB/Dashboard1/1_rss.png' style='border: none' /></a>
                            </noscript>
                            <object class='tableauViz'  style='display:none;'>
                                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                                <param name='embed_code_version' value='3' />
                                <param name='site_root' value='' />
                                <param name='name' value='VisualisasiNilaiRB/Dashboard1' />
                                <param name='tabs' value='no' />
                                <param name='toolbar' value='yes' />
                                <param name='static_image' value='https://public.tableau.com/static/images/Vi/VisualisasiNilaiRB/Dashboard1/1.png' />
                                <param name='animate_transition' value='yes' />
                                <param name='display_static_image' value='yes' />
                                <param name='display_spinner' value='yes' />
                                <param name='display_overlay' value='yes' />
                                <param name='display_count' value='yes' />
                                <param name='language' value='en-US' />
                                <param name='filter' value='publish=yes' />
                            </object>
                        </div>
                            <script type='text/javascript'>
                                var divElement = document.getElementById('viz1709268867453');
                                var vizElement = divElement.getElementsByTagName('object')[0];
                                if (divElement.offsetWidth > 800) { vizElement.style.width='1200px';vizElement.style.height='827px';} 
                                else if (divElement.offsetWidth > 500) { vizElement.style.width='1200px';vizElement.style.height='827px';} 
                                else { vizElement.style.width='100%';vizElement.style.height='1277px';}
                                var scriptElement = document.createElement('script');
                                scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
                                vizElement.parentNode.insertBefore(scriptElement, vizElement);
                            </script>
                
        
                        
                        <!-- Other content -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    










@endsection


@section('scripts')
    

@endsection
