
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <style>
      .buttonsED button { 
        width: 50%;
        color: black
      }
      </style>
      <script src="https://code.jquery.com/jquery.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <style>
      td { text-align: center;}
      
    </style>
    <style>
      /* Chrome, Safari, Edge, Opera */
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
      
      /* Firefox */
      input[type=number] {
        -moz-appearance: textfield;
      }
      </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Majlis</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("/assets/img/favicons/apple-touch-icon.png") }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("/assets/img/favicons/favicon-32x32.png") }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/assets/img/favicons/favicon-16x16.png") }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("/assets/img/favicons/favicon.ico") }}">
    <link rel="manifest" href="{{ asset("/assets/img/favicons/manifest.json") }}">
    <meta name="msapplication-TileImage" content="{{ asset("/assets/img/favicons/mstile-150x150.png") }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset("/assets/js/config.js") }}"></script>
    <script src="{{ asset("/vendors/overlayscrollbars/OverlayScrollbars.min.js") }}"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset("/vendors/fullcalendar/main.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/vendors/flatpickr/flatpickr.min.css") }}" rel="stylesheet">
    <link rel="preconnect" href="{{ asset("https://fonts.gstatic.com") }}">
    <link href="{{ asset("https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap") }}" rel="stylesheet">
    <link href="{{ asset("/vendors/overlayscrollbars/OverlayScrollbars.min.css") }}" rel="stylesheet">
    <link href="{{ asset("/assets/css/theme-rtl.min.css") }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset("/assets/css/theme.min.css") }}" rel="stylesheet" id="style-default">
    <link href="{{ asset("/assets/css/user-rtl.min.css") }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset("/assets/css/user.min.css") }}" rel="stylesheet" id="user-style-default">
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
                            {{-- <!-- parent pages--><a class="nav-link active" href="/inRec" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">REKOD SUNTIKAN</span>
                              </div>
                            </a> --}}
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
                              <li class="nav-item"><a class="nav-link" href="/lesen_pay">
                                  <div class="d-flex align-items-center">
                                  </span><span class="nav-link-text ps-1">PEMBAYARAN LESEN</span>

                                    {{-- <span class="nav-link-text ps-1">CRM</span> --}}
                                  </div>
                                </a>
                                <!-- more inner pages-->
                              </li>
                            </ul>
                            <!-- parent pages--><a class="nav-link active" href="/bill" role="button">
                              <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">PEMBAYARAN BIL</span>
                              </div>
                            </a>
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
            <a class="navbar-brand me-1 me-sm-3" href="{{ asset("/index.html") }}">
              <div class="d-flex align-items-center"><img class="me-2" src="{{ asset("/assets/img/icons/spot-illustrations/falcon.png") }}" alt="" width="40" /><span class="font-sans-serif">falcon</span>
              </div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
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
              <li class="nav-item dropdown">
                {{-- <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card dropdown-menu-notification" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none"> --}}
                    {{-- <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div> --}}
                    {{-- <div class="scrollbar-overlay" style="max-height:19rem">
                      <div class="list-group list-group-flush fw-normal fs--1">
                        <div class="list-group-title border-bottom">NEW</div>
                        <div class="list-group-item">
                          <a class="notification notification-flush notification-unread" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="{{ asset("/assets/img/team/1-thumb.png") }}" alt="" />

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

                        </div> --}}
                        {{-- <div class="list-group-title border-bottom">EARLIER</div> --}}
                        {{-- <div class="list-group-item">
                          <a class="notification notification-flush" href="#!">
                            <div class="notification-avatar">
                              <div class="avatar avatar-2xl me-3">
                                <img class="rounded-circle" src="{{ asset("/assets/img/icons/weather-sm.jpg") }}" alt="" />

                              </div>
                            </div>
                            <div class="notification-body">
                              <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                              <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>

                            </div>
                          </a>

                        </div> --}}

              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="{{ asset("/assets/img/team/3-thumb.png") }}" alt="" />

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
          <div>
          @yield('content')
          </div>


          <footer class="footer">
            {{-- <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.2.0</p>
              </div>
            </div> --}}
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
        <div class="modal fade" id="eventDetailsModal" tabindex="-1">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border"></div>
          </div>
        </div>
        <div class="modal fade" id="addEventModal" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content border">
              <form id="addEventForm" autocomplete="off">
                <div class="modal-header px-card bg-light border-bottom-0">
                  <h5 class="modal-title">Tambah Jadual</h5>
                  <button class="btn-close me-n1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-card">
                  <div class="mb-3">
                    <label class="fs-0" for="eventTitle">Tajuk</label>
                    <input class="form-control" id="eventTitle" type="text" name="title" required="required" />
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="eventStartDate">Tarikh Mula</label>
                    <input class="form-control datetimepicker" id="eventStartDate" type="text" required="required" name="startDate" placeholder="yyyy/mm/dd hh:mm" data-options='{"static":"true","enableTime":"true","dateFormat":"Y-m-d H:i"}' />
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="eventEndDate">Tarikh Akhir</label>
                    <input class="form-control datetimepicker" id="eventEndDate" type="text" name="endDate" placeholder="yyyy/mm/dd hh:mm" data-options='{"static":"true","enableTime":"true","dateFormat":"Y-m-d H:i"}' />
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="eventAllDay" name="allDay" />
                    <label class="form-check-label" for="eventAllDay">Seharian
                    </label>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0">Jadual Perjumpaan</label>
                    <div><a class="btn badge-soft-success btn-sm" href="#!"><span class="fas fa-video me-2"></span>Masukan link</a></div>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="eventDescription">Catatan</label>
                    <textarea class="form-control" rows="3" name="description" id="eventDescription"></textarea>
                  </div>
                  <div class="mb-3">
                    <label class="fs-0" for="eventLabel">Label</label>
                    <select class="form-select" id="eventLabel" name="label">
                      <option value="" selected="selected">Tiada</option>
                      <option value="primary">Perniagaan</option>
                      <option value="danger">Penting</option>
                      <option value="success">Peribadi</option>
                      <option value="warning">Wajib</option>
                    </select>
                  </div>
                </div>
                <div class="card-footer d-flex justify-content-end align-items-center bg-light">
                  {{-- <a class="me-3 text-600" href="/app/events/create-an-event.html">More options</a> --}}
                  <button class="btn btn-primary px-4" type="submit">Simpan</button>
                </div>
              </form>
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
                  <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="/assets/img/generic/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Light</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" />
                  <label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="/assets/img/generic/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Dark</span></label>
                </div>
              </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-start"><img class="me-2" src="{{ asset("/assets/img/icons/left-arrow-from-left.svg") }}" width="20" alt="" />
                <div class="flex-1">
                  <h5 class="fs-0">RTL Mode</h5>
                  <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1" href="/documentation/customization/configuration.html">RTL Documentation</a>
                </div>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" />
              </div>
            </div>
            <hr />
            <div class="d-flex justify-content-between">
              <div class="d-flex align-items-start"><img class="me-2" src="{{ asset("/assets/img/icons/arrows-h.svg") }}" width="20" alt="" />
                <div class="flex-1">
                  <h5 class="fs-0">Fluid Layout</h5>
                  <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1" href="/documentation/customization/configuration.html">Fluid Documentation</a>
                </div>
              </div>
              <div class="form-check form-switch">
                <input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" />
              </div>
            </div>
            <hr />
            <div class="d-flex align-items-start"><img class="me-2" src="{{ asset("/assets/img/icons/paragraph.svg") }}" width="20" alt="" />
              <div class="flex-1">
                <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
                <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                <div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" data-page-url="/modules/components/navs-and-tabs/vertical-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-vertical">Vertical</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" id="option-navbar-top" type="radio" name="navbar" value="top" data-page-url="/modules/components/navs-and-tabs/top-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-top">Top</label>
                  </div>
                  <div class="form-check form-check-inline me-0">
                    <input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" data-page-url="/modules/components/navs-and-tabs/combo-navbar.html" data-theme-control="navbarPosition" />
                    <label class="form-check-label" for="option-navbar-combo">Combo</label>
                  </div>
                </div>
              </div>
            </div>
            <hr />
            <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
            <p class="fs--1 mb-0">Switch between styles for your vertical navbar </p>
            <p> <a class="fs--1" href="/modules/components/navs-and-tabs/vertical-navbar.html#navbar-styles">See Documentation</a></p>
            <div class="btn-group d-block w-100 btn-group-navbar-style">
              <div class="row gx-2">
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="{{ asset("/assets/img/generic/default.png") }}" alt="" /><span class="label-text"> Transparent</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="{{ asset("/assets/img/generic/inverted.png") }}" alt="" /><span class="label-text"> Inverted</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img class="img-fluid img-prototype" src="{{ asset("/assets/img/generic/card.png") }}" alt="" /><span class="label-text"> Card</span></label>
                </div>
                <div class="col-6">
                  <input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" />
                  <label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="{{ asset("/assets/img/generic/vibrant.png") }}" alt="" /><span class="label-text"> Vibrant</span></label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    {{-- <script src="{{ asset("/vendors/popper/popper.min.js")}}"></script>
    <script src="{{ asset("/vendors/bootstrap/bootstrap.min.js")}}"></script>
    <script src="{{ asset("/vendors/anchorjs/anchor.min.js")}}"></script>
    <script src="{{ asset("/vendors/is/is.min.js")}}"></script>
    <script src="{{ asset("/vendors/fullcalendar/main.min.js")}}"></script>
    <script src="{{ asset("/assets/js/flatpickr.js")}}"></script>
    <script src="{{ asset("/vendors/dayjs/dayjs.min.js")}}"></script>
    <script src="{{ asset("/vendors/fontawesome/all.min.js")}}"></script>
    <script src="{{ asset("/vendors/lodash/lodash.min.js")}}"></script>
    <script src= "https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset("vendors/list.js/list.min.js")}}"></script>
    <script src="{{ asset("/assets/js/theme.js")}}"></script> --}}
    <script src="/vendors/popper/popper.min.js"></script>
    <script src="/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/vendors/anchorjs/anchor.min.js"></script>
    <script src="/vendors/is/is.min.js"></script>
    <script src="/vendors/echarts/echarts.min.js"></script>
    <script src="/vendors/progressbar/progressbar.min.js"></script>
    <script src="/vendors/fontawesome/all.min.js"></script>
    <script src="/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="/vendors/list.js/list.min.js"></script>
    <script src="/assets/js/theme.js"></script>
    <script src="/vendors/fullcalendar/main.min.js"></script>
    <script src="/assets/js/flatpickr.js"></script>
    <script src="/vendors/dayjs/dayjs.min.js"></script>
    <script src="/vendors/lodash/lodash.min.js"></script>
    <script src="{{ asset("/assets/js/flatpickr.js")}}"></script>
    <script src="{{ asset("/vendors/dayjs/dayjs.min.js")}}"></script>
    <script src="{{ asset("/vendors/lodash/lodash.min.js")}}"></script>

  </body>

</html>