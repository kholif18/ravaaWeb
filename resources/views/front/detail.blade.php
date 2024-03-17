@extends('front.master.master')

@section('title')
    Product Detail
@endsection

@section('breadcrumbs')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Product Details</h2>
            <ol>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li>Product Details</li>
            </ol>
          </div>
  
        </div>
    </section><!-- End Breadcrumbs -->
@endsection

@section('content')
    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset('client/assets/img/portfolio/portfolio-details-1.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('client/assets/img/portfolio/portfolio-details-2.jpg') }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset('client/assets/img/portfolio/portfolio-details-3.jpg') }}" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="portfolio-info buy">
              <h3>Cetak Banner</h3>
              <h4>Rp 25.000</h4>
              <ul>
                <li><strong>kategori</strong>: Banner</li>
                <li><strong>Stok</strong>: Ready</li>
                <li><strong>Pengiriman dari</strong>: Ngluyu, Nganjuk, Jawa Timur</li>
                <li><a href="#" class="btn-buy"><i class="bi bi-whatsapp"></i> Order Whatsapp</a>
                    </li>
                {{-- <li><div class="btn-wrap">
                    <a href="#pricing" class="btn-buy"><i class="bi bi-whatsapp"></i></a>
                  </div></li> --}}
              </ul>
            </div>
          </div>

        </div>
        <div class="row gy-4">
            <div class="col-12">
                <div class="portfolio-description">
                    <h2>Product Description</h2>
                    <p>
                        Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
                    </p>
                </div>
            </div>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

@endsection