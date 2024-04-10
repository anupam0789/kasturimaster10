<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.meta')
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="google-site-verification" content="{{ env('GOOGLE_SITE_VERIFICATION') }}" />

        <!-- Link to the favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('site.webmanifest') }}">
        <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> -->

        <!-- Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-grid.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-utilities.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-reboot.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/home.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">        
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.min.css') }}">

        <script src="{{ asset('assets/javascript/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/javascript/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/javascript/bootstrap.bundle.min.js') }}"></script>
        <!-- <script src="{{ asset('assets/javascript/bootstrap.esm.min.js') }}"></script> -->
        <script src="{{ asset('assets/javascript/owl.carousel.min.js') }}"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css">

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WWK7KVKD');</script>
        <!-- End Google Tag Manager -->
    </head>
    <body class="">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWK7KVKD"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        <section id="home-banner-container" class="home-banner-container {{ request()->is('/') ? '' : 'header-inner' }}">
            @include('layouts.header')
            <div class="banner-caption">
                <div class="caption-title">Human Resource <span>Management</span></div>
                <p>The HR solution for the modern workplace: Empowering Organizations, Efficiency, Engagement, Excellence, Simplifying Management.</p>
                <?php /*?><a data-fancybox data-animation-duration="700" data-src="#bookademo" href="javascript:;" class="btn-green">BOOK A DEMO <span class="material-icons-outlined">arrow_right_alt</span></a><?php */?>
                <button data-fancybox data-src="#bookademo" class="btn-green button-green">BOOK A DEMO <span class="material-icons-outlined">arrow_right_alt</span></button>
            </div>
            
            <div class="animated-home-banner">
                <div class="animated-circle spin-slow"><img src="{{ asset('assets/images/circle.png') }}" alt="Circle"></div>
                <div class="animated-icon-01 animated-icon"><img src="{{ asset('assets/images/icon-attendance.png') }}" alt="attendance"></div>
                <div class="animated-icon-02 animated-icon"><img src="{{ asset('assets/images/icon-timesheet.png') }}" alt="timesheet"></div>
                <div class="animated-icon-03 animated-icon"><img src="{{ asset('assets/images/icon-payroll.png') }}" alt="payroll"></div>
                <div class="static-hand"><img src="{{ asset('assets/images/img-screen.png') }}" alt="screen"></div>
                <?php /*?><div class="download-info"><a href="https://play.google.com/store/apps/details?id=com.kasturi.hr" target="_blank"><img src="{{ asset('assets/images/button-download-info.png') }}" alt="screen"></a></div><?php */?>
            </div>
            
        </section>
        
        <div id="bookademo" style="display:none;max-width:500px;" class="pp-form-container">
            <h2>Book a Demo</h2>
            <div class="pp-form" id="book-demo-form">
                @csrf
                <input type="hidden" name="type" value="demo" />
                <div class="form-row">
                    <label for="company">Company Name <span>*</span></label>
                    <input type="text" name="company" id="input-company" required>
                </div>    
                
                <div class="form-row">
                    <label for="fullname">Your Name <span>*</span></label>
                    <input type="text" name="fullname" id="input-fullname" required>
                    <div class="error"></div>
                </div>
                
                <div class="form-row">
                    <label for="email">Your Email <span>*</span></label>
                    <input type="text" name="email" required id="input-email">
                </div>
                
                <div class="form-row">
                    <label for="mobile_number">Your Phone Number <span>*</span></label>
                    <input type="text" name="mobile_number" required id="input-mobile_number">
                </div>
                
                <div class="form-row form-button d-grid">
                    <button id="button-demo" type="button" class="btn btn-green">Book My Demo</button>
                </div>
            </div>
        </div>
        
        <div id="callback" style="display:none;max-width:500px;" class="pp-form-container">
            <h2>Get a Call Back</h2>
            <div class="pp-form" id="callback-form">
                @csrf
                <input type="hidden" name="type" value="callback" />
                <div class="form-row">
                    <label for="company">Company Name <span>*</span></label>
                    <input id="input-company" type="text" name="company" required>
                </div>    
                
                <div class="form-row">
                    <label for="fullname">Your Name <span>*</span></label>
                    <input id="input-fullname" type="text" name="fullname" required>
                </div>
                
                <div class="form-row">
                    <label for="mobile">Your Phone Number <span>*</span></label>
                    <input id="input-mobile" type="text" name="mobile" required>
                </div>
                
                <div class="form-row form-button d-grid">
                    <button id="button-callback" type="button" class="btn btn-green">Call me Back</button>
                </div>
            </div>
        </div>

            <!-- Page Heading -->
            <!-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif -->

            <!-- Page Content -->
            <main>
                @yield('content');
            </main>
        
        @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
        <script>
      Fancybox.bind('[data-fancybox]', {
        // Custom options for all galleries
      });    
    </script>
    <script type="text/javascript">
        $('#button-demo').on('click', function() {
            $.ajax({
                url: "{{ route('submit-enquiry-demo') }}",
                type: 'post',
                data: $('#book-demo-form input[type=\'text\'], #book-demo-form input[type=\'hidden\'], #book-demo-form input[type=\'email\'],  #book-demo-form select'),
                dataType: 'json',
             
                beforeSend: function() {
                    $('#button-demo').button('loading');
                },
                complete: function() {
                    $('#button-demo').button('reset');
                },
                success: function(json) {
                    $('.error').remove();
                    $('.alert').remove();
                  
                    if (json['success']) {
                        $("#bookademo h2").after('<div class="alert alert-success text-green-600">'+json['success']+'</div>');
                        $('#book-demo-form input[type=\'text\']').val('');
                        setTimeout(function() {
                            $('.error').remove();
                            $('.alert').remove();
                            $('.is-close-btn').click();
                        }, 2000);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    $('.error').remove();
                    $('.alert').remove();
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        // Loop through the errors and display them
                        $.each(errors, function(key, value) {
                            $("#book-demo-form #input-"+key).after('<div class="error">'+value+'</div>');
                        });
                    } else {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                }
            });
        });
        $('#button-callback').on('click', function() {
            $.ajax({
                url: "{{ route('submit-enquiry-callback') }}",
                type: 'post',
                data: $('#callback-form input[type=\'text\'], #callback-form input[type=\'hidden\'], #callback-form input[type=\'email\'],  #callback-form select'),
                dataType: 'json',
             
                beforeSend: function() {
                    $('#button-callback').button('loading');
                },
                complete: function() {
                    $('#button-callback').button('reset');
                },
                success: function(json) {
                    $('.error').remove();
                    $('.alert').remove();
                  
                    if (json['success']) {
                        $("#callback h2").after('<div class="alert alert-success text-green-600">'+json['success']+'</div>');
                        $('#callback-form input[type=\'text\']').val('');
                        setTimeout(function() {
                            $('.error').remove();
                            $('.alert').remove();
                            $('.is-close-btn').click();
                        }, 2000);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    $('.error').remove();
                    $('.alert').remove();
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        // Loop through the errors and display them
                        $.each(errors, function(key, value) {
                            $("#callback-form #input-"+key).after('<div class="error">'+value+'</div>');
                        });
                    } else {
                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                    }
                }
            });
        });
    </script>
    </body>
</html>
