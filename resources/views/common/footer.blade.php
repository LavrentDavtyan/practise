<footer>
    <div class="row">
        <div class="col-lg-4 item">
            <img  src="{{ asset('images/footer_logo.png') }}"  alt="Logo"  class="d-inline-block align-text-top footer-logo">
            <p>
            	
            </p>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-2 item">
            <p > <span class="underline">@lang('messages.web_site') </span> </p>
            <div class="main-info d-flex flex-column">
                <a href="">@lang('messages.about_us')</a>
                <a href="">@lang('messages.news')</a>
              
            </div>
        </div>
        <div class="col-lg-2 item">
            <p >  <span class="underline">@lang('messages.contact_us')</span></p>
            <div class="main-info contact-as d-flex flex-column">
            </div>
        </div>
        <div class="col-lg-1 item"></div>
        <div class="col-lg-2">
            <p style="margin-bottom:32px"> <span class="underline">@lang('messages.joun_us')</span> </p>
            <div class="main-info social-media d-flex flex-row">
            </div>
        </div>
    </div>
    <div class="row ">
        <p class="text-center" >Copyright © ??? 1992 - {{ date('Y') }}</p>
    </div>
</footer>