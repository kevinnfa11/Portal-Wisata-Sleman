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
                              
                                <li class="nav-item ">
                                    <a class="nav-link" href="/sejarah">Sejarah <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="/kuliner">Kuliner </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/rekreasi">Rekreasi</a>
                                </li>
                               
                                <li class="nav-item active">
                                    <a class="nav-link" href="/contact">Contact <span class="sr-only">(current)</span></a>
                                </li>
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
                        <h2>Contact Us</h2>
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
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcumb Area End ****** -->

    <!-- ****** Contatc Area Start ****** -->
            <!-- Contact Info Area Start -->
            <div class="contact-info-area section_padding_80_50">
                <div class="row">
            <!-- Contact Form  -->
            <div class="contact-form-area">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <div class="contact-form-sidebar item wow fadeInUpBig" data-wow-delay="0.3s" style="background-image: url(image/prambanan.jpg);">
                        </div>
                    </div>
                    <div class="col-6 col-md-7 item">
                        <div class="contact-form wow fadeInUpBig" data-wow-delay="0.6s">
                            <h2 class="contact-form-title mb-30">If You Have Any Question Contact Me Today !</h2>
                            <!-- Contact Form -->
                            <form action="/contact/post" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" id="contact-name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" id="contact-email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nomor" class="form-control" id="contact-website" placeholder="Nomor Telepon">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="komen" id="message" cols="30" rows="10" placeholder="Komentar..."></textarea>
                                </div>
                                
                                <button type="submit" class="btn contact-btn">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ****** Contact Area End ****** -->

    <!-- ****** Instagram Area Start ****** -->
       <!-- ****** Instagram Area Start ****** -->
       <div class="instargram_area owl-carousel section_padding_100_0 clearfix" id="portfolio">

<!--1 Instagram Item -->
<div class="instagram_gallery_item">
    <!-- Instagram Thumb -->
    <img src="image/instagram/2.jpg" alt="">
    <!-- Hover -->
    <div class="hover_overlay">
        <div class="yummy-table">
            <div class="yummy-table-cell">
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
        <div class="yummy-table">
            <div class="yummy-table-cell">
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
        <div class="yummy-table">
            <div class="yummy-table-cell">
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
        <div class="yummy-table">
            <div class="yummy-table-cell">
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
        <div class="yummy-table">
            <div class="yummy-table-cell">
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
        <div class="yummy-table">
            <div class="yummy-table-cell">
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
        <div class="yummy-table">
            <div class="yummy-table-cell">
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
        <div class="yummy-table">
            <div class="yummy-table-cell">
                <div class="follow-me text-center">
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i> Follow me</a>
                </div>
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
                              
                                <li class="nav-item ">
                                    <a class="nav-link" href="/sejarah">Sejarah </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="/kuliner">Kuliner </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/rekreasi">Rekreasi</a>
                                </li>
                               
                                <li class="nav-item active">
                                    <a class="nav-link" href="/contact">Contact <span class="sr-only">(current)</span></a>
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
                        <p>Copyright @2018 All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Menu Area End ****** -->

@endsection
