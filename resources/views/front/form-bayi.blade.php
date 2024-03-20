@extends('front.master.master')

@section('title')
    Form Nama Bayi
@endsection

@section('breadcrumbs')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Form Nama Bayi</h2>
            <ol>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li>Form Nama Bayi</li>
            </ol>
          </div>
  
        </div>
    </section><!-- End Breadcrumbs -->
@endsection

@section('content')
<section id="contact" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-delay="300">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-group">
                    <input type="text" name="full-name" class="form-control" id="full-name" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Panggilan">
                </div>
                <div class="form-group">
                    <input type="text" name="anakke" class="form-control" id="anakke" placeholder="Anak ke - ?">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin:</label><br>
                    <input type="radio" id="laki_laki" name="jenis_kelamin" value="laki-laki">
                    <label for="laki_laki">Laki-laki</label><br>
                    <input type="radio" id="perempuan" name="jenis_kelamin" value="perempuan">
                    <label for="perempuan">Perempuan</label>
                </div>
                <div class="form-group">
                    <input type="text" name="hari" class="form-control" id="hari" placeholder="Hari Lahir">
                </div>
                <div class="form-group">
                    <input type="date" name="date" class="form-control" id="date" placeholder="Tanggal Lahir">
                </div>
                <div class="form-group">
                    <input type="time" name="jam" class="form-control" id="jam" placeholder="Jam Lahir">
                </div>
                <div class="form-group">
                    <input type="text" name="berat" class="form-control" id="berat" placeholder="Berat Badan">
                </div>
                <div class="form-group">
                    <input type="text" name="panjang" class="form-control" id="panjang" placeholder="Panjang Bayi">
                </div>
                <div class="form-group">
                    <input type="text" name="orangtua" class="form-control" id="orangtua" placeholder="Nama Orang Tua">
                </div>
                <div class="form-group">
                    <input type="text" name="note" class="form-control" id="note" placeholder="Catatan">
                </div>
                <span>kosongi bagian yang tidak ingin di cantumkan pada desain banner nama bayi.</span>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
@endsection