
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
                                <a href="/admin/ratuboko">
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
                                    <a href="/admin/prambanan">
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
                                <a href="/admin/monjali">
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
                                <a href="#">
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
    @endsection