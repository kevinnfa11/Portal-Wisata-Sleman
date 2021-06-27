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
                                <li class="nav-item active ">
                                    <a class="nav-link" href="/kuliner">Kuliner <span class="sr-only">(current)</span></a>
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



    <!-- ****** Breadcumb Area Start ****** -->
    <div class="breadcumb-area" style="background-image: url(image/jejamuran.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="bradcumb-title text-center">
                        <h2>Kuliner</h2>
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
                            
                            <li class="breadcrumb-item active" aria-current="page">Kuliner</li>
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
                                
                                <div class="post-content">
                                    
                                   
                                
                                    
                                    
                            <!-- Photo Grid -->
                                    <div class="rowkuliner"> 
                                        <div class="columnkuliner">
                                        
                                             <img src="image/rosella1.jpg" style="width:100%">
                                         
                                             <img src="image/rosella2.jpg" style="width:100%">
                                        </div>

                                        <div class="columnkuliner">
                                            <img src="image/rosella3.jpg" style="width:100%">
                                            <img src="image/rosella4.png" style="width:100%">
                                         
                                        </div>
                                       
                                    </div>
                                         <br>
                                         <br>

                                         <a href="#">
                                        <div class="widget-title text-center">
                                           
                                           
                                            <h6>Rosella Cafe</h6>
                                            
                                        </div>
                                        </a>
                                         
                                <div class="deskripsi">
                                   
                                    

                                    <img src="image/jam1.png"  style="width:30px;" ><b> Jam Buka :</b>
                                        <p>  Setiap hari   06.00 - 22.00 
                                        </p>
                                    <b>Makanan & Masakan</b>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <p>Rendang</p>
                                            <p>Ayam Goreng</p>
                                            <p>Nasi Goreng</p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p>Ikan</p>
                                            <p>Pasta</p>
                                            <p>Sup</p>
                                        </div>
                                    </div>
                                    <img src="image/telpon.png"  style="width:30px;" ><b>Nomor Telpon</b>
                                    <p class="text-primary">+622745306144</p>
                                </div>
                                <!--Fasilitas -->
                                <a href="#">
                                        <div class="widget-title text-center">
                                           
                                           
                                            <h6>Fasilitas</h6>
                                            
                                        </div>
                                        </a>
                    <div class="container-fluid">
                       
                        <div class="row">
                            <div class="col-sm-5">
                                 <img src="image/toilet.png"  style="width:28px;">
                                 toilet
                                 <br>
                                 <br>
                                 <img src="image/Wifi.png"  style="width:35px;">
                                 Wifi
                                 <br>
                                 <br>
                                 <img src="image/reservasi.png"  style="width:35px;">
                                 Tempat Reservasi
                                 <br>
                                 <br>
                            </div>
                            <div class="col-sm-5">
                                 <img src="image/kredit.png"  style="width:35px;">
                                 Terima Kredit
                                 <br>
                                 <br>
                                 <img src="image/parkir.png"  style="width:35px;">
                                 Tempat Parkir
                                 <br>
                                 <br>
                                 <img src="image/merokok.png"  style="width:35px;">
                                 Area Merokok
                                 <br>
                                 <br>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <section class="welcome-post-sliders owl-carousel">

                    <div class="welcome-single-slide">
               
                        <img src="image/wc.jpeg" alt="">
              
                    </div>
                    <div class="welcome-single-slide">
                        <img src="image/mushola.jpg" alt="">
               
                    </div>    
                    <div class="welcome-single-slide">
                        <img src="image/parkir.jpg" alt="">
               
                    </div>                    
                    </section>
                    <br>
                    <br>
                    <br>

                    <div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>
<div class="fb-comments" data-href="http://127.0.0.1:8001/rosella" data-width="" data-numposts="5"></div>

                    <br>
                                                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

              
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
                                        <p > Alamanda Yogyakarta Villas, Adventure & Pool 
                                        </p>
                            <a href="https://www.google.com/maps/place/Rosella+Easy+Dining+Restaurant+Yogyakarta/@-7.7489851,110.3482823,15z/data=!4m5!3m4!1s0x2e7a588ea3d10b01:0xaf8dd0b73ec0a25c!8m2!3d-7.7489854!4d110.3482836"><img src="image/rosellamap.jpg" class="img-thumbnail" style="width:250px;"> </a>
                        </div>
                     </div>
                       
                     
                      
                    </div>
                </div>
                
        </div>
    </section>
  
   <!-- ****** bottom start ****** -->
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
                                <li class="nav-item active ">
                                    <a class="nav-link" href="/kuliner">Kuliner <span class="sr-only">(current)</span></a>
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
                <!-- Menu Area Start -->
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#firewallfood-footer-nav" aria-controls="firewallfood-footer-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                   <!-- Menu Area Start -->
                   
                </nav>
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

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("columnkuliner");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)

</script>
<!-- ****** Footer Menu Area End ****** -->

@endsection