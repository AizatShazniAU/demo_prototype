<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Template</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("assets/img/favicons/apple-touch-icon.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("assets/img/favicons/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("assets/img/favicons/favicon-16x16.png") }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("assets/img/favicons/favicon.ico")}}">
    <link rel="manifest" href="{{ asset("assets/img/favicons/manifest.json") }}">
    <meta name="msapplication-TileImage" content="{{ asset("assets/img/favicons/mstile-150x150.png") }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset("assets/js/config.js") }}"></script>
    <script src="{{ asset("vendors/overlayscrollbars/OverlayScrollbars.min.js") }}"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="{{ asset("https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap") }}" rel="stylesheet">
    <link href="{{ asset("vendors/overlayscrollbars/OverlayScrollbars.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/css/theme-rtl.min.css") }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset("assets/css/theme.min.css") }}" rel="stylesheet" id="style-default">
    <link href="{{ asset("assets/css/user-rtl.min.css") }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset("assets/css/user.min.css") }}" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">

              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>

            </div><a class="navbar-brand" href="/">
              <div class="d-flex align-items-center py-3">
                <img class="me-2" src="{{ asset("Majlis.png") }}" alt="" width="40" /><span class="font-sans-serif" style="color:">Majlis</span>
                {{-- <img class="me-2" src="{{ asset("kpm-logo.png") }}" alt="" width="40" /><span class="font-sans-serif">KPM</span> --}}
              </div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages--><a class="nav-link" href="/dashboard">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span>
                    </div>
                  </a>
                  <div class="col-sm-12 mb-3">
                    @can('isAdmin')

                            <!-- parent pages--><a class="nav-link dropdown-indicator"  role="button">
                              <div class="d-flex align-items-center">
                                <span class="fab fa-trello"></span><span class="nav-link-text ps-1">LESEN</span>
                              </div>
                            </a>
                            <ul class="nav collapse show" id="dashboard">
                              <li class="nav-item"><a class="nav-link" href="/lesen">
                                  <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1"><span >PERMOHONAN LESEN</span></span>

                                    {{-- <span class="nav-link-text ps-1">Default</span> --}}
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              {{-- <li class="nav-item"><a class="nav-link"  href="/approvelic">

                                  <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1"></span><span class="nav-link-text ps-1">KELULUSAN LESEN</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li> --}}
                              <li class="nav-item"><a class="nav-link" href="/lesen_pay">
                                  <div class="d-flex align-items-center">
                                  </span><span class="nav-link-text ps-1">PEMBAYARAN LESEN</span>

                                    {{-- <span class="nav-link-text ps-1">CRM</span> --}}
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                            </ul>
                            {{-- <!-- parent pages--><a class="nav-link active" href="/bill" role="button" data-bs-toggle="collapse" aria-expanded="false">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">PEMBAYARAN BIL</span>
                              </div>
                            </a> --}}
                            <!-- parent pages--><a class="nav-link active" href="/bill" role="button">
                              <div class="d-flex align-items-center">
                                <span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">PEMBAYARAN BIL</span>
                                {{-- <span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">CERAMAH KESIHATAN</span> --}}
                              </div>
                            </a>
                            {{-- <!-- parent pages--><a class="nav-link active" href="/cerKes" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">CERAMAH KESIHATAN</span>
                              </div>
                            </a> --}}
                            <!-- parent pages--><a class="nav-link active" href="/gerai" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text ps-1">PENDAFTARAN GERAI</span>
                              </div>
                            </a>
                            <!-- parent pages--><a class="nav-link active" href="/inRec" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">REKOD SUNTIKAN</span>
                              </div>
                            </a>
                            <!-- parent pages--><a class="nav-link active" href="/ivReg" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">PENDAFTARAN TEMUDUGA</span>
                              </div>
                            </a>
                            <!-- parent pages--><a class="nav-link active" href="/jadual" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-share-alt"></span></span><span class="nav-link-text ps-1">PENJADUALAN MESYUARAT</span>
                              </div>
                            </a><!-- parent pages--><a class="nav-link active" href="/laporan" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-exclamation-triangle"></span></span><span class="nav-link-text ps-1">LAPORAN</span>
                              </div>
                            </a>
                          </a><!-- parent pages--><a class="nav-link active" href="/user" role="button">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span class="nav-link-text ps-1">USER</span>
                            </div>
                          </a>

                            <!-- parent pages--><a class="nav-link active" href="/sysCon" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">KONFIGURASI SISTEM</span>
                              </div>
                            </a>
                            @elsecan('isPanel')
                            <!-- parent pages--><a class="nav-link active" href="/ivReg" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">TEMUDUGA</span>
                              </div>
                            </a>
                            {{-- <!-- parent pages--><a class="nav-link active" href="/login" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-lock"></span></span><span class="nav-link-text ps-1">DAFTAR MASUK</span>
                              </div>
                            </a> --}}
                            @else
                            <!-- parent pages--><a class="nav-link dropdown-indicator"  role="button">
                              <div class="d-flex align-items-center">
                                <span class="fab fa-trello"></span><span class="nav-link-text ps-1">LESEN</span>
                              </div>
                            </a>
                            <ul class="nav collapse show" id="dashboard">
                              <li class="nav-item"><a class="nav-link" href="/lesen">
                                  <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1"><span >PERMOHONAN LESEN</span></span>

                                    {{-- <span class="nav-link-text ps-1">Default</span> --}}
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                              {{-- <li class="nav-item"><a class="nav-link"  href="/approvelic">
                                  <div class="d-flex align-items-center">
                                <span class="nav-link-text ps-1"></span><span class="nav-link-text ps-1">KELULUSAN LESEN</span>
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li> --}}
                              <li class="nav-item"><a class="nav-link" href="/lesen_pay">
                                  <div class="d-flex align-items-center">
                                  </span><span class="nav-link-text ps-1">PEMBAYARAN LESEN</span>

                                    {{-- <span class="nav-link-text ps-1">CRM</span> --}}
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                            </ul>
                            {{-- <!-- parent pages--><a class="nav-link active" href="/approvelic" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">KELULUSAN LESEN</span>
                              </div>
                            </a> --}}
                            <!-- parent pages--><a class="nav-link active" href="/bill" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">PEMBAYARAN BIL</span>
                              </div>
                            </a>
                            {{-- <!-- parent pages--><a class="nav-link active" href="/cerKes" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">CERAMAH KESIHATAN</span>
                              </div>
                            </a> --}} 
                            <!-- parent pages--><a class="nav-link active" href="/gerai" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text ps-1">PENDAFTARAN GERAI</span>
                              </div>
                            </a>

                            <!-- parent pages--><a class="nav-link active" href="/ivReg/create" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">PENDAFTARAN TEMUDUGA</span>
                              </div>
                            </a>
                            </a><!-- parent pages--><a class="nav-link active" href="/laporan" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user"></span></span><span class="nav-link-text ps-1">LAPORAN</span>
                              </div>
                            </a>
                            {{-- <!-- parent pages--><a class="nav-link active" href="/lesen" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-lock"></span></span><span class="nav-link-text ps-1">PERMOHONAN LESEN</span>
                              </div>
                            </a> --}}
                            {{-- <!-- parent pages--><a class="nav-link active" href="/lesen_pay" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">PEMBAYARAN LESEN</span>
                              </div>
                            </a> --}}
                            <!-- parent pages--><a class="nav-link active" href="/sysCon" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">KONFIGURASI SISTEM</span>
                              </div>
                            </a>
                            @endcan
                          </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            {{-- <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center"><img class="me-2" src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span>
              </div>
            </a> --}}
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
                {{-- <div class="search-box" data-list='{"valueNames":["title"]}'>
                  <form class="position-relative" data-bs-toggle="search" data-bs-display="static">
                    <input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>

                  </form>
                  <button class="btn-close position-absolute end-0 top-50 translate-middle shadow-none p-1 me-1 fs--2" type="button" data-bs-dismiss="search"></button>
                  <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs--1 px-card py-1 hover-primary" href="app/events/event-detail.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>

                          <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                        </div>
                      </a>
                      <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="app/e-commerce/customers.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>

                          <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                        </div>
                      </a>

                      <hr class="bg-200" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-card py-1 fs-0" href="app/e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                          <div class="flex-1 fs--1 title">All customers list</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="app/events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                          <div class="flex-1 fs--1 title">Latest events in current month</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="app/e-commerce/product/product-grid.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                          <div class="flex-1 fs--1 title">Most popular products</div>
                        </div>
                      </a>

                      <hr class="bg-200" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Files</h6><a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="border h-100 w-100 fit-cover rounded-3" src="assets/img/products/3-thumb.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">iPhone</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="assets/img/icons/zip.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Falcon v1.8.2</h6>
                            <p class="fs--2 mb-0 d-flex"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                          </div>
                        </div>
                      </a>

                      <hr class="bg-200" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Members</h6><a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l status-online me-2">
                            <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Anna Karinina</h6>
                            <p class="fs--2 mb-0 d-flex">Technext Limited</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Antony Hopkins</h6>
                            <p class="fs--2 mb-0 d-flex">Brain Trust</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="pages/user/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Emma Watson</h6>
                            <p class="fs--2 mb-0 d-flex">Google</p>
                          </div>
                        </div>
                      </a>

                    </div>
                    <div class="text-center mt-n3">
                      <p class="fallback fw-bold fs-1 d-none">No Result Found.</p>
                    </div>
                  </div>
                </div> --}}
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2">
                  <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle" type="checkbox" data-theme-control="theme" value="dark" />
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label>
                  <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
                </div>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait" href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>

              </li> --}}
              {{-- <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs--1">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />

                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>

                            </div>
                          </a>

                        </div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                              <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>

                            </div>
                          </a>

                        </div>
                        <div class="list-group-title border-bottom">EARLIER</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />

                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>

                            </div>
                          </a>

                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification-unread  notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="assets/img/logos/oxford.png" alt="" />

                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal Inference Hilary 2019"</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">✌️</span>1w</span>

                            </div>
                          </a>

                        </div>
                        <div class="list-group-item">
                          <a class="border-bottom-0 notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-xl me-3">
                                <img class="rounded-circle" src="assets/img/team/10.jpg" alt="" />

                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United Nations International Children's Fund</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🙋‍</span>2d</span>

                            </div>
                          </a>

                        </div>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="app/social/notifications.html">View all</a></div>
                  </div>
                </div>

              </li> --}}
              <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />

                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item" href="/pages/authentication/card/logout.html">
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
  
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form></a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <div class="row g-0">
            <div class="col-md-6 col-xxl-3 mb-3 pe-md-2">
              <div class="card h-md-100 ecommerce-card-min-width">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2 d-flex align-items-center">KEUNTUNGAN PASAR <span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row">
                    <div class="col">
                      <p class="font-sans-serif lh-1 mb-1 fs-4">$47K</p><span class="badge badge-soft-success rounded-pill fs--2">+3.5%</span>
                    </div>
                    <div class="col-auto ps-0">
                      <div class="echart-bar-weekly-sales h-100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3 mb-3 ps-md-2 pe-xxl-2">
              <div class="card h-md-100">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2">Permohonan Lesen</h6>
                </div>
                <div class="card-body d-flex flex-column justify-content-end">
                  <div class="row justify-content-between">
                    <div class="col-auto align-self-end">
                      <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1">58.4K</div><span class="badge rounded-pill fs--2 bg-200 text-primary"><span class="fas fa-caret-up me-1"></span>13.6%</span>
                    </div>
                    <div class="col-auto ps-0 mt-n4">
                      <div class="echart-default-total-order" data-echarts='{"tooltip":{"trigger":"axis","formatter":"{b0} : {c0}"},"xAxis":{"data":["Week 4","Week 5","week 6","week 7"]},"series":[{"type":"line","data":[20,40,100,120],"smooth":true,"lineStyle":{"width":3}}],"grid":{"bottom":"2%","top":"2%","right":"10px","left":"10px"}}' data-echart-responsive="true"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3 mb-3 pe-md-2 ps-xxl-2">
              <div class="card h-md-100">
                <div class="card-body">
                  <div class="row h-100 justify-content-between g-0">
                    <div class="col-5 col-sm-6 col-xxl pe-2">
                      <h6 class="mt-1">PERMOHONAN LESEN JUALAN</h6>
                      <div class="fs--2 mt-3">
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">PASAR MALAM</span></div>
                          <div class="d-xxl-none">33%</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">PASAR PAGI</span></div>
                          <div class="d-xxl-none">29%</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-300"></span><span class="fw-semi-bold">GERAI/PENJAJA</span></div>
                          <div class="d-xxl-none">20%</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto position-relative">
                      <div class="echart-market-share"></div>
                      <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2">26M</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3 mb-3 ps-md-2">
              <div class="card h-md-100">
                <div class="card-header d-flex flex-between-center pb-0">
                  <h6 class="mb-0">Cuaca</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger">
                    <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-weather-update" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-weather-update"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-2">
                  <div class="row g-0 h-100 align-items-center">
                    <div class="col">
                      <div class="d-flex align-items-center"><img class="me-3" src="assets/img/icons/weather-icon.png" alt="" height="60" />
                        <div>
                          <h6 class="mb-2">PULAU PINANG</h6>
                          <div class="fs--2 fw-semi-bold">
                            <div class="text-warning">Sunny</div>Precipitation: 50%
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto text-center ps-2">
                      <div class="fs-4 fw-normal font-sans-serif text-primary mb-1 lh-1">31&deg;</div>
                      <div class="fs--1 text-800">32&deg; / 25&deg;</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-6 pe-lg-2 mb-3">
              <div class="card h-lg-100 overflow-hidden">
                <div class="card-header bg-light">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="mb-0">JUALAN</h6>
                    </div>
                    <div class="col-auto text-center pe-card">
                      <select class="form-select form-select-sm">
                        <option>PASAR MALAM</option>
                        <option>PASAR PAGI</option>
                        <option>GERAI/PENJAJA</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-card py-1 position-static">
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl me-3">
                          <div class="avatar-name rounded-circle bg-soft-primary text-dark"><span class="fs-0 text-primary">F</span></div>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">MAKANAN BERAT</a><span class="badge rounded-pill ms-2 bg-200 text-primary">88%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center g-0">
                        <div class="col-auto pe-2">
                          <div class="fs--1 fw-semi-bold">12:50:00</div>
                        </div>
                        <div class="col-5 pe-card ps-2">
                          <div class="progress bg-200 me-2" style="height: 5px;">
                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-card py-1 position-static">
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl me-3">
                          <div class="avatar-name rounded-circle bg-soft-success text-dark"><span class="fs-0 text-success">R</span></div>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">MAKANAN RINGAN</a><span class="badge rounded-pill ms-2 bg-200 text-primary">79%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center g-0">
                        <div class="col-auto pe-2">
                          <div class="fs--1 fw-semi-bold">25:20:00</div>
                        </div>
                        <div class="col-5 pe-card ps-2">
                          <div class="progress bg-200 me-2" style="height: 5px;">
                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 79%" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-card py-1 position-static">
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl me-3">
                          <div class="avatar-name rounded-circle bg-soft-info text-dark"><span class="fs-0 text-info">B</span></div>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">PAKAIAN</a><span class="badge rounded-pill ms-2 bg-200 text-primary">90%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center g-0">
                        <div class="col-auto pe-2">
                          <div class="fs--1 fw-semi-bold">58:20:00</div>
                        </div>
                        <div class="col-5 pe-card ps-2">
                          <div class="progress bg-200 me-2" style="height: 5px;">
                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-card py-1 position-static">
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl me-3">
                          <div class="avatar-name rounded-circle bg-soft-warning text-dark"><span class="fs-0 text-warning">R</span></div>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">AKSESORI</a><span class="badge rounded-pill ms-2 bg-200 text-primary">40%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center g-0">
                        <div class="col-auto pe-2">
                          <div class="fs--1 fw-semi-bold">21:20:00</div>
                        </div>
                        <div class="col-5 pe-card ps-2">
                          <div class="progress bg-200 me-2" style="height: 5px;">
                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0 align-items-center py-2 position-relative">
                    <div class="col ps-card py-1 position-static">
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl me-3">
                          <div class="avatar-name rounded-circle bg-soft-danger text-dark"><span class="fs-0 text-danger">S</span></div>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">BAHAN MENTAH</a><span class="badge rounded-pill ms-2 bg-200 text-primary">70%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center g-0">
                        <div class="col-auto pe-2">
                          <div class="fs--1 fw-semi-bold">31:20:00</div>
                        </div>
                        <div class="col-5 pe-card ps-2">
                          <div class="progress bg-200 me-2" style="height: 5px;">
                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="#!">Show all projects<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div> --}}
              </div>
            </div>
            <div class="col-lg-6 ps-lg-2 mb-3">
              <div class="card h-lg-100">
                <div class="card-header">
                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <h6 class="mb-0">JUMLAH PENJUAL AKTIF</h6>
                    </div>
                    <div class="col-auto d-flex">
                      <select class="form-select form-select-sm select-month me-2">
                        <option value="0">Januari</option>
                        <option value="1">Februari</option>
                        <option value="2">March</option>
                        <option value="3">April</option>
                        <option value="4">May</option>
                        <option value="5">Jun</option>
                        <option value="6">July</option>
                        <option value="7">August</option>
                        <option value="8">September</option>
                        <option value="9">October</option>
                        <option value="10">November</option>
                        <option value="11">December</option>
                      </select>
                      {{-- <div class="dropdown font-sans-serif btn-reveal-trigger">
                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-total-sales" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-total-sales"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div> --}}
                    </div>
                  </div>
                </div>
                <div class="card-body h-100 pe-0">
                  <div class="echart-line-total-sales h-100" data-echart-responsive="true"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-6 col-xl-7 col-xxl-8 mb-3 pe-lg-2 mb-3">
              <div class="card h-lg-100">
                <div class="card-body d-flex align-items-center">
                  <div class="w-100">
                    <h6 class="mb-3 text-800">PERATUSAN KELULUSAN LESEN <strong class="text-dark">2450 </strong>DARI 3293</h6>
                    <div class="progress mb-3 rounded-3" style="height: 10px;">
                      <div class="progress-bar bg-progress-gradient border-end border-white border-2" role="progressbar" style="width: 43.72%" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-info border-end border-white border-2" role="progressbar" style="width: 18.76%" aria-valuenow="18.76" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-success border-end border-white border-2" role="progressbar" style="width: 9.38%" aria-valuenow="9.38" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-200" role="progressbar" style="width: 28.14%" aria-valuenow="28.14" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row fs--1 fw-semi-bold text-500 g-0">
                      <div class="col-auto d-flex align-items-center pe-3"><span class="dot bg-primary"></span><span>PASAR MALAM</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(895MB)</span></div>
                      <div class="col-auto d-flex align-items-center pe-3"><span class="dot bg-info"></span><span>PASAR PAGI</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(379MB)</span></div>
                      <div class="col-auto d-flex align-items-center pe-3"><span class="dot bg-success"></span><span>GERAI/PENJAJA</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(192MB)</span></div>
                      <div class="col-auto d-flex align-items-center"><span class="dot bg-200"></span><span>Lain-lain</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block">(576MB)</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-5 col-xxl-4 mb-3 ps-lg-2">
              <div class="card h-lg-100">
                <div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);">
                </div>
                <!--/.bg-holder-->

                <div class="card-body position-relative">
                  <h5 class="text-warning">Ingin berniaga? Mohon lesen anda sekarang</h5>
                  <p class="fs--1 mb-0">Kuota setiap pasar bergantung kepada keadaan</p>
                  <a class="btn btn-link fs--1 text-warning mt-lg-3 ps-0" href="/lesen">DAFTAR SEKARANG!!<span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-4 down-1"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-7 col-xl-8 pe-lg-2 mb-3">
              <div class="card h-lg-100 overflow-hidden">
                <div class="card-body p-0">
                  <div class="table-responsive scrollbar">
                    <table class="table table-dashboard mb-0 table-borderless fs--1 border-200">
                      <thead class="bg-light">
                        <tr class="text-900">
                          <th>KEUNTUNGAN PENJUAL SEHARI</th>
                          <th class="text-end">ANGARAN (RM3083)</th>
                          <th class="pe-card text-end" style="width: 8rem">ANGARAN (%)</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/12.png" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link" href="#!">PASAR MALAM</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">MAKANAN BERAT</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-end fw-semi-bold">RM 1311</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar rounded-pill" role="progressbar" style="width: 39%;" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">39%</div>
                            </div>
                          </td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/10.png" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link" href="#!">PASAR PAGI</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">BAHAN MENTAH</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-end fw-semi-bold">RM 860</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar rounded-pill" role="progressbar" style="width: 26%;" aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">26%</div>
                            </div>
                          </td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/11.png" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link" href="#!">GERAI</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">BURGER</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-end fw-semi-bold">RM 539</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar rounded-pill" role="progressbar" style="width: 16%;" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">16%</div>
                            </div>
                          </td>
                        </tr>
                        <tr class="border-bottom border-200">
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/14.png" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link" href="#!">PENJAJA</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">GORENG PISANG CHEESE</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-end fw-semi-bold">RM 343</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar rounded-pill" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">10%</div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/13.png" width="60" alt="" />
                              <div class="flex-1 ms-3">
                                <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link" href="#!">PENJAJA JALANAN(TRAFFIC LIGHT)</a></h6>
                                <p class="fw-semi-bold mb-0 text-500">JERUK ASAM BOI</p>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle text-end fw-semi-bold">RM 280</td>
                          <td class="align-middle pe-card">
                            <div class="d-flex align-items-center">
                              <div class="progress me-3 rounded-3 bg-200" style="height: 5px;width:80px">
                                <div class="progress-bar rounded-pill" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              <div class="fw-semi-bold ms-2">8%</div>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer bg-light py-2">
                  <div class="row flex-between-center">
                    {{-- <div class="col-auto">
                      <select class="form-select form-select-sm">
                        <option>Last 7 days</option>
                        <option>Last Month</option>
                        <option>Last Year</option>
                      </select>
                    </div> --}}
                    {{-- <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View All</a></div> --}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-xl-4 ps-lg-2 mb-3">
              <div class="card">
                <div class="card-header d-flex flex-between-center bg-light py-2">
                  <h6 class="mb-0">PERKONGSIAN</h6>
                  {{-- <a class="py-1 fs--1 font-sans-serif" href="#!">View All</a> --}}
                </div>
                <div class="card-body pb-0">
                  <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-2" src="assets/img/products/5-thumb.png" alt="" />
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                      <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">JUAL AKSESORI FON BERBALOI??</a></h6>
                      <div class="fs--1"><span class="fw-semi-bold">ALI</span><span class="fw-medium text-600 ms-2">5</span></div>
                      <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a>
                        <button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button>
                      </div>
                    </div>
                  </div>
                  <hr class="bg-200" />
                  <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-2" src="assets/img/products/3-thumb.png" alt="" />
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                      <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">MAKANAN ATAU TEKNOLOGI?</a></h6>
                      <div class="fs--1"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">Yesterday at 1:30 PM</span></div>
                      <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a>
                        <button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button>
                      </div>
                    </div>
                  </div>
                  <hr class="bg-200" />
                  <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="img-fluid" src="assets/img/icons/zip.png" alt="" />
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                      <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">Modul Latihan</a></h6>
                      <div class="fs--1"><span class="fw-semi-bold">Kamil</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></div>
                      <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a>
                        <button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button>
                      </div>
                    </div>
                  </div>
                  <hr class="bg-200" />
                  <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-2" src="assets/img/products/2-thumb.png" alt="" />
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                      <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">Khusus Usahawan</a></h6>
                      <div class="fs--1"><span class="fw-semi-bold">Kumar</span><span class="fw-medium text-600 ms-2">23 Sep at 6:10 PM</span></div>
                      <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a>
                        <button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button>
                      </div>
                    </div>
                  </div>
                  <hr class="bg-200" />
                  <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="img-fluid" src="assets/img/icons/docs.png" alt="" />
                    </div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                      <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">e-Tempah</a></h6>
                      <div class="fs--1"><span class="fw-semi-bold">Jamilah</span><span class="fw-medium text-600 ms-2">1 Oct at 4:30 PM</span></div>
                      <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a>
                        <button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="row g-0">
            <div class="col-sm-6 col-xxl-3 pe-sm-2 mb-3 mb-xxl-0">
              <div class="card">
                <div class="card-header d-flex flex-between-center bg-light py-2">
                  <h6 class="mb-0">Active Users</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger">
                    <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-active-user" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-active-user"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body py-2">
                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-online">
                      <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />

                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Emma Watson</a></h6>
                      <p class="text-500 fs--2 mb-0">Admin</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-online">
                      <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />

                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Antony Hopkins</a></h6>
                      <p class="text-500 fs--2 mb-0">Moderator</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-away">
                      <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />

                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Anna Karinina</a></h6>
                      <p class="text-500 fs--2 mb-0">Editor</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center position-relative mb-3">
                    <div class="avatar avatar-2xl status-offline">
                      <img class="rounded-circle" src="assets/img/team/4.jpg" alt="" />

                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">John Lee</a></h6>
                      <p class="text-500 fs--2 mb-0">Admin</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center position-relative false">
                    <div class="avatar avatar-2xl status-offline">
                      <img class="rounded-circle" src="assets/img/team/5.jpg" alt="" />

                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="stretched-link text-900" href="pages/user/profile.html">Rowen Atkinson</a></h6>
                      <p class="text-500 fs--2 mb-0">Editor</p>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="app/social/followers.html">All active users<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3 ps-sm-2 order-xxl-1 mb-3 mb-xxl-0">
              <div class="card h-100">
                <div class="card-header bg-light d-flex flex-between-center py-2">
                  <h6 class="mb-0">Bandwidth Saved</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger">
                    <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-bandwidth-saved" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-bandwidth-saved"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body d-flex flex-center flex-column">
                  <div class="progress-circle progress-circle-dashboard" data-options='{"color":"url(#gradient)","progress":93,"strokeWidth":5,"trailWidth":5}'></div>
                  <div class="text-center mt-4">
                    <h6 class="fs-0 mb-1"><span class="fas fa-check text-success me-1" data-fa-transform="shrink-2"></span>35.75 GB saved</h6>
                    <p class="fs--1 mb-0">38.44 GB total bandwidth</p>
                  </div>
                </div>
                <div class="card-footer bg-light py-2">
                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <select class="form-select form-select-sm">
                        <option>Last 6 Months</option>
                        <option>Last Year</option>
                        <option>Last 2 Year</option>
                      </select>
                    </div>
                    <div class="col-auto"><a class="fs--1 font-sans-serif" href="#!">Help</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6 px-xxl-2">
              <div class="card h-100">
                <div class="card-header bg-light py-2">
                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <h6 class="mb-0">Top Products</h6>
                    </div>
                    <div class="col-auto d-flex"><a class="btn btn-link btn-sm me-2" href="#!">View Details</a>
                      <div class="dropdown font-sans-serif btn-reveal-trigger">
                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="dropdown-top-products" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-top-products"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body h-100">
                  <div class="echart-bar-top-products h-100" data-echart-responsive="true"></div>
                </div>
              </div>
            </div>
          </div> --}}
          <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                {{-- <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; <a href="https://themewagon.com">Themewagon</a></p> --}}
              </div>
              <div class="col-12 col-sm-auto text-center">
                {{-- <p class="mb-0 text-600">v3.2.0</p> --}}
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-index-1 light">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                </div>
                <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-name">Name</label>
                    <input class="form-control" type="text" autocomplete="on" id="modal-auth-name" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-email">Email address</label>
                    <input class="form-control" type="email" autocomplete="on" id="modal-auth-email" />
                  </div>
                  <div class="row gx-2">
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-password">Password</label>
                      <input class="form-control" type="password" autocomplete="on" id="modal-auth-password" />
                    </div>
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-confirm-password">Confirm Password</label>
                      <input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" />
                    </div>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
                    <label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
                  </div>
                </form>
                <div class="position-relative mt-5">
                  <hr class="bg-300" />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->


    <div class="modal fade modal-fixed-right modal-theme overflow-hidden" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="settings-modal-label" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content border-0 vh-100 scrollbar-overlay">
          <div class="modal-header modal-header-settings bg-shape">
            <div class="z-index-1 py-1 light">
              <h5 class="text-white" id="settings-modal-label"> <span class="fas fa-palette me-2 fs-0"></span>Settings</h5>
              <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
            </div>
            <button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body px-card" id="themeController">
            <h5 class="fs-0">Color Scheme</h5>
            <p class="fs--1">Choose the perfect color mode for your app.</p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
              <div class="row gx-2">
                <div class="col-6">
                  <input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" />
                  <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Light</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" />
                  <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Dark</span></label>
                </div>
              </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                <div class="flex-1">
                  <h5 class="fs-0">RTL Mode</h5>
                  <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1" href="documentation/customization/configuration.html">RTL Documentation</a>
                </div>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" />
              </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/arrows-h.svg" width="20" alt="" />
                <div class="flex-1">
                  <h5 class="fs-0">Fluid Layout</h5>
                  <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1" href="documentation/customization/configuration.html">Fluid Documentation</a>
                </div>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" />
              </div>
            </div>
            <hr />
            <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/paragraph.svg" width="20" alt="" />
              <div class="flex-1">
                <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
                <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                <div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" data-page-url="modules/components/navs-and-tabs/vertical-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-vertical">Vertical</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="option-navbar-top" type="radio" name="navbar" value="top" data-page-url="modules/components/navs-and-tabs/top-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-top">Top</label>
                  </div>
                  <div class="form-check form-check-inline me-0">
                    <input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" data-page-url="modules/components/navs-and-tabs/combo-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-combo">Combo</label>
                  </div>
                </div>
              </div>
            </div>
            <hr />
            <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
            <p class="fs--1 mb-0">Switch between styles for your vertical navbar </p>
            <p> <a class="fs--1" href="modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
              <div class="row gx-2">
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="assets/img/generic/default.png" alt="" /><span class="label-text"> Transparent</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="assets/img/generic/inverted.png" alt="" /><span class="label-text"> Inverted</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img class="img-fluid img-prototype" src="assets/img/generic/card.png" alt="" /><span class="label-text"> Card</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label>
                </div>
              </div>
            </div>
            <div class="text-center mt-5"><img class="mb-4" src="assets/img/icons/spot-illustrations/47.png" alt="" width="120" />
              <h5>Like What You See?</h5>
              <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <a class="card setting-toggle" href="#settings-modal" data-bs-toggle="modal">
      <div class="card-body d-flex align-items-center py-md-2 px-2 py-1">
        <div class="bg-soft-primary position-relative rounded-start" style="height:34px;width:28px">
          <div class="settings-popover"><span class="ripple"><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center">
                  <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path>
                  </svg></span></span></span></div>
        </div><small class="text-uppercase text-primary fw-bold bg-soft-primary py-2 pe-2 ps-1 rounded-end">customize</small>
      </div>
    </a> --}}


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="vendors/progressbar/progressbar.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>

  </body>

</html>