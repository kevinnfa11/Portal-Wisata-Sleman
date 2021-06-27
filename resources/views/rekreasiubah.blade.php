@extends('layouts.app')
@extends('layout/main')
@section('title','Portal Wisata Sleman by Firewall.Co')
@section('content')

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


<div class="sidenav">
  <a href="/admin">Home</a>
  <a href="/admin/sejarah">Tambah Sejarah</a>
  <a href="/admin/rekreasi">Tambah Rekreasi</a>
  <a href="/admin/kuliner">Tambah Kuliner</a>
  <div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Ubah Konten
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="/sejarahedit">Ubah Konten Sejarah</a>
    <a class="dropdown-item" href="/kulineredit">Ubah Konten Kuliner</a>
    <a class="dropdown-item" href="/rekreasiedit">Ubah Konten Rekreasi</a>
  </div>
</div>
</div>

<div class="main">
  <section class="archive-area section_padding_80">
        <div class="container">
            <div class="row">


  <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post wow fadeInUp" data-wow-delay="0.3s">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="image/sidebar/sindukusuma.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-meta d-flex">
                                <div class="post-author-date-area d-flex">
                                    <!-- Post Author -->
                                    <div class="post-author">
                                        <a href="#">By Marian</a>
                                    </div>
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">May 19, 2019</a>
                                    </div>
                                </div>
                                <!-- Post Comment & Share Area -->
                                <div class="post-comment-share-area d-flex">
                                    
                                </div>
                            </div>
                            <a href="/admin/sindukusuma">
                                <h4 class="post-headline">Menikmati weekend bersama keluarga di Sindukusuma </h4>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Post -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="image/kembangarum.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-meta d-flex">
                                <div class="post-author-date-area d-flex">
                                    <!-- Post Author -->
                                    <div class="post-author">
                                        <a href="#">By Marian</a>
                                    </div>
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">May 19, 2019</a>
                                    </div>
                                </div>
                                <!-- Post Comment & Share Area -->
                                <div class="post-comment-share-area d-flex">
                                    <!-- Post Favourite -->
                                    
                                </div>
                            </div>
                            <a href="/admin/kembang">
                                <h4 class="post-headline">melihat keindahan alam di kembang arum</h4>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Single Post -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post wow fadeInUp" data-wow-delay="0.5s">
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
                                        <a href="#">By umar</a>
                                    </div>
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">november 1, 2019</a>
                                    </div>
                                </div>
                                <!-- Post Comment & Share Area -->
                                <div class="post-comment-share-area d-flex">
                                    <!-- Post Favourite -->
                                
                                </div>
                            </div>
                            <a href="/admin/jogjabay">
                                <h4 class="post-headline">pengan seru seruan bermain air, Jogjabay</h4>
                            </a>
                        </div>
                    </div>
                </div>

                
                <!-- Single Post -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-post wow fadeInUp" data-wow-delay="0.7s">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <img src="image/blue.jpg" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-meta d-flex">
                                <div class="post-author-date-area d-flex">
                                    <!-- Post Author -->
                                    <div class="post-author">
                                        <a href="#">By anto</a>
                                    </div>
                                    <!-- Post Date -->
                                    <div class="post-date">
                                        <a href="#">oktober 19, 2019</a>
                                    </div>
                                </div>
                                <!-- Post Comment & Share Area -->
                                <div class="post-comment-share-area d-flex">
                                    <!-- Post Favourite -->
                                   
                                </div>
                            </div>
                            <a href="/admin/bluelagoon">
                                <h4 class="post-headline">Blue Lagoon</h4>
                            </a>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section>

</div>
   
@endsection