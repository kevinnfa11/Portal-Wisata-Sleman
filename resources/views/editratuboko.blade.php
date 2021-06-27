@extends('layouts.app')

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
 
  
  <br/>
  <br/>
  

  @foreach($ratubokos as $p)

<div class="container">
<form action="/admin/ratuboko/update" method="post">
    {{ csrf_field() }}
    <center>
<div class="card">
    <div class="card-header">Edit Data</div>
    <div class="card-body">
    <table >
         <thead>
            <tr>

              <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td>
            <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
            Keterangan <input type="textarea" required="required" name="keterangan" value="{{ $p->keterangan }}"> <br/>
</textarea>
            </td>

        </tr>
        
        <tr>

            <td><input type="submit" value="Simpan Data">
              <td><a href="/admin/ratuboko" class="btn btn-primary btn-lg float-right" tabindex="-1" role="button">Kembali</a></td>
          </td>
        </tr>

          
      </tbody>
    </table>
  </div>
</div>
</center>
  </form>
  @endforeach
</div>
</div>
@endsection