<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Sistem Penggajian| PT. SINTRA SINARINDO ELEKTRIK</title>
      <!-- StyleSheets -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/bootstrap/bootstrap.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/fontawesome/css/all.min.css" />
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/style.css" />
      <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/landing/css/button_style.css"> -->
      <link rel="icon" href="<?php echo base_url(); ?>assets/img/pt_logo.png">
   </head>
   <style  type="text/css">
      .buttonlogin{
         background-color: #0080ff;
         border: none;
         color: white;
         text-align: center;
         border-radius: 8px;
      }
      .readmore{
         color: #fafafa;
      }
   </style>
   <body>
      <!-- Pre Loader -->
      <div class="Loader" id="Loader">
         <div class="LoaderWrapper">
            <div class="circleBall"></div>
            <div class="circleBall"></div>
            <div class="circleBall"></div>
         </div>
      </div>
      <!-- Go to top Button -->
      <a href="#Home">
         <div class="Gototop">
               <i class="fa fa-angle-double-up text-white" aria-hidden="true"></i>
         </div>
      </a>
      <!-- Header Section -->
      <div class="Header" id="Home">
         <nav class="navbar fixed-top">
         
            <div class="container">
            <img src="<?php echo base_url(); ?>assets/img/full_logo.png" width="100" height="50">
               <div class="collapse_menu deactive">
                  <i class="fa fa-bars" aria-hidden="true"></i>
                  <i class="fa fa-times" aria-hidden="true"></i>
                  <ul class="nav">
                     <li class="nav-item">
                        <a class="nav-link" href="#Home">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="#Tentang">Informasi Website</a>
                     </li>
                     <li class="nav-item buttonlogin">
                        <a class="nav-link" href="<?php echo base_url('login');?>">Login</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <div class="banner">
            <div class="layer">
               <div class="row Section">
                  <div class="col">
                     <div class="box">
                        <div>
                           <h2>Penggajian <br> Karyawan</h2>
                        </div>
                        <p>aplikasi ini dibuat untuk membantu perusahaan dalam proses penggajian karyawan</p>
                     </div>
                  </div>
                  <div class="col headerImg" style="background-image: url('<?php echo base_url()?>assets/img/webbanner.svg');"></div>
                  <div class="col-12 Dicover_Parent">
                     <a href="#AboutMe">
                        <div class="Discover">
                           <i class="fa fa-angle-double-down text-white" aria-hidden="true"></i>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Service Section -->
      <div class="Service" id="Tentang">
         <div class="Section">
            <div class="text-center">
               <h2>Informasi Website</h2>
               <div class="subHeading">
                  Berikut informasi singkat tentang website penggajian karyawan
               </div>
            </div>

            <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
            <script> 
             $(document).ready(function(){
               $("#flip1").click(function(){
                 $("#panel1").slideToggle("slow");
               });
             });
             </script>
             <style> 
             #panel1, #flip1 {
               padding: 5px;
               text-align: center;
               background-color: #008040;
               border: solid 1px #fafafa;
               border-radius: 10px;
             }

             #panel1 {
               padding: 10px;
               display: none;
               background-color: #9dffce;
             }
             </style>
            <div class="content">
               <div class="row">
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/about.svg"></div>
                        <div class="body">
                           <h5>Tentang Website</h5>
                           <div id="flip1" class="readmore" >Read More</div>
                           <div id="panel1">aplikasi ini dibuat untuk membantu perusahaan dalam proses penggajian karyawan</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                   $(document).ready(function(){
                     $("#flip2").click(function(){
                       $("#panel2").slideToggle("slow");
                     });
                   });
                   </script>
                   <style> 
                   #panel2, #flip2 {
                     padding: 5px;
                     text-align: center;
                     background-color: #006fdd;
                     border: solid 1px #ffffff;
                     border-radius: 10px;
                   }

                   #panel2 {
                     padding: 10px;
                     display: none;
                     background-color: #95caff;
                   }
                   </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/admin.svg"></div>
                        <div class="body">
                           <h5>Halaman Admin</h5>
                           <div id="flip2" class="readmore">Read More</div>
                           <div id="panel2">Administrator dapat menggunakan website untuk mengelola data pada website, halaman administrator terdapat dashboard / informasi singkat mengenai data data, terdapat data karyawan untuk pengelolaan karyawan, terdapat data jabatan untuk pengelolaan jabatan, terdapat data transaksi yang memiliki sub menu data absensi, setting potongan gaji, data gaji, terdapat data laporan yang memiliki sub menu laporan absensi, laporan gaji, cetak slip gaji.</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                   $(document).ready(function(){
                     $("#flip3").click(function(){
                       $("#panel3").slideToggle("slow");
                     });
                   });
                   </script>
                   <style> 
                   #panel3, #flip3 {
                     padding: 5px;
                     text-align: center;
                     background-color: #00BFD8;
                     border: solid 1px #ffffff;
                     border-radius: 10px;
                   }

                   #panel3 {
                     padding: 10px;
                     display: none;
                     background-color: #7befff;
                   }
                   </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/employe.svg"></div>
                        <div class="body">
                           <h5>Halaman Karyawan</h5>
                           <div id="flip3" class="readmore" >Read More</div>
                           <div id="panel3">Halaman karyawan terdapat informasi tentang karyawan dan cetak slip gaji.</div>
                        </div>
                     </div>
                  </div>

                  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
                  <script> 
                  $(document).ready(function(){
                     $("#flip4").click(function(){
                       $("#panel4").slideToggle("slow");
                     });
                  });
                  </script>
                  <style> 
                   #panel4, #flip4 {
                     padding: 5px;
                     text-align: center;
                     background-color: #ffb7b7;
                     border: solid 1px #ffffff;
                     border-radius: 10px;
                  }

                   #panel4 {
                     padding: 10px;
                     display: none;
                     background-color: #ffe6e6;
                  }
                  </style>
                  <div class="col-md-6 col-lg-4 col-xl-3 ">
                     <div class="card">
                        <div class="CardImage"><img src="<?php echo base_url(); ?>assets/img/others-fitur.svg"></div>
                        <div class="body">
                           <h5>Fitur Lainnya</h5>
                           <div id="flip4" class="readmore" >Read More</div>
                           <div id="panel4">Cetak slip gaji, lupa password, login karyawan</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Footer Section -->
      <div class="Footer" id="Footer">
         <div class="container">
            <div class="row">
               <div class="col-12 text-center my-3">
                  Copyright &copy; Budi Susmiati | Aplikasi Penggajian 2023 - All Rights Reserved
               </div>
            </div>
         </div>
      </div>
      <!-- Javascripts -->
      <script src="<?php echo base_url(); ?>assets/landing/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>assets/landing/js/bootstrap.js"></script>
      <script src="<?php echo base_url(); ?>assets/landing/js/script.js"></script>
   </body>
</html>