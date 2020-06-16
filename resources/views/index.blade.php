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
                    @if(auth()->guard('user')->user() == null)

                    <form method="post" action="{{route('user.auth')}}" class="request-form ftco-animate">
                        @csrf
                        @if(count($errors)>0)
                            <ul>
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger" style="font-size: 0.8em">
                                        {{$error}}
                                    </div>
                                @endforeach
                            </ul>
                        @endif
                        <div class="col-md-12 text-center">
                            <h1 style="font-family: 'Kaushan Script', cursive; color: #1a1a1a">Login</h1>
                        </div>

                        <div class="form-group">
                            <label for="" class="label">Email</label>
                            <input type="email" class="form-control" placeholder="Example@email.com" name="email">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Password</label>
                            <input type="password" class="form-control" placeholder="password" name="password">
                        </div>
                        <div class="form-group">
                            <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Login" class="btn btn-primary py-3 px-4">
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
                    @endif
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
                                    <form method="post" action="{{ route('user.store') }}">

                                        @csrf
                                        @if(count($errors)>0)
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li class="alert alert-danger">
                                                        {{$error}}
                                                    </li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        <div class="form-group" style="display: flex;flex-direction: row">
                                            <div style="padding-right: 10px">
                                                <label for="last-name">First Name</label>
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="first-name" id="" placeholder="First Name">
                                            </div>
                                            <div>
                                                <label for="last-name">Last Name</label>
                                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="last-name" id="" placeholder="Last Name">
                                            </div>

                                        </div>

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
                                            <label for="birthdate">Birth Date</label>
                                            <input type="date" class="form-control" id="birthdate" name="birthdate">
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
        <br>
    <hr>
    <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                    <span class="subheading">Our Services</span>
                    <h2 class="mb-2">Our Services</h2>
                </div>
            </div>
            <div class="row d-flex">
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon"><span class="flaticon-customer-support"></span></div>
                                <h3 class="heading mb-0 pl-3">24/7 Support</h3>
                            </div>
                            <p>Our team is 24/7 active to provide you support if you encounter any issues</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon"><span class="flaticon-route"></span></div>
                                <h3 class="heading mb-0 pl-3">Lots of location</h3>
                            </div>
                            <p>We have more than 1000 location around the world</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services">
                        <div class="media-body py-md-4">
                            <div class="d-flex mb-3 align-items-center">
                                <div class="icon"><span class="flaticon-review"></span></div>
                                <h3 class="heading mb-0 pl-3">Historical records</h3>
                            </div>
                            <p>A very big database with historical data about families</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="ftco-section services-section img" style="background-image: url({{asset('images/bg-2.png')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                    <span class="subheading">Work flow</span>
                    <h2 class="mb-3">Find your relatives and ancestors</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
                            <h3>Discover your past</h3>
                            <p>Uncover your ethnic origins and find relatives you never knew existed through your shared DNA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services services-2">
                        <div class="media-body py-md-4 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-select"></span></div>
                            <h3>Empower your future</h3>
                            <p>Uncover your ethnic origins, find DNA Matches, and gain valuable health insights with 42 detailed reports</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
        <br>

        <section class="ftco-section services-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                        <span class="subheading">Heritage</span>
                        <h2 class="mb-2">Build Your Family Tree</h2>
                    </div>
                </div>
                </div>
        </section>

<br>
        <section class="ftco-section services-section img" style="background-image: url({{asset('images/tree.png')}});  height: 800px">
            <div class="overlay"></div>

        </section>


    <section class="ftco-section testimony-section" style="background-color: white">
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


@endsection
