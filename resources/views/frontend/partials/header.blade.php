@php
    $categoryInformations = App\Models\Informasi\CategoryInformation::all();
@endphp

<header class="main-header header-style-one">

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <!-- Logo Box -->
                <div class="pull-left logo-box">
                    <div class="logo"><a href="index.html"><img src="{{asset('assets_front/images/logo.png')}}" alt="" title=""></a></div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-phone"></span></div>
                        <ul>
                            <li>Requesting a Call:</li>
                            <li><strong><a href="tel:+301-357-1234">(301) 357 1234</a></strong></li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-clock-1"></span></div>
                        <ul>
                            <li>Sunday - Friday:</li>
                            <li><strong>9am - 8pm</strong></li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-location-1"></span></div>
                        <ul>
                            <li>1428 Callison Laney Building</li>
                            <li><strong>California</strong></li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!--Header Lower-->
    <div class="header-lower">

        <div class="auto-container">
            <div class="clearfix">

                <div class="nav-outer clearfix">
                    <!-- Nav Btn -->
                    <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu"></span></div>

                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu show navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="{{route('home')}}">Home</a>

                                </li>
                                <li class="dropdown"><a href="#">Profile</a>
                                    <ul>
                                        <li><a href="visimisi.html">Visi dan Misi</a></li>
                                        <li><a href="Fakultas.html">Fakultas</a></li>
                                        <li><a href="{{route('leader')}}">Pimpinan</a></li>
                                        <li><a href="Dosen.html">Dosen</a></li>
                                        <li><a href="Peg-administrasi.html">Tendik</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Akademik</a>
                                    <ul>
                                        <li class="dropdown"><a href="Program-Sarjana.html">Program Sarjana</a>
                                        <ul>
                                            <li><a href="teknik_mesin.html">Teknik Mesin</a></li>
                                            <li><a href="teknik_sipil.html">Teknik Sipil</a></li>
                                            <li><a href="teknik_tambang.html">Teknik Pertambangan</a></li>
                                            <li><a href="teknik_elektro.html">Teknik Elektro</a></li>
                                            <li><a href="teknik_kimia.html">Teknik Kimia</a></li>
                                            <li><a href="teknik_arsitektur.html">Teknik Arsitektur</a></li>
                                            <li><a href="teknik_geologi.html">Teknik Geologi</a></li>
                                        </ul>
                                        <li class="dropdown"><a href="Program-Pascasarjana.html">Program Pascasarjana</a>
                                        <ul>
                                            <li><a href="teknik_psmesin.html">Teknik Mesin</a></li>
                                            <li><a href="teknik_pssipil.html">Teknik Sipil</a></li>
                                            <li><a href="teknik_pstambang.html">Teknik Pertambangan</a></li>
                                            <li><a href="teknik_pskimia.html">Teknik Kimia</a></li>
                                        </ul>
                                        <li class="dropdown"><a href="Program-doktor.html">Program Doktor</a>
                                        <ul>
                                            <li><a href="ilmu_teknik.html">Ilmu Teknik</a></li>
                                        </ul>
                                        <li><a href="Laboratorium">Laboratorium</a></li>
                                        <li><a href="Informasi-beasiswa.html">Informasi Beasiswa</a></li>
                                        <li><a href="Tracert-study.html">Tracer Study</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Informasi</a>
                                    <ul>
                                        @foreach ($categoryInformations as $c)
                                        <li><a href="#">{{$c->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown has-mega-menu"><a href="#">Pages</a>
                                    <div class="mega-menu">
                                        <div class="mega-menu-bar row clearfix">
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <h3>About Us</h3>
                                                <ul>
                                                    <li><a href="about.html">About us</a></li>
                                                    <li><a href="price.html">Price</a></li>
                                                    <li><a href="faq.html">Faq's</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="team-detail.html">Team Detail</a></li>
                                                    <li><a href="testimonial.html">Testimonial</a></li>
                                                    <li><a href="comming-soon.html">Comming Soon</a></li>
                                                    <li><a href="error-page.html">Error Page</a></li>
                                                    <li><a href="terms.html">Terms & Condition</a></li>
                                                    <li><a href="privacy.html">Privacy & Policy</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <h3>Services</h3>
                                                <ul>
                                                    <li><a href="services.html">Services</a></li>
                                                    <li><a href="general-contracting.html">General Contracting</a></li>
                                                    <li><a href="apartment-design.html">Apartment Design</a></li>
                                                    <li><a href="metrial-managment.html">Metrial Managment</a></li>
                                                    <li><a href="building-renovation.html">Building Renovation</a></li>
                                                    <li><a href="building-construction.html">Building Construction</a></li>
                                                    <li><a href="architecture-design.html">Architecture Design</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <h3>Blog</h3>
                                                <ul>
                                                    <li><a href="blog.html">Our Blog</a></li>
                                                    <li><a href="blog-classic.html">Blog Classic</a></li>
                                                    <li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                                    <li><a href="blog-rightsidebar.html">Blog Right Sidebar</a></li>
                                                    <li><a href="news-detail.html">Blog Details</a></li>
                                                    <li><a href="error-page.html">Error Page</a></li>
                                                </ul>
                                            </div>
                                            <div class="column col-lg-3 col-md-4 col-sm-12">
                                                <h3>Our Shop</h3>
                                                <ul>
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-single.html">Shop Details</a></li>
                                                    <li><a href="shoping-cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="{{route('login')}}">Login</a></li>
                                                    <li><a href="register.html">Register</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="blog-classic.html">Blog Classic</a></li>
                                        <li><a href="blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-rightsidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="news-detail.html">Blog Details</a></li>
                                        <li><a href="error-page.html">Error Page</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Shop</a></li>
                                        <li><a href="shop-single.html">Shop Details</a></li>
                                        <li><a href="shoping-cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout Page</a></li>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        {{-- <li><a href="{{route('register')}}">Register</a></li> --}}
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Contact</a>
                                    <ul>
                                        <li><a href="contact.html">Contact us 01</a></li>
                                        <li><a href="contact-2.html">Contact us 02</a></li>
                                        <li><a href="contact-3.html">Contact us 03</a></li>
                                    </ul>
                                </li>
                             </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Options Box -->
                    <div class="options-box clearfix">

                        <!--Search Box-->
                        <div class="search-box-outer">
                            <div class="search-box-btn"><span class="fa fa-search"></span></div>
                        </div>

                        <div class="btn-box">
                            <a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Get A Quote</span></a>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img src="{{asset('assets_front/images/logo-small.png')}}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->

                <!-- Options Box -->
                <div class="options-box clearfix">

                    <!--Search Box-->
                    <div class="search-box-outer">
                        <div class="search-box-btn"><span class="fa fa-search"></span></div>
                    </div>

                    <div class="btn-box">
                        <a href="contact.html" class="theme-btn btn-style-one"><span class="txt">Get A Quote</span></a>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{asset('assets_front/images/logo.png')}}" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
