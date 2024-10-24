@extends('layouts.front')
@section('content')

    <style>
        .pill-buttons:hover {
            background-color: pink !important;
        }
    </style>

    <link href="asset/front/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="asset/front/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <link href="{{ asset('asset/front/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">


<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4">Travel Packages</h3>

    </div>
</div>
<!-- Header End -->


    <!-- Packages Start -->
    <div class="container-fluid packages py-5" >
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Destinations</h5>
                <h1 class="mb-0">Popular Tours</h1>
            </div>


            <div class="packages-carousel container">
                <div class="row justify-content-center">
                    <!-- Package Item 1 -->

                    @foreach($countries as $country)
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4 d-flex">
                            <div class="packages-item" style="margin: 10px; width: 100%; border-radius: 15px; overflow: hidden; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);"> <!-- Added border radius and box shadow -->
                                <div class="packages-img">
                                    <img src="{{ $country->image }}" class=" w-100 rounded-top" alt="Image" style="height: 250px; object-fit: cover;"> <!-- Increased height -->
                                </div>
                                <div class="packages-content bg-primary d-flex justify-content-center align-items-center" style="height: 40px;"> <!-- Increased height -->
                                    <h5 class="text-white mb-0">{{$country->category_name}}</h5> <!-- Removed margin-bottom for better centering -->
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>


        </div>
    </div>
    <!-- Packages End -->


    <!-- Destination Start -->
    <div class="container-fluid destination py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">

                <h5 class="section-title px-3">Awesome Packages</h5>
                <h1 class="mb-0">Tour Packages</h1>
            </div>
            <div class="tab-class text-center">
                <ul class="nav nav-pills d-inline-flex justify-content-center mb-5">
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#all-packages">
                            <span class="text-dark" style="width: 150px;">All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex py-2 mx-3 border border-primary bg-light rounded-pill pill-buttons" data-bs-toggle="pill" href="#tab-2">
                            <span class="text-dark" style="width: 150px;">Sri Lanka</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                            <span class="text-dark" style="width: 150px;">Maldives</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="d-flex mx-3 py-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                            <span class="text-dark" style="width: 150px;">Makkah</span>
                        </a>
                    </li>

                </ul>
                <div class="tab-content">
                    <div id="all-packages" class="tab-pane fade show p-0 active">
                        <div class="row packages-carousel">


                            @foreach($packages as $package)
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="packages-item" style="margin: 10px; box-shadow: 0 14px 18px rgba(0, 0, 0, 0.3); border: 10px;border-bottom-left-radius: 20px; border-bottom-right-radius: 20px">

                                        <img src="{{$package->photos->main_image}}" class="img-fluid rounded-top" style="width: 100%; height: 200px; object-fit: cover;"  alt="Image">

                                        <div class="packages-info border" style="width: 100%; bottom: 0; left: 0; z-index: 5; text-align: left;padding-left: 10px;padding-top: 10px; ">
                                            <div class="" ><h5 style="color: #fbab22">{{$package->no_of_days}} Days </h5></div>
                                            <div class=""><p class="" style="font-size: 16px;font-weight: bold;color: grey;letter-spacing: 2px">{{$package->subcategory->category_name}} </p></div>

                                        </div>

                                        <div class="packages-info border " style="width: 100%; bottom: 0; left: 0; z-index: 5;text-align: left;">
                                            <div class="" style="padding-left:10px; padding-top: 10px;"><p style="font-size: 18px;font-weight: bold;color: #fbab22;letter-spacing: 1px;margin:0">Routes:</p></div>
                                            <div class="route-list-container" style="padding-left: 10px;">
                                                <ul class="route-list d-flex flex-wrap align-items-center">

                                                    @foreach($package->routes as $route)
                                                        <li class="d-flex" style=" color: #494949;font-weight: bold;font-size: 14px;">
                                                            <i class="bi bi-arrow-right-circle me-2"></i>{{ $route->name }}
                                                        </li>

                                                    @endforeach

                                                </ul>
                                            </div>

                                        </div>

                                        <div class="packages-info border" style="width: 100%; bottom: 0; left: 0; z-index: 5; text-align: left;">
                                            <div style="padding-left: 10px; padding-top: 10px;">
                                                <p style="font-size: 18px; font-weight: bold; color: #fbab22; letter-spacing: 1px; margin: 0;">Inclusions:</p>
                                            </div>
                                            <div>
                                                <ol class="d-flex justify-content-between align-items-center flex-wrap w-100" style="list-style: none; padding: 0; margin: 0;">


                                                    @foreach($package->inclusions as $inclusion)
                                                        <li style="flex: 1; text-align: center; color: #0e285c;">
                                                            <i class="bi bi-check-circle me-2"></i>{{ $inclusion->name }}
                                                        </li>
                                                    @endforeach
                                                </ol>
                                            </div>
                                        </div>


                                        <div class="packages-info border" style="width: 100%; bottom: 0; left: 0; z-index: 5; text-align: center;">

                                            <div class="content align-items-center">
                                                <div class="align-items-center">
                                                    <img src="{{$package->photos->other_images}}" alt="" width="310" height="70">
                                                </div>

                                            </div>



                                        </div>


                                        <div class="packages-content bg-light" style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                                            <div class="p-1 pb-0">
                                                <h4 class="mb-0" style="color: #fbab22">{{ $package->category->category_name }}</h4>
                                                <div class="mb-2">
                                                    <div class="fw-bold" style="color: white"> {{ $package->currency }} {{ $package->amount }}</div>
                                                </div>
                                                {{--                                            <p class="mb-2">Description here </p>--}}
                                            </div>
                                            <div class="row bg-primary rounded-bottom mx-0">
                                                <div class="col-6 text-start px-0">
                                                    <a href="{{ route('tourDetails',$package->id) }}" class="btn text-white py-2 px-4">Book Now</a>
                                                </div>
                                                <div class="col-6 text-center px-0">
                                                    <a href="#" class="btn text-white py-2 px-4">PDF</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row packages-carousel">

                            @foreach($sriLankanPackages as $package)
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="packages-item" style="margin: 10px; box-shadow: 0 14px 18px rgba(0, 0, 0, 0.3); border: 10px;border-bottom-left-radius: 20px; border-bottom-right-radius: 20px">

                                        <img src="{{$package->photos->main_image}}" class="img-fluid rounded-top" style="width: 100%; height: 200px; object-fit: cover;"  alt="Image">

                                        <div class="packages-info border" style="width: 100%; bottom: 0; left: 0; z-index: 5; text-align: left;padding-left: 10px;padding-top: 10px; ">
                                            <div class="" ><h5 style="color: #fbab22">{{$package->no_of_days}} Days </h5></div>
                                            <div class=""><p class="" style="font-size: 16px;font-weight: bold;color: grey;letter-spacing: 2px">{{$package->subcategory->category_name}} </p></div>

                                        </div>

                                        <div class="packages-info border " style="width: 100%; bottom: 0; left: 0; z-index: 5;text-align: left;">
                                            <div class="" style="padding-left:10px; padding-top: 10px;"><p style="font-size: 18px;font-weight: bold;color: #fbab22;letter-spacing: 1px;margin:0">Routes:</p></div>
                                            <div class="route-list-container" style="padding-left: 10px;">
                                                <ul class="route-list d-flex flex-wrap align-items-center">

                                                    @foreach($package->routes as $route)
                                                        <li class="d-flex" style=" color: #494949;font-weight: bold;font-size: 14px;">
                                                            <i class="bi bi-arrow-right-circle me-2"></i>{{ $route->name }}
                                                        </li>

                                                    @endforeach

                                                </ul>
                                            </div>

                                        </div>

                                        <div class="packages-info border" style="width: 100%; bottom: 0; left: 0; z-index: 5; text-align: left;">
                                            <div style="padding-left: 10px; padding-top: 10px;">
                                                <p style="font-size: 18px; font-weight: bold; color: #fbab22; letter-spacing: 1px; margin: 0;">Inclusions:</p>
                                            </div>
                                            <div>
                                                <ol class="d-flex justify-content-between align-items-center flex-wrap w-100" style="list-style: none; padding: 0; margin: 0;">


                                                    @foreach($package->inclusions as $inclusion)
                                                        <li style="flex: 1; text-align: center; color: #0e285c;">
                                                            <i class="bi bi-check-circle me-2"></i>{{ $inclusion->name }}
                                                        </li>
                                                    @endforeach
                                                </ol>
                                            </div>
                                        </div>


                                        <div class="packages-info border" style="width: 100%; bottom: 0; left: 0; z-index: 5; text-align: center;">

                                            <div class="content align-items-center">
                                                <div class="align-items-center">
                                                    <img src="{{$package->photos->other_images}}" alt="" width="310" height="70">
                                                </div>

                                            </div>



                                        </div>


                                        <div class="packages-content bg-light" style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                                            <div class="p-1 pb-0">
                                                <h4 class="mb-0" style="color: #fbab22">{{ $package->category->category_name }}</h4>
                                                <div class="mb-2">
                                                    <div class="fw-bold" style="color: white"> {{ $package->currency }} {{ $package->amount }}</div>
                                                </div>
                                                {{--                                            <p class="mb-2">Description here </p>--}}
                                            </div>
                                            <div class="row bg-primary rounded-bottom mx-0">
                                                <div class="col-6 text-start px-0">
                                                    <a href="{{ route('tourDetails',$package->id) }}" class="btn text-white py-2 px-4">Book Now</a>
                                                </div>
                                                <div class="col-6 text-center px-0">
                                                    <a href="#" class="btn text-white py-2 px-4">PDF</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row packages-carousel">


                            @foreach($maildivesPackages as $package)
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="packages-item" style="margin: 10px; box-shadow: 0 14px 18px rgba(0, 0, 0, 0.3); border: 10px;border-bottom-left-radius: 20px; border-bottom-right-radius: 20px">

                                        <img src="{{$package->photos->main_image}}" class="img-fluid rounded-top" style="width: 100%; height: 200px; object-fit: cover;"  alt="Image">

                                        <div class="packages-info border" style="width: 100%; bottom: 0; left: 0; z-index: 5; text-align: left;padding-left: 10px;padding-top: 10px; ">
                                            <div class="" ><h5 style="color: #fbab22">{{$package->no_of_days}} Days </h5></div>
                                            <div class=""><p class="" style="font-size: 16px;font-weight: bold;color: grey;letter-spacing: 2px">{{$package->subcategory->category_name}} </p></div>

                                        </div>

                                        <div class="packages-info border " style="width: 100%; bottom: 0; left: 0; z-index: 5;text-align: left;">
                                            <div class="" style="padding-left:10px; padding-top: 10px;"><p style="font-size: 18px;font-weight: bold;color: #fbab22;letter-spacing: 1px;margin:0">Routes:</p></div>
                                            <div class="route-list-container" style="padding-left: 10px;">
                                                <ul class="route-list d-flex flex-wrap align-items-center">

                                                    @foreach($package->routes as $route)
                                                        <li class="d-flex" style=" color: #494949;font-weight: bold;font-size: 14px;">
                                                            <i class="bi bi-arrow-right-circle me-2"></i>{{ $route->name }}
                                                        </li>

                                                    @endforeach

                                                </ul>
                                            </div>

                                        </div>

                                        <div class="packages-info border" style="width: 100%; bottom: 0; left: 0; z-index: 5; text-align: left;">
                                            <div style="padding-left: 10px; padding-top: 10px;">
                                                <p style="font-size: 18px; font-weight: bold; color: #fbab22; letter-spacing: 1px; margin: 0;">Inclusions:</p>
                                            </div>
                                            <div>
                                                <ol class="d-flex justify-content-between align-items-center flex-wrap w-100" style="list-style: none; padding: 0; margin: 0;">


                                                    @foreach($package->inclusions as $inclusion)
                                                        <li style="flex: 1; text-align: center; color: #0e285c;">
                                                            <i class="bi bi-check-circle me-2"></i>{{ $inclusion->name }}
                                                        </li>
                                                    @endforeach
                                                </ol>
                                            </div>
                                        </div>


                                        <div class="packages-info border" style="width: 100%; bottom: 0; left: 0; z-index: 5; text-align: center;">

                                            <div class="content align-items-center">
                                                <div class="align-items-center">
                                                    <img src="{{$package->photos->other_images}}" alt="" width="310" height="70">
                                                </div>

                                            </div>



                                        </div>


                                        <div class="packages-content bg-light" style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                                            <div class="p-1 pb-0">
                                                <h4 class="mb-0" style="color: #fbab22">{{ $package->category->category_name }}</h4>
                                                <div class="mb-2">
                                                    <div class="fw-bold" style="color: white"> {{ $package->currency }} {{ $package->amount }}</div>
                                                </div>
                                                {{--                                            <p class="mb-2">Description here </p>--}}
                                            </div>
                                            <div class="row bg-primary rounded-bottom mx-0">
                                                <div class="col-6 text-start px-0">
                                                    <a href="{{ route('tourDetails',$package->id) }}" class="btn text-white py-2 px-4">Book Now</a>
                                                </div>
                                                <div class="col-6 text-center px-0">
                                                    <a href="#" class="btn text-white py-2 px-4">PDF</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row packages-carousel">

                            @foreach($makkahPackages as $package)
                                <div class="col-md-6 col-lg-4 mb-4">
                                    <div class="packages-item" style="margin: 10px; box-shadow: 0 14px 18px rgba(0, 0, 0, 0.3); border: 10px;border-bottom-left-radius: 20px; border-bottom-right-radius: 20px">

                                        <img src="{{$package->photos->main_image}}" class="img-fluid rounded-top" style="width: 100%; height: 200px; object-fit: cover;"  alt="Image">

                                        <div class="packages-info border" style="width: 100%; bottom: 0; left: 0; z-index: 5; text-align: left;padding-left: 10px;padding-top: 10px; ">
                                            <div class="" ><h5 style="color: #fbab22">{{$package->no_of_days}} Days </h5></div>
                                            <div class=""><p class="" style="font-size: 16px;font-weight: bold;color: grey;letter-spacing: 2px">{{$package->subcategory->category_name}} </p></div>

                                        </div>

                                        <div class="packages-info border " style="width: 100%; bottom: 0; left: 0; z-index: 5;text-align: left;">
                                            <div class="" style="padding-left:10px; padding-top: 10px;"><p style="font-size: 18px;font-weight: bold;color: #fbab22;letter-spacing: 1px;margin:0">Routes:</p></div>
                                            <div class="route-list-container" style="padding-left: 10px;">
                                                <ul class="route-list d-flex flex-wrap align-items-center">

                                                    @foreach($package->routes as $route)
                                                        <li class="d-flex" style=" color: #494949;font-weight: bold;font-size: 14px;">
                                                            <i class="bi bi-arrow-right-circle me-2"></i>{{ $route->name }}
                                                        </li>

                                                    @endforeach

                                                </ul>
                                            </div>

                                        </div>

                                        <div class="packages-info border" style="width: 100%; bottom: 0; left: 0; z-index: 5; text-align: left;">
                                            <div style="padding-left: 10px; padding-top: 10px;">
                                                <p style="font-size: 18px; font-weight: bold; color: #fbab22; letter-spacing: 1px; margin: 0;">Inclusions:</p>
                                            </div>
                                            <div>
                                                <ol class="d-flex justify-content-between align-items-center flex-wrap w-100" style="list-style: none; padding: 0; margin: 0;">


                                                    @foreach($package->inclusions as $inclusion)
                                                        <li style="flex: 1; text-align: center; color: #0e285c;">
                                                            <i class="bi bi-check-circle me-2"></i>{{ $inclusion->name }}
                                                        </li>
                                                    @endforeach
                                                </ol>
                                            </div>
                                        </div>


                                        <div class="packages-info border" style="width: 100%; bottom: 0; left: 0; z-index: 5; text-align: center;">

                                            <div class="content align-items-center">
                                                <div class="align-items-center">
                                                    <img src="{{$package->photos->other_images}}" alt="" width="310" height="70">
                                                </div>

                                            </div>



                                        </div>


                                        <div class="packages-content bg-light" style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px">
                                            <div class="p-1 pb-0">
                                                <h4 class="mb-0" style="color: #fbab22">{{ $package->category->category_name }}</h4>
                                                <div class="mb-2">
                                                    <div class="fw-bold" style="color: white"> {{ $package->currency }} {{ $package->amount }}</div>
                                                </div>
                                                {{--                                            <p class="mb-2">Description here </p>--}}
                                            </div>
                                            <div class="row bg-primary rounded-bottom mx-0">
                                                <div class="col-6 text-start px-0">
                                                    <a href="{{ route('tourDetails',$package->id) }}" class="btn text-white py-2 px-4">Book Now</a>
                                                </div>
                                                <div class="col-6 text-center px-0">
                                                    <a href="#" class="btn text-white py-2 px-4">PDF</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Destination End -->




@endsection





