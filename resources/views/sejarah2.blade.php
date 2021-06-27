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


   
	<div class="row">
		<div class="container">
		
			<div class="col-lg-8 mx-auto my-5">	
			 <div class="card">
			 	<div class="card-header text-center bg-success text-white">Tambah Tempat Sejarah</div>
			 	<div class="card-body">
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="/admin/sejarah/proses" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group">
						<b>File Gambar</b><br/>
						<input type="file" name="file">
					</div>
 
					<div class="form-group">
						<b>Keterangan</b>
						<textarea class="form-control" name="keterangan"></textarea>
					</div>
 
					<input type="submit" value="Upload" class="btn bg-success text-white">
					<a href="/admin" class="btn bg-success text-white" tabindex="-1" role="button">Kembali</a>
				</form>
			</div>
			</div>

 <br>
 <br>
 <h4> Daftar Data Tempat Wisata </h4>
        <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th width="1%">File</th>
                            <th>Keterangan</th>
                            <th colspan="2" style="text-align: center;">OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($content as $g)
                        <tr>
                            <td><img width="150px" src="{{ url('/data_file/'.$g->file) }}"></td>
                            <td>{{$g->keterangan}}</td>
                            <td><a class="btn btn-danger" href="/admin/sejarah/hapus/{{ $g->id }}">HAPUS</a></td>
                            <td><a class="btn btn-success" href="/admin/sejarah/edit/{{ $g->id }}">Edit</a></td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection