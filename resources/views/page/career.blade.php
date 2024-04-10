@extends('layouts.app')
@section('content')

<div class="banner-style banner-career">
    <div class="banner-content">
        <h1>Career</h1>
        <p>Unlock Your Potential with Kasturi HR</p>
    </div>    
</div>
    
<div class="jobs-container">
    <p class="no-opening">We constantly look for candidates, with relevant skills and qualifications, to onboard. If you think you've got something valuable to add to foster collaborative growth, share your resume at recruit@kasturihr.com</p>
    <?php /*?><div class="jobs-box-row">
        <div class="jobs-box">
            <div class="job-info">
                <h2><span class="material-icons-outlined">business_center</span> Business Development Manager</h2>
                <div class="job-highlights">
                    <span>Fulltime</span>
                    <span>Noida Sector 62</span>
                    <span>Work From Office</span>
                </div>
            </div>
            <div class="job-button">
                <div class="button">
                    <a href="javascript:;" class="btn-green button-green view-job">View Details</a>
                </div>
            </div>
            <div class="job-description">
                <h3>Job Description:</h3>

                <p>We are seeking a talented and passionate UI/UX Designer to join our creative team. As a UI/UX Designer, you will play a crucial role in enhancing the overall user experience and visual appeal of our digital products. We are looking for an individual who is not only proficient in design tools and methodologies but also has a deep understanding of user behavior and interaction.</p>

                <h3>Requirements and skills:</h3>

                <ul>
                    <li>Proven working experience as a business development manager, sales executive, or a relevant role.</li>
                    <li>Proven sales track record</li>
                    <li>Experience in customer support is a plus.</li>
                    <li>Proficiency in MS Office and CRM software (e.g. Salesforce)</li>
                    <li>Proficiency in English</li>
                    <li>Market knowledge</li>
                    <li>Communication and negotiation skills</li>
                    <li>Ability to build rapport.</li>
                    <li>Time management and planning skills</li>
                    <li>Graduate in relevant field.</li>
                    <li>Previous Experience with a product or a HRMS product is a plus.</li>
                </ul>

                <p>Megamax Services is a NexGen IT technology firm that helps our clients to grow the business with the help of our NeXT-Generation products & services, headquartered in Noida | INDIA with presence in Lucknow | INDIA and global presence in the USA and UK.</p>

                <p>We offer IT managed services in Infrastructure & Cloud Services (inclusive of End User Computing, Data Centre, Networks, Cyber Security), BigData, IoT, Digital Solutions, Application Development & Maintenance to its customers globally. Its customers are medium to large businesses where IT function plays a vital role as a business driver.</p>
                
                <p><strong>Share your CV at <a href="mailto:career@kasturihr.com">career@kasturihr.com</a></strong></p>
                
                <div class="apply-button">
                    <a href="javascript:;" class="btn-green button-green">Apply Now</a>
                </div>

            </div>
        </div>
        
        

    </div><?php */?>
</div>

<script>
$(document).ready(function(){
   $(".view-job").click(function(){
      //$(".jobs-box").removeClass("job-full");

      $(this).parents(".jobs-box").toggleClass("job-full");
      $(this).toggleClass("hide-full");
      $(this).text(function(i, text){
          return text === "Hide Details" ? "View Details" : "Hide Details";
      });
       $('body').animate({scrollTop: $(this).parent().offset().top},'slow');
   });
    
});
</script>
@endsection