<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!------ Include the above in your HEAD tag ---------->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="{{asset('css/profile.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.4.95/css/materialdesignicons.css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">



</head>
<body>
<div class="mainbody container-fluid">
    <div class="row">
        <div class="navbar-wrapper">
            <div class="container-fluid">
                <div class="navbar navbar-default navbar-static-top" role="navigation">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span
                                    class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#" style="margin-right:-8px; margin-top:-20px;">
                                <img alt="Brand" src="{{asset('images/logo.png')}}" width="60px" height="60px">
                            </a>
                            <a class="navbar-brand" href="{{route('index')}}">My Family</a>
                            <i class="brand_network"><small><small>Heritage builder</small></small></i>
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="#">Family Tree</a></li>
                                <li><a href="#">My Activity</a></li>
                                <li><span class="badge badge-important">2</span><a href="#"><i class="icon icon-bell-o" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-envelope-o fa-lg" aria-hidden="true"></i></a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">

                                @if(Auth::guard('user')->user() != null)
                                <li class="dropdown"><a href="{{route('user.show',Auth::guard('user')->user()->firstName)}}" class="dropdown-toggle"  data-toggle="dropdown">
                                    <span class="user-avatar pull-left" style="margin-right:8px; margin-top:-5px;">
                                        <img src="{{asset('images/profile-picture.jpg')}}" class="img-responsive img-circle" title="John Doe" alt="John Doe" width="30px" height="30px">
                                    </span>
                                        <span class="user-name" >

                                               {{ Auth::guard('user')->user()->firstName }}

                                    </span>

                                       <!-- <b class="caret"></b>  -->
                                    </a>
                                    <ul class="dropdown-menu" >
                                        <li>
                                            <div class="navbar-content">
                                                <div class="row">
                                                    <div class="col-md-5">
                                                        <img src="{{asset('images/profile-picture.jpg')}}" alt="Alternate Text" class="img-responsive" width="120px" height="120px" />
                                                        <p class="text-center small">
                                                            <a href="#">Change Photo</a></p>
                                                    </div>
                                                    <div class="col-md-7" >
                                                        <span>John Doe</span>
                                                        <p class="text-muted small">
                                                            example@pods.tld</p>
                                                        <div class="divider">
                                                        </div>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-address-card-o" aria-hidden="true"></i> Contacts</a>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Help!</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="navbar-footer">
                                                <div class="navbar-footer-content">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="#" class="btn btn-default btn-sm"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Change Passowrd</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <a href="#" class="btn btn-default btn-sm pull-right"><i class="fa fa-power-off" aria-hidden="true"></i> Sign Out</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                </li>
                                @endif
                                <li>
                                    <a href="{{route('logout') }} " onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="font-size: 1.2em;font-weight: bold" title="Log out" alt="Log out">
                                        <i class="icon icon-exit_to_app"></i>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>


                            </ul>
                            <ul>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div style="padding-top:50px;"> </div>
        <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="media">
                        <div align="center">
                            <img class="thumbnail img-responsive" src="{{asset('images/profile-picture.jpg')}}" width="300px" height="300px">
                        </div>
                        <div class="media-body">
                            <hr>
                            <h3><strong>Bio</strong></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vel gravida metus, non ultrices sapien. Morbi odio metus, dapibus non nibh id amet.</p>
                            <hr>
                            <h3><strong>Location</strong></h3>
                            <p>Earth</p>
                            <hr>
                            <h3><strong>Gender</strong></h3>
                            <p>Unknown</p>
                            <hr>
                            <h3><strong>Birthday</strong></h3>
                            <p>January 01 1901</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12" >
            <div class="panel panel-default">
                <div class="panel-body" >
                    <span>
                        <h1 class="panel-title pull-left" style="font-size:30px;">

                            @if(Auth::guard('user')->user() != null)
                                {{ Auth::guard('user')->user()->firstName.' '.Auth::guard('user')->user()->lastName }}


                            <small>{{ Auth::guard('user')->user()->email  ?? '' }}</small>
                            @endif
                                <i class="fa fa-check text-success" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="John Doe is sharing with you"></i></h1>
                        <div class="dropdown pull-right">
                            <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Family Members
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                <li><a href="#">Familly</a></li>
                                <li><a href="#"><i class="fa fa-fw fa-check" aria-hidden="true"></i> Friends</a></li>
                                <li><a href="#">Work</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#"><i class="fa fa-fw fa-plus" aria-hidden="true"></i> Add a new aspect</a></li>
                            </ul>
                        </div>


                    </span>
                    <br><br><hr>
                    <span class="pull-left">
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-files-o" aria-hidden="true"></i> Documents</a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-picture-o" aria-hidden="true"></i> Photos <span class="badge">42</span></a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-fw fa-users" aria-hidden="true"></i> Contacts <span class="badge">42</span></a>
                    </span>
                    <span class="pull-right">
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-at" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Mention"></i></a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-envelope-o" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Message"></i></a>
                        <a href="#" class="btn btn-link" style="text-decoration:none;"><i class="fa fa-lg fa-ban" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Ignore"></i></a>
                    </span>
                </div>
            </div>
            <hr>
            <!-- Simple post content example. -->

            <div class="col-md-12 grid-margin stretch-card">
                <div class="card" >
                    <div class="card-body">
                        <div>
                            <p style="font-weight: bold; font-size: 1.3em;margin-top: 20px; margin-left: 20px ">About</p>
                            <a href=""  class="about-item-edit" style="font-weight: bold; font-size: 1.3em;margin-top: -35px; margin-right: 20px ">Edit</a>
                        </div>

                        <hr>
                        <style>
                            .card-description{
                                margin-left: 10px
                            }
                            .about{
                                margin-left: 10px;
                            }
                            .about .about-item-name{
                                font-weight: bold;
                                color: #4e555b;
                            }
                        </style>
                        <p class="card-description" style="">User Information</p>
                        <ul class="about">
                            <li class="about-items">
                                <i class="mdi mdi-account icon-sm "></i>
                                <span class="about-item-name">Name:</span>
                                <span class="about-item-detail">
                                    @if(Auth::guard('user')->user() != null)
                                        {{ Auth::guard('user')->user()->firstName.' '.Auth::guard('user')->user()->lastName }}
                                    @endif
                                </span>
                            </li>
                            <li class="about-items"><i class="mdi mdi-mail-ru icon-sm "></i><span class="about-item-name">username:</span><span class="about-item-detail">santoshghimire</span> </li>
                            <li class="about-items"><i class="mdi mdi-format-align-left icon-sm "></i><span class="about-item-name">Bio:</span><span class="about-item-detail">.</span> </li>


                        </ul>
                        <p class="card-description">Contact Information</p>
                        <ul class="about">
                            <li class="about-items"><i class="mdi mdi-phone icon-sm "></i><span class="about-item-name">Phone:</span><span class="about-item-detail">+9779861106179</span></li>
                            <li class="about-items"><i class="mdi mdi-map-marker icon-sm "></i><span class="about-item-name">Address:</span><span class="about-item-detail">254 National Highway , Hisar India</span> </li>
                            <li class="about-items"><i class="mdi mdi-email-outline icon-sm "></i><span class="about-item-name">Email:</span><span class="about-item-detail"><a href="">reasonghimire706@gmail.com</a></span> </li>
                            <li class="about-items"><i class="mdi mdi-web icon-sm "></i><span class="about-item-name">Site:</span><span class="about-item-detail"><a href="google.com">www.google.com</a></span> </li>
                        </ul>
                        <p class="card-description">Basic Information</p>
                        <ul class="about">
                            <li class="about-items"><i class="mdi mdi-cake icon-sm "></i><span class="about-item-name">Birthday:</span><span class="about-item-detail">Aug 3 , 1998</span></li>
                            <li class="about-items"><i class="mdi mdi-account icon-sm "></i><span class="about-item-name">Gender:</span><span class="about-item-detail">Male</span> </li>
                            <li class="about-items"><i class="mdi mdi-clipboard-account icon-sm "></i><span class="about-item-name">Profession:</span><span class="about-item-detail">Student</span> </li>
                            <li class="about-items"><i class="mdi mdi-water icon-sm "></i><span class="about-item-name">Blood Group:</span><span class="about-item-detail">AB+</span> </li>
                            <li class="about-items"><i class="mdi mdi-human-male-female icon-sm "></i><span class="about-item-name">Relationship Status:</span><span class="about-item-detail">Single</span></li>
                        </ul>


                    </div>
                </div>
            </div>
            <!-- Reshare Example -->

            <!-- Sample post content with picture. -->

            <!-- Sample post content with comments. -->

        </div>
    </div>
</div>

<!-- main-panel ends -->
<script src="{{asset('js/profile.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>


</body>
</html>






