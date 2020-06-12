@extends('layouts.base')

@section('content')
    <div class="hero-wrap" style="background-image: url({{asset('images/bg.png')}});" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center">
                <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
                    <div class="text">
                        <h1 class="mb-4">Now <span>It's easy for you</span> <span>find relatives</span></h1>
                        <p style="font-size: 18px;">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts</p>
                        <a href="https://vimeo.com/1371072" class="icon-wrap popup-vimeo d-flex align-items-center mt-4">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="ion-ios-play"></span>
                            </div>
                            <div class="heading-title ml-5">
                                <span>Easy steps for building family tree</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col"></div>
                <div class="col-lg-4 col-md-6 mt-0 mt-md-5 d-flex">
                    <form action="#" class="request-form ftco-animate">
                        <div class="col-md-12 text-center">
                            <h1 style="font-family: 'Kaushan Script', cursive; color: #1a1a1a">Login</h1>
                        </div>

                        <div class="form-group">
                            <label for="" class="label">Email</label>
                            <input type="email" class="form-control" placeholder="Example@email.com">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Password</label>
                            <input type="password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                            <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Search Vehicle" class="btn btn-primary py-3 px-4">
                        </div>

                        <style>
                            .login-or {
                                position: relative;
                                color: #aaa;
                                margin-top: 10px;
                                margin-bottom: 10px;
                                padding-top: 10px;
                                padding-bottom: 10px;
                            }
                            .span-or {
                                display: block;
                                position: absolute;
                                left: 50%;
                                top: -2px;
                                margin-left: -25px;
                                background-color: #fff;
                                width: 50px;
                                text-align: center;
                            }
                            .hr-or {
                                height: 1px;
                                margin-top: 0px !important;
                                margin-bottom: 0px !important;
                            }

                        </style>

                        <div class="col-md-12 ">
                            <div class="login-or">
                                <hr class="hr-or">
                                <span class="span-or">or</span>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p class="text-center">
                                <a href="#" class="google btn mybtn"><i class="icon icon-google-plus">
                                    </i> Signup using Google
                                </a>
                            </p>
                        </div>
                        <div class="form-group">
                            <p  class="text-center">Don't have account? <a data-toggle="modal" data-target="#squarespaceModal" href="#" id="signup">Sign up here</a></p>
                        </div>
                    </form>

                    <div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                                    <div class="col-md-12 text-center">
                                        <h1 style="font-family: 'Kaushan Script', cursive; color: #1a1a1a">Sign up</h1>
                                    </div>
                                </div>
                                <div class="modal-body">

                                    <!-- content goes here -->
                                    <form method="post" action="{{ route('users.store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="confirm_password">
                                        </div>
                                        <div class="form-group">
                                            <label for="birthdate">Confirm Password</label>
                                            <input type="date" class="form-control" id="birthdate">
                                        </div>

                                        <div class="form-group ">
                                            <input style="right: 0" type="submit" value="Sign Up" class="btn btn-primary py-3 px-5 text-center">
                                        </div>
                                    </form>

                                </div>
                                <div class="modal-footer">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search-wrap-1 ftco-animate mb-5">
                        <form action="#" class="search-property-1">
                            <div class="row">
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Select Model</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Select Model</option>
                                                    <option value="">Model 1</option>
                                                    <option value="">Model 2</option>
                                                    <option value="">Model 3</option>
                                                    <option value="">Model 4</option>
                                                    <option value="">Model 5</option>
                                                    <option value="">Model 6</option>
                                                    <option value="">Model 7</option>
                                                    <option value="">Model 8</option>
                                                    <option value="">Model 9</option>
                                                    <option value="">Model 10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Select Brand</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Select Brand</option>
                                                    <option value="">Brand 1</option>
                                                    <option value="">Brand 2</option>
                                                    <option value="">Brand 3</option>
                                                    <option value="">Brand 4</option>
                                                    <option value="">Brand 5</option>
                                                    <option value="">Brand 6</option>
                                                    <option value="">Brand 7</option>
                                                    <option value="">Brand 8</option>
                                                    <option value="">Brand 9</option>
                                                    <option value="">Brand 10</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Year Model</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">Year Model</option>
                                                    <option value="">2019</option>
                                                    <option value="">2018</option>
                                                    <option value="">2017</option>
                                                    <option value="">2016</option>
                                                    <option value="">2015</option>
                                                    <option value="">2014</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Price Limit</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="" id="" class="form-control">
                                                    <option value="">$1</option>
                                                    <option value="">$50</option>
                                                    <option value="">$100</option>
                                                    <option value="">$200</option>
                                                    <option value="">$300</option>
                                                    <option value="">$400</option>
                                                    <option value="">$500</option>
                                                    <option value="">$600</option>
                                                    <option value="">$700</option>
                                                    <option value="">$800</option>
                                                    <option value="">$900</option>
                                                    <option value="">$1000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Search" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Our Services</span>
                    <h2 class="mb-2">Our Services</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon"><span class="flaticon-customer-support"></span></div>
                                <h3 class="heading mb-0 pl-3">24/7 Car Support</h3>
                            </div>
                            <p>A small river named Duden flows by their place and supplies it with you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon"><span class="flaticon-route"></span></div>
                                <h3 class="heading mb-0 pl-3">Lots of location</h3>
                            </div>
                            <p>A small river named Duden flows by their place and supplies it with you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon"><span class="flaticon-online-booking"></span></div>
                                <h3 class="heading mb-0 pl-3">Reservation</h3>
                            </div>
                            <p>A small river named Duden flows by their place and supplies it with you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon"><span class="flaticon-rent"></span></div>
                                <h3 class="heading mb-0 pl-3">Rental Cars</h3>
                            </div>
                            <p>A small river named Duden flows by their place and supplies it with you</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container-fluid px-4">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">What we offer</span>
                    <h2 class="mb-2">Choose Your Car</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url({{asset('images/car-1.jpg')}});">
                            <div class="price-wrap d-flex">
                                <span class="rate">$25</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/Day</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                            <span>Audi</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url({{asset('images/car-2.jpg')}});">
                            <div class="price-wrap d-flex">
                                <span class="rate">$25</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/Day</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                            <span>Ford</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url({{asset('images/car-3.jpg')}});">
                            <div class="price-wrap d-flex">
                                <span class="rate">$25</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/Day</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                            <span>Cheverolet</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url({{asset('images/car-4.jpg')}});">
                            <div class="price-wrap d-flex">
                                <span class="rate">$25</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/Day</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                            <span>Mercedes</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url({{asset('images/car-5.jpg')}});">
                            <div class="price-wrap d-flex">
                                <span class="rate">$25</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/Day</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                            <span>Audi</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url({{asset('images/car-6.jpg')}});">
                            <div class="price-wrap d-flex">
                                <span class="rate">$25</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/Day</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                            <span>Ford</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url({{asset('images/car-7.jpg')}});">
                            <div class="price-wrap d-flex">
                                <span class="rate">$25</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/Day</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                            <span>Cheverolet</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="car-wrap ftco-animate">
                        <div class="img d-flex align-items-end" style="background-image: url({{asset('images/car-8.jpg')}});">
                            <div class="price-wrap d-flex">
                                <span class="rate">$25</span>
                                <p class="from-day">
                                    <span>From</span>
                                    <span>/Day</span>
                                </p>
                            </div>
                        </div>
                        <div class="text p-4 text-center">
                            <h2 class="mb-0"><a href="#">Mercedes Grand Sedan</a></h2>
                            <span>Mercedes</span>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-black btn-outline-black mr-1">Book now</a> <a href="#" class="btn btn-black btn-outline-black ml-1">Details</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section services-section img" style="background-image: url({{asset('images/bg_2.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Work flow</span>
                    <h2 class="mb-3">How it works</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
                            <h3>Pick Destination</h3>
                            <p>A small river named Duden flows by their place and supplies it with you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                            <h3>Select Term</h3>
                            <p>A small river named Duden flows by their place and supplies it with you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
                            <h3>Choose A Car</h3>
                            <p>A small river named Duden flows by their place and supplies it with you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-review"></span></div>
                            <h3>Enjoy The Ride</h3>
                            <p>A small river named Duden flows by their place and supplies it with you</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Testimonial</span>
                    <h2 class="mb-3">Happy Clients</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url({{asset('images/person_1.jpg')}})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Marketing Manager</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url({{asset('images/person_2.jpg')}})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Interface Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url({{asset('images/person_3.jpg')}})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">UI Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url({{asset('images/person_1.jpg')}})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap text-center py-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url({{asset('images/person_1.jpg')}})">
                                </div>
                                <div class="text pt-4">
                                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Roger Scott</p>
                                    <span class="position">System Analyst</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{asset('images/about.jpg')}});">
                </div>
                <div class="col-md-6 wrap-about py-md-5 ftco-animate">
                    <div class="heading-section mb-5 pl-md-5">
                        <span class="subheading">About us</span>
                        <h2 class="mb-4">Choose A Perfect Car</h2>

                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
                        <p><a href="#" class="btn btn-primary">Search Vehicle</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2>Recent Blog</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url({{asset('images/image_1.jpg')}});">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">July. 24, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="blog-single.html" class="block-20" style="background-image: url({{asset('images/image_2.jpg')}});">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">July. 24, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url({{asset('images/image_3.jpg')}});">
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">July. 24, 2019</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
