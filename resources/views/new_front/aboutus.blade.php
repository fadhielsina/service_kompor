@extends('new_front.layouts.app')
@section('content')

<!-- Page Header Start -->
<div
    class="container-fluid page-header py-5 mb-5 wow fadeIn"
    data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
        <p>
            Layanan ini merupakan solusi terpercaya untuk merawat dan memelihara kompor, menjadikannya pilihan utama bagi mereka yang mengutamakan kualitas dan profesionalisme.
        </p>
    </div>
</div>
<!-- Page Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{asset('front')}}/img/about.webp" alt="" style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px;">
                        <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                            <h1 class="text-white">10</h1>
                            <h2 class="text-white">Tahun</h2>
                            <h5 class="text-white mb-0">Pengalaman</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="h-100">
                    <div class="border-start border-5 border-primary ps-4 mb-5">
                        <h6 class="text-body text-uppercase mb-2">About Us</h6>
                        <h1 class="display-6 mb-0">Service Kompor</h1>
                    </div>
                    <p>Dengan menggunakan layanan servis kompor, pengguna tidak hanya memastikan kelangsungan investasi mereka dalam perangkat berkualitas, tetapi juga memastikan pengalaman memasak yang efisien dan aman.</p>
                    <p class="mb-4">Layanan ini merupakan solusi terpercaya untuk merawat dan memelihara kompor Modena, menjadikannya pilihan utama bagi mereka yang mengutamakan kualitas dan profesionalisme.</p>
                    <div class="border-top mt-4 pt-4">
                        <div class="row g-4">
                            <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.1s">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Ontime at services</h6>
                            </div>
                            <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.3s">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">24/7 hours services</h6>
                            </div>
                            <div class="col-sm-4 d-flex wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                                <h6 class="mb-0">Professional Technician</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection