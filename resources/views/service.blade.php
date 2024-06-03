@extends('layout.app')

@section('content')
    <div
      class="hero page-inner overlay"
      style="background-image: url('{{ asset('images/hero_bg_1.jpg') }}')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Services</h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                  Services
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="section bg-light">
      <div class="container">
        <div class="row">
            @foreach ($services as $service)
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ 200 + ($service->id * 100) }}">
                <div class="box-feature mb-4">
                <span class="{{ $service->picture }} mb-4 d-block"></span>
                <h3 class="text-black mb-3 font-weight-bold">
                    {{ $service->name }}
                </h3>
                <p class="text-black-50">
                    {{ $service->description }}
                </p>
                <p><a href="#" class="learn-more">Read more</a></p>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </div>


@endsection