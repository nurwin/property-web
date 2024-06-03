@extends('layout.app')
 
@section('content')
    <div
      class="hero page-inner overlay"
      style="background-image: url('{{ asset($property->picture) }}')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">
            {{ $property->name }}, {{ $property->address }}
            </h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="{{ route('page.home') }}">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="#">Properties</a>
                </li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                    {{ $property->name }}, {{ $property->address }}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-7">
            <div class="img-property-slide-wrap">
              <div class="img-property-slide">
                <img src="{{ asset($property->picture) }}" alt="Image" class="img-fluid" />
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <h2 class="heading text-primary">{{ $property->name }}</h2>
            <p class="meta">{{ $property->address }}</p>
            <p class="text-black-50">
              {{ $property->description }}
            </p>

            <div class="d-block agent-box p-5">
              <div class="img mb-4">
                <img
                  src="{{ asset ('images/person_2-min.jpg') }}"
                  alt="Image"
                  class="img-fluid"
                />
              </div>
              <div class="text">
                <h3 class="mb-0">Alicia Huston</h3>
                <div class="meta mb-3">Real Estate</div>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Ratione laborum quo quos omnis sed magnam id ducimus saepe
                </p>
                <ul class="list-unstyled social dark-hover d-flex">
                  <li class="me-1">
                    <a href="#"><span class="icon-instagram"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="#"><span class="icon-twitter"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="#"><span class="icon-facebook"></span></a>
                  </li>
                  <li class="me-1">
                    <a href="#"><span class="icon-linkedin"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection