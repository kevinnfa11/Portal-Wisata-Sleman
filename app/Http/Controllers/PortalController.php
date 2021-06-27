<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Konten;
use App\Konten2;
use App\Content;
use App\Content2;
use App\Content3;
use App\Jogjabay;
use App\Kembangarum;
use App\Sindukusuma;
use App\Bluelagoon;
use App\Ratuboko;
use App\Prambanan;
use App\Monjali;
use File;

use Illuminate\Support\Facades\DB;


class PortalController extends Controller
{
	

	public function index()
		 {
		 	$data_prambanan = \App\Konten::all();
		 	return view ('prambanan', ['data_prambanan' => $data_prambanan]);
		 }   //

    public function create() {
		$contacts = Contact::all();
		return view('contact', compact('contacts'));
		 //
		}
	

	public function post(Request $request)
	{

		\App\Contact::create($request ->all());
		return redirect('/contact');
					
	}




//Sejarah Upload
	public function upload(){
		$content = Content::get();
		return view('sejarah2',['content' => $content]);
	}

	public function sejarah() {
		$content = Content::all();
		return view('sejarah', compact('content'));
		 //
		}

 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Content::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect('/admin/sejarah');

	}

	public function hapus($id){
	// hapus file
	$content = Content::where('id',$id)->first();
	File::delete('data_file/'.$content->file);
 
	// hapus data
	Content::where('id',$id)->delete();
 
	return redirect('/admin/sejarah');

		}


		public function edit($id)
	{
	// mengambil data pegawai berdasarkan id yang dipilih
	$contents = DB::table('contents')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editsejarah',['contents' => $contents]);
 
	}


	public function update(Request $request)
{
	// update data pegawai
	DB::table('contents')->where('id',$request->id)->update([
		'keterangan' => $request->keterangan,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/admin/sejarah');
}




















//Rekreasi Upload

	public function upload2(){
		$content2s = Content2::get();
		return view('rekreasi2',['content2s' => $content2s]);
	}


	public function rekreasi() {
		$content2s = Content2::all();
		return view('rekreasi', compact('content2s'));
		 //
		}
 
	public function proses_upload2(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 		

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Content2::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect('/admin/rekreasi');

	}

	public function hapus2($id){
	// hapus file
	$content2s = Content2::where('id',$id)->first();
	File::delete('data_file/'.$content2s->file);
 
	// hapus data
	Content2::where('id',$id)->delete();
 
	return redirect('/admin/rekreasi');

		}


		public function edit2($id)
	{
	// mengambil data pegawai berdasarkan id yang dipilih
	$content2s = DB::table('content2s')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editrekreasi',['content2s' => $content2s]);
 
	}


	public function update2(Request $request)
		{
	// update data content
	DB::table('content2s')->where('id',$request->id)->update([
		'keterangan' => $request->keterangan,
	]);
	// alihkan halaman ke halaman content
	return redirect('/admin/rekreasi');
		}















//Kuliner Upload

	public function upload3(){
		$content3s = Content3::get();
		return view('kuliner2',['content3s' => $content3s]);
	}


	public function kuliner() {
		$content3s = Content3::all();
		return view('kuliner', compact('content3s'));
		 //
		}
 
	public function proses_upload3(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 		

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Content3::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect('/admin/kuliner');

	}

	public function hapus3($id){
	// hapus file
	$content3s = Content3::where('id',$id)->first();
	File::delete('data_file/'.$content3s->file);
 
	// hapus data
	Content3::where('id',$id)->delete();
 
	return redirect('/admin/kuliner');

		}


		public function edit3($id)
	{
	// mengambil data pegawai berdasarkan id yang dipilih
	$content3s = DB::table('content3s')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editkuliner',['content3s' => $content3s]);
 
	}


	public function update3(Request $request)
		{
	// update data content
	DB::table('content3s')->where('id',$request->id)->update([
		'keterangan' => $request->keterangan,
	]);
	// alihkan halaman ke halaman content
	return redirect('/admin/kuliner');
		}




























		public function upload4(){
		$jogjabays = Jogjabay::get();
		return view('jogjabay2',['jogjabays' => $jogjabays]);
	}


	public function jogjabay() {
		$jogjabays = Jogjabay::all();
		return view('jogjabay', compact('jogjabays'));
		 //
		}
 
	public function proses_upload4(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 		

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Jogjabay::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect('/admin/jogjabay');

	}

	public function hapus4($id){
	// hapus file
	$jogjabays = Jogjabay::where('id',$id)->first();
	File::delete('data_file/'.$jogjabays->file);
 
	// hapus data
	Jogjabay::where('id',$id)->delete();
 
	return redirect('/admin/jogjabay');

		}


		public function edit4($id)
	{
	// mengambil data pegawai berdasarkan id yang dipilih
	$jogjabays = DB::table('jogjabays')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editjogjabay',['jogjabays' => $jogjabays]);
 
	}


	public function update4(Request $request)
		{
	// update data content
	DB::table('jogjabays')->where('id',$request->id)->update([
		'keterangan' => $request->keterangan,
	]);
	// alihkan halaman ke halaman content
	return redirect('/admin/jogjabay');
		}
























		public function upload5(){
		$kembangarums = Kembangarum::get();
		return view('kembang2',['kembangarums' => $kembangarums]);
	}


	public function kembang() {
		$kembangarums = Kembangarum::all();
		return view('kembang', compact('kembangarums'));
		 //
		}
 
	public function proses_upload5(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 		

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Kembangarum::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect('/admin/kembang');

	}

	public function hapus5($id){
	// hapus file
	$kembangarums = Kembangarum::where('id',$id)->first();
	File::delete('data_file/'.$kembangarums->file);
 
	// hapus data
	Kembangarum::where('id',$id)->delete();
 
	return redirect('/admin/kembang');

		}


		public function edit5($id)
	{
	// mengambil data pegawai berdasarkan id yang dipilih
	$kembangarums = DB::table('kembangarums')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('editkembang',['kembangarums' => $kembangarums]);
 
	}


	public function update5(Request $request)
		{
	// update data content
	DB::table('kembangarums')->where('id',$request->id)->update([
		'keterangan' => $request->keterangan,
	]);
	// alihkan halaman ke halaman content
	return redirect('/admin/kembang');
		}





















		public function upload6(){
		$sindukusumas = Sindukusuma::get();
		return view('sindukusuma2',['sindukusumas' => $sindukusumas]);
	}


	public function sindukusuma() {
		$sindukusumas = Sindukusuma::all();
		return view('sindukusuma', compact('sindukusumas'));
		 //
		}
 
	public function proses_upload6(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 		

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Sindukusuma::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect('/admin/sindukusuma');

	}

	public function hapus6($id){
	// hapus file
	$sindukusumas = Sindukusuma::where('id',$id)->first();
	File::delete('data_file/'.$sindukusumas->file);
 
	// hapus data
	Sindukusuma::where('id',$id)->delete();
 
	return redirect('/admin/sindukusuma');

		}


		public function edit6($id)
	{

	$sindukusumas = DB::table('sindukusumas')->where('id',$id)->get();
	
	return view('editsindukusuma',['sindukusumas' => $sindukusumas]);
 
	}


	public function update6(Request $request)
		{
	
	DB::table('sindukusumas')->where('id',$request->id)->update([
		'keterangan' => $request->keterangan,
	]);
	
	return redirect('/admin/sindukusuma');
		}





















		public function upload7(){
		$bluelagoons = Bluelagoon::get();
		return view('bluelagoon2',['bluelagoons' => $bluelagoons]);
	}


	public function bluelagoon() {
		$bluelagoons = Bluelagoon::all();
		return view('bluelagoon', compact('bluelagoons'));
		 //
		}
 
	public function proses_upload7(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 		

		
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Bluelagoon::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect('/admin/bluelagoon');

	}

	public function hapus7($id){

	$bluelagoons = Bluelagoon::where('id',$id)->first();
	File::delete('data_file/'.$bluelagoons->file);
 
	
	Bluelagoon::where('id',$id)->delete();
 
	return redirect('/admin/bluelagoon');

		}


		public function edit7($id)
	{

	$bluelagoons = DB::table('bluelagoons')->where('id',$id)->get();
	
	return view('editbluelagoon',['bluelagoons' => $bluelagoons]);
 
	}


	public function update7(Request $request)
		{
	
	DB::table('bluelagoons')->where('id',$request->id)->update([
		'keterangan' => $request->keterangan,
	]);
	
	return redirect('/admin/bluelagoons');
		}






























		public function sejarahubah() {
		$content = Content::all();
		return view('sejarahubah', compact('content'));
		 //
		}




		public function upload8(){
		$ratubokos = Ratuboko::get();
		return view('ratuboko2',['ratubokos' => $ratubokos]);
	}


	public function ratuboko() {
		$ratubokos = Ratuboko::all();
		return view('ratuboko', compact('ratubokos'));
		 //
		}
 
	public function proses_upload8(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 		

		
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Ratuboko::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect('/admin/ratuboko');

	}

	public function hapus8($id){

	$ratubokos = Ratuboko::where('id',$id)->first();
	File::delete('data_file/'.$ratubokos->file);
 
	
	Ratuboko::where('id',$id)->delete();
 
	return redirect('/admin/ratuboko');

		}


		public function edit8($id)
	{

	$ratubokos = DB::table('ratubokos')->where('id',$id)->get();
	
	return view('editratuboko',['ratubokos' => $ratubokos]);
 
	}


	public function update8(Request $request)
		{
	
	DB::table('ratubokos')->where('id',$request->id)->update([
		'keterangan' => $request->keterangan,
	]);
	
	return redirect('/admin/ratuboko');
		}





























		public function upload9(){
		$prambanans = Prambanan::get();
		return view('prambanan2',['prambanans' => $prambanans]);
	}


	public function prambanan() {
		$prambanans = Prambanan::all();
		return view('prambanan', compact('prambanans'));
		 //
		}
 
	public function proses_upload9(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 		

		
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Prambanan::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect('/admin/prambanan');

	}

	public function hapus9($id){

	$prambanans = Prambanan::where('id',$id)->first();
	File::delete('data_file/'.$prambanans->file);
 
	
	Prambanan::where('id',$id)->delete();
 
	return redirect('/admin/prambanan');

		}


		public function edit9($id)
	{

	$prambanans = DB::table('prambanans')->where('id',$id)->get();
	
	return view('editprambanan',['prambanans' => $prambanans]);
 
	}


	public function update9(Request $request)
		{
	
	DB::table('prambanans')->where('id',$request->id)->update([
		'keterangan' => $request->keterangan,
	]);
	
	return redirect('/admin/prambanan');
		}












				public function upload10(){
		$monjalis = Monjali::get();
		return view('monjali2',['monjalis' => $monjalis]);
	}


	public function monjali() {
		$monjalis = Monjali::all();
		return view('monjali', compact('monjalis'));
		 //
		}
 
	public function proses_upload10(Request $request){
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 		

		
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Monjali::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
 
		return redirect('/admin/monjali');

	}

	public function hapus10($id){

	$monjalis = Monjali::where('id',$id)->first();
	File::delete('data_file/'.$monjalis->file);
 
	
	Monjali::where('id',$id)->delete();
 
	return redirect('/admin/monjali');

		}


		public function edit10($id)
	{

	$monjalis = DB::table('monjalis')->where('id',$id)->get();
	
	return view('editmonjali',['monjalis' => $monjalis]);
 
	}


	public function update10(Request $request)
		{
	
	DB::table('monjalis')->where('id',$request->id)->update([
		'keterangan' => $request->keterangan,
	]);
	
	return redirect('/admin/monjali');
		}




		public function show($id){
    	$contents = \App\Content::find($id);
    	return view('sejarahshow',['contents'=>$contents]);
    }



}


