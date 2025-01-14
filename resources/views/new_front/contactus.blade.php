@extends('new_front.layouts.app')
@section('content')

<!-- Page Header Start -->
<div
    class="container-fluid page-header py-5 mb-5 wow fadeIn"
    data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-4 text-white animated slideInDown mb-4">
            Contact Us
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item">
                    <a class="text-white" href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a class="text-white" href="#">Pages</a>
                </li>
                <li class="breadcrumb-item text-primary active" aria-current="page">
                    Contact Us
                </li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                    <h6 class="text-body text-uppercase mb-2">Contact Us</h6>
                    <h1 class="display-6 mb-0">
                        If You Have Any Query, Please Contact Us
                    </h1>
                </div>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-primary me-1" href="https://wa.me/+6281214248877"><i class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-square btn-outline-primary me-1" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-primary me-1" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection