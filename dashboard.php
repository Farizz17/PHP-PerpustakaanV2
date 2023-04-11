<?php
session_start();
if ($_SESSION['login'] == null){
    header('location:login.php');
}

include "Controllers/db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../Perpustakaan 2.0/favicon.ico">
  <title>
    Perpustakaan V2
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="../Perpustakaan 2.0/favicon.ico" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Perpustakaan V2</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="w-auto " id="sidenav-collapse-main">

    <marquee style="color: red; font-size: 50px;"><p><b>Selamat Datang Di Perpustakaan V2</b></p></marquee>

      <div class="bg-dark text-center text-light text-bold p-3">
        <?php
date_default_timezone_set("Asia/Jakarta");
?>

<script type="text/javascript">
function date_time(id)
{
date = new Date;
year = date.getFullYear();
month = date.getMonth();
months = new Array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
d = date.getDate();
day = date.getDay();
days = new Array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu');
h = date.getHours();
if(h<10)
{
h = "0"+h;
}
m = date.getMinutes();
if(m<10)
{
m = "0"+m;
}
s = date.getSeconds();
if(s<10)
{
s = "0"+s;
}
result = ''+days[day]+', '+d+' '+months[month]+' '+year+' '+h+':'+m+':'+s;
document.getElementById(id).innerHTML = result;
setTimeout('date_time("'+id+'");','1000');
return true;
}
</script>

 <span id="date_time"></span>
<script type="text/javascript">window.onload = date_time('date_time');</script>
      </div>
      <ul class="navbar-nav">
        <?php

        $level = $_SESSION['level'];
        if($level == 'Petugas'){

        ?>
        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dasbor</span>
          </a>
        </li>
  
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Halaman Akun</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="https://sites.google.com/view/pplg2024/beranda">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profil</span>
          </a>

          <a class="nav-link " href="Routes/proses.php?aksi=logout">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-button-power text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Keluar</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Perpustakaan V2</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="dashboard.php?pages=users">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-circle-08 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Pengguna</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="dashboard.php?pages=buku">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-book-bookmark text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Buku</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="dashboard.php?pages=siswa">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-hat-3 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Siswa</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="dashboard.php?pages=peminjaman">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-shop text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Peminjaman</span>
          </a>
        </li>

        <?php
        } else {
        ?>

        <li class="nav-item">
          <a class="nav-link active" href="dashboard.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dasbor</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Halaman Akun</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="https://sites.google.com/view/pplg2024/beranda">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profil</span>
          </a>

          <a class="nav-link " href="Routes/proses.php?aksi=logout">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-button-power text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Keluar</span>
          </a>
        </li>

        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Perpustakaan V2</h6>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="dashboard.php?pages=datapeminjaman">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-bag-17 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data Peminjaman</span>
          </a>
        </li>

          <?php
          }
          ?>

      </ul>
    </div>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">

    <!-- NAVBAR -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
              <a class="opacity-5 text-white" href="javascript:;">Halaman</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dasbor</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dasbor Perpustakaan V2</h6>
        </nav>

        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <span class="text-light btn btn-outline-light">
              Selamat Datang, <?= $_SESSION['username'] ?>
            </span>

            <a class="text-light btn btn-outline-light ms-2" href="Routes/proses.php?aksi=logout">
                  Keluar
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    

                    <h5>Jumlah Pengguna</h5>
                    <h5><?= $perpus->jumlahusers() ?></h5>

                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-primary text-center rounded-circle">
                    <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    

                     <h5>Jumlah <br>
                      Siswa</h5>
                    <h5><?= $perpus->jumlahsiswa() ?></h5>

                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                    <i class="ni ni-hat-3 text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    

                    <h5>Jumlah <br>
                      Buku</h5>
                    <h5><?= $perpus->jumlahbuku() ?></h5>

                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                    <i class="ni ni-book-bookmark text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
      
                    <h5>Jumlah Peminjaman</h5>
                    <h5><?= $perpus->jumlahpeminjaman() ?></h5>

                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                    <i class="ni ni-shop text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">PERPUSTAKAAN V2</h6>

            <?php

            @$pages = $_GET['pages'];

            if($pages == 'users'){
              @$act = $_GET['act'];
              if($act == 'tambah'){
                include "views/petugas/users/tambah.php";
              }
              else if($act == 'ubah'){
                include "views/petugas/users/ubah.php";
              } else {
                include "views/petugas/users/users.php";
              }
            }

            elseif($pages == 'buku'){
              @$act = $_GET['act'];
              if($act == 'tambahbuku'){
                include "views/petugas/buku/tambah.php";
              } else if($act == 'ubahbuku'){
                include "views/petugas/buku/ubah.php";
              }
              else {
              include "views/petugas/buku/buku.php";
              }
            }

            elseif($pages == 'siswa'){
              @$act = $_GET['act'];
              if($act == 'tambahsiswa'){
                include "views/petugas/siswa/tambah.php";
              }
               else if($act == 'ubahsiswa'){
                include "views/petugas/siswa/ubah.php";
              }
              else {
              include "views/petugas/siswa/siswa.php";
              }
            }

            elseif($pages == 'peminjaman'){
              @$act = $_GET['act'];
              if($act == 'tambah'){
                include "views/petugas/peminjaman/tambah.php";
              }
              else {
              include "views/petugas/peminjaman/peminjaman.php";
              }
            }

            elseif($pages == 'datapeminjaman'){
              @$act = $_GET['act'];
              if($act == 'tambah'){
                include "views/siswa/datapeminjaman/tambah.php";
              }
              else {
              include "views/siswa/datapeminjaman/datapeminjaman.php";
              }
            } 
            else
            { ?>

              <div class="bg-primary p-2 border-radius-lg mb-2 shadow">
              <h2 class="text-light font-weight-bold">Apa Itu Perpustakaan?</h2><br>
              
              <h6 class="text-light"><p class="font-weight-bolder">Dalam arti tradisional, perpustakaan ataupun rumah buku, adalah sebuah koleksi buku dan majalah. Walaupun dapat diartikan sebagai koleksi pribadi perseorangan, namun perpustakaan lebih umum dikenal sebagai sebuah koleksi besar yang dibiayai dan dioperasikan oleh sebuah kota atau institusi, serta dimanfaatkan oleh masyarakat yang rata-rata tidak mampu membeli sekian banyak buku dengan biaya sendiri.</p></h6>

              <h6 class="text-light"><p class="font-weight-bolder">Tetapi, dengan koleksi dan penemuan media baru selain buku untuk menyimpan informasi, banyak perpustakaan kini juga merupakan tempat penyimpanan dan/atau akses ke map, cetak atau hasil seni lainnya, mikrofilm, mikrofiche, tape audio, CD, LP, tape video dan DVD. Selain itu, perpustakaan juga menyediakan fasilitas umum untuk mengakses gudang data CD-ROM dan internet.</p></h6>

              <h6 class="text-light"><p class="font-weight-bolder">Perpustakaan dapat juga diartikan sebagai kumpulan informasi yang bersifat ilmu pengetahuan, hiburan, rekreasi, dan ibadah yang merupakan kebutuhan hakiki manusia.</p></h6>

              <h6 class="text-light"><p class="font-weight-bolder">Oleh karena itu perpustakaan modern telah didefinisikan kembali sebagai tempat untuk mengakses informasi dalam format apapun, apakah informasi itu disimpan dalam gedung perpustakaan tersebut ataupun tidak. Dalam perpustakaan modern ini selain kumpulan buku tercetak, sebagian buku dan koleksinya ada dalam perpustakaan digital (dalam bentuk data yang bisa diakses lewat jaringan komputer).</p></h6>
              <p class="font-weight-bolder text-light">Sumber : Wikipedia</p>
              </div>

              <a href="https://id.wikipedia.org/wiki/Perpustakaan" class="btn btn-primary btn btn-hover shadow">Selengkapnya</a>

            <?php
            }
            ?>
            
            </div>
          </div>
        </div>
        <div class="d-flex">
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- FOOTER -->
      <footer class="footer pt-3">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                &copy; <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="" class="font-weight-bold" target="_blank">RPL 2024</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://sites.google.com/view/pplg2024/beranda" class="nav-link text-muted" target="_blank">RPL Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://sites.google.com/view/pplg2024/beranda" class="nav-link text-muted" target="_blank">Tentang Kami</a>
                </li>
                <li class="nav-item">
                  <a href="https://rizzggwp.blogspot.com/" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://sites.google.com/view/pplg2024/beranda" class="nav-link pe-0 text-muted" target="_blank">Lisensi</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      <!-- END FOOTER -->

    </div>
  </main>       
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <?php
  if(@$_SESSION['success'] != ''){
  ?>

  <script>
      Swal.fire(
      'Selamat,',
      '<?= $_SESSION['success']; ?>' ,
      'success'
    )
  </script>

  <?php
  }
  unset($_SESSION['success'])
  ?>

  <!-- <?php
  if(@$_SESSION['successlogin'] != ''){
  ?>

  <script>
      Swal.fire(
      'Selamat Datang,',
      '<?= $_SESSION['username']; ?>' ,
      'success'
    )
  </script>

  <?php
  }
  unset($_SESSION['successlogin'])
  ?> -->

  <?php
  if(@$_SESSION['fail'] != ''){
  ?>

  <script>
      Swal.fire(
      'Gagal,',
      '<?= $_SESSION['fail']; ?>' ,
      'warning'
    )
  </script>

  <?php
  }
  unset($_SESSION['fail'])
  ?>

  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>