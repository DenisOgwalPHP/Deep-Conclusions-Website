<div>
        <!-- Breadcrumb -->
        <div class="text-left iq-breadcrumb-one iq-bg-over black ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-8 text-left align-self-center">
                        <nav aria-label="breadcrumb" class="text-left">
                            <h2 class="title">Contact us </h2>
                            <ol class="breadcrumb main-bg">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">Contact us</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-right wow fadeInRight"> <img alt="banner" class="img-fluid float-right" src="{{ asset('assets/images/about-us/04.png') }}"> </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->
        <!-- Main Content -->
        <div class="main-content">
            <!-- Address -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="consult-services wow fadeInUp contact-detail text-center">
                                <div class="circle-effect"> <i aria-hidden="true" class="fa fa-map-marker"></i> </div>
                                <h4 class="mb-2">Office Address</h4>
                                <p class="mb-0">{{ $setting->address}}</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="consult">
                                <div class="consult-services wow fadeInUp contact-detail text-center">
                                    <div class="circle-effect"> <i aria-hidden="true" class="fa fa-phone"></i> </div>
                                    <h4 class="mb-2">Office Contact</h4>
                                    <p class="mb-0">{{ $setting->phone}}</p>
                                    <p class="mb-0">{{ $setting->phone2}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="consult">
                                <div class="consult-services wow fadeInUp contact-detail text-center">
                                    <div class="circle-effect"> <i aria-hidden="true" class="fa fa-envelope"></i> </div>
                                    <h4 class="mb-2">Office Email</h4>
                                    <p class="mb-0">{{ $setting->email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Address -End -->
            <!-- Contact us page -->
            <section class="pt-0">
                <div class="container">
                    <div class="row  align-items-center ">
                        <div class="col-sm-6">
                            <h2 class="text-left mb-4">Let's talk, Message us today</h2>
                            <div class="response-output ">
                                @if (Session::has('message'))
                                <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                                @endif
                            </div>
                            <form  wire:submit.prevent="sendMessage">
                                <div class="contact-form">
                                    <div class=""> @error('name')<p class="text-danger">{{ $message }}</p>@enderror<input type="text" wire:model="name" name="name" class="form-control text " placeholder="Your Name"> </div>
                                    <div class=""> @error('email')<p class="text-danger">{{ $message }}</p>@enderror<input type="text" wire:model="email" name="email" class="form-control text " placeholder="Your Email"> </div>
                                    <div class=""> @error('phone')<p class="text-danger">{{ $message }}</p>@enderror<input type="text" wire:model="phone" name="phone" class="form-control text " placeholder="Your Phone Number"> </div>
                                    <div class=""> @error('subject')<p class="text-danger">{{ $message }}</p>@enderror<input type="text" wire:model="subject" name="subject" class="form-control text " placeholder="Subject"> </div>
                                    <div class=""> @error('comment')<p class="text-danger">{{ $message }}</p>@enderror<textarea name="comment" wire:model="comment" cols="40" rows="10" class="form-control textarea " placeholder="Your Message"></textarea> </div>
                                    <div> <button id="submit-4" name="submit" type="submit" value="Send" class="button d-block w-100">Send Message</button> </div>
                                </div>
                            </form>
                        </div>
                        <div class="mt-5 col-sm-6 offset-lg-1 col-lg-5 offset-md-1 col-md-5">
                            <div class="wrapper">
                                <div class="contact-box d-flex">
                                    <i aria-hidden="true" class="ion ion-android-call"></i>
                                    <div class="service-detail">
                                        <h4 class="mb-2">Phone support</h4>
                                        <ul class="list-inline mb-0">
                                            <li> <a href="tel:+0123456789">{{ $setting->phone }}</a> </li>
                                            <li> <a href="tel:+0123456789">{{ $setting->phone2 }}</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="contact-box d-flex   ">
                                    <i aria-hidden="true" class="fa fa-envelope-o"></i>
                                    <div class="service-detail">
                                        <h4 class="mb-2">Email us</h4>
                                        <ul class="list-inline mb-0">
                                            <li><a href="mailto:{{ $setting->email }}"> {{ $setting->email }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="contact-box d-flex   ">
                                    <i aria-hidden="true" class="ion ion-android-share-alt"></i>
                                    <div class="service-detail">
                                        <h4 class="mb-2">Social media</h4>
                                        <ul>
                                            <li class="d-inline"><a href="{{$setting->facebook }}"><i class="fa fa-facebook-f"></i></a></li>
                                            <li class="d-inline"><a href="{{ $setting->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                            <li class="d-inline"><a href="{{ $setting->instagram }}"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Contact us page End-->
        </div>
</div>
