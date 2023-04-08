<?php
namespace App\Controllers;
use App\Models\M_Anggota;

class Anggota extends BaseController
{
	/**
	* index function
	*/
	public function index()

	{
		
	

	$Anggotas = new M_Anggota;
	$pager = \Config\Services::pager();
	
	$data = array(
		'anggotas' => $Anggotas->paginate(2, 'anggota'),
		'pager' => $Anggotas->pager
		);
		
		return view('anggota', $data);

	}

	public function update($id)
	{
		$model = new M_Anggota();   
		$data['anggota'] = $model->getAnggotaById($id)->getRow();
		echo view('editanggota', $data);
	}

	public function edit()
	{
		$model = new M_Anggota();
		$id = $this->request->getPost('id_anggota');
		$data = array (
			'nama'  => $this->request->getPost('nama'),
			'jabatan' => $this->request->getPost('jabatan'),
		);
		$model->updateAnggota($data, $id);
		return redirect()->to('/anggota');

	}

	public function delete($id)
	{
		$model = new M_Anggota();
		$model->deleteAnggota($id);
		return redirect()->to('/anggota');
	}

	public function input()
	{
		echo view('inputanggota_v');
	}

	public function insert()
	{
		$model = new  M_Anggota();
		//$id = $this->request->getPost('id');
		$data = array (
			'nama' => $this->request->getPost('nama'),
			'jabatan' => $this->request->getPost('jabatan'),
		);
		$model->insertAnggota($data);
		return redirect()->to('/anggota');   
	}
}
