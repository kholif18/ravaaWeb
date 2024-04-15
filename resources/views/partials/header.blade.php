    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid"></a>
            </div>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('atk') ? 'active' : '' }}" href="{{ url('/atk') }}">ATK</a>
                    </li>
                    <li><a class="nav-link scrollto {{ Request::is('banner') ? 'active' : '' }}" href="{{ url('/banner') }}">Banner</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('cetak') ? 'active' : '' }}" href="{{ url('/cetak') }}">Cetak</a></li>
                    <li><a class="nav-link scrollto {{ Request::is('desain') ? 'active' : '' }}" href="{{ url('/desain') }}">Desain</a></li>
                    <li class="dropdown"><a href="#"><span>Form</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Form Undangan</a></li>
                            <li><a href="https://forms.gle/Gvm1t2ZuJx5esX7p7" target="_blank">Form Nama Bayi</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto {{ Request::is('sablon') ? 'active' : '' }}" href="{{ url('/sablon') }}">Sablon</a></li>
                    <li class="dropdown"><a class="{{ Request::is('undangan/erba', 'undangan/falah', 'undangan/kabinet', 'undangan/undangan-kita', 'undangan/website') ? 'active' : '' }}"
                            href="#"><span>Undangan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="{{ Request::is('undangan/erba') ? 'active' : '' }}" href="{{ url('/undangan/erba') }}">Erba</a></li>
                            <li><a class="{{ Request::is('undangan/falah') ? 'active' : '' }}" href="{{ url('/undangan/falah') }}">Falah</a></li>
                            <li><a class="{{ Request::is('undangan/kabinet') ? 'active' : '' }}" href="{{ url('/undangan/kabinet') }}">Kabinet</a></li>
                            <li><a class="{{ Request::is('undangan/undangan-kita') ? 'active' : '' }}" href="{{ url('/undangan/undangan-kita') }}">Undangan Kita</a></li>
                            <li><a class="{{ Request::is('undangan/website') ? 'active' : '' }}" href="{{ url('/undangan/website') }}">Website</a></li>
                        </ul>
                    </li>
                    <li><a class="getstarted scrollto" href="https://internet.ravaastudio.my.id" target="_blank">Ravaa.Net</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header><!-- End Header -->
