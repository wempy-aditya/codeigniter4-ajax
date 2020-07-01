<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Home_model;

class Home extends BaseController
{
    protected $Home_model;

    public function __construct()
    {
        $this->Home_model = new Home_model();
    }

	public function index()
	{
		echo view('v_home');
	}
	
	public function data_barang() 
	{
		$data=['barang' => $this->Home_model->get_barang(),] ;
		echo view('table_data', $data);
	}
	
	public function form_data() 
	{
		echo view('form_data');
	}

	public function simpan_data() 
    {
		$nama = $this->request->getPost('barang_nama');
		$harga = $this->request->getPost('barang_harga');
		$jenis = $this->request->getPost('barang_jenis');
        $data=[
			'barang_nama' => $nama,
            'barang_harga' => $harga,
            'barang_jenis' => $jenis,
        ];
		$this->Home_model->insert_barang($data);
	}

	public function edit_form_data() 
	{
		$id = $this->request->getPost('id');
		$data= $this->Home_model->get_barang($id);
		echo json_encode($data);
	}

	public function edit_data() 
    {
		$id = $this->request->getPost('id');
		$nama = $this->request->getPost('barang_nama');
		$harga = $this->request->getPost('barang_harga');
		$jenis = $this->request->getPost('barang_jenis');
        $data=[
			'barang_nama' => $nama,
            'barang_harga' => $harga,
            'barang_jenis' => $jenis,
        ];
		$this->Home_model->update_barang($data, $id);
	}

	public function hapus_data()
    {
		$id = $this->request->getPost('id');
		$this->Home_model->delete_barang($id);
		echo "berhasil";
    }

	public function content() 
	{
		$data = $this->Home_model->get_barang();
		$data1 = json_encode($data);
		echo ($data1);
	}
}
