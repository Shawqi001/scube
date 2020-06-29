<!DOCTYPE html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> اسكيوب|لوحة التحكم</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/iCheck/flat/blue.css') }}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('plugins/morris/morris.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('plugins/datepicker/datepicker3.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker-bs3.css') }}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
 <!-- template rtl version -->
 <link rel="stylesheet" href="{{asset('dist/css/custom-style.css')}}">
  <!-- bootstrap rtl -->
  @if (app()->getlocale()=='ar')
  <link rel="stylesheet" href="{{asset('dist/css/bootstrap-rtl.min.css') }}">
  
@else 
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/font-awesome/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

@endif
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">خانه</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">تماس</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-comments-o"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dist/img/user1-128x128.jpg')}}" alt="User Avatar" class="img-size-50 ml-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  شوقي المجاهد
                  <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">با من تماس بگیر لطفا...</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dist/img/user8-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle ml-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  پیمان احمدی
                  <span class="float-left text-sm text-muted"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">من پیامتو دریافت کردم</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset('dist/img/user3-128x128.jpg')}}" alt="User Avatar" class="img-size-50 img-circle ml-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  سارا وکیلی
                  <span class="float-left text-sm text-warning"><i class="fa fa-star"></i></span>
                </h3>
                <p class="text-sm">پروژه اتون عالی بود مرسی واقعا</p>
                <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>4 ساعت قبل</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa fa-bell-o"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
          <span class="dropdown-item dropdown-header">15 نوتیفیکیشن</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-envelope ml-2"></i> 4 پیام جدید
            <span class="float-left text-muted text-sm">3 دقیقه</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-users ml-2"></i> 8 درخواست دوستی
            <span class="float-left text-muted text-sm">12 ساعت</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fa fa-file ml-2"></i> 3 گزارش جدید
            <span class="float-left text-muted text-sm">2 روز</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">مشاهده همه نوتیفیکیشن</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                class="fa fa-th-large"></i></a>
      </li>
    
    
      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
          <li class="nav-item dropdown">
              <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                  {{ $properties['native'] }}
              </a>
          </li>
      @endforeach
  </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
      <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="https://secure.gravatar.com/avatar/5ffa2a1ffeb767c60ab7e1052e385d5c?s=52&d=mm&r=g" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">محمدرضا عطوان</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open"> 
              <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  الرئيسية
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                      <i class="nav-icon fa fa-tree"></i>
                      <p>
                         المبيعات
                        <i class="fa fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/UI/general.html" class="nav-link">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>عمومی</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/UI/icons.html" class="nav-link">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>آیکون‌ها</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/UI/buttons.html" class="nav-link">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>دکمه‌ها</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/UI/sliders.html" class="nav-link">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>اسلایدر‌ها</p>
                        </a>
                      </li>
                    </ul>
                  </li>
            <li class="nav-item">
              <a href="pages/widgets.html" class="nav-link">
                <i class="nav-icon fa fa-th"></i>
                <p>
                  ویجت‌ها
                  <span class="right badge badge-danger">جدید</span>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-pie-chart"></i>
                <p>
                  چارت‌ها
                  <i class="right fa fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/chartjs.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار ChartJS</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/flot.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار Flot</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/inline.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>نمودار Inline</p>
                  </a>
                </li>
              </ul>
            </li>
          
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-edit"></i>
                <p>
                  فرم‌ها
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/forms/general.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>اجزا عمومی</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/advanced.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>پیشرفته</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/forms/editors.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ویشرایشگر</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-table"></i>
                <p>
                  جداول
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/tables/simple.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>جداول ساده</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/tables/data.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>جداول داده</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">مثال‌ها</li>
            <li class="nav-item">
              <a href="pages/calendar.html" class="nav-link">
                <i class="nav-icon fa fa-calendar"></i>
                <p>
                  تقویم
                  <span class="badge badge-info right">2</span>
                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-envelope-o"></i>
                <p>
                  ایمیل‌ باکس
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/mailbox/mailbox.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>اینباکس</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/mailbox/compose.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ایجاد</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/mailbox/read-mail.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>خواندن</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-book"></i>
                <p>
                  صفحات
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/invoice.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>سفارشات</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/profile.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>پروفایل</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/login.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>صفحه ورود</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/register.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>صفحه عضویت</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/lockscreen.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>قفل صفحه</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-plus-square-o"></i>
                <p>
                  بیشتر
                  <i class="fa fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/examples/404.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ارور 404</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/500.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>ارور 500</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/examples/blank.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>صفحه خالی</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="starter.html" class="nav-link">
                    <i class="fa fa-circle-o nav-icon"></i>
                    <p>صفحه شروع</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-header">متفاوت</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-file"></i>
                <p>مستندات</p>
              </a>
            </li>
            <li class="nav-header">برچسب‌ها</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-warning"></i>
                <p>هشدار</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-circle-o text-info"></i>
                <p>اطلاعات</p>
              </a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                   <i class="nav-icon fa fa-circle-o text-danger"></i>
                    {{ __('تسجيل الخروج') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                  </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>CopyLeft &copy; 2018 <a href="http://github.com/mratwan/">محمدرضا عطوان</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}" defer></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset('plugins/morris/morris.min.js') }}" defer></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}" defer></script>
<!-- jvectormap -->


<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}" defer></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}" defer></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/knob/jquery.knob.js')}}" defer></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}" defer></script>
<!-- datepicker -->
<script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}" defer></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" defer></script>
<!-- Slimscroll -->
<script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}" defer></script>
<!-- FastClick -->
<script src="{{asset('plugins/fastclick/fastclick.js')}}" defer></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}" defer></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}" defer></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}" defer></script>
</body>
</html>