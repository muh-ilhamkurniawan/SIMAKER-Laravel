<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset('images/kai.png') }}" >
  <title>SIMAKER</title>
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
    <main role="main" class="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="mb-2 page-title">Dashboard</h2>
                    <p class="card-text">Lihat Data Kategori</p>
                    <div class="row">
                      <div class="col-md-6 col-xl-3 mb-4">
                          <div class="card shadow">
                            <div class="card-body">
                              <div class="row align-items-center">
                                <div class="col-3 text-center">
                                  <span class="circle circle-sm bg-primary">
                                    <i class="fe fe-16 fe-box text-white mb-0"></i>
                                  </span>
                                </div>
                                <div class="col pr-0">
                                  <p class="small text-muted mb-0">Total Kereta</p>
                                  <span class="h3 mb-0">
                                  <?php
                                    // $resultcount = $conn->query("select count(no_ka) as total from kereta");
                                    // $totalcount = $resultcount->fetch_assoc();
                                    // echo $totalcount['total'];
                                    ?>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                          <div class="card shadow">
                            <div class="card-body">
                              <div class="row align-items-center">
                                <div class="col-3 text-center">
                                  <span class="circle circle-sm bg-primary">
                                    <i class="fe fe-16 fe-grid text-white mb-0"></i>
                                  </span>
                                </div>
                                <div class="col pr-0">
                                  <p class="small text-muted mb-0">Kategori</p>
                                  <span class="h3 mb-0">
                                  <?php
                                    // $resultcount = $conn->query("select count(kode_kelas) as total from kelas");
                                    // $totalcount = $resultcount->fetch_assoc();
                                    // echo $totalcount['total'];
                                    ?>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                          <div class="card shadow">
                            <div class="card-body">
                              <div class="row align-items-center">
                                <div class="col-3 text-center">
                                  <span class="circle circle-sm bg-primary">
                                    <i class="fe fe-16 fe-pie-chart text-white mb-0"></i>
                                  </span>
                                </div>
                                <div class="col">
                                  <p class="small text-muted mb-0">Keterlambatan</p>
                                  <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                      <span class="h3 mr-2 mb-0">
                                      <?php
                                        // $resultcount = $conn->query("select count(no_ka) as total from transaksitelat");
                                        // $totalcount = $resultcount->fetch_assoc();
                                        // echo $totalcount['total'];
                                        ?>
                                      </span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php
                        // if ($_SESSION['b_level']=='admin') {
                          ?>
                        <div class="col-md-6 col-xl-3 mb-4">
                          <div class="card shadow">
                            <div class="card-body">
                              <div class="row align-items-center">
                                <div class="col-3 text-center">
                                  <span class="circle circle-sm bg-primary">
                                    <i class="fe fe-16 fe-user text-white mb-0"></i>
                                  </span>
                                </div>
                                <div class="col">
                                  <p class="small text-muted mb-0">Pengguna</p>
                                  <span class="h3 mb-0">
                                  <?php
                                    // $resultcount = $conn->query("select count(id_admin) as total from admin");
                                    // $totalcount = $resultcount->fetch_assoc();
                                    // echo $totalcount['total'];
                                    ?>
                                  </span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php 
                          // }
                        ?>
                      </div> <!-- end section -->
                      <!-- info small box -->
                      <div class="row">
                        <!-- Recent orders -->
                        <div class="col-md-12">
                          <h6 class="mb-3">Data Keterlambatan Terbaru</h6>
                          <table class="table table-borderless table-striped">
                            <thead>
                              <tr role="row">
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Nama Kereta</th>
                                <th>Keterlambatan Datang</th>
                                <th>Keterlambatan Berangkat</th>
                                <th>Keterangan</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                                    // $sqldetail = "select distinct transaksitelat.no_ka,transaksitelat.id, kereta.nama,kereta.kelas, kereta.kedatangan, kereta.keberangkatan,transaksitelat.tanggal,transaksitelat.lama_datang,transaksitelat.lama_berangkat,transaksitelat.kedatangan as real_datang, transaksitelat.keberangkatan as real_berangkat, transaksitelat.alasan from transaksitelat join kereta on transaksitelat.no_ka = kereta.no_ka order by transaksitelat.id desc limit 5";
                                    // $resultDetail = $conn->query($sqldetail);
                                    // if ($resultDetail->num_rows>0) {
                                    //     while ($rowDetail=$resultDetail->fetch_assoc()) {
                                            ?>
                                            <tr>

                                            </tr>
                                            <?php
                                    //     }
                                    // }
                                    ?>
                            </tbody>
                          </table>
                        </div> <!-- / .col-md-3 -->
                      </div> <!-- end section -->
                      <h6 class="mb-3">Informasi Aplikasi</h6>
                      <p class="text-muted"></p>
                      <div class="row">
                        <div class="col-md-12 mb-4">
                          <div class="card profile shadow">
                            <div class="card-body my-4">
                              <div class="row align-items-center">
                                <div class="col-md-3 text-center mb-5">
                                  <a href="#!" class="avatar avatar-xl">
                                    <img src="{{ asset('images/kai.png') }}" alt="..." class="avatar-img rounded-circle">
                                  </a>
                                </div>
                                <div class="col">
                                  <div class="row align-items-center">
                                    <div class="col-md-7">
                                      <h4 class="mb-1">Tentang SIMAKER</h4>
                                      <p class="small mb-3"><span class="badge badge-dark">Sistem Informasi Manajemen Keterlambatan Kereta</span></p>
                                    </div>
                                    <div class="col">
                                    </div>
                                  </div>
                                  <div class="row mb-4">
                                    <div class="col-md-7">
                                      <p class="text-muted">Sistem Informasi Manajamen Keterlambatan Kereta Api merupakan sebuah sistem informasi berbasis website yang berfungsi untuk mencatat, mengedit, serta melihat laporan keterlambatan kereta api di wilayah Daop 5 Purwokerto, khususnya pada stasiun Kutoarjo. </p>
                                    </div>
                                    <div class="col">
                                      <p class="small mb-0 text-muted">PT Kereta Api Indonesia(Persero)</p>
                                      <p class="small mb-0 text-muted">Daop 5 Purwokerto</p>
                                      <p class="small mb-0 text-muted">(0281) 636031</p>
                                    </div>
                                  </div>
                                  <div class="row align-items-center">
                                    <div class="col-md-7 mb-2">
                                      <span class="small text-muted mb-0">Dibuat sebagai hasil kerja praktek </br>Mahasiswa Informatika Universitas Jendral Soedirman </br> @2023</span>
                                    </div>
                                    <div class="col mb-2">
                                      <a href="https://drive.google.com/drive/folders/1tPgN_U5jQ-GrAbes7q9glwA6_E55qiLZ?usp=sharing" target="_blank">
                                      <button type="button" class="btn btn-primary">Unduh Panduan</button>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div> <!-- / .row- -->
                            </div> <!-- / .card-body - -->
                          </div> <!-- / .card- -->
                        </div> <!-- / .col- -->
                      </div> <!-- end section -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    </main> <!-- main -->
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
