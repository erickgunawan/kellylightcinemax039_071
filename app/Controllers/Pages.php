<?php namespace App\Controllers;

use App\Models\BioskopModel;
use App\Models\FilmModel;
use App\Models\CinemaModel;
// use App\Models\AuthModel;
use App\Models\TransaksiModel;

class Pages extends BaseController
{
	public function __construct() {
		$this->film = new FilmModel();
		$this->user = new BioskopModel();
		helper('form');
		$this->cinema = new CinemaModel();
		$this->transaksi = new TransaksiModel();
		// $this->auth = new AuthModel();
	}
	public function home()
	{
		$data['film'] = $this->film->getFilm();
		echo view('layout/header');
		echo view('pages/home',$data);
		echo view('layout/footer');
	}
	// public function homeuser()
	// {
	// 	echo view('layout/header');
	// 	echo view('pages/homeuser');
	// 	echo view('layout/footer');
	// }

	public function theatre()
	{
		echo view('layout/header');
		echo view('pages/theatre');
		echo view('layout/footer');
	}

	public function movie($id)
	{
		$data['film'] = $this->film->getFilm($id)[0];
		// dd($data);
		echo view('layout/header');
		echo view('pages/movie',$data);
		echo view('layout/footer');
	}

	public function movie1()
	{
		echo view('layout/header');
		echo view('pages/movie1');
		echo view('layout/footer');	
	}

	public function movie2()
	{
		echo view('layout/header');
		echo view('pages/movie2');
		echo view('layout/footer');	
	}

	public function about()
	{
		echo view('layout/header');
		echo view('pages/about');
		echo view('layout/footer');
	}

	public function book($id)
	{
		// $this->load->model('FilmModel');
		// $datacinema = ['cinema'] = $this->cinema->getCinema($id);
		$data['film'] = $this->film->getFilm($id);
		// dd($data);
		echo view('layout/header');
		echo view('pages/book',$data);
		echo view('layout/footer');
	}

	public function book_movie($id)
	{
		$data['cinema'] =$this->cinema->getCinema();
		// $data['users'] = $this->
		$data['film'] = $this->film->getFilm($id)[0];
		// dd($data);
		echo view('layout/header');
		echo view('pages/book',$data);
		echo view('layout/footer');
	}

	public function terimakasih()
	{
		// $data['transaksi'] =$this->transaksi->getTransaksi($id)[0];
		echo view('layout/header');
		echo view('pages/terimakasih');
		echo view('layout/footer');
	}

	public function riwayat()
	{
		$data['transaksi'] = $this->transaksi->riwayat_transaksi(user()->id);
		// dd($data);
		// $data['film'] = $this->film->getFilm($id)[0];
		echo view('layout/header');
		echo view('pages/tiket',$data);
		echo view('layout/footer');
	}

// public function tiketprint($id)
// 	{
// 		$data['transaksi'] = $this->transaksi->riwayat_transaksi($id);
// 		// $data['film'] = $this->film->getFilm($id)[0];
// 		echo view('layout/header');
// 		echo view('pages/tiket',$data);
// 		echo view('layout/footer');
// 	}

	public function register()
	{
		echo view('layout/header');
		echo view('pages/register');
		echo view('layout/footer');
	}

	public function user()
	{
		$data['users'] = $this->user->getUsers();
		echo view('layout/headeradmin');
		// echo view('pages/admin/user');
		echo view('pages/user',$data);
		echo view('layout/footer');
	}

	public function adminfilm()
	{
		$data['film'] = $this->film->getFilm();
    	// dd($data);
		echo view('layout/headeradmin');
		echo view('pages/adminfilm',$data);
		echo view('layout/footer');
	}


	public function admintransaksi()
	{
		$data['transaksi'] = $this->transaksi->getTransaksi();
		echo view('layout/headeradmin');
		echo view('pages/admintransaksi',$data);
		echo view('layout/footer');
	}


	public function delete_transaksi($id)
	{
		// Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
		$hapus = $this->transaksi->delete_transaksi($id);

		// Jika berhasil melakukan hapus
		if ($hapus) {
			// Redirect ke halaman product
			return redirect()->to(base_url('/admintransaksi'));
}
}

	public function store()
	{
		// Mengambil value dari form dengan method POST
		$id = $this->request->getPost('id');
		$nama = $this->request->getPost('nama');
		$email = $this->request->getPost('email');
		$password = $this->request->getPost('password');
		$nohp = $this->request->getPost('nohp');

    	// Membuat array collection yang disiapkan untuk insert ke table
		$data = [
			'id' => $id,
			'nama' => $nama,
			'nohp' => $nohp,
			'email' => $email,
			'password' => $password,
		];

		/* 
		Membuat variabel simpan yang isinya merupakan memanggil function 
		insert_product dan membawa parameter data 
		*/
		$simpan = $this->user->insert_data($data);

		// Jika simpan berhasil, maka ...
		if ($simpan) {
			// Redirect halaman ke product
			return redirect()->to(base_url('/pages'));
		}
	}



	public function delete($id)
	{
		// Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
		$hapus = $this->user->delete_data($id);

		// Jika berhasil melakukan hapus
		if ($hapus) {
			// Redirect ke halaman product
			return redirect()->to(base_url('/user'));
		}
	//--------------------------------------------------------------------
	}

	public function addfilm()
	{
		echo view("layout/headeradmin");
		echo view("pages/addfilm");
		echo view("layout/footer");
	}


	public function film_add()
	{
		$post = $this->request->getPost();
		$get = $this->request->getGet();

		// dd($this->request->getVar());

		if ($this->request->getMethod() !== 'post') {
			return redirect()->to(base_url('/pages/adminfilm?status=danger&message=Film+Gagal+ditambahh'));
		}

		$validated = $this->validate([
			'poster' => 'uploaded[poster]|mime_in[poster,image/jpg,image/jpeg,image/gif,image/png]|max_size[poster,4096]'
		]);

		if ($validated == FALSE) {

   // Kembali ke function index supaya membawa data uploads dan validasi
			return redirect()->to(base_url('/pages/adminfilm?status=danger&message=Produk+Gagal+ditambahhh'));
		} else {

			$avatar = $this->request->getFile('poster');
			$avatar->move(ROOTPATH . 'public/img/poster/');
			// dd($post);
			$data = [
				'nama_film' => $post['nama_film'],
				'cast' => $post['cast'],
				'direktor' => $post['direktor'],
				'durasi' => $post['durasi'],
				'harga' => $post['harga'],
				'poster' => '/img/poster/' . $avatar->getName(),
				'sinopsis' => $post['sinopsis']
			];

			if ($this->film->insert_film($data)) {
				return redirect()->to(base_url('/pages/adminfilm?status=success&message=Produk+Berhasil+ditambah'));
			} else {
				return redirect()->to(base_url('/pages/adminfilm?status=danger&message=Produk+Gagal+ditambah'));
			}
		}
	}
	public function delete_film($id)
	{
		// Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
		$hapus = $this->film->delete_film($id);

		// Jika berhasil melakukan hapus
		if ($hapus) {
			// Redirect ke halaman product
			return redirect()->to(base_url('/adminfilm'));
		}

	}


	public function cinemaadmin()
	{
		$data['cinema'] = $this->cinema->getCinema();
		echo view("layout/headeradmin");
		echo view("pages/cinemaadmin",$data);
		echo view("layout/footer");
	}

	public function cinemaedit($id)
	{
		$data['cinema'] = $this->cinema->getCinema($id)[0];
		echo view("layout/headeradmin");
		echo view("pages/cinemaedit",$data);
		echo view("layout/footer");
	}

	public function cinema_update()
	{
		$post = $this->request->getPost();
		$get = $this->request->getGet();

		if ($this->request->getMethod() !== 'post') {
			return redirect()->to(base_url('/pages/cinemaadmin?status=danger&message=Produk+Gagal+diperbaharui'));
		}

		$validated = $this->validate([
			'foto' => 'uploaded[foto]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto,4096]'
		]);

		if ($validated == FALSE) {
			$data = [
				'nama_cinema' => $post['nama_cinema'],
				'theatre' => $post['theatre']
				
			];
		} else {

			$avatar = $this->request->getFile('foto');
			$avatar->move(ROOTPATH . 'img/theatre/' . $get['id_cinema'] . '/');

			$data = [
				'nama_cinema' => $post['nama_cinema'],
				'theatre' => $post['theatre'],
				'foto' => '/img/theatre/' . $avatar->getName()
				
			];
		}

		if ($this->cinema->update_cinema($data, $get['id_cinema'])) {
			return redirect()->to(base_url('/pages/cinemaadmin?status=success&message=Produk+Berhasil+diperbaharui'));
		} else {
			return redirect()->to(base_url('/pages/cinemaadmin?status=danger&message=Produk+Gagal+diperbaharui'));
		}
	}

	public function delete_cinema($id)
	{
		// Memanggil function delete_product() dengan parameter $id di dalam ProductModel dan menampungnya di variabel hapus
		$hapus = $this->film->delete_cinema($id);

		// Jika berhasil melakukan hapus
		if ($hapus) {
			// Redirect ke halaman product
			return redirect()->to(base_url('/cinemaadmin'));
		}
	}
	




	public function editfilm($id)
	{
		$data['film'] = $this->film->getFilm($id)[0];
		// dd($data);
		echo view("layout/headeradmin");
		echo view("pages/editfilm",$data);
		echo view("layout/footer");
	}



	public function film_update()
	{
		$post = $this->request->getPost();
		$get = $this->request->getGet();

		if ($this->request->getMethod() !== 'post') {
			return redirect()->to(base_url('/pages/adminfilm?status=danger&message=Produk+Gagal+diperbaharui'));
		}

		$validated = $this->validate([
			'poster' => 'uploaded[poster]|mime_in[foto,image/jpg,image/jpeg,image/gif,image/png]|max_size[poster,4096]'
		]);

		if ($validated == FALSE) {
			$data = [
				'nama_film' => $post['nama_film'],
				'cast' => $post['cast'],
				'direktor' => $post['direktor'],
				'durasi' => $post['durasi'],
				'harga' => $post['harga'],
				// 'poster' => '/img/poster/' . $avatar->getName(),
				'sinopsis' => $post['sinopsis']
			];
		} else {

			$avatar = $this->request->getFile('poster');
			$avatar->move(ROOTPATH . 'img/poster/' . $get['id_film'] . '/');

			$data = [
				'nama_film' => $post['nama_film'],
				'cast' => $post['cast'],
				'direktor' => $post['direktor'],
				'durasi' => $post['durasi'],
				'harga' => $post['harga'],
				'poster' => '/img/poster/' . $avatar->getName(),
				'sinopsis' => $post['sinopsis']
			];
		}

		if ($this->film->update_film($data, $get['id_film'])) {
			return redirect()->to(base_url('/pages/adminfilm?status=success&message=Produk+Berhasil+diperbaharui'));
		} else {
			return redirect()->to(base_url('/pages/adminfilm?status=danger&message=Produk+Gagal+diperbaharui'));
		}
	}


	// public function login(){
	// 	$model = new AuthModel;
	// 	$table = 'user';
	// 	$email = $this->request->getPost('email');
	// 	$password = $this->request->getPost('password');

	// 	$row = $model->get_data_login($email,$table);
	// 	if ($row == NULL){
	// 		session()->setFlashdata('pesan','email anda salah');
	// 		return redirect()->to('/');
	// 	}
	// 	if($password = $row->password)
	// 	{
	// 	// if (password_verify($password,$row->password)){
	// 	// 	$data = array(
	// 	// 		'log' => TRUE,
	// 	// 		'nama' => $row->nama,
	// 	// 		'email' => $row->email,
	// 	// 	);

	// 		// session()->set($data);
	// 		session()->setFlashdata('pesan','berhasil');
	// 		return redirect()->to(base_url('/pages/homeuser'));
	// 	}

	// 		session()->setFlashdata('pesan','password salah');
	// 		return redirect()->to(base_url('/pages/homeuser'));



	public function transaksi_add()
	{

		// Mengambil value dari form dengan method POST
		$id_transaksi = $this->request->getPost('id_transaksi');
		$pembayaran = $this->request->getPost('pembayaran');
		$id = $this->request->getPost('id');
		$username = $this->request->getPost('username');
		$id_film = $this->request->getPost('id_film');
		$nama_film = $this->request->getPost('nama_film');
		// $id_cinema = $this->request->getPost('id_cinema');
		$nama_cinema = $this->request->getPost('nama_cinema');
		$totalharga = $this->request->getPost('totalharga');
		$pembelian = $this->request->getPost('pembelian');
    	// Membuat array collection yang disiapkan untuk insert ke table
		$data = [
			'id_transaksi' => $id_transaksi,
			'pembayaran' => $pembayaran,
			'id' => user()->id,
			'username' => user()->username,
			'id_film' => $id_film,
			'nama_film' => $nama_film,
			// 'id_cinema' => $id_cinema,
			'nama_cinema' => $nama_cinema,
			'totalharga' => $totalharga,
			'pembelian' => $pembelian
		];

		// $data = [
		// 	'id_transaksi' => $id_transaksi,
		// 	'pembayaran' => $pembayaran,
		// 	'id' => $id,
		// 	'username' => $username,
		// 	'id_film' => $post['id_film'],
		// 	'nama_film' => $post['nama_film'],
		// 	'id_cinema' => $post['id_cinema'],
		// 	'nama_cinema' => $post['nama_cinema'],
		// 	'harga' => $post['harga']
		// ];
		// dd($data);
		/* 
		Membuat variabel simpan yang isinya merupakan memanggil function 
		insert_product dan membawa parameter data 
		*/
		$simpan = $this->transaksi->insert_transaksi($data);

		// Jika simpan berhasil, maka ...
		if ($simpan) {
			// Redirect halaman ke product
			// return redirect()->to(base_url('pages/tiket_print/' . $transaksi['id_transaksi']));
			return redirect()->to(base_url('/terimakasih'));
		}
	}



	









}
