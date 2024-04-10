<section class="final-call-container">
    <div class="final-call-row">
        <div class="final-call-col">
            <h2>Want a Practical Demo?</h2>
            <p>Witness how Kasturi saves you time, simplifies complex operations, and automates the HR workflow. </p>
            <div class="button">
                <button data-fancybox data-src="#callback" class="btn-green button-green">Book a Demo</button>
                <?php /*?><a href="{{ url('customer/register') }}" class="btn-green">GET A CALL BACK</a><?php */?>
            </div>
        </div>
        
        <div class="final-call-col">
            <h2>It’s the right HRMS for you!</h2>
            <p>We understand complex HR processes. You need not worry, just smartly reduce your workload.</p>
            <div class="button">
                <a href="{{ url('contact-us') }}#contact" class="btn-green button-green">Resolve your Doubts</a>
            </div>
        </div>
    </div>
</section>

<footer id="footer-container" class="footer-container">
    <div class="container-fluid">
        <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 my-auto"><p><a href="tel:18002571003">1800 257 1003 (Toll Free)</a></p></div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 my-auto">
                    <div class="social-flex">
                        <a href="{{ config('app_config.config_social.facebook') }}" target="_blank"><img src="{{ asset('assets/images/icon-facebook.png') }}" alt="Facebook"></a>
                        <a href="{{ config('app_config.config_social.twitter') }}" target="_blank"><img src="{{ asset('assets/images/icon-twitter.png') }}" alt="Twitter"></a>
                        <a href="{{ config('app_config.config_social.linkedin') }}" target="_blank"><img src="{{ asset('assets/images/icon-linkedin.png') }}" alt="Linkedin"></a>
                        <a href="{{ config('app_config.config_social.instagram') }}" target="_blank"><img src="{{ asset('assets/images/icon-instagram.png') }}" alt="Instagram"></a>
                        <a href="{{ config('app_config.config_social.pinterest') }}" target="_blank"><img src="{{ asset('assets/images/icon-pinterest.png') }}" alt="Pinterest"></a>
                        <a href="{{ config('app_config.config_social.youtube') }}" target="_blank"><img src="{{ asset('assets/images/icon-youtube.png') }}" alt="Youtube"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                <div class="footer-intro">
                    <h3>{{ config('app_config.config_name') }}</h3>
                    <p>Empower your team with seamless access to our HRMS platform. Our solution is designed for both desktop and mobile, ensuring your employees can manage HR tasks conveniently, whether they're in the office or on the go.</p>
                    <?php /*?><a href="#" class="btn-footer btn-green">Get Started</a><?php */?>
                </div>
            </div>
            
            <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="{{ url('about-us') }}">About us</a></li>
                    <li><a href="{{ url('faq') }}">FAQ</a></li>
                    <li><a href="{{ url('how-it-works') }}">How it works</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                    <li><a href="{{ url('contact-us') }}">Contact us</a></li>
                    <li><a href="{{ url('kasturi-hrms-brochure') }}">Brochure</a></li>
                </ul>
            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <h3>Contact Information</h3>
                <ul>
                    <li><a href="mailto:{{ config('app_config.config_email') }}"><span class="material-icons-outlined">mail</span> {{ config('app_config.config_email') }}</a></li>
                    <li><a href="tel:{{ config('app_config.config_phone') }}"><span class="material-icons-outlined">call</span> {{ config('app_config.config_phone') }}</a></li>
                </ul>
            </div>
        </div>
        
    </div>    
</footer>
<div class="copyright-container">
    <p>Copyright &copy; {{ now()->year }} {{ config('app_config.config_name') }}  |  <a href="{{ url('privacy-policy') }}">Privacy Policy</a>  |  <a href="{{ url('terms-and-conditions') }}">Terms & Condition</a></p>
</div>

</body>
<script>
$(document).ready(function() {

    
 $(".mobile-menu-trigger").click(function(){
		$(".mobile-menu").addClass("mobile-menu-show");
		$(".menu-overlay").show();
		$("body").addClass("body_overflow");
	});
	$(".menu-close").click(function(){
		$(".mobile-menu").removeClass("mobile-menu-show");
		$(".menu-overlay").hide();
		$("body").removeClass("body_overflow");
	});

});
    
$(document).ready(function(){
   $(".accordion-faq").first().children(".faq-content").show(); 
    $(".accordion-faq").first().addClass("active");
    $(".accordion-faq").first().find("img").removeClass("arrow-up");
    $(".accordion-faq").click(function(){
        //alert("1");
        $(this).toggleClass("active");
        $(this).children(".faq-content").toggle();  
        $(this).children().children("img").toggleClass("arrow-up");
    });
	 
});
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/659695028d261e1b5f4f4f99/1hja3c5g4';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>