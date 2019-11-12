<!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="public/css/animate.css" rel="stylesheet">

        <!-- THEME STYLES -->
        <link href="public/css/layout.min.css" rel="stylesheet" type="text/css"/>
        <!-- <link href="public/css/swiper.min.css" rel="stylesheet" type="text/css"/> -->

@extends('frontend.layouts.home-master')
@section('title',$seo->title)
@section('description',$seo->description)
@section('keywords',$seo->keywords)
@section('content')

<!--========== PAGE LAYOUT ==========-->
<!-- Slider -->
<div class="container-fluid" style="padding: 0;">
    <div class="cover-image">
         @foreach($getabouts as $getabout)
        <img src="{{url('/imageupload/'.$getabout->image)}}" alt="{{$getabout->altimage}}" class="img-responsive">
        @endforeach
    </div>
</div>
<!-- End Slider -->

<!-- Features -->
<div class="section-seperator">
    <div class="content-md container">
        <div class="row">
            @foreach($section as $sec)
            <div class="col-sm-4">
                <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".3s">
                    <h3>{{$sec->title}}</h3>
                    <p>{!!$sec->description!!}</p>
                    <!-- <a class="link" href="#">Read More</a> -->
                </div>
            </div>
            @endforeach
            
            
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Features -->
<hr>
<!-- About -->
<div class="content-md container">
    <div class="row margin-b-20">
        <div class="col-sm-6">
            <h2>About</h2>
        </div>
    </div>
    <!--// end row -->
 @foreach($getabouts as $getabout)
    <div class="row">

        <div class="col-sm-7 sm-margin-b-50">
            <div class="margin-b-30">
                <p style="text-align:justify;">{{strip_tags($getabout->description)}}</p>
            </div>
        </div>
            <div class="col-sm-4 col-sm-offset-1">
            <img class="img-responsive" src="{{url('/imageupload/'.$getabout->aboutimage)}}" alt="{{$getabout->altimageabout}}">
            </div>
        
   
    <!--// end row -->
</div>
 @endforeach
<!-- End About -->
<hr>
<!-- Team -->
<div class="bg-color-sky-light">
    <div class="content-md container">
        <div class="row margin-b-40">
           
            <div class="col-sm-6">
                <h2>Meet the Team</h2>
               
            </div>
           
        </div>
        <!--// end row -->

        <div class="row">
            <!-- Team -->
             @foreach($getteams as $getteam)
            <div class="col-md-4 sm-margin-b-50">
                <div class="bg-color-white margin-b-20">
                    <div style="height:300px;overflow:hidden;" class="wow zoomIn" data-wow-duration=".3" data-wow-delay=".1s">
                        <img style="height:100%;width:100%;object-fit:cover;" class="img-responsive" src="{{url('/imageupload/'.$getteam->image)}}" alt="{{$getteam->alt}}">
                    </div>
                </div>
                <h4><a href="#">{{$getteam->position}}({{$getteam->department}})</a><br> <span class="text-uppercase margin-l-20">{{$getteam->name}}</span></h4>
                <!-- <a class="link" href="#">Read More</a> -->
            </div>
            <!-- End Team -->
            @endforeach

           
        </div>
        <!--// end row -->
    </div>
</div>
<!-- End Team -->
<hr>
<!-- Clients -->
<div class="section-seperator">
    <div class="content-md container">
        <div class="row margin-b-40">
            <div>
                <h2>Our Clients</h2>
                
            </div>
        </div>
        <!--// end row -->

        <!-- Swiper Clients -->
        <div class="row">
            <!-- Swiper Wrapper -->
            @foreach($getclients as $getclient)
            <div class="col-md-3">
                <div style="height:200px;oveflow:hidden;">
                    <img style="height:100%;width:100%;object-fit:contain;" class="img-responsive" src="{{url('/imageupload/'.$getclient->image)}}" alt="{{$getclient->alt}}">
                </div>
            </div>
            @endforeach
            <!-- End Swiper Wrapper -->
        </div>
        <!-- End Swiper Clients -->
    </div>
</div>
<!-- End Clients -->
<!--========== END PAGE LAYOUT ==========-->

@stop