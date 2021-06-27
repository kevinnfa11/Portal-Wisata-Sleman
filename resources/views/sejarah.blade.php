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
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home </a>
                                </li>
                              
                                <li class="nav-item active">
                                    <a class="nav-link" href="/sejarah">Sejarah</a>
                                </li>
                                <li class="nav-item ">
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
    <div class="breadcumb-area" style="background-image: url(image/bg2.jpg);">
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

    <!-- ****** Archive Area Start ****** -->
    <section class="archive-area section_padding_80">
        <div class="container">
<div class="card">
    
    <div class="card-body" style="width: 800px">
        <table>
        <thead>
                            <tr>
                                <th style="width: 400px;" ></th>
                                <th></th>
                                
                            </tr>
                        </thead>
                    <tbody>
                        <tr>
                            <td>
                                 <div class="post-thumb">
                                    <img src="image/sidebar/2.jpg"  style="width: 350px" alt="">
                                 </div>
                                        
                            
                            
                            </td>
                            <td>
                                <a href="/ratuboko">
                                    <h4 class="post-headline">Melihat keindahan sunset dari Candi Ratu Boko </h4>
                                </a> 
                            </td>
                            
                        </tr>

                        <tr>
                            <td>
                                <div class="post-thumb">
                                    <img src="image/sidebar/prambanan.jpg" style="width: 350px" alt="">
                                </div>                            
                           
                            </td>
                                <td> 
                                    <a href="/prambanan">
                                        <h4 class="post-headline">Melihat peninggalan sejarah di pramabanan</h4>
                                    </a>
                                </td>
                            
                        </tr>

                        <tr>
                            <td>
                                <div class="post-thumb">
                                    <img src="image/monjali.jpeg"  style="width: 350px" alt="">
                                </div>                            
                            
                            </td>
                            <td>
                                <a href="/monjali">
                                    <h4 class="post-headline">Monumen Jogja Kembali</h4>
                                </a>
                            </td>
                            
                        </tr>


                         @foreach($content as $g)
                        <tr>
                            <td>
                                <div class="post-thumb"  style="width: 350px">
                                    <img  src="{{ url('/data_file/'.$g->file) }}">
                                </div>
                            </td>
                            <td>
                                <a href="/sejarah/{{$g->id}}/show">
                            <h4 class="post-headline">{{$g->keterangan}}</h4>
                            </td>
                            
                        </tr>
                        @endforeach
                
                    </tbody>
                </table>
    </div> 
    
  </div>
</div>
            

               
            </div>
        </div>
    </section>
    <!-- ****** Archive Area End ****** -->

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
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Home </a>
                                </li>
                              
                                <li class="nav-item active">
                                    <a class="nav-link" href="/sejarah">Sejarah</a>
                                </li>
                                <li class="nav-item">
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
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copy_right_text text-center">
                        <p>Copyright @2018 All rights reserved<i class="fa fa-heart-o" aria-hidden="true"></i>  <a href="#" target="_blank"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ****** Footer Menu Area End ****** -->
@endsection


