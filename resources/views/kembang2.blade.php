@extends('layouts.app')

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
    <!-- ****** Single Blog Area Start ****** -->
    <section class="single_blog_area section_padding_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row no-gutters">

                        <!-- Single Post -->
                        <div class="col-10 col-sm-11">
                            <div class="single-post">
                                <form action="/admin/kembang/proses" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
 
                    <div class="form-group">
                        <b>File Gambar</b><br/>
                        <input type="file" name="file">
                    </div>
 
                    <div class="form-group">
                        <b>Keterangan</b>
                        <textarea class="form-control" name="keterangan"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Upload</button>
                
                </form>
                </div>
                
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
                                    <table>
                                      @foreach($kembangarums as $g)
                                    <tr>
                                        <td>{{$g->keterangan}}</td>
                                        <td><a class="btn btn-danger" href="/admin/kembang/hapus/{{ $g->id }}">HAPUS</a></td>
                            <td><a class="btn btn-success" href="/admin/kembang/edit/{{ $g->id }}">Edit</a></td>
                                    </tr>
                                    @endforeach
                                  </table>
                                    

                                   

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</div>
   
<!-- ****** Footer Menu Area End ****** -->

@endsection