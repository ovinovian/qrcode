<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Diskominfo Babel KONREG PDRB-ISE</title>

    <!-- Bootstrap core CSS -->

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-onix-digital.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/select2/css/select2.min.css') }}">

    <style>
        .select2-container--default .select2-selection--single {
            border-top: none;
            border-left: none;
            border-right: none;
        }

        /* Atur border bottom */
        .select2-container--default .select2-selection--single {
            border-bottom: 1px solid #9cdbf8;
            /* Ganti dengan warna dan ketebalan border sesuai keinginan Anda */
        }
    </style>
    </style>

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/logo4.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#portfolio">Acara</a></li>
                            <li class="scroll-to-section"><a href="#about">Informasi</a></li>
                            <li class="scroll-to-section">
                                <div class="main-red-button-hover"><a href="#contact">Registrasi</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    @if (Session::has('success'))
    <div class="alert alert-primary d-flex align-items-center text-center" style="z-index: 9999; margin-top:90px" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div class="text-center">
            Silahkan cek email untuk mengunduh e-tiket peserta KONREG PDRB-ISE
        </div>
    </div>
    @endif
    
    @if (Session::has('error'))
    <div class="alert alert-danger d-flex align-items-center text-center" style="z-index: 9999; margin-top:90px" role="alert">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>
        <div class="text-center">
        {{Session::get('error')}}
        </div>
    </div>
    @endif
    
    <div class="main-banner" id="top">
    
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="owl-carousel owl-banner">
                                <div class="item header-text">
                                    <h6>Selamat datang Peserta</h6>
                                    <h2><em>Konreg</em> <span>PDRB-ISE</span> se-Sumatera</h2>
                                    <p>Pelaksanaan Konsultasi Regional Produk Domestik Bruto Indikator Sosial Ekonomi se-Sumatera tahun 2023</p>
                                    <div class="down-buttons">
                                        <div class="main-blue-button-hover">
                                            <a href="#contact">Registrasi</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item header-text">
                                    <h6>Selamat datang Peserta</h6>
                                    <h2><em>Konreg</em> <span>PDRB-ISE</span> se-Sumatera</h2>
                                    <p>Pelaksanaan Konsultasi Regional Produk Domestik Bruto Indikator Sosial Ekonomi se-Sumatera tahun 2023</p>
                                    <div class="down-buttons">
                                        <div class="main-blue-button-hover">
                                            <a href="#contact">Registrasi</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item header-text">
                                    <h6>Selamat datang Peserta</h6>
                                    <h2><em>Konreg</em> <span>PDRB-ISE</span> se-Sumatera</h2>
                                    <p>Pelaksanaan Konsultasi Regional Produk Domestik Bruto Indikator Sosial Ekonomi se-Sumatera tahun 2023</p>
                                    <div class="down-buttons">
                                        <div class="main-blue-button-hover">
                                            <a href="#contact">Registrasi</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="portfolio" class="our-portfolio section">
        <div class="container">
            <div class="services-left-dec">
                <img src="assets/images/services-left-dec.png" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2><em>Speakers</em> &amp; <span>Moderator</span></h2>
                        <span>Event</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-portfolio">
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/naruto.jpeg" alt="">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <a rel="sponsored" href="https://templatemo.com/tm-564-plot-listing" target="_parent">
                                            <h4>Uzumaki Naruto</h4>
                                        </a>
                                        <span class="five-lines">Konsep Negara Konoha Untuk keberlangsungan mahluk yang berguna</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/naruto.jpeg" alt="">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <a href="#">
                                            <h4>Uzumaki Naruto</h4>
                                        </a>
                                        <span class="five-lines">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit libero reprehenderit nisi temporibus praesentium. Itaque nihil asperiores in inventore nam assumenda facere eligendi. Est dolore voluptate molestiae necessitatibus consequatur sint?</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/naruto.jpeg" alt="">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <a rel="sponsored" href="https://templatemo.com/tm-562-space-dynamic" target="_parent">
                                            <h4>Uzumaki Naruto</h4>
                                        </a>
                                        <span class="five-lines">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias ullam, eaque architecto sequi facere ut maiores pariatur magnam? Officiis, in sapiente. Sed harum a dolores itaque possimus et culpa fugit.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/naruto.jpeg" alt="">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <a href="#">
                                            <h4>Uzumaki Naruto</h4>
                                        </a>
                                        <span class="five-lines">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis harum velit dicta, facere quo in fugit unde consequuntur dolore eveniet officia recusandae rerum doloremque impedit veniam mollitia vero minus repudiandae?</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/naruto.jpeg" alt="">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <a href="#">
                                            <h4>Fifth Project</h4>
                                        </a>
                                        <span class="five-lines">Digital Assets</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <img src="assets/images/naruto.jpeg" alt="">
                                <div class="hover-effect">
                                    <div class="inner-content">
                                        <a href="#">
                                            <h4>Sixth Project</h4>
                                        </a>
                                        <span class="five-lines">SEO &amp; Marketing</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact" class="contact-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-heading">
                        <h2>Registrasi <em>Peserta</em> Menggunakan <span>Form</span> Berikut</h2>
                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.2964903820052!2d107.626499675278!3d-2.72809323890244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e171678e4edd64b%3A0xa884c3843130a5d1!2sBW%20SUITE%20Belitung%20Hotel!5e0!3m2!1sid!2sid!4v1690279883064!5m2!1sid!2sid" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                        </div>

                        <div class="info">
                            <span><i class="fa fa-phone"></i> <a href="#">010-020-0340<br>090-080-0760</a></span>
                            <span><i class="fa fa-envelope"></i> <a href="#">info@company.com<br>mail@company.com</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <form id="contact" name="registrasi" action="{{ route('registrasi') }}" method="post">
                        @csrf

                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="name" name="nama" id="name" placeholder="  Nama">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="nik" id="nik" maxlength="16" placeholder="  NIK">
                                </fieldset>
                                <span id="error-nik" style="display:none;color:red;font-size:10px;"></span>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="  Email">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="no_hp" id="no_hp" placeholder="  No.HP">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 mt-3 mb-5">
                                <fieldset>
                                    <!-- <input type="text" name="id_provinsi" id="provinsi" placeholder="Provinsi"> -->
                                    <select name="id_provinsi" class="provinsi form-select @error('qrcode_id') is-invalid @enderror" id="provinsi">
                                        <option value="">Provinsi</option>
                                        <option value="1">Provinsi 1</option>
                                        <option value="2">Provinsi 2</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-12 mt-3 mb-5">
                                <fieldset>
                                    <select name="id_opd" class="opd form-control @error('qrcode_id') is-invalid @enderror" id="opd">
                                        <option value="">Instansi</option>
                                        <option value="1">Instansi 1</option>
                                        <option value="2">Instansi 2</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Registrasi</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="contact-dec">
            <img src="assets/images/contact-dec.png" alt="">
        </div>
        <div class="contact-left-dec">
            <img src="assets/images/contact-left-dec.png" alt="">
        </div>
    </div>

    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-image">
                        <img src="assets/images/about-left-image.png" alt="Two Girls working together">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Total <em>Peserta</em> &amp; <span>Pendaftar</span></h2>
                        <p>Berikut Total Peserta yang mengikuti acara dan Total Pendaftar Aplikasi</p>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="assets/images/service-icon-04.png" alt="">
                                        </div>
                                        <div class="count-digit">100</div>
                                        <div class="count-title">Total Pendaftar</div>
                                        <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="assets/images/service-icon-04.png" alt="">
                                        </div>
                                        <div class="count-digit">92</div>
                                        <div class="count-title">Total Konfirmasi</div>
                                        <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="fact-item">
                                    <div class="count-area-content">
                                        <div class="icon">
                                            <img src="assets/images/service-icon-04.png" alt="">
                                        </div>
                                        <div class="count-digit">90</div>
                                        <div class="count-title">Total Hadir</div>
                                        <p>Lorem ipsum dolor sitti amet, consectetur.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-dec">
        <img src="assets/images/footer-dec.png" alt="">
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about footer-item">
                        <div class="logo">
                            <a href="#"><img src="assets/images/logo.png" alt="Onix Digital TemplateMo"></a>
                        </div>
                        <a href="#">info@company.com</a>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="services footer-item">
                        <h4>Layanan</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Acara</a></li>
                            <li><a href="#">Informasi</a></li>
                            <li><a href="#">Registrasi</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="subscribe-newsletters footer-item">
                        <h4>Hubungi Kami</h4>
                        <p>Jika Ada Kendala hubungi kami melalui emai berikut</p>
                        <form action="#" method="get">
                            <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                            <button type="submit" id="form-submit" class="main-button "><i class="fa fa-paper-plane-o"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="copyright">
                        <p>Copyright © 2021 Onix Digital Co., Ltd. All Rights Reserved.
                            <br>
                            Designed by <a rel="nofollow" href="https://templatemo.com" title="free CSS templates">TemplateMo</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('assets/js/animation.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.js') }}"></script>
    <script src="{{ asset('vendor/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form-validator.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.opd').select2({
                placeholder: 'Instansi'
            });
            $('#provinsi').select2({
                placeholder: 'Provinsi'
            });
        })
    </script>

    <script>
        $('#nik').keyup(function() {
            this.value = this.value.replace(/[^0-9\.]/g, '');
            var lengthNik = $(this).val().length;
            if(lengthNik == 0) {
            $('#error-nik').hide();
            } else if(lengthNik > 0 && lengthNik <= 15) {
            $('#error-nik').text("Nomor Identitas minimal 16 karakter angka").show();
            } else {
            $('#error-nik').hide();
            }
        });
        $('#no_hp').keyup(function() {
            this.value = this.value.replace(/[^0-9\.]/g, '');
            
        });
    </script>

    <script>
        $(document).ready(function() {
            $("form[name='registrasi']").validate({
                rules: {
                    nama: "required",
                    nik: "required",
                    email: "required",
                    no_hp: "required",
                    id_provinsi: "required",
                    id_opd: "required",
                },
                messages: {
                    nama: "<span style='color: red; font-size:10px;'>Nama tidak boleh kosong</span>",
                    nik: "<span style='color: red; font-size:10px;'>NIK tidak boleh kosong</span>",
                    email: "<span style='color: red; font-size:10px;'>Email tidak boleh kosong</span>",
                    no_hp: "<span style='color: red; font-size:10px;'>No HP tidak boleh kosong</span>",
                    id_provinsi: "<span style='color: red; font-size:10px;'>Provinsi tidak boleh kosong</span>",
                    id_opd: "<span style='color: red; font-size:10px;'>Instansi tidak boleh kosong</span>",
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>

    <script>
        // Acc
        $(document).on("click", ".naccs .menu div", function() {
            var numberIndex = $(this).index();

            if (!$(this).is("active")) {
                $(".naccs .menu div").removeClass("active");
                $(".naccs ul li").removeClass("active");

                $(this).addClass("active");
                $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

                var listItemHeight = $(".naccs ul")
                    .find("li:eq(" + numberIndex + ")")
                    .innerHeight();
                $(".naccs ul").height(listItemHeight + "px");
            }
        });
    </script>
    <script>
        @if($message = Session::get('success'))
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Berhasil Registrasi',
            html: '{{ $message }}',
            timer: 15000
        })
        @endif
        @if($message = Session::get('error'))
        Swal.fire({
            position: 'center',
            icon: 'warning',
            title: 'Perhatian !!',
            html: '{{ $message }}',
            timer: 5000
        })
        @endif
    </script>

</body>

</html>