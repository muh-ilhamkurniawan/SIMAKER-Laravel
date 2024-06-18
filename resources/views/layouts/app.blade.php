<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset('images/kai.png') }}" >
  <title>SIMAKER - @yield('title')</title>
  <!-- Simple bar CSS -->
  <link rel="stylesheet" href="{{ asset('css/simplebar.css') }}">
  <!-- Fonts CSS -->
  <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Icons CSS -->
  <link rel="stylesheet" href="{{ asset('css/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap4.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}">
  <link rel="stylesheet" href="{{ asset('css/uppy.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.steps.css') }}">
  <link rel="stylesheet" href="{{ asset('css/jquery.timepicker.css') }}">
  <link rel="stylesheet" href="{{ asset('css/quill.snow.css') }}">
  <!-- Date Range Picker CSS -->
  <link rel="stylesheet" href="{{ asset('css/daterangepicker.css') }}">
  <!-- App CSS -->
  <link rel="stylesheet" href="{{ asset('css/app-light.css') }}" id="lightTheme">
  <link rel="stylesheet" href="{{ asset('css/app-dark.css') }}" id="darkTheme" disabled>
</head>

<body class="vertical light">
  <div class="wrapper">
    @include('includes.navbar') <!-- Sisipkan navbar di sini -->
    <main>
      @yield('content')
    </main>
  </div>
  <footer class="main-footer">
    <strong>
      <marquee scrollamount="10">PT KERETA API INDONESIA (PERSERO) DAOP 5 PURWOKERTO</marquee>
    </strong>
  </footer>
  <script src="{{ asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
  <!-- DataTables -->
  <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
  <!--jquery-ui-->
  <script src="{{ asset('plugins/jqueryUI/jquery-ui.js') }}"></script>
  <!--table2excell-->
  <script src="{{ asset('plugins/jquery.table2excel/jquery.table2excel.js') }}"></script>
  <!-- SlimScroll -->
  <script src="{{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
  <!-- FastClick -->
  <script src="{{ asset('plugins/fastclick/fastclick.min.js') }}"></script>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/moment.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/simplebar.min.js') }}"></script>
  <script src="{{ asset('js/daterangepicker.js') }}"></script>
  <script src="{{ asset('js/jquery.stickOnScroll.js') }}"></script>
  <script src="{{ asset('js/tinycolor-min.js') }}"></script>
  <script src="{{ asset('js/config.js') }}"></script>
  <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
  <script src="{{ asset('js/select2.min.js') }}"></script>
  <script src="{{ asset('js/jquery.steps.min.js') }}"></script>
  <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
  <script src="{{ asset('js/jquery.timepicker.js') }}"></script>
  <script src="{{ asset('js/dropzone.min.js') }}"></script>
  <script src="{{ asset('js/uppy.min.js') }}"></script>
  <script src="{{ asset('js/quill.min.js') }}"></script>
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
  <script>
    $(document).ready(function() {
      $("#dataTable-1").DataTable({
        autoWidth: true,
        lengthMenu: [
          [10, 25, 50, -1],
          [10, 25, 50, "All"],
        ],
      });
    });
  </script>
  <script src="{{ asset('js/apps.js') }}"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
</body>
</html>
