<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Postingan_model;

class Postingan extends BaseController
{
    protected $Postingan_model;

    public function __construct()
    {
        helper('form');
        $this->Postingan_model = new Postingan_model();
    }

	public function index()
	{
		echo view('v_postingan');
    }

    public function postingan() 
	{
		$data = $this->Postingan_model->get_postingan();
		$data1 = json_encode($data);
		echo ($data1);
    }
    
    public function like() 
	{
        $id = $this->request->getPost('id');
        $like = $this->Postingan_model->get_postingan($id);
        $atas = $like['atas'] + 1;
        $data=[
            'atas' => $atas
        ];
        $data = $this->Postingan_model->update_postingan($data, $id);
        echo"berhasil";
	}
    public function dislike() 
	{
        $id = $this->request->getPost('id');
        $dislike = $this->Postingan_model->get_postingan($id);
        $bawah = $dislike['bawah'] + 1;
        $data=[
            'bawah' => $bawah
        ];
        $data = $this->Postingan_model->update_postingan($data, $id);
        echo"berhasil";
	}
    
    public function tambah() 
    {
		echo view('v_tambah_postingan');
    }

    public function simpan_data() 
    {
        $file_gambar=$this->request->getFile('gambar');
        $file_gambar->move(ROOTPATH.'public/folder_upload');
        $nama_gambar = $file_gambar->getName();

		$judul = $this->request->getPost('judul');
		$isi = $this->request->getPost('isi');
        $gambar = $nama_gambar;
        $atas = 0;
        $bawah = 0;
        $data=[
			'judul' => $judul,
            'isi' => $isi,
            'gambar' => $gambar,
            'atas' => $atas,
            'bawah' => $bawah
        ];
        $this->Postingan_model->insert_postingan($data);
        return redirect()->to(base_url('Postingan/index'));
    }

    public function hapus_data()
    {
		$id = $this->request->getPost('id');
		$this->Postingan_model->delete_postingan($id);
		echo "berhasil";
    }
}