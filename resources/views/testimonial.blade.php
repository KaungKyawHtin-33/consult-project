@extends('layouts.app')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid bg-dark p-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="display-4 text-white">Testimonial</h1>
            <a href="">Home</a>
            <i class="far fa-square text-primary px-2"></i>
            <a href="">Testimonial</a>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Testimonial Start -->
<div class="container-fluid bg-secondary p-0">
    <div class="row g-0">
        <div class="col-lg-6" style="min-height: 500px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100" src="{{url('asset/img/testimonial.jpg')}}" style="object-fit: cover;">
            </div>
        </div>
        <div class="col-lg-6 py-6 px-5">
            <h1 class="display-5 mb-4">What Say Our Client!!!</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle" src="{{url('asset/img/testimonial-1.j')}}pg" alt="">
                        <div class="ps-4">
                            <h3>Client Name</h3>
                            <span class="text-uppercase">Profession</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item">
                    <p class="fs-4 fw-normal mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle" src="{{url('asset/img/testimonial-2.j')}}pg" alt="">
                        <div class="ps-4">
                            <h3>Client Name</h3>
                            <span class="text-uppercase">Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@endsection
