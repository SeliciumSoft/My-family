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
    <link href="css/bootstrap-form-helpers.min.css" rel="stylesheet">


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
                                    <li class="dropdown"><a href="#" class="dropdown-toggle"  data-toggle="dropdown">
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
                                                            <span>{{Auth::guard('user')->user()->firstName }}</span>
                                                            <p class="text-muted small">
                                                                {{Auth::guard('user')->user()->email}}</p>
                                                            <div class="divider">
                                                            </div>
                                                            <a href="{{route('user.show',Auth::guard('user')->user()->firstName)}}" class="btn btn-default btn-xs"><i class="fa fa-user-o" aria-hidden="true"></i> Profile</a>
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
                                                                <a href="{{route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-sm pull-right"><i class="fa fa-power-off" aria-hidden="true"></i> Sign Out</a>
                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                    @csrf
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </li>
                                @endif



                            </ul>
                            <ul>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div style="padding-top:50px;"> </div>
            @yield('content')

            <hr>
            <!-- Simple post content example. -->

            <!-- Reshare Example -->

            <!-- Sample post content with picture. -->

            <!-- Sample post content with comments. -->

        </div>
    </div>

<!-- main-panel ends -->
<script src="{{asset('js/profile.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.js"></script>

</body>
</html>






