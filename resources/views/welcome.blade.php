<!DOCTYPE html>
<html lang="en">
<head>
  <title>Alurkn</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="{{ url('theme/landing/images/alurkn.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ url('theme/landing/vendors/owl-carousel/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ url('theme/landing/vendors/owl-carousel/css/owl.theme.default.css') }}">
  <link rel="stylesheet" href="{{ url('theme/landing/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ url('theme/landing/vendors/aos/css/aos.css') }}">
  <link rel="stylesheet" href="{{ url('theme/landing/css/style.min.css') }}">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  <header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
        <img src="{{ url('theme/landing/images/alurkn.png') }}" alt="" width="40" height="40">
        <h3 class="ml-2 mt-1">Alur KN</h3>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="{{ url('theme/landing/images/alurkn.png') }}" alt="" width="40" height="40" class="mt-0 pt-0">
              <span style="font-size: 25px;">Alur KN</span>
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-0"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#header-section">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#faq">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#bmn">BMN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#lelang">Lelang</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#piutang">Piutang</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="#kontak">Kontak</a>
          </li> --}}
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
          </li>
        </ul>
      </div>
    </div> 
    </nav>   
  </header>
  <div class="banner" >
    <div class="container">
      <h1 class="font-weight-semibold">Daftar Pertanyaan & Telusuri<br>Permohonan Anda</h1>
      <h6 class="font-weight-normal text-muted pb-3">Untuk mengetahui proses permohonan Pengelolaan BMN, Lelang dan Pengurusan Piutang Negara Anda.</h6>
      <div>
        {{-- <a href="#daftar" class="btn btn-opacity-light mr-1">Daftar Pertanyaan</a> --}}
        <a href="#exampleModal" class="btn btn-opacity-light ml-1">Telusuri Permohonan Anda Sekarang!</a>
      </div>
      <img src="{{ url('theme/landing/images/Group171.svg') }}" alt="" class="img-fluid">
    </div>
  </div>
  <div class="content-wrapper">
    <div class="container">
      <section class="features-overview" id="faq" >
        <div class="content-header">
          <h2>Daftar Pertanyaan</h2>
          <h6 class="section-subtitle text-muted">Berisi daftar pertanyaan yang sering ditanyakan seputar layanan KPKNL Jakarta 1.</h6>
        </div>
        <div class="row text-center text-md-left">
          <div class="col-12 col-md-6 col-lg-4 grid-margin">
            <h5 class="pb-2">Pengelolaan BMN</h5>
            <a href="#"><p class="m-0 pb-2">Layanan Penetapan Status Penggunaan BMN Berupa Tanah dan/atau Bangunan</p></a>   
            <a href="#" ><p class="m-0 pt-1 pb-2">Privacy policy</p></a> 
            <a href="#"><p class="m-0 pt-1 pb-2">Cookie Policy</p></a> 
            <a href="#"><p class="m-0 pt-1">Discover</p></a>       
          </div>
          <div class="col-12 col-md-6 col-lg-4 grid-margin">
            <h5 class="pb-2">Lelang</h5>
            <a href="#"><p class="m-0 pb-2">Layanan Penetapan Jadwal Lelang</p></a>   
            <a href="#" ><p class="m-0 pt-1 pb-2">Privacy policy</p></a> 
            <a href="#"><p class="m-0 pt-1 pb-2">Cookie Policy</p></a> 
            <a href="#"><p class="m-0 pt-1">Discover</p></a>  
          </div>
          <div class="col-12 col-md-6 col-lg-4 grid-margin">
            <h5 class="pb-2">Pengurusan Piutang Negara</h5>
            <a href="#"><p class="m-0 pb-2">Layanan Permohonan Keringanan Hutang</p></a>   
            <a href="#" ><p class="m-0 pt-1 pb-2">Privacy policy</p></a> 
            <a href="#"><p class="m-0 pt-1 pb-2">Cookie Policy</p></a> 
            <a href="#"><p class="m-0 pt-1">Discover</p></a> 
          </div>
        </div>
      </section> 
      <section class="features-overview" id="bmn" >
        <div class="content-header">
          <h2>Pengelolaan BMN</h2>
          <h6 class="section-subtitle text-muted">One theme that serves as an easy-to-use operational toolkit<br>that meets customer's needs.</h6>
        </div>
        <div class="d-md-flex justify-content-between">
          <div class="grid-margin d-flex justify-content-start">
            <div class="features-width">
              <img src="{{ url('theme/landing/images/Group12.svg') }}" alt="" class="img-icons">
              <h5 class="py-3">Speed<br>Optimisation</h5>
              <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
              <a href="#"><p class="readmore-link">Readmore</p></a>  
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-center">
            <div class="features-width">
              <img src="{{ url('theme/landing/images/Group7.svg') }}" alt="" class="img-icons">
              <h5 class="py-3">SEO and<br>Backlinks</h5>
              <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
              <a href="#"><p class="readmore-link">Readmore</p></a>
            </div>
          </div>
          <div class="grid-margin d-flex justify-content-end">
            <div class="features-width">
              <img src="{{ url('theme/landing/images/Group5.svg') }}" alt="" class="img-icons">
              <h5 class="py-3">Content<br>Marketing</h5>
              <p class="text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
              <a href="#"><p class="readmore-link">Readmore</p></a>
            </div>
          </div>
        </div>
      </section>     
      <section class="digital-marketing-service" id="lelang">
        <div class="row align-items-center">
          <div class="col-12 col-lg-7 grid-margin grid-margin-lg-0" data-aos="fade-right">
            <h3 class="m-0">Pelayanan Lelang<br>pada KPKNL Jakarta 1</h3>
            <div class="col-lg-7 col-xl-6 p-0">
              <p class="py-4 m-0 text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer turpis, suspendisse.</p>
              <p class="font-weight-medium text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum. Fusce egeabus consectetuer</p>
            </div>    
          </div>
          <div class="col-12 col-lg-5 p-0 img-digital grid-margin grid-margin-lg-0" data-aos="fade-left">
            <img src="{{ url('theme/landing/images/Group1.png') }}" alt="" class="img-fluid">
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-12 col-lg-7 text-center flex-item grid-margin" data-aos="fade-right">
            <img src="{{ url('theme/landing/images/Group2.png') }}" alt="" class="img-fluid">
          </div>
          <div class="col-12 col-lg-5 flex-item grid-margin" data-aos="fade-left">
            <h3 class="m-0">Leading Digital Agency<br>for  Business Solution.</h3>
            <div class="col-lg-9 col-xl-8 p-0">
              <p class="py-4 m-0 text-muted">Power-packed with impressive features and well-optimized, this template is designed to provide the best performance in all circumstances.</p>
              <p class="pb-2 font-weight-medium text-muted">Its smart features make it a powerful stand-alone website building tool.</p>
            </div>
            <button class="btn btn-info">Readmore</button>
          </div>
        </div>
      </section>     
      <section class="case-studies" id="piutang">
        <div class="row grid-margin">
          <div class="col-12 text-center pb-5">
            <h2>Pengurusan Piutang Negara</h2>
            <h6 class="section-subtitle text-muted">Lorem ipsum dolor sit amet, tincidunt vestibulum.</h6>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-primary text-center card-contents">
                  <div class="card-image">
                    <img src="{{ url('theme/landing/images/Group95.svg') }}" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <h6 class="text-white pb-2 px-3">Know more about Online marketing</h6>
                      <button class="btn btn-white">Read More</button>
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Online Marketing</h6>
                    <p>Seo, Marketing</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-warning text-center card-contents">
                  <div class="card-image">
                      <img src="{{ url('theme/landing/images/Group108.svg') }}" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <h6 class="text-white pb-2 px-3">Know more about Web Development</h6>
                      <button class="btn btn-white">Read More</button>
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Web Development</h6>
                    <p>Developing, Designing</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card mb-3 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-violet text-center card-contents">
                  <div class="card-image">
                      <img src="{{ url('theme/landing/images/Group126.svg') }}" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <h6 class="text-white pb-2 px-3">Know more about Web Designing</h6>
                      <button class="btn btn-white">Read More</button>
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Web Designing</h6>
                    <p>Designing, Developing</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 stretch-card" data-aos="zoom-in" data-aos-delay="600">
            <div class="card color-cards">
              <div class="card-body p-0">
                <div class="bg-success text-center card-contents">
                  <div class="card-image">
                      <img src="{{ url('theme/landing/images/Group115.svg') }}" class="case-studies-card-img" alt="">
                  </div>  
                  <div class="card-desc-box d-flex align-items-center justify-content-around">
                    <div>
                      <h6 class="text-white pb-2 px-3">Know more about Software Development</h6>
                      <button class="btn btn-white">Read More</button>
                    </div>
                  </div>
                </div>   
                <div class="card-details text-center pt-4">
                    <h6 class="m-0 pb-1">Software Development</h6>
                    <p>Developing, Designing</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>     
      <footer class="border-top">
        <p class="text-center text-muted pt-4">Copyright © 2020<a href="#" class="px-1">Yenny.</a>All rights reserved.</p>
      </footer>
    </div> 
  </div>
  <script src="{{ url('theme/landing/vendors/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('theme/landing/vendors/bootstrap/bootstrap.min.js') }}"></script>
  <script src="{{ url('theme/landing/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
  <script src="{{ url('theme/landing/vendors/aos/js/aos.js') }}"></script>
  <script src="{{ url('theme/landing/js/landingpage.js') }}"></script>
</body>
</html>