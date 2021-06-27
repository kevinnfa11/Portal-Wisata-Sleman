@extends('layout/main')

@section('title','Portal Wisata Sleman by Firewall.Co')

@section('container')
<?php
    $conn = new mysqli('localhost', 'root', '', 'portalwisata');

    if (isset($_POST['save'])) {
        $uID = $conn->real_escape_string($_POST['uID']);
        $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
        $ratedIndex++;

        if (!$uID) {
            $conn->query("INSERT INTO stars (rateIndex) VALUES ('$ratedIndex')");
            $sql = $conn->query("SELECT id FROM stars ORDER BY id DESC LIMIT 1");
            $uData = $sql->fetch_assoc();
            $uID = $uData['id'];
        } else
            $conn->query("UPDATE stars SET rateIndex='$ratedIndex' WHERE id='$uID'");

        exit(json_encode(array('id' => $uID)));
    }

    
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#firewallfood-nav" aria-controls="firewallfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="firewallfood-nav">
                            <ul class="navbar-nav" id="firewall-nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="/">Home  </a>
                                </li>
                              
                                <li class="nav-item active">
                                    <a class="nav-link" href="/sejarah">Sejarah <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="/kuliner">Kuliner </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/rekreasi">Rekreasi</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contact</a>
                                </li>
<!-- 
                                     <li class="nav-item">
            @if (Route::has('login'))
                    @auth
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    </li>
                    @else
                     <li class="nav-item">
                        <a  class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </li> -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>


    <!-- ****** Breadcumb Area Start ****** -->
    <div class="breadcumb-area" style="background-image: url(image/prambanan.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Sejarah</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcumb-nav">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Sejarah</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->

    <!-- ****** Single Blog Area Start ****** -->
    <section class="single_blog_area section_padding_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row no-gutters">

                        

                        <!-- Single Post -->
                        <div class="col-10 col-sm-11">
                            <div class="single-post">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <table>
                                 @foreach($prambanans as $g)
                                     <tr>
                                    <td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
                                
                            </tr>
                            @endforeach
                                </table>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            
                                        </div>
                                        
                                    </div>
                                    <a href="#">
                                    <div class="widget-title text-center">
                                        <h6>Prambanan</h6>
                                    </div>
                                    </a>
                                    <table>
                                      @foreach($prambanans as $g)
                                    <tr>
                                        <td>{{$g->keterangan}}</td>
                                    </tr>
                                    @endforeach
                                  </table>

<div class="container-fluid">
                        <div class="widget-title text-center">
                                        <h6>Fasilitas</h6>
                                    </div>
                        
                        <div class="row">
                            <div class="col-sm-5">
                                 <img src="image/toilet.png"  style="width:35px;">
                                 <p>toilet</p>
     
                                 <img src="image/Wifi.png"  style="width:35px;">
                                 <p>Wifi</p>
                                 <img src="image/restoran.png"  style="width:35px;">
                                 <p>Restoran</p>
                            </div>
                            <div class="col-sm-5">
                                 <img src="image/masjid.png"  style="width:30px;">   
                                 <p>Masjid</p>
                                 <img src="image/parkir.png"  style="width:35px;">
                                 <p>Tempat Parkir</p>
                            </div>
                        </div>
                    </div>
                    <section class="welcome-post-sliders owl-carousel">

                    <div class="welcome-single-slide">
                <!-- Post Thumb -->
                    <img src="image/wc.jpeg" alt="">
                <!-- Overlay Text -->
                     </div>

                     <div class="welcome-single-slide">
                <!-- Post Thumb -->
                    <img src="image/mushola.jpg" alt="">
                <!-- Overlay Text -->
                     </div>
                     <div class="welcome-single-slide">
                <!-- Post Thumb -->
                    <img src="image/restoran.jpg" alt="">
                <!-- Overlay Text -->
                     </div>
                     </section>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

                    <br>
                    <!--Harga tiket -->
                    <div class="harga">
                    <div class="widget-title text-center">
                                        <h6>Harga Tiket Masuk</h6>
                                    </div>
                    
                    <table class="table">
    <thead>
      <tr class="table-success">
        <th>No</th>
        <th>Umur</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Dibawah 10 tahun</td>
        <td>Rp.12.500</td>
      </tr>  
      <tr>
        <td>2</td>
        <td>Dewasa</td>
        <td>Rp.30.000</td>
      </tr> 
      </table>
      </div>  
      <div class="fb-comments" data-href="http://127.0.0.1:8000/prambanan" data-width="" data-numposts="5"></div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">
                        <!-- Single Widget Area -->
                        <div class="single-widget-area popular-post-widget">
                            <div class="widget-title text-center">
                                <h6>Populer Post</h6>
                            </div>

                            <!-- Single Popular Post -->
                            <div class="single-populer-post d-flex">
                                <img src="image/sidebar/2.jpg" alt="">
                                <div class="post-content">
                                    <a href="/ratuboko">
                                        <h6>Melihat Keindahan Candi Ratu Boko</h6>
                                    </a>
                                    <p>Tuesday, October 3, 2019</p>
                                </div>
                            </div>
                            
                            
                            <!-- Single Popular Post -->
                            <div class="single-populer-post d-flex">
                                <img src="image/sidebar/kembangarum.jpg" alt="">
                                <div class="post-content">
                                    <a href="/kembang">
                                        <h6>Mengintip Keindahan Wisata Kembang Arum di Sleman </h6>
                                    </a>
                                    <p>Tuesday, October 3, 2019</p>
                                </div>
                            </div>
                            <!-- Single Popular Post -->
                            <div class="single-populer-post d-flex">
                                <img src="image/sidebar/prambanan.jpg" alt="">
                                <div class="post-content">
                                    <a href="/prambanan">
                                        <h6>Ini Dia, Candi Terindah di Prambanan</h6>
                                    </a>
                                    <p>Tuesday, October 3, 2019</p>
                                </div>
                            </div>
                            <!-- Single Popular Post -->
                            <div class="single-populer-post d-flex">
                                <img src="image/sidebar/jogjabay.jpg" alt="">
                                <div class="post-content">
                                    <a href="/jogjabay">
                                        <h6>Inilah Salah Satu Waterpark Terbesar di Sleman</h6>
                                    </a>
                                    <p>Tuesday, October 3, 2017</p>
                                </div>
                            </div>
                        </div>

                        <div class="map">
                        <img src="image/alamat1.png"   style="width:30px;"  ><b> Alamat :</b>
                                       <p > Jl. Pramuka No.53 Pandowoharjo Sleman, Yogyakarta, Indonesia 
                                       </p>
                        <a href="https://www.google.com/maps/place/Jejamuran/@-7.705414,110.361254,15z/data=!4m5!3m4!1s0x2e7a5f4b00000001:0xb991824588eb34e1!8m2!3d-7.7054152!4d110.3612548"><img src="image/jejamuranmap.jpg" class="img-thumbnail"  style="width:250px;"> </a>
                        </div>


                            <div align="center" style="background: #255; padding: 10px;color:white;">
        <i class="fa fa-star fa-2x" data-index="0"></i>
        <i class="fa fa-star fa-2x" data-index="1"></i>
        <i class="fa fa-star fa-2x" data-index="2"></i>
        <i class="fa fa-star fa-2x" data-index="3"></i>
        <i class="fa fa-star fa-2x" data-index="4"></i>
        <br><br>
        
            </div>
            <script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script>
        var ratedIndex = -1, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            if (localStorage.getItem('ratedIndex') != null) {
                setStars(parseInt(localStorage.getItem('ratedIndex')));
                uID = localStorage.getItem('uID');
            }

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               localStorage.setItem('ratedIndex', ratedIndex);
               saveToTheDB();
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        function saveToTheDB() {
            $.ajax({
               url: "http://localhost:8000/prambanan",
               method: "POST",
               dataType: 'json',
               data: {
                   save: 1,
                   uID: uID,
                   ratedIndex: ratedIndex
               }, success: function (r) {
                    uID = r.id;
                    localStorage.setItem('uID', uID);
               }
            });
        }

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'green');
        }

        function resetStarColors() {
            $('.fa-star').css('color', 'white');
        }
    </script>
      <!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4423943,4,28,115,60,00011111']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4423943&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->
                    </div>
                   
                </div>
               
            </div>
            
        </div>
    </section>
    <!-- ****** Single Blog Area End ****** -->

   <!-- ****** Instagram Area Start ****** -->
   <div class="instargram_area owl-carousel section_padding_100_0 clearfix" id="portfolio">

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- bottom image -->
    <img src="image/instagram/2.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- bottom image -->
    <img src="image/instagram/walpaper.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- bottom image -->
    <img src="image/instagram/prambanan.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- bottom image-->
    <img src="image/instagram/rosella.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- buttom image -->
    <img src="image/instagram/walpaper.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- bottom image -->
    <img src="image/instagram/2.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom Item -->
<div class="instagram_gallery_item">
    <!-- bottom image -->
    <img src="image/instagram/walpaper.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- bottom image -->
<div class="instagram_gallery_item">
    <!-- bottom image -->
    <img src="image/instagram/prambanan.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="firewall-table">
            <div class="firewall-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> firewall</a>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<!-- ****** Our Creative Portfolio Area End ****** -->



<!-- ****** Footer Menu Area Start ****** -->
<footer class="footer_area">
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="footer-content">
                <!-- Logo Area Start -->
                <div class="footer-logo-area text-center">
                    <a href="index.html" class="firewall-logo">Portal Wisata Sleman</a>
                </div>
                <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#firewallfood-nav" aria-controls="firewallfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="firewallfood-nav">
                            <ul class="navbar-nav" id="firewall-nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="/">Home  </a>
                                </li>
                              
                                <li class="nav-item active">
                                    <a class="nav-link" href="/sejarah">Sejarah <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="/kuliner">Kuliner </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/rekreasi">Rekreasi</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <!-- Copywrite Text -->
            <div class="copy_right_text text-center">
                <p>Copyright @2018 All rights reserved <i class="fa fa-heart-o" aria-hidden="true"></i></p>
            </div>
        </div>
    </div>
</div>
</footer>

<!-- ****** Footer Menu Area End ****** -->

@endsection