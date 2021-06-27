@extends('layout/main')

@section('title','Portal Wisata Sleman by Firewall.Co')

@section('container')
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
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="/sejarah">Sejarah</a>
                                </li>
                                <li class="nav-item  ">
                                    <a class="nav-link" href="/kuliner">Kuliner </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/rekreasi">Rekreasi <span class="sr-only">(current)</span></a>
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


    <!-- ****** Breadcumb Area Start ****** -->
    <div class="breadcumb-area" style="background-image: url(image/kembangarum.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Rekreasi </h2>
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
                            <li class="breadcrumb-item"><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Rekreasi</li>
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
                                 @foreach($kembangarums as $g)
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
                                           
                                           
                                            <h6>Desa Wisata Kembang Arum</h6>
                                            
                                        </div>
                                        </a>
                                   <table>
                                      @foreach($kembangarums as $g)
                                    <tr>
                                        <td>{{$g->keterangan}}</td>
                                    </tr>
                                    @endforeach
                                  </table>
                                    <div class="container-fluid">
                                    <a href="#">
                                        <div class="widget-title text-center">
                                           
                                           
                                            <h6>Fasilitas</h6>
                                            
                                        </div>
                                        </a>
                        <div class="row">
                            <div class="col-sm-5">

                                 <img src="image/restoran.png"  style="width:35px;">
                                 <p>Restoran</p>
                            </div>
                            <div class="col-sm-5">
                                 <img src="image/parkir.png"  style="width:35px;">
                                 <p>Tempat Parkir</p>
                            </div>
                        </div>
                    </div>
                    <section class="welcome-post-sliders owl-carousel">

                    <div class="welcome-single-slide">
                <!-- Post Thumb -->
                    <img src="image/images2.jpg" alt="">
                <!-- Overlay Text -->
                     </div>
                     <div class="welcome-single-slide">
                <!-- Post Thumb -->
                    <img src="image/parkir.jpg" alt="">
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
                    <a href="#">
                                        <div class="widget-title text-center">
                                           
                                           
                                            <h6>Harga Tiket Masuk</h6>
                                            
                                        </div>
                                        </a>
                    <table class="table">
    <thead>
      <tr class="table-success">
        <th>No</th>
        <th>Jenis Kendaraan</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Parkir Mobil</td>
        <td>Rp.5.000</td>
      </tr>  
      <tr>
        <td>2</td>
        <td>Parkir Motor</td>
        <td>Rp.3.000</td>
      </tr> 
      </table>
      </div>  
      <div class="fb-comments" data-href="http://127.0.0.1:8001/kembang" data-width="" data-numposts="5"></div> 

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
                        <img src="image/alamat1.png"   style="width:30px;"  ><b> Alamat :</b>
                                       <p class="text-muted">Kembangarum 13, Donokerto, Turi, Wetan Kali, Donokerto, Kec. Turi, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55551
                                       </p>
                        <div class="map">
                            <a href="https://www.google.com/maps/place/Kembang+Arum+Tourism+Village/@-7.6538785,110.3710447,15z/data=!4m5!3m4!1s0x0:0x1d85349bbef2f8!8m2!3d-7.6560902!4d110.3771816"><img src="image/kembangmap.jpg" class="img-thumbnail"  style="width:250px;"> </a>
                        </div>


                        

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
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="/sejarah">Sejarah</a>
                                </li>
                                <li class="nav-item  ">
                                    <a class="nav-link" href="/kuliner">Kuliner </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="/rekreasi">Rekreasi <span class="sr-only">(current)</span></a>
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
            </div>
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