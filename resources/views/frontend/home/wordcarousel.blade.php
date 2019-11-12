<br><br><br>
<img src="{{url('public/images/down-arrow.png')}}" alt="" class="arrow">

<div id="myCarousel1" class="carousel slide" data-ride="carousel">


<!-- Wrapper for slides -->
<div class="carousel-inner overlay">
 @foreach($getclients as $getclients)
 <div class="item active">
  <img src="{{('public/images/banner-bottom.jpg')}}" alt="Los Angeles" class="banner-img">
  <div id="text" class="hidden-xs">

      <div id="text-content">
        <center><h3>{{strip_tags($getclients->description)}}</h3>
          <h2>{{$getclients->name}}</h2>
        
        
        </div>

  </div>
</div>
@endforeach
 @foreach($getclientviews as $getclientview)

    <div class="item">
      <img src="{{('public/images/banner-bottom.jpg')}}" alt="Los Angeles" class="banner-img">
      <div id="text" class="hidden-xs">
       
        <div id="text-content">
        <center><h3>{{strip_tags($getclientview->description)}}</h3>
          <h2>{{$getclientview->name}}</h2>
        
        
        </div>
       
      </div>
    </div>
     @endforeach
<!-- 
    <div class="item">
      
    </div>

    <div class="item">
      
    </div>
  -->  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel1" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>