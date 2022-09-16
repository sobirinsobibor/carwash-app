@extends('site.layouts.main')

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5" id="home">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/slider-bg-1.jpg" alt="Image"  style="min-height: 100vh; max-height: 100vh">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Car Wash & Detailing</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    {{-- <img class="img-fluid" src="img/carousel-1.png" alt=""> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" >
                    <img class="w-100" src="img/slider-bg-3.jpg" alt="Image" style="min-height: 100vh; max-height: 100vh; ">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">
                                    <h6 class="text-white text-uppercase mb-3 animated slideInDown">// Car Servicing //</h6>
                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">Qualified Car Wash & Detailing</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    {{-- <img class="img-fluid" src="img/carousel-2.png" alt=""> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px;">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about-1.jpg" style="object-fit: fill;" alt="">
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5" style="background: rgba(0, 0, 0, .08);">
                            <h1 class="display-4 text-white mb-0">15 <span class="fs-4">Years</span></h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h6 class="text-primary text-uppercase">// About Us //</h6>
                    <h1 class="mb-4"><span class="text-primary">CarServ</span> Is The Best Place For Your Auto Care</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Professional & Expert</h6>
                                    <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Quality Servicing Center</h6>
                                    <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1" style="width: 45px; height: 45px;">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Awards Winning Workers</h6>
                                    <span>Diam dolor diam ipsum sit amet diam et eos</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="btn btn-primary py-3 px-5">Read More<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-check fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Years Experience</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Expert Technicians</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-users fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Satisfied Clients</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <i class="fa fa-car fa-2x text-white mb-3"></i>
                    <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
                    <p class="text-white mb-0">Compleate Projects</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->

    <!--  services -->
    <div id="services" class="services-main-block" id="services">
        <div class="container">
            <div class="section text-center">
            <h3 class="section-heading">Our Services</h3>
            <p class="sub-heading">Sollicitudin urna dolor sagittis lacus donec elit libero sodales nec</p>
            </div>
            <div class="row">
                @foreach ($services as $service)
                <div class="col-md-3 col-sm-6">
                    <div class="service-block text-center">
                    <div class="service-icon">
                        <a href="#"><img src="img/service-{{ $service->id }}.png" class="img-responsive" alt="service-01"></a>
                    </div>                 
                    <div class="service-dtl">
                        <a href="#"><h5 class="service-heading">{{ $service->service_name }}</h5></a>
                        <p>{{ $service->service_desc }}</p>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--Services end-->

    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp pb-2" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-{{ $carCategories[0]->id }}" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">{{ $carCategories[0]->category_name }}</h4>
                        </button> 
                        @foreach ($carCategories->skip(1) as $carCategory)
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-{{ $carCategory->id }}" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">{{ $carCategory->category_name }}</h4>
                        </button>   
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-{{ $carCategories[0]->id }}">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                            <ol class="list-group">
                                                <li class="list-group-item" style="background-color: transparent; border: none;"><h5>Requirement</h5></li>
                                                @foreach ($requirements->where('carCategory_id', $carCategories[0]->id ) as $r)
                                                <li class="list-group-item" style="background-color: transparent; border: none;"><p><i class="fa fa-check text-success me-3"></i>{{ $r->requirement }}</p></li>                                                    
                                                @endforeach
                                            </ol>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ol class="list-group">
                                        <li class="list-group-item" style="background-color: transparent; border: none;"><h5>Example Car</h5></li>
                                        @foreach ($cars->where('carCategory_id', $carCategories[0]->id) as $c)
                                        <li class="list-group-item" style="background-color: transparent; border: none;"><p><i class="fa fa-check text-success me-3"></i>{{ $c->car_name }}</p></li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                        @foreach ($carCategories->skip(1) as $carCategory)
                        <div class="tab-pane fade show" id="tab-pane-{{ $carCategory->id }}">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <ol class="list-group">
                                            <li class="list-group-item" style="background-color: transparent; border: none;"><h5>Requirement</h5></li>
                                            @foreach ($requirements->where('carCategory_id',  $carCategory->id ) as $r)
                                            <li class="list-group-item" style="background-color: transparent; border: none;"><p><i class="fa fa-check text-success me-3"></i>{{ $r->requirement }}</p></li>                                                    
                                            @endforeach
                                        </ol>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <ol class="list-group">
                                        <li class="list-group-item" style="background-color: transparent; border: none;"><h5>Example Car</h5></li>
                                        @foreach ($cars->where('carCategory_id', $carCategory->id) as $c)
                                        <li class="list-group-item" style="background-color: transparent; border: none;"><p><i class="fa fa-check text-success me-3"></i>{{ $c->car_name }}</p></li>
                                        @endforeach
                                    </ol>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

     <!-- Service Start -->
     <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-2">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp pb-2" data-wow-delay="0.3s">
                <div class="row g-4">
                    <div class="nav w-100 nav-pills me-4 d-flex justify-content-center">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-menu-{{ $carCategories[0]->id }}" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">{{ $carCategories[0]->category_name }}</h4>
                        </button>
                        @foreach ($carCategories->skip(1) as $carCategory)
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-menu-{{ $carCategory->id }}" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>  
                            <h4 class="m-0">{{ $carCategory->category_name }}</h4>
                        </button>
                        @endforeach
                    </div>
                </div>
                <div class="row g-4">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-menu-{{ $carCategories[0]->id }}">
                            <div class="row g-4 text-center">
                                <h3 class=""> {{  $carCategories[0]->category_name }} Service</h3>
                            </div>
                            <div class="row g-4">
                                @foreach ($packs->where('carCategory_id', $carCategories[0]->id  ) as $pack)
                                <div class="col-lg-4 col-md-6">
                                    <div class="d-flex py-5 px-4">
                                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                                        <div class="ps-4">
                                            <h5 class="mb-3"></h5>
                                            <div class="card" style="width: 16rem;">
                                                <div class="p-3 text-center" style="background: #D81324;" >
                                                    <h3 class="text-white">{{ $pack->pack_name }}</h3>
                                                    <small class="text-warning">Rp.{{ $pack->price }} | {{ $pack->time }} min</small>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        @foreach ($servicePacks->where('pack_id', $pack->id) as $sp)
                                                        <li class="list-group-item" >{{ $sp->service->service_name }}</li>        
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach                                
                            </div>
                        </div>
                        @foreach ($carCategories->skip(1) as $c)                   
                        <div class="tab-pane fade show" id="tab-menu-{{ $c->id }}">
                            <div class="row g-4 text-center">
                                <h3 class=""> {{ $c->category_name }} Service</h3>
                            </div>
                            <div class="row g-4">
                                @foreach ($packs->where('carCategory_id',$c->id) as $pack)
                                <div class="col-lg-4 col-md-6">
                                    <div class="d-flex py-5 px-4">
                                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                                        <div class="ps-4">
                                            <h5 class="mb-3"></h5>
                                            <div class="card" style="width: 16rem;">
                                                <div class="p-3 text-center" style="background: #D81324;" >
                                                    <h3 class="text-white">{{ $pack->pack_name }}</h3>
                                                    <small class="text-warning">Rp.{{ $pack->price }} | {{ $pack->time }} min</small>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        @foreach ($servicePacks->where('pack_id', $pack->id) as $sp)
                                                        <li class="list-group-item" >{{ $sp->service->service_name }}</li>    
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="tab-pane fade show" id="tab-menu-2">
                            <div class="row g-4 text-center">
                                <h3 class="">Van Service</h3>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6">
                                    <div class="d-flex py-5 px-4">
                                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                                        <div class="ps-4">
                                            <h5 class="mb-3">Basic Plan</h5>
                                            <div class="card" style="width: 16rem;">
                                                <div class="p-3 text-center" style="background: #D81324;" >
                                                    <h3 class="text-white">$50</h3>
                                                    <small class="text-warning">30 min</small>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item" >Towel Hand Dry</li>
                                                        <li class="list-group-item" >Wheel Shine</li>
                                                        <li class="list-group-item" >Tire Dressing</li>
                                                        <li class="list-group-item" >Window In &amp; Out</li>
                                                        <li class="list-group-item" >Sealer Hand Wax</li>
                                                        <li class="list-group-item" >Interior Vacuum</li>
                                                        <li class="list-group-item" >Door Shut’s &amp; Plastics</li>
                                                        <li class="list-group-item" >Dashboard Clean</li>
                                                        <li class="list-group-item" >Air Freshener</li>
                                                        <li class="list-group-item" >Triple Coat Hand Wax</li>
                                                        <li class="list-group-item">An item</li>
                                                        <li class="list-group-item">A second item</li>
                                                        <li class="list-group-item">A third item</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="d-flex py-5 px-4">
                                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                                        <div class="ps-4">
                                            <h5 class="mb-3">Basic Plan</h5>
                                            <div class="card" style="width: 16rem;">
                                                <div class="p-3 text-center" style="background: #D81324;" >
                                                    <h3 class="text-white">$50</h3>
                                                    <small class="text-warning">30 min</small>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item" >Towel Hand Dry</li>
                                                        <li class="list-group-item" >Wheel Shine</li>
                                                        <li class="list-group-item" >Tire Dressing</li>
                                                        <li class="list-group-item" >Window In &amp; Out</li>
                                                        <li class="list-group-item" >Sealer Hand Wax</li>
                                                        <li class="list-group-item" >Interior Vacuum</li>
                                                        <li class="list-group-item" >Door Shut’s &amp; Plastics</li>
                                                        <li class="list-group-item" >Dashboard Clean</li>
                                                        <li class="list-group-item" >Air Freshener</li>
                                                        <li class="list-group-item" >Triple Coat Hand Wax</li>
                                                        <li class="list-group-item">An item</li>
                                                        <li class="list-group-item">A second item</li>
                                                        <li class="list-group-item">A third item</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="d-flex py-5 px-4">
                                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                                        <div class="ps-4">
                                            <h5 class="mb-3">Basic Plan</h5>
                                            <div class="card" style="width: 16rem;">
                                                <div class="p-3 text-center" style="background: #D81324;" >
                                                    <h3 class="text-white">$50</h3>
                                                    <small class="text-warning">30 min</small>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item" >Towel Hand Dry</li>
                                                        <li class="list-group-item" >Wheel Shine</li>
                                                        <li class="list-group-item" >Tire Dressing</li>
                                                        <li class="list-group-item" >Window In &amp; Out</li>
                                                        <li class="list-group-item" >Sealer Hand Wax</li>
                                                        <li class="list-group-item" >Interior Vacuum</li>
                                                        <li class="list-group-item" >Door Shut’s &amp; Plastics</li>
                                                        <li class="list-group-item" >Dashboard Clean</li>
                                                        <li class="list-group-item" >Air Freshener</li>
                                                        <li class="list-group-item" >Triple Coat Hand Wax</li>
                                                        <li class="list-group-item">An item</li>
                                                        <li class="list-group-item">A second item</li>
                                                        <li class="list-group-item">A third item</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="tab-menu-3">
                            <div class="row g-4 text-center">
                                <h3 class="">Pick-up Service</h3>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6">
                                    <div class="d-flex py-5 px-4">
                                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                                        <div class="ps-4">
                                            <h5 class="mb-3">Basic Plan</h5>
                                            <div class="card" style="width: 16rem;">
                                                <div class="p-3 text-center" style="background: #D81324;" >
                                                    <h3 class="text-white">$50</h3>
                                                    <small class="text-warning">30 min</small>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item" >Towel Hand Dry</li>
                                                        <li class="list-group-item" >Wheel Shine</li>
                                                        <li class="list-group-item" >Tire Dressing</li>
                                                        <li class="list-group-item" >Window In &amp; Out</li>
                                                        <li class="list-group-item" >Sealer Hand Wax</li>
                                                        <li class="list-group-item" >Interior Vacuum</li>
                                                        <li class="list-group-item" >Door Shut’s &amp; Plastics</li>
                                                        <li class="list-group-item" >Dashboard Clean</li>
                                                        <li class="list-group-item" >Air Freshener</li>
                                                        <li class="list-group-item" >Triple Coat Hand Wax</li>
                                                        <li class="list-group-item">An item</li>
                                                        <li class="list-group-item">A second item</li>
                                                        <li class="list-group-item">A third item</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="d-flex py-5 px-4">
                                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                                        <div class="ps-4">
                                            <h5 class="mb-3">Basic Plan</h5>
                                            <div class="card" style="width: 16rem;">
                                                <div class="p-3 text-center" style="background: #D81324;" >
                                                    <h3 class="text-white">$50</h3>
                                                    <small class="text-warning">30 min</small>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item" >Towel Hand Dry</li>
                                                        <li class="list-group-item" >Wheel Shine</li>
                                                        <li class="list-group-item" >Tire Dressing</li>
                                                        <li class="list-group-item" >Window In &amp; Out</li>
                                                        <li class="list-group-item" >Sealer Hand Wax</li>
                                                        <li class="list-group-item" >Interior Vacuum</li>
                                                        <li class="list-group-item" >Door Shut’s &amp; Plastics</li>
                                                        <li class="list-group-item" >Dashboard Clean</li>
                                                        <li class="list-group-item" >Air Freshener</li>
                                                        <li class="list-group-item" >Triple Coat Hand Wax</li>
                                                        <li class="list-group-item">An item</li>
                                                        <li class="list-group-item">A second item</li>
                                                        <li class="list-group-item">A third item</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="d-flex py-5 px-4">
                                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                                        <div class="ps-4">
                                            <h5 class="mb-3">Basic Plan</h5>
                                            <div class="card" style="width: 16rem;">
                                                <div class="p-3 text-center" style="background: #D81324;" >
                                                    <h3 class="text-white">$50</h3>
                                                    <small class="text-warning">30 min</small>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item" >Towel Hand Dry</li>
                                                        <li class="list-group-item" >Wheel Shine</li>
                                                        <li class="list-group-item" >Tire Dressing</li>
                                                        <li class="list-group-item" >Window In &amp; Out</li>
                                                        <li class="list-group-item" >Sealer Hand Wax</li>
                                                        <li class="list-group-item" >Interior Vacuum</li>
                                                        <li class="list-group-item" >Door Shut’s &amp; Plastics</li>
                                                        <li class="list-group-item" >Dashboard Clean</li>
                                                        <li class="list-group-item" >Air Freshener</li>
                                                        <li class="list-group-item" >Triple Coat Hand Wax</li>
                                                        <li class="list-group-item">An item</li>
                                                        <li class="list-group-item">A second item</li>
                                                        <li class="list-group-item">A third item</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="tab-menu-4">
                            <div class="row g-4 text-center">
                                <h3 class="">Pick-up Truck Service</h3>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="d-flex py-5 px-4">
                                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                                        <div class="ps-4">
                                            <h5 class="mb-3">Basic Plan</h5>
                                            <div class="card" style="width: 16rem;">
                                                <div class="p-3 text-center" style="background: #D81324;" >
                                                    <h3 class="text-white">$50</h3>
                                                    <small class="text-warning">30 min</small>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item" >Towel Hand Dry</li>
                                                        <li class="list-group-item" >Wheel Shine</li>
                                                        <li class="list-group-item" >Tire Dressing</li>
                                                        <li class="list-group-item" >Window In &amp; Out</li>
                                                        <li class="list-group-item" >Sealer Hand Wax</li>
                                                        <li class="list-group-item" >Interior Vacuum</li>
                                                        <li class="list-group-item" >Door Shut’s &amp; Plastics</li>
                                                        <li class="list-group-item" >Dashboard Clean</li>
                                                        <li class="list-group-item" >Air Freshener</li>
                                                        <li class="list-group-item" >Triple Coat Hand Wax</li>
                                                        <li class="list-group-item">An item</li>
                                                        <li class="list-group-item">A second item</li>
                                                        <li class="list-group-item">A third item</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="d-flex py-5 px-4">
                                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                                        <div class="ps-4">
                                            <h5 class="mb-3">Basic Plan</h5>
                                            <div class="card" style="width: 16rem;">
                                                <div class="p-3 text-center" style="background: #D81324;" >
                                                    <h3 class="text-white">$50</h3>
                                                    <small class="text-warning">30 min</small>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item" >Towel Hand Dry</li>
                                                        <li class="list-group-item" >Wheel Shine</li>
                                                        <li class="list-group-item" >Tire Dressing</li>
                                                        <li class="list-group-item" >Window In &amp; Out</li>
                                                        <li class="list-group-item" >Sealer Hand Wax</li>
                                                        <li class="list-group-item" >Interior Vacuum</li>
                                                        <li class="list-group-item" >Door Shut’s &amp; Plastics</li>
                                                        <li class="list-group-item" >Dashboard Clean</li>
                                                        <li class="list-group-item" >Air Freshener</li>
                                                        <li class="list-group-item" >Triple Coat Hand Wax</li>
                                                        <li class="list-group-item">An item</li>
                                                        <li class="list-group-item">A second item</li>
                                                        <li class="list-group-item">A third item</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 ">
                                    <div class="d-flex py-5 px-4">
                                        <i class="fa fa-certificate fa-3x text-primary flex-shrink-0"></i>
                                        <div class="ps-4">
                                            <h5 class="mb-3">Basic Plan</h5>
                                            <div class="card" style="width: 16rem;">
                                                <div class="p-3 text-center" style="background: #D81324;" >
                                                    <h3 class="text-white">$50</h3>
                                                    <small class="text-warning">30 min</small>
                                                </div>
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item" >Towel Hand Dry</li>
                                                        <li class="list-group-item" >Wheel Shine</li>
                                                        <li class="list-group-item" >Tire Dressing</li>
                                                        <li class="list-group-item" >Window In &amp; Out</li>
                                                        <li class="list-group-item" >Sealer Hand Wax</li>
                                                        <li class="list-group-item" >Interior Vacuum</li>
                                                        <li class="list-group-item" >Door Shut’s &amp; Plastics</li>
                                                        <li class="list-group-item" >Dashboard Clean</li>
                                                        <li class="list-group-item" >Air Freshener</li>
                                                        <li class="list-group-item" >Triple Coat Hand Wax</li>
                                                        <li class="list-group-item">An item</li>
                                                        <li class="list-group-item">A second item</li>
                                                        <li class="list-group-item">A third item</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    {{-- Booking Start --}}
    <div class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s" id="booking">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">Certified and Award Winning Car Repair Service Provider</h1>
                        <p class="text-white mb-0">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book For A Service</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Request"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-secondary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Booking end --}}


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="testimonials">
        <div class="container">
            <div class="text-center">
                <h6 class="text-primary text-uppercase">// Testimonial //</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Back to Top -->
    <a href="#home" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

   

@endsection