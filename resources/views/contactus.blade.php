@extends('layouts.app')
@section('content')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Kasturi HR",
          "legalName": "Kasturi HR",
          "description": "KASTURI HR, or human resources management system developed by Megamax services, is a suite of software applications used to manage human resources and related processes throughout the employee lifecycle.",
          "url": "https://kasturihr.com",
          "logo": "https://kasturihr.com/assets/images/logo.png",
          "foundingDate": "2023-11-01",
          "founders": [
            {
              "@type": "Person",
              "name": "Rajesh Singh"
            }
          ],
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "C-56, A/12, Technopolis IT Hub",
            "addressLocality": "Sector-62",
            "addressRegion": "Noida",
            "postalCode": "201309",
            "addressCountry": "India"
          },
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Customer Service",
            "telephone": "1800 257 1003",
            "email": "sales@kasturihr.com",
            "contactOption": "TollFree",
            "areaServed": "India"
          },
          "sameAs": [
            "https://www.facebook.com/kasturihrms",
            "https://twitter.com/kasturihr",
            "https://www.linkedin.com/company/kasturihr",
            "https://www.instagram.com/kasturihrms/",
            "https://www.youtube.com/@KasturiHR",
            "https://in.pinterest.com/kasturihr/"
          ]
        }
    </script>
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.545423513943!2d77.36089857452504!3d28.613410984950555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce561b0000001%3A0xc6e40649475d79f1!2sMegamax%20Services!5e0!3m2!1sen!2sin!4v1703592498648!5m2!1sen!2sin" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <section class="contactpage-section">
        <div class="contact-info">
            <h2>Contact {{ config('app_config.config_name') }}</h2>
            <div class="contact-row">
                <p>{!! nl2br(e(config('app_config.config_address'))) !!}</p>
            </div>
            <div class="contact-row">
                <p><strong>Email:</strong> <a href="mailto:{{ config('app_config.config_email') }}">{{ config('app_config.config_email') }}</a></p>
            </div>
            <div class="contact-row">
                <p><strong>Call:</strong> <a href="tel:{{ config('app_config.config_phone') }}">{{ config('app_config.config_phone') }}</a></p>
            </div>
            
            <div class="contact-thumb">
                <img src="{{ asset('assets/images/thumb-contact.png') }}" alt="contact">
            </div>
        </div>
        <div id="contact" class="contact-form">
            <h2>Fill in the form to contact us</h2>
            <p>Asterisk (*) indicates the required fields</p>
            <form action="{{ route('submit-enquiry') }}" method="post">
            @csrf
            <input type="hidden" name="type" value="conatctus" />
                <div class="form-control-row form-half">
                    <div>
                        <label for="firstname">First name <span>*</span></label>
                        <input type="text" name="firstname" class="form-control" placeholder="Firstname" value="{{ old('firstname') }}" required>
                            @error('firstname')
                                <div class="error">{{ $message }}</div>
                            @enderror
                    </div>
                    <div>
                        <label for="lastname">Last name</label>
                        <input type="text" name="lastname" class="form-control" placeholder="Lastname" value="{{ old('lastname') }}">
                    </div>
                </div>
                
                <div class="form-control-row form-full">
                    <div>
                       <label for="email">Email <span>*</span></label>
                       <input type="text" name="email" class="form-control" placeholder="Your email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-control-row form-full">
                    <div>
                       <label for="email">Company</label>
                       <input type="text" name="company" class="form-control" placeholder="Your Company Name" value="{{ old('company') }}">
                    </div>
                </div>
                
                <div class="form-control-row form-full">
                    <div>
                        <label for="mobile_number">Mobile number</label>
                        <input type="text" name="mobile_number" class="form-control" placeholder="Mobile number">
                    </div>
                </div>
                
                <div class="form-control-row form-full">
                    <div>
                        <label for="message">Message</label>
                        <textarea name="message" placeholder="Message" class="form-control">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="form-control-row form-full text-center">
                    <div>
                        <input type="submit" value="SEND" class="btn-green">
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success text-green-600">
                        {{ session('success') }}
                    </div>
                    @endif
                </div>
            </form>
        </div>
        
    </section>
    @endsection     