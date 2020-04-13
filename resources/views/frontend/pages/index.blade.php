@extends('frontend.layouts.master')

@section('content')




  <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
     <ul class="carousel-indicators">
       <li data-target="#demo" data-slide-to="0" class="active"></li>
       <li data-target="#demo" data-slide-to="1"></li>
       <li data-target="#demo" data-slide-to="2"></li>
     </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset('frontend/images/bg12.jpg')}}" alt="" width="1100" height="275">
      <div class="carousel-caption ">
        <p>Girl with an umbrella</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/images/bg7.jpg')}}" alt="" width="1100" height="275">
      <div class="carousel-caption d-none d-md-block">
        <p>Shajek Vellay</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{asset('frontend/images/bg4.jpg')}}" alt="" width="1100" height="275">
      <div class="carousel-caption d-none d-md-block">
        <p>Sunset at Saint Martin</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
   <span class="carousel-control-prev-icon"></span>
 </a>
 <a class="carousel-control-next" href="#demo" data-slide="next">
   <span class="carousel-control-next-icon"></span>
 </a>
</div>

<div class="col-md-12 jumbotron bg-light">
  <div class="container">
    <h3 class="text-center">Trending Destination</h3>
    <p class="text-center">Set out for an adventure in this beautiful land</p>
    <hr>


    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-6">
        <br>
        <div class="hovereffect">
          <img class="img-responsive" src="{{asset('frontend/images/bg4.jpg')}}" alt="">
          <div class="overlay">
            <h2>Sunset</h2>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-6">
        <br>
        <div class="hovereffect">
          <img class="img-responsive" src="{{asset('frontend/images/bg5.jpg')}}" alt="">
          <div class="overlay">
            <h2>Mangrove</h2>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-6">
        <br>
        <div class="hovereffect">
          <img class="img-responsive" src="{{asset('frontend/images/bg6.jpg')}}" alt="">
          <div class="overlay">
            <h2>Sundor Ban</h2>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-6">
        <br>
        <div class="hovereffect">
          <img class="img-responsive" src="{{asset('frontend/images/bg2.jpg')}}" alt="">
          <div class="overlay">
            <h2>Kaptai Lake</h2>
          </div>
        </div>

      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-6">
      <br>
        <div class="hovereffect">
          <img class="img-responsive" src="{{asset('frontend/images/bg9.jpg')}}" alt="">
          <div class="overlay">
            <h2>Bangal Tiger</h2>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-6">
       <br>
        <div class="hovereffect">
          <img class="img-responsive" src="{{asset('frontend/images/bg11.jpg')}}" alt="">
          <div class="overlay">
            <h2>Bridge</h2>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-6">
       <br>
        <div class="hovereffect">
          <img class="img-responsive" src="{{asset('frontend/images/bg3.jpg')}}" alt="">
          <div class="overlay">
            <h2>Saint Martin</h2>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6 col-6">
      <br>
        <div class="hovereffect">
          <img class="img-responsive" src="{{asset('frontend/images/bg1.jpg')}}" alt="">
          <div class="overlay">
            <h2>Sunam Ganj</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h3>The Land of Rivers and Stories...</h3>
  <p>Get a glance of beautiful BANGLADESH</p>


  <div class="row">
    <div class="col-md-6">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/QNUSIOMb6vI"></iframe>
      </div>
    </div>
    <div class="col-md-6">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="//www.youtube.com/embed/MljARGytuNo"></iframe>
      </div>
    </div>
  </div>
  <hr>
</div>


<div class="parallax">
  <div class="text-center text-white">
    <h2 class=""><b>Explore the nature with Tour-DE-BD</b></h2>
  </div>
  <blockquote class="blockquote float-right">
  <p class="mb-0 text-white">Travel makes one modest. You see what a tiny place you occupy in the world.</p>
  <footer class="blockquote-footer text-white float-right"><cite title="Source Title">Gustave Flaubert</cite></footer>
</blockquote>
</div>


<div class="col-md-12">
<div class="container">
<br>
  <h3 class="text-center"><b>Book Your Tour Now</b></h3>
  <p class="text-center">Set out for an Adventure and Thrill</p>
<hr>
<div class="row">



<div class="col-md-3">
  <!-- Card -->
  <div class="card booking-card">
    <!-- Card image -->
    <div class="view overlay">
      <img class="card-img-top" src="{{asset('frontend/images/bg3.jpg')}}" alt="Card image cap" height="200px">
    </div>
    <!-- Card content -->
    <div class="card-body">
      <!-- Title -->
      <h4 class="card-title font-weight-bold"><a>Saint Martin</a></h4>
        <p class="mb-2"><i aria-hidden="true" class="fa fa-map-marker"></i> Teknaf, Bangladesh.</p>
      <!-- Data -->
      <ul class="list-unstyled list-inline rating mb-0">
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
        <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
        <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
      </ul>
      <!-- Button -->
      <p> <span class="badge badge-pill badge-danger"><del>BDT 12,000</del></span>  <b> <span class="badge badge-pill  badge-primary">BDT 10,000</span></b></p>
      <a href="#" class="btn bg-info text-white p-1 mx-0 mb-0">Details</a>
      <a href="#" class="btn btn-deep-purple text-white p-1 mx-0 mb-0">Book Now</a>
    </div>
  </div>
  <!-- Card -->
</div>


<div class="col-md-3">
  <!-- Card -->
  <div class="card booking-card">
    <!-- Card image -->
    <div class="view overlay">
      <img class="card-img-top" src="{{asset('frontend/images/bg6.jpg')}}" alt="Card image cap" height="200px">
    </div>
    <!-- Card content -->
    <div class="card-body">
      <!-- Title -->
      <h4 class="card-title font-weight-bold"><a>Sundorban</a></h4>
        <p class="mb-2"><i aria-hidden="true" class="fa fa-map-marker"></i> Khulna, Bangladesh.</p>
      <!-- Data -->
      <ul class="list-unstyled list-inline rating mb-0">
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
        <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
        <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
      </ul>
      <!-- Button -->
      <p> <span class="badge badge-pill badge-danger"><del>BDT 12,000</del></span>  <b> <span class="badge badge-pill  badge-primary">BDT 10,000</span></b></p>
      <a href="#" class="btn bg-info text-white p-1 mx-0 mb-0">Details</a>
      <a href="#" class="btn btn-deep-purple text-white p-1 mx-0 mb-0">Book Now</a>
    </div>
  </div>
  <!-- Card -->
</div>


<div class="col-md-3">
  <!-- Card -->
  <div class="card booking-card">
    <!-- Card image -->
    <div class="view overlay">
      <img class="card-img-top" src="{{asset('frontend/images/bg7.jpg')}}" alt="Card image cap" height="200px">
    </div>
    <!-- Card content -->
    <div class="card-body">
      <!-- Title -->
      <h4 class="card-title font-weight-bold"><a>Shajek Valley</a></h4>
        <p class="mb-2"><i aria-hidden="true" class="fa fa-map-marker"></i> khagraChori, Bangladesh.</p>
      <!-- Data -->
      <ul class="list-unstyled list-inline rating mb-0">
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
        <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
        <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
      </ul>
      <!-- Button -->
      <p> <span class="badge badge-pill badge-danger"><del>BDT 12,000</del></span>
       <b> <span class="badge badge-pill  badge-primary">BDT 10,000</span></b></p>
      <a href="#" class="btn bg-info text-white p-1 mx-0 mb-0">Details</a>
      <a href="#" class="btn btn-deep-purple text-white p-1 mx-0 mb-0">Book Now</a>
    </div>
  </div>
  <!-- Card -->
</div>


<div class="col-md-3">
  <!-- Card -->
  <div class="card booking-card">
    <!-- Card image -->
    <div class="view overlay">
      <img class="card-img-top" src="{{asset('frontend/images/bg11.jpg')}}" alt="Card image cap" height="200px">
    </div>
    <!-- Card content -->
    <div class="card-body">
      <!-- Title -->
      <h4 class="card-title font-weight-bold"><a>Kuakata</a></h4>
        <p class="mb-2"><i aria-hidden="true" class="fa fa-map-marker"></i> Potuakhali, Bangladesh.</p>
      <!-- Data -->
      <ul class="list-unstyled list-inline rating mb-0">
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
        <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
        <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
        <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
      </ul>
      <!-- Button -->
      <p> <span class="badge badge-pill badge-danger"><del>BDT 12,000</del></span> <b> <span class="badge badge-pill  badge-primary">BDT 10,000</span></b></p>
      <a href="#" class="btn bg-info text-white p-1 mx-0 mb-0">Details</a>
      <a href="#" class="btn btn-deep-purple text-white p-1 mx-0 mb-0">Book Now</a>
    </div>
  </div>
  <!-- Card -->
</div>
    <div class="col-lg-12 col-sm-12 ct-offer-mobile text-center py-3 top-small-space">
      <a href="#" class="btn btn-warning f18 text-center"><b>Explore More</b></a>
    </div>
  </div>
</div>
</div>




<div class="container-fluid bg-light">
  <div class="container">
    <br>
    <h3>BEST SELLING TOURS...</h3>
    <p>Get a glance of beautiful BANGLADESH</p>
    <br>
  </div>
        <div class="container">
          <div class="col-md-12">
            <div class="row">


              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">

                      <div class="col-md-3">
                        <!-- Card -->
                        <div class="card booking-card">
                          <!-- Card image -->
                          <div class="view overlay">
                            <img class="card-img-top" src="{{asset('frontend/images/bg6.jpg')}}" alt="Card image cap" height="200px">
                          </div>
                          <!-- Card content -->
                          <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title font-weight-bold"><a>Sundorban</a></h4>
                              <p class="mb-2"><i aria-hidden="true" class="fa fa-map-marker"></i> Khulna, Bangladesh.</p>
                            <!-- Data -->
                            <ul class="list-unstyled list-inline rating mb-0">
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                              <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                            </ul>
                            <!-- Button -->
                            <p> <span class="badge badge-pill badge-danger"><del>BDT 12,000</del></span>  <b> <span class="badge badge-pill  badge-primary">BDT 10,000</span></b></p>
                            <a href="#" class="btn bg-info text-white p-1 mx-0 mb-0">Details</a>
                            <a href="#" class="btn btn-deep-purple text-white p-1 mx-0 mb-0">Book Now</a>
                          </div>
                        </div>
                        <!-- Card -->
                      </div>

                      <div class="col-md-3">
                        <!-- Card -->
                        <div class="card booking-card">
                          <!-- Card image -->
                          <div class="view overlay">
                            <img class="card-img-top" src="{{asset('frontend/images/bg6.jpg')}}" alt="Card image cap" height="200px">
                          </div>
                          <!-- Card content -->
                          <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title font-weight-bold"><a>Sundorban</a></h4>
                              <p class="mb-2"><i aria-hidden="true" class="fa fa-map-marker"></i> Khulna, Bangladesh.</p>
                            <!-- Data -->
                            <ul class="list-unstyled list-inline rating mb-0">
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                              <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                            </ul>
                            <!-- Button -->
                            <p> <span class="badge badge-pill badge-danger"><del>BDT 12,000</del></span>  <b> <span class="badge badge-pill  badge-primary">BDT 10,000</span></b></p>
                            <a href="#" class="btn bg-info text-white p-1 mx-0 mb-0">Details</a>
                            <a href="#" class="btn btn-deep-purple text-white p-1 mx-0 mb-0">Book Now</a>
                          </div>
                        </div>
                        <!-- Card -->
                      </div>



                      <div class="col-md-3">
                        <!-- Card -->
                        <div class="card booking-card">
                          <!-- Card image -->
                          <div class="view overlay">
                            <img class="card-img-top" src="{{asset('frontend/images/bg6.jpg')}}" alt="Card image cap" height="200px">
                          </div>
                          <!-- Card content -->
                          <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title font-weight-bold"><a>Sundorban</a></h4>
                              <p class="mb-2"><i aria-hidden="true" class="fa fa-map-marker"></i> Khulna, Bangladesh.</p>
                            <!-- Data -->
                            <ul class="list-unstyled list-inline rating mb-0">
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                              <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                            </ul>
                            <!-- Button -->
                            <p> <span class="badge badge-pill badge-danger"><del>BDT 12,000</del></span>  <b> <span class="badge badge-pill  badge-primary">BDT 10,000</span></b></p>
                            <a href="#" class="btn bg-info text-white p-1 mx-0 mb-0">Details</a>
                            <a href="#" class="btn btn-deep-purple text-white p-1 mx-0 mb-0">Book Now</a>
                          </div>
                        </div>
                        <!-- Card -->
                      </div>

                      <div class="col-md-3">
                        <!-- Card -->
                        <div class="card booking-card">
                          <!-- Card image -->
                          <div class="view overlay">
                            <img class="card-img-top" src="{{asset('frontend/images/bg6.jpg')}}" alt="Card image cap" height="200px">
                          </div>
                          <!-- Card content -->
                          <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title font-weight-bold"><a>Sundorban</a></h4>
                              <p class="mb-2"><i aria-hidden="true" class="fa fa-map-marker"></i> Khulna, Bangladesh.</p>
                            <!-- Data -->
                            <ul class="list-unstyled list-inline rating mb-0">
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                              <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                            </ul>
                            <!-- Button -->
                            <p> <span class="badge badge-pill badge-danger"><del>BDT 12,000</del></span>  <b> <span class="badge badge-pill  badge-primary">BDT 10,000</span></b></p>
                            <a href="#" class="btn bg-info text-white p-1 mx-0 mb-0">Details</a>
                            <a href="#" class="btn btn-deep-purple text-white p-1 mx-0 mb-0">Book Now</a>
                          </div>
                        </div>
                        <!-- Card -->
                        <br>
                      </div>
                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                  <div class="carousel-item ">
                    <div class="row">
                      <div class="col-md-3">
                        <!-- Card -->
                        <div class="card booking-card">
                          <!-- Card image -->
                          <div class="view overlay">
                            <img class="card-img-top" src="{{asset('frontend/images/bg6.jpg')}}" alt="Card image cap" height="200px">
                          </div>
                          <!-- Card content -->
                          <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title font-weight-bold"><a>Sundorban</a></h4>
                              <p class="mb-2"><i aria-hidden="true" class="fa fa-map-marker"></i> Khulna, Bangladesh.</p>
                            <!-- Data -->
                            <ul class="list-unstyled list-inline rating mb-0">
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                              <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                            </ul>
                            <!-- Button -->
                            <p> <span class="badge badge-pill badge-danger"><del>BDT 12,000</del></span>  <b> <span class="badge badge-pill  badge-primary">BDT 10,000</span></b></p>
                            <a href="#" class="btn bg-info text-white p-1 mx-0 mb-0">Details</a>
                            <a href="#" class="btn btn-deep-purple text-white p-1 mx-0 mb-0">Book Now</a>
                          </div>
                        </div>
                        <!-- Card -->
                      </div>
                      <div class="col-md-3">
                        <!-- Card -->
                        <div class="card booking-card">
                          <!-- Card image -->
                          <div class="view overlay">
                            <img class="card-img-top" src="{{asset('frontend/images/bg6.jpg')}}" alt="Card image cap" height="200px">
                          </div>
                          <!-- Card content -->
                          <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title font-weight-bold"><a>Sundorban</a></h4>
                              <p class="mb-2"><i aria-hidden="true" class="fa fa-map-marker"></i> Khulna, Bangladesh.</p>
                            <!-- Data -->
                            <ul class="list-unstyled list-inline rating mb-0">
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                              <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                            </ul>
                            <!-- Button -->
                            <p> <span class="badge badge-pill badge-danger"><del>BDT 12,000</del></span>  <b> <span class="badge badge-pill  badge-primary">BDT 10,000</span></b></p>
                            <a href="#" class="btn bg-info text-white p-1 mx-0 mb-0">Details</a>
                            <a href="#" class="btn btn-deep-purple text-white p-1 mx-0 mb-0">Book Now</a>
                          </div>
                        </div>
                        <!-- Card -->
                      </div>
                      <div class="col-md-3">
                        <!-- Card -->
                        <div class="card booking-card">
                          <!-- Card image -->
                          <div class="view overlay">
                            <img class="card-img-top" src="{{asset('frontend/images/bg6.jpg')}}" alt="Card image cap" height="200px">
                          </div>
                          <!-- Card content -->
                          <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title font-weight-bold"><a>Sundorban</a></h4>
                              <p class="mb-2"><i aria-hidden="true" class="fa fa-map-marker"></i> Khulna, Bangladesh.</p>
                            <!-- Data -->
                            <ul class="list-unstyled list-inline rating mb-0">
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                              <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                            </ul>
                            <!-- Button -->
                            <p> <span class="badge badge-pill badge-danger"><del>BDT 12,000</del></span>  <b> <span class="badge badge-pill  badge-primary">BDT 10,000</span></b></p>
                            <a href="#" class="btn bg-info text-white p-1 mx-0 mb-0">Details</a>
                            <a href="#" class="btn btn-deep-purple text-white p-1 mx-0 mb-0">Book Now</a>
                          </div>
                        </div>
                        <!-- Card -->
                      </div>
                      <div class="col-md-3">
                        <!-- Card -->
                        <div class="card booking-card">
                          <!-- Card image -->
                          <div class="view overlay">
                            <img class="card-img-top" src="{{asset('frontend/images/bg6.jpg')}}" alt="Card image cap" height="200px">
                          </div>
                          <!-- Card content -->
                          <div class="card-body">
                            <!-- Title -->
                            <h4 class="card-title font-weight-bold"><a>Sundorban</a></h4>
                              <p class="mb-2"><i aria-hidden="true" class="fa fa-map-marker"></i> Khulna, Bangladesh.</p>
                            <!-- Data -->
                            <ul class="list-unstyled list-inline rating mb-0">
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"> </i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item mr-0"><i class="fas fa-star amber-text"></i></li>
                              <li class="list-inline-item"><i class="fas fa-star-half-alt amber-text"></i></li>
                              <li class="list-inline-item"><p class="text-muted">4.5 (413)</p></li>
                            </ul>
                            <!-- Button -->
                            <p> <span class="badge badge-pill badge-danger"><del>BDT 12,000</del></span>  <b> <span class="badge badge-pill  badge-primary">BDT 10,000</span></b></p>
                            <a href="#" class="btn bg-info text-white p-1 mx-0 mb-0">Details</a>
                            <a href="#" class="btn btn-deep-purple text-white p-1 mx-0 mb-0">Book Now</a>
                          </div>
                        </div>
                        <!-- Card -->
                      </div>
                    </div>
                    <!--.row-->
                    <br>
                  </div>
                  <!--.item-->
                </div>
                <!--.carousel-inner-->
              </div>
              <!--.Carousel-->
            </div>
          </div>
        </div>
      </div>






@endsection
