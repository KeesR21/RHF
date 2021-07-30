<div>
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->


    </div>
    <!-- contact page -->
    <div class="contact-form py-5">
        <div class="container py-lg-5 py-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-sm-5 mb-4">
                        <h3 class="title-style mb-2">Contact Us</h3>
                        <p class="lead">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque,
                            eaque ipsa quae ab illo inventore.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mx-auto" style="max-width:1100px">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="contact-address p-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="ml-3">
                                    <h5 class="contact-text">Visit Us:</h5>
                                    <p>La croix du sud,Kigali</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                        <div class="contact-address p-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div class="ml-3">
                                    <h5 class="contact-text">Call Us:</h5>
                                    <a href="tel:+0788300261 / 0788308200 / 0788898262"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-lg-0 mt-4">
                        <div class="contact-address p-4">
                            <div class="contact-icon d-flex align-items-center">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <div class="ml-3">
                                    <h5 class="contact-text">Mail Us:</h5>
                                    <a href="mailto:info@rhf.rw"> {!! $email[0] !!}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-form pt-5 mt-2">
                    <form wire:submit.prevent="sendMail" class="cont-frm p-sm-5">
                        <div>
                            @if(session()->has('message'))
                            <div class="bg-indigo-900 text-center py-4 lg:px-4 p-4">
                                <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                                    <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">Saved</span>
                                    <span class="font-semibold mr-2 text-left flex-auto">{{ session('message') }}</span>
                                    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                                    </svg>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" wire:model="name" id="w3lName" placeholder="Your Name" class="contact-input" />
                                <input type="text" wire:model="phone" id="w3lPhone" placeholder="Phone Number" class="contact-input" />
                            </div>
                            <div class="col-md-6">
                                <input type="email" wire:model="sender" id="w3lSender" placeholder="Your Email id" class="contact-input" required />
                                <input type="text" wire:model="subject" id="w3lSubject" placeholder="Subject" class="contact-input" />
                            </div>
                        </div>
                        <textarea class="contact-textarea" wire:model="message" id="w3lMessage" placeholder="Type your message here" required></textarea>
                        <div class="text-right">
                            <button type="submit" class="btn btn-style-white btn-style-primary">Submit Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="map">
        <iframe src="https://maps.google.com/maps?q=la%20croix%20du%20sud&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
    <!-- //contact page -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>

    @include('main-footer')

    @include('scripts')
</div>