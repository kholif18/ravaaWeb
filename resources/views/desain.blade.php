@extends('partials/master')

@section('title')
    Desain
@endsection

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Desain</h2>
                    <ol>
                        <li>Desain</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->
        <section class="invitation-template">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading text-center">
                            <h6>Desain</h6>
                            <h4>Grafis, <em>Sticker,</em> Konten, <em>Logo,</em> dll</h4>
                        </div>
                    </div>
                    <div class="search-form pt-5 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="search-form" name="gs" method="submit" role="search" action="#">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <fieldset>
                                                    <label for="item" class="form-label">Search Any Item</label>
                                                    <input type="text" id="item" name="item" class="searchText" placeholder="Item Name..." autocomplete="on" required>
                                                </fieldset>
                                            </div>
                                            <div class="col-lg-3">
                                                <fieldset>
                                                    <button class="main-button">Search Now</button>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item item-shop">
                            <div class="thumb thumb-shop">
                                <img src="{{ asset('assets/img/undangan/undangan-F104.jpg') }}" alt="">
                                <h6>Klik Untuk Detail</h6>
                                <div class="hover-effect">
                                    <div class="content">
                                        <div class="top-shop">
                                            <span class="award">Harga</span>
                                            <span class="price">Rp 20.000</span>
                                        </div>
                                        <h4>Desain Nama Bayi</h4>
                                        <div class="shop">
                                            <table>
                                                <tr>
                                                    <td>Bahan</td>
                                                    <td>:</td>
                                                    <td>Custom</td>
                                                </tr>
                                                <tr>
                                                    <td>Ukuran terbuka</td>
                                                    <td>:</td>
                                                    <td>100x70 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Ukuran tertutup</td>
                                                    <td>:</td>
                                                    <td>12x21 cm</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="border-button">
                                            <a href="{{ url('/detail') }}">Detail Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item item-shop">
                            <div class="thumb thumb-shop">
                                <img src="{{ asset('assets/img/undangan/undangan-F115.jpg') }}" alt="">
                                <h6>Klik Untuk Detail</h6>
                                <div class="hover-effect">
                                    <div class="content">
                                        <div class="top-shop">
                                            <span class="award">Harga</span>
                                            <span class="price">Rp 15.000</span>
                                        </div>
                                        <h4>Desain Sticker</h4>
                                        <div class="shop">
                                            <table>
                                                <tr>
                                                    <td>Bahan</td>
                                                    <td>:</td>
                                                    <td>Kertas BC</td>
                                                </tr>
                                                <tr>
                                                    <td>Ukuran terbuka</td>
                                                    <td>:</td>
                                                    <td>20x30 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Ukuran tertutup</td>
                                                    <td>:</td>
                                                    <td>20x22 cm</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="border-button">
                                            <a href="{{ url('/detail') }}">Detail Product</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item item-shop">
                            <div class="thumb thumb-shop">
                                <img src="{{ asset('assets/img/undangan/undangan-88217.jpg') }}" alt="">
                                <h6>Klik Untuk Detail</h6>
                                <div class="hover-effect">
                                    <div class="content">
                                        <div class="top-shop">
                                            <span class="award">Harga</span>
                                            <span class="price">Rp 1.400</span>
                                        </div>
                                        <h4>Undangan F-115</h4>
                                        <div class="shop">
                                            <table>
                                                <tr>
                                                    <td>Bahan</td>
                                                    <td>:</td>
                                                    <td>Kertas BC</td>
                                                </tr>
                                                <tr>
                                                    <td>Ukuran terbuka</td>
                                                    <td>:</td>
                                                    <td>20x30 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Ukuran tertutup</td>
                                                    <td>:</td>
                                                    <td>20x22 cm</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="border-button">
                                            <a href="{{ url('/detail') }}">Detail Product</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="item item-shop">
                            <div class="thumb thumb-shop">
                                <img src="{{ asset('assets/img/undangan/undangan-88218.jpg') }}" alt="">
                                <h6>Klik Untuk Detail</h6>
                                <div class="hover-effect">
                                    <div class="content">
                                        <div class="top-shop">
                                            <span class="award">Harga</span>
                                            <span class="price">Rp 1.500</span>
                                        </div>
                                        <h4>Undangan F-115</h4>
                                        <div class="shop">
                                            <table>
                                                <tr>
                                                    <td>Bahan</td>
                                                    <td>:</td>
                                                    <td>Kertas BC</td>
                                                </tr>
                                                <tr>
                                                    <td>Ukuran terbuka</td>
                                                    <td>:</td>
                                                    <td>20x30 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Ukuran tertutup</td>
                                                    <td>:</td>
                                                    <td>20x22 cm</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="border-button">
                                            <a href="{{ url('/detail') }}">Detail Product</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
