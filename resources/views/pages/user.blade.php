@extends('layouts.user')

@section('content')

    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="media">
                    <div align="center">
                        <img class="thumbnail img-responsive profile-pic" src="{{ (empty(Auth::guard('user')->user()->UserDetails))  ?  asset('images/profile-picture.jpg') : ( Auth::guard('user')->user()->UserDetails['profile_pic'] == NULL ? asset('images/profile-picture.jpg') : asset('storage/profile_pics/'.Auth::guard('user')->user()->UserDetails['profile_pic'])) }}"
                             width="300px" height="300px">
                    </div>
                    <div class="media-body">
                        <hr>
                        <h3><strong>Bio</strong></h3>
                        <p>{{empty(Auth::guard('user')->user()->UserDetails) ? '': Auth::guard('user')->user()->UserDetails['about']}}</p>
                        <hr>
                        <h3><strong>Location</strong></h3>
                        <p>{{ empty(Auth::guard('user')->user()->UserDetails) ? '': Auth::guard('user')->user()->UserDetails['country'] }}</p>
                        <hr>
                        <h3><strong>Gender</strong></h3>
                        <p>{{ empty(Auth::guard('user')->user()->UserDetails) ? '': Auth::guard('user')->user()->UserDetails['gender'] }}</p>
                        <hr>
                        <h3><strong>Birthday</strong></h3>
                        <p>{{empty(Auth::guard('user')->user()->UserDetails) ? '': date("F j, Y", strtotime(Auth::guard('user')->user()->birthDate))   ?? ''}}</p>
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
                        <a href="{{route('user.edit', Auth::guard('user')->user())}}"  class="about-item-edit" style="font-weight: bold; font-size: 1.3em;margin-top: -35px; margin-right: 20px ">Edit</a>
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
                        <li class="about-items"><i class="mdi mdi-format-align-left icon-sm "></i><span class="about-item-name">Bio:</span><span class="about-item-detail"></span> {{Auth::guard('user')->user()->UserDetails['about'] ?? ''}}</li>


                    </ul>
                    <p class="card-description">Contact Information</p>
                    <ul class="about">
                        <li class="about-items"><i class="mdi mdi-phone icon-sm "></i><span class="about-item-name">Phone:</span><span class="about-item-detail">{{empty(Auth::guard('user')->user()->UserDetails) ? '': Auth::guard('user')->user()->UserDetails['mobile']}}</span></li>
                        <li class="about-items"><i class="mdi mdi-map-marker icon-sm "></i><span class="about-item-name">Address:</span><span class="about-item-detail">{{empty(Auth::guard('user')->user()->UserDetails) ? '': Auth::guard('user')->user()->UserDetails['country'] }}</span> </li>
                        <li class="about-items"><i class="mdi mdi-email-outline icon-sm "></i><span class="about-item-name">Email:</span><span class="about-item-detail"><a href="">{{empty(Auth::guard('user')->user()->UserDetails) ? '': Auth::guard('user')->user()->email}}</a></span> </li>
                        <li class="about-items"><i class="mdi mdi-web icon-sm "></i><span class="about-item-name">Site:</span><span class="about-item-detail"><a href="google.com">{{empty(Auth::guard('user')->user()->UserDetails) ? '': Auth::guard('user')->user()->UserDetails['website'] ?? ''}}</a></span> </li>
                    </ul>
                    <p class="card-description">Basic Information</p>
                    <ul class="about">
                        <li class="about-items"><i class="mdi mdi-cake icon-sm "></i><span class="about-item-name">Birthday:</span><span class="about-item-detail">{{empty(Auth::guard('user')->user()->UserDetails) ? '': date("F j, Y", strtotime(Auth::guard('user')->user()->birthDate)) }}</span></li>
                        <li class="about-items"><i class="mdi mdi-account icon-sm "></i><span class="about-item-name">Gender:</span><span class="about-item-detail">{{empty(Auth::guard('user')->user()->UserDetails) ? '': Auth::guard('user')->user()->UserDetails['gender'] }}</span> </li>
                        <li class="about-items"><i class="mdi mdi-clipboard-account icon-sm "></i><span class="about-item-name">Profession:</span><span class="about-item-detail">{{empty(Auth::guard('user')->user()->UserDetails) ? '': (Auth::guard('user')->user()->UserDetails['work_current'] == 1 ? Auth::guard('user')->user()->UserDetails['work'] : (Auth::guard('user')->user()->UserDetails['education_current'] == 1 ? Auth::guard('user')->user()->UserDetails['education']  : '')) }}</span> </li>
                        <li class="about-items"><i class="mdi mdi-water icon-sm "></i><span class="about-item-name">Blood Group:</span><span class="about-item-detail">AB+</span> </li>
                        <li class="about-items"><i class="mdi mdi-human-male-female icon-sm "></i><span class="about-item-name">Relationship Status:</span><span class="about-item-detail">{{empty(Auth::guard('user')->user()->UserDetails) ? '' :  Auth::guard('user')->user()->UserDetails['relationship_status'] }}</span></li>
                    </ul>


                </div>
            </div>
        </div>
        <!-- Reshare Example -->

        <!-- Sample post content with picture. -->

        <!-- Sample post content with comments. -->

    </div>

@endsection








