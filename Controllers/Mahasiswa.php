<?php
namespace App\Controllers;
use App\Models\M_Mahasiswa;

class Mahasiswa extends BaseController
{
	/**
	* index function
	*/
	public function index()
	
	{
		
		
	$Mahasiswas = new M_Mahasiswa;
	$pager = \Config\Services::pager();
	
	$data = array(
		'mahasiswas' => $Mahasiswas->paginate(2, 'mahasiswa'),
		'pager' => $Mahasiswas->pager
		);
		
		return view('mahasiswa', $data);

	}

	public function update($id)
	{
		$model = new M_Mahasiswa();   
		$data['mahasiswa'] = $model->getMahasiswaById($id)->getRow();
		echo view('editmahasiswa', $data);
	}

	public function edit()
	{
		$model = new M_Mahasiswa();
		$id = $this->request->getPost('id_mahasiswa');
		$data = array (
			'nim'  => $this->request->getPost('nim'),
			'nama' => $this->request->getPost('nama'),
            'jurusan' => $this->request->getPost('jurusan'),
            'semester' => $this->request->getPost('semester'),
		);
		$model->updateMahasiswa($data, $id);
		return redirect()->to('/mahasiswa');

	}

	public function delete($id)
	{
		$model = new M_Mahasiswa();
		$model->deleteMahasiswa($id);
		return redirect()->to('/mahasiswa');
	}

	public function input()
	{
		echo view('inputmahasiswa_v');
	}

	public function insert()
	{
		$model = new  M_Mahasiswa();
		
		$data = array (
			'nim'  => $this->request->getPost('nim'),
			'nama' => $this->request->getPost('nama'),
            'jurusan' => $this->request->getPost('jurusan'),
            'semester' => $this->request->getPost('semester'),
		);
		$model->insertMahasiswa($data);
		return redirect()->to('/mahasiswa');   
	}
}
