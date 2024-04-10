@extends('layouts.app')
@section('content') 
    <section class="inner-heading">
        <h1>Appraisal</h1>
    </section>

    <section class="service-details">
        <h2>Do you find the Appraisal Management exhausting?</h2>
        <div class="service-screen">
            <img src="{{ asset('assets/images/ss-appraisal.jpg') }}" alt="Appraisal">
        </div>
        <div class="service-note">
            <h3>Look no further!</h3>
            <p>Our Appraisal Management software, equipped with a user-friendly interface and advanced features, empowers you to easily manage Appraisal for your Employees.</p>
        </div>
        
    </section>


    <section class="faq-container" style="padding-top: 0;">
        <h2>Frequently Asked Questions</h2>
        <div class="faqs">
            <div class="faq">
                <div class="accordion-faq">
                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent consequat lacinia faucibus. Quisque sed nisl sit amet justo fermentum mollis a vitae ligula. Duis eleifend tortor nec dui pretium, non elementum lorem laoreet. Vestibulum dignissim vel ante eu tincidunt. Integer ut semper ligula. Nunc cursus posuere tortor.</p>
                    </div>
                </div>
                
                <div class="accordion-faq">
                    <h3>Vestibulum tincidunt mauris vel nisl facilisis, quis aliquam nisi semper? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent consequat lacinia faucibus. Quisque sed nisl sit amet justo fermentum mollis a vitae ligula. Duis eleifend tortor nec dui pretium, non elementum lorem laoreet. Vestibulum dignissim vel ante eu tincidunt. Integer ut semper ligula. Nunc cursus posuere tortor.</p>
                    </div>
                </div>
                
                <div class="accordion-faq">
                    <h3>Maecenas mauris diam, mollis nec dolor at, mollis auctor ipsum? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent consequat lacinia faucibus. Quisque sed nisl sit amet justo fermentum mollis a vitae ligula. Duis eleifend tortor nec dui pretium, non elementum lorem laoreet. Vestibulum dignissim vel ante eu tincidunt. Integer ut semper ligula. Nunc cursus posuere tortor.</p>
                    </div>
                </div>
                
                <div class="accordion-faq">
                    <h3>Morbi consequat pulvinar facilisis. Aenean consectetur varius nunc? <img src="{{ asset('assets/images/arrow-down.png') }}" class="arrow-up"></h3>
                    <div class="faq-content">
                        <p>Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent consequat lacinia faucibus. Quisque sed nisl sit amet justo fermentum mollis a vitae ligula. Duis eleifend tortor nec dui pretium, non elementum lorem laoreet. Vestibulum dignissim vel ante eu tincidunt. Integer ut semper ligula. Nunc cursus posuere tortor.</p>
                    </div>
                </div>
                
            </div>

        </div>
    </section>
    @endsection