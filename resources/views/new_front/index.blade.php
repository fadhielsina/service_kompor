@extends('new_front.layouts.app')
@section('content')

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('front')}}/img/home_1.jpeg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-10">
                                <h5 class="text-light text-uppercase mb-3 animated slideInDown">Welcome to Service Kompor</h5>
                                <h1 class="display-2 text-light mb-3 animated slideInDown">Layanan service kompor Berbagai macam merek </h1>
                                <ol class="breadcrumb mb-4 pb-2">
                                    <li class="breadcrumb-item fs-5 text-light">Modena</li>
                                    <li class="breadcrumb-item fs-5 text-light">Ariston</li>
                                    <li class="breadcrumb-item fs-5 text-light">Legermania</li>
                                    <li class="breadcrumb-item fs-5 text-light">Tecnogas</li>
                                </ol>
                                <a href="https://wa.me/+6281214248877" class="btn btn-primary py-3 px-5"><i class="fab fa-whatsapp"></i> Contact US</a>
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

<!-- Facts Start -->
<div class="container-fluid my-5 p-0">
    <div class="row g-0">
        <div class="col-xl-4 col-sm-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="position-relative">
                <img class="img-fluid w-100" src="{{asset('front')}}/img/fact-1.webp" alt="">
                <div class="facts-overlay">
                    <h1 class="display-1">01</h1>
                    <h4 class="text-white mb-3">Perawatan Rutin</h4>
                    <p class="text-white">Layanan ini mencakup pembersihan, pengecekan, dan kalibrasi kompor secara berkala. Perawatan rutin ini membantu mencegah masalah teknis dan memastikan bahwa kompor berfungsi dengan optimal.</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
            <div class="position-relative">
                <img class="img-fluid w-100" src="{{asset('front')}}/img/fact-2.webp" alt="">
                <div class="facts-overlay">
                    <h1 class="display-1">02</h1>
                    <h4 class="text-white mb-3">Sparepart Original</h4>
                    <p class="text-white">Untuk pergantian sparepart kami menyediakan suku cadang yang asli dan bergaransi dan siap membantu anda dalam perbaikan unit.</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="position-relative">
                <img class="img-fluid w-100" src="{{asset('front')}}/img/fact-3.webp" alt="">
                <div class="facts-overlay">
                    <h1 class="display-1">03</h1>
                    <h4 class="text-white mb-3">Upgrade dan Pembaruan</h4>
                    <p class="text-white">Jika ada pembaruan atau upgrade produk, teknisi dapat membantu menginstal perangkat lunak atau komponen tambahan yang diperlukan untuk meningkatkan kinerja kompor.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->

<!-- Features Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="border-start border-5 border-primary ps-4 mb-5">
                    <h6 class="text-body text-uppercase mb-2">Why Choose Us!</h6>
                    <h1 class="display-6 mb-0">Our Specialization</h1>
                </div>
                <p class="mb-5">Layanan service ini menawarkan respons cepat terhadap panggilan layanan, sehingga masalah dengan kompor dapat segera diatasi.</p>
                <div class="row gy-5 gx-4">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                            <h6 class="mb-0">Teknisi Profesional dan Berpengalaman</h6>
                        </div>
                        <span>Layanan service kompor didukung oleh tim teknisi yang profesional dan berpengalaman dalam menangani berbagai jenis masalah teknis kompor. Mereka memiliki pengetahuan mendalam tentang produk Kompor dan dapat dengan cepat mengidentifikasi serta memperbaiki masalah yang mungkin terjadi.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                            <h6 class="mb-0">Penggunaan Suku Cadang Asli</h6>
                        </div>
                        <span>Saat melakukan perbaikan, teknisi menggunakan suku cadang asli, sehingga keandalan dan kualitas kompor tetap terjaga. Penggunaan suku cadang asli juga membantu memperpanjang umur pakai kompor dan mencegah masalah yang mungkin timbul akibat penggunaan suku cadang tidak resmi.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                            <h6 class="mb-0">Perbaikan dan Penggantian Komponen</h6>
                        </div>
                        <span>Tim teknisi terampil menangani berbagai masalah, termasuk perbaikan burner, masalah kelistrikan, dan kerusakan lainnya. Jika diperlukan, penggantian komponen dilakukan dengan suku cadang asli.</span>
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-check fa-2x text-primary flex-shrink-0 me-3"></i>
                            <h6 class="mb-0">Bergaransi</h6>
                        </div>
                        <span>Demi kepuasan pelanggan kami memberikan jaminan garansi sparepart selama satu tahun penuh untuk unit modena hubungi kami jika ada masalah dengan unit anda</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="{{asset('front')}}/img/feature.webp" alt="" style="object-fit: cover;">
                    <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 200px; height: 200px;">
                        <div class="d-flex flex-column justify-content-center text-center bg-primary h-100 p-3">
                            <h1 class="text-white">10</h1>
                            <h2 class="text-white">Tahun</h2>
                            <h5 class="text-white mb-0">Pengalaman</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->

@endsection