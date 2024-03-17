@extends('front.master.master')

@section('title')
    Form Undangan
@endsection

@section('breadcrumbs')
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>Form Undangan</h2>
            <ol>
              <li><a href="{{ url('/') }}">Home</a></li>
              <li>Form Undangan</li>
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
                    <h2>Mempelai Perempuan</h2>
                <div class="form-group">
                    <input type="text" name="full-name-p" class="form-control" id="full-name-p" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <input type="text" name="name-p" class="form-control" id="name-p" placeholder="Nama Panggilan" required>
                </div>
                <div class="form-group">
                    <input type="text" name="nama-bapak-p" class="form-control" id="nama-bapak-p" placeholder="Nama Bapak" required>
                </div>
                <div class="form-group">
                    <input type="text" name="nama-ibu-p" class="form-control" id="nama-ibu-p" placeholder="Nama Ibu" required>
                </div>
                <div class="form-group">
                    <input type="text" name="alamat-perempuan" class="form-control" id="alamat-perempuan" placeholder="Alamat" required>
                </div>
                    <h2>Mempelai Laki-laki</h2>
                <div class="form-group">
                    <input type="text" name="full-name-l" class="form-control" id="full-name-l" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group">
                    <input type="text" name="name-l" class="form-control" id="name-l" placeholder="Nama Panggilan" required>
                </div>
                <div class="form-group">
                    <input type="text" name="nama-bapak-l" class="form-control" id="nama-bapak-l" placeholder="Nama Bapak" required>
                </div>
                <div class="form-group">
                    <input type="text" name="nama-ibu-l" class="form-control" id="nama-ibu-l" placeholder="Nama Ibu" required>
                </div>
                <div class="form-group">
                    <input type="text" name="alamat-laki" class="form-control" id="alamat-laki" placeholder="Alamat" required>
                </div>
                <h2>Akad Nikah (Opsional)</h2>
                <div class="form-group">
                    <input type="text" name="hari" class="form-control" id="hari" placeholder="Hari">
                </div>
                <div class="form-group">
                    <input type="date" name="tanggal" class="form-control" id="tanggal" placeholder="Tanggal">
                </div>
                <div class="form-group">
                    <input type="time" name="time" class="form-control" id="time" placeholder="Pukul">
                </div>
                <div class="form-group">
                    <input type="text" name="tempat-akad" class="form-control" id="tempat-akad" placeholder="Tempat Akad">
                </div>
                <h2>Resepsi</h2>
                <div class="form-group">
                    <input type="text" name="hari-resepsi" class="form-control" id="hari-resepsi" placeholder="Hari" required>
                </div>
                <div class="form-group">
                    <input type="date" name="tanggal-resepsi" class="form-control" id="tanggal-resepsi" placeholder="Tanggal" required>
                </div>
                <div class="form-group">
                    <input type="time" name="time-resepsi" class="form-control" id="time-resepsi" placeholder="Pukul" required>
                </div>
                <div class="form-group">
                    <input type="text" name="tempat-resepsi" class="form-control" id="tempat-resepsi" placeholder="Tempat Akad" required>
                </div>
                <div class="form-group">
                    <input type="text" name="catatan" class="form-control" id="catatan" placeholder="Catatan (Opsional)">
                </div>
                <span>Bila ditambahkan foto harap kirim Via dokumen Wa</span></br>
                    <span>- Gambar denah lokasi (apabila dikasih denah)</span></br>
                    <span>- Gambar denah lokasi kirim WA dokumen biar jelas dan terbaca / share loc</span></br>
                    <span>Catatan (bila ingin ditambahkan catatan atau keterangan lainya)</span>
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