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
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span> </a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="/sejarah">Sejarah</a>
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


            <!-- ****** Welcome Post Area Start ****** -->
            <section class="welcome-post-sliders owl-carousel">

            <!-- Single Slide -->
            <div class="welcome-single-slide">
                <!-- Post Thumb -->
                <img src="image/prambanan.jpg" alt="">
                <!-- Overlay Text -->
                <div class="project_title">
                    <div class="post-date-commnents d-flex">
                        <a href="#">May 19, 2017</a>
                        
                    </div>
                    <a href="/prambanan">
                        <h5>“Candi Prambanan</h5>
                    </a>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="welcome-single-slide">
                <!-- Post Thumb -->
                <img src="image/walpaper.jpg" alt="">
                <!-- Overlay Text -->
                <div class="project_title">
                    <div class="post-date-commnents d-flex">
                        <a href="#">May 19, 2017</a>
                        
                    </div>
                    <a href="#">
                        <h5>“Sleman</h5>
                    </a>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="welcome-single-slide">
                <!-- Post Thumb -->
                <img src="image/sindukusuma.jpg" alt="">
                <!-- Overlay Text -->
                <div class="project_title">
                    <div class="post-date-commnents d-flex">
                        <a href="#">May 19, 2017</a>
                        
                    </div>
                    <a href="/sindukusuma">
                        <h5>“Sindukusuma</h5>
                    </a>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="welcome-single-slide">
                <!-- Post Thumb -->
                <img src="image/blue.jpg" alt="">
                <!-- Overlay Text -->
                <div class="project_title">
                    <div class="post-date-commnents d-flex">
                        <a href="#">May 19, 2017</a>
                        
                    </div>
                    <a href="#">
                        <h5>“blue Lagoon</h5>
                    </a>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="welcome-single-slide">
                <!-- Post Thumb -->
                <img src="image/ijo.jpg" alt="">
                <!-- Overlay Text -->
                <div class="project_title">
                    <div class="post-date-commnents d-flex">
                        <a href="#">May 19, 2017</a>
                        
                    </div>
                    <a href="#">
                        <h5>“Candi ijo</h5>
                    </a>
                </div>
            </div>

            </section>
            <!-- ****** Welcome Area End ****** -->



     <!-- ****** Categories Area Start ****** -->
     <section class="categories_area clearfix" id="about">
    </section>
    <!-- ****** Categories Area End ****** -->



    <!-- ****** Blog Area Start ****** -->
    <section class="blog_area section_padding_0_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row">

                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="single-post wow fadeInUp" data-wow-delay=".2s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="image/jejamuran.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <a href="#">By aan</a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="post-date">
                                                <a href="#">May 19, 2017</a>
                                            </div>
                                        </div>

                                        <!-- Post Comment & Share Area -->
                                        <div class="post-comment-share-area d-flex">
                                            <!-- Post Favourite -->
                                            <div class="post-favourite">
                                                <a href="/kuliner">Kuliner</a>
                                            </div>
                                        </div>
                   
                                    </div>
                                    <a href="#">
                                        <h2 class="post-headline">jejamuran</h2>
                                    </a>
                                    <p>Resto Jejamuran, Tempat Makan di Jogia dengan Menu Serba Jamur</p>
                                    <a href="/jejamuran" class="read-more">Continue Reading..</a>
                                </div>
                            </div>
                        </div>

                        
                        
                        <!-- ******* List Blog Area Start ******* -->

                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="list-blog single-post d-sm-flex wow fadeInUpBig" data-wow-delay=".2s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="image/jogjabay.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <a href="#">Firewall</a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="post-date">
                                                <a href="#">May 19, 2017</a>
                                            </div>
                                        </div>
                                        <!-- Post Comment & Share Area -->
                                        <div class="post-comment-share-area d-flex">
                                            <!-- Post Favourite -->
                                            <div class="post-favourite">
                                                <a href="/sejarah">Sejarah</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <a href="/jogjabay">
                                        <h4 class="post-headline">JOGJA BAY Waterpark </h4>
                                    </a>
                                    <p>Waterpark yang berlokasi di Maguo Citiy, menawarkan beragam keseruan permainan air dengan berbagai wahana menarik.</p>
                                    <a href="/jogjabay" class="read-more">Continue Reading..</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="list-blog single-post d-sm-flex wow fadeInUpBig" data-wow-delay=".4s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="image/2.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <a href="#">Firewall</a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="post-date">
                                                <a href="#">May 19, 2017</a>
                                            </div>
                                        </div>
                                        <!-- Post Comment & Share Area -->
                                        <div class="post-comment-share-area d-flex">
                                            <!-- Post Favourite -->
                                            <div class="post-favourite">
                                                <a href="/sejarah">Sejarah</a>
                                            </div>
                                        </div>
                     
                                    </div>
                                    <a href="/ratuboko">
                                        <h4 class="post-headline">Candi Ratu Boko</h4>
                                    </a>
                                    <p>Situs Ratu Baka atau Candi Boko adalah situs purbakala yang merupakan kompleks sejumlah sisa bangunan yang berada kira-kira 3 km di sebelah selatan dari kompleks Candi Prambanan, 18 km sebelah timur Kota Yogyakarta atau 50 km barat daya Kota Surakarta, Jawa Tengah, Indonesia</p>
                                    <a href="/ratuboko" class="read-more">Continue Reading..</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="list-blog single-post d-sm-flex wow fadeInUpBig" data-wow-delay=".6s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="image/prambanan.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <a href="#">By Firewall</a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="post-date">
                                                <a href="#">May 19, 2017</a>
                                            </div>
                                        </div>
                                        <!-- Post Comment & Share Area -->
                                        <div class="post-comment-share-area d-flex">
                                            <!-- Post Favourite -->
                                            <div class="post-favourite">
                                                <a href="/sejarah">Sejarah</a>
                                            </div>
                                        </div>
                       
                                    </div>
                                    <a href="/prambanan">
                                        <h4 class="post-headline">Candi Prambanan</h4>
                                    </a>
                                    <p>Candi Prambanan adalah candi Hindu terbesar di Indonesia sekaligus salah satu candi yang terindah di Asia Tenggara. Menurut prasasti Siwagrha, candi ini mulai dibangun pada masa pemerintahan Rakai Pikatan (pertengahan abad ke-9) dari Kerajaan Mataram Kuno. Namun, oleh sebab yang masih misterius, pusat kerajaan pindah ke Jawa Timur di akhir abad ke-10.</p>
                                    <a href="/prambanan" class="read-more">Continue Reading..</a>
                                </div>
                            </div>
                        </div>

                        <!-- Single Post -->
                        <div class="col-12">
                            <div class="list-blog single-post d-sm-flex wow fadeInUpBig" data-wow-delay=".8s">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <img src="image/sindukusuma.jpg" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <div class="post-meta d-flex">
                                        <div class="post-author-date-area d-flex">
                                            <!-- Post Author -->
                                            <div class="post-author">
                                                <a href="#">By Firewall</a>
                                            </div>
                                            <!-- Post Date -->
                                            <div class="post-date">
                                                <a href="#">May 19, 2017</a>
                                            </div>
                                        </div>
                                        <!-- Post Comment & Share Area -->
                                        <div class="post-comment-share-area d-flex">
                                            <!-- Post Favourite -->
                                            <div class="post-favourite">
                                                <a href="/sejarah">Sejarah</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/sindukusuma">
                                        <h4 class="post-headline">Sindukusuma</h4>
                                    </a>
                                    <p>Buka setiap hari pukul 08.00 - 23.00 WIB Sindu Kusuma Edupark (SKE) merupakan sebuah destinasi rekreasi yang terletak di Jogjakarta. Di tujuh hektar kawasan taman yang selesai dibangun tahun 2014 ini, terdapat bermacam-macam wahana, baik wahana bermain maupun wahana belajar yang bisa dinikmati oleh semua anggota keluarga.</p>
                                    <a href="/sindukusuma" class="read-more">Continue Reading..</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ****** Blog Sidebar ****** -->
                <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">
                        <!-- Single Widget Area -->
                        <!-- <div class="single-widget-area about-me-widget text-center">
                            <div class="widget-title">
                                <h6>About Me</h6>
                            </div>
                            <div class="about-me-widget-thumb">
                                <img src="img/about-img/btrfly.jpg" alt="">
                            </div>
                            <h4 class="font-shadow-into-light">Dimas wahyu</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
 -->
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

                        <!-- Single Widget Area -->
                       <!--  <div class="single-widget-area add-widget text-center">
                            <div class="add-widget-area">
                                <img src="image/prambanan.jpg" alt="">
                                <div class="add-text">
                                    <div class="firewall-table">
                                        <div class="firewall-table-cell">
                                            <h2></h2>
                                            <p></p>
                                            <a href="#" class="add-btn">Visit Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Single Widget Area -->
                        <!-- <div class="single-widget-area newsletter-widget">
                            <div class="widget-title text-center">
                                <h6>Newsletter</h6>
                            </div>
                            <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                            <div class="newsletter-form">
                                <form action="#" method="post">
                                    <input type="email" name="newsletter-email" id="email" placeholder="Your email">
                                    <button type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Blog Area End ****** -->




    <!-- penggantian class -->




    <!-- ****** Instagram Area Start ****** -->
    <div class="instargram_area owl-carousel section_padding_100_0 clearfix" id="portfolio">

        <!--1 Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="image/instagram/2.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="firewall-table">
                    <div class="firewall-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="image/instagram/walpaper.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="firewall-table">
                    <div class="firewall-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="image/instagram/prambanan.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="firewall-table">
                    <div class="firewall-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--4 Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="image/instagram/rosella.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="firewall-table">
                    <div class="firewall-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 5Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="image/instagram/walpaper.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="firewall-table">
                    <div class="firewall-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="image/instagram/2.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="firewall-table">
                    <div class="firewall-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="image/instagram/walpaper.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="firewall-table">
                    <div class="firewall-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Instagram Item -->
        <div class="instagram_gallery_item">
            <!-- Instagram Thumb -->
            <img src="image/instagram/prambanan.jpg" alt="">
            <!-- Hover -->
            <div class="hover_overlay">
                <div class="firewall-table">
                    <div class="firewall-table-cell">
                        <div class="follow-me text-center">
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ****** Our Creative Portfolio Area End ****** -->


    <!-- ****** Footer Menu Area Start ****** -->
<footer class="footer_area">
<div class="col-12">
                    <div class="logo_area text-center">
                        <a href="/index" class="firewall-logo">Portal Wisata Sleman</a>
                    </div>
                </div>
            </div>
<div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#firewallfood-nav" aria-controls="firewallfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu</button>
                        <!-- Menu Area Start -->
                        <div class="collapse navbar-collapse justify-content-center" id="firewallfood-nav">
                            <ul class="navbar-nav" id="firewall-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span> </a>
                                </li>
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="/sejarah">Sejarah</a>
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