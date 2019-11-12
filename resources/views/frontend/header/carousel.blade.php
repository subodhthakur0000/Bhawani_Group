<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner carousel-bg">

    <div class="item active carousel-image">
      <img src="{{url('/imageupload/'.$getonecarosels['image'])}}" alt="Los Angeles" class="banner-img">
      <div class="banner-text">
        <center><h1>Bhawani Groups</h1>
        <p><i>Welcome To Bhawani Groups</i></p></center>
      </div>
    </div>

@foreach($getcarosels as $getcarosel)
    <div class="item carousel-image">
      <img src="{{url('/imageupload/'.$getcarosel->image)}}" alt="Chicago" class="banner-img">
      <div class="banner-text">
        <center><h1>Bhawani Groups</h1>
        <p><i>{{$getcarosel->description}}</i></p></center>
      </div>
    </div>
@endforeach
    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>