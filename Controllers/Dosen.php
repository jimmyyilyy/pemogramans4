<?php
namespace App\Controllers;
use App\Models\DosenModel;

class Dosen extends BaseController
{
	/**
	* index function
	*/
	
	public function index()
	{
		
       

	$Dosens = new DosenModel;
	$pager = \Config\Services::pager();
	
	$data = array(
		'dosens' => $Dosens->paginate(2, 'dosen'),
		'pager' => $Dosens->pager
		);
		
		return view('dosen', $data);


	}

	public function input()
	{
		echo view('inputdosen_v');
	}

	

	public function update($id)
	{
		$model = new DosenModel();   
		$data['dosen'] = $model->getDosenById($id)->getRow();
		echo view('editdosen', $data);
	}
	public function edit()
	{
		$model = new DosenModel();
		$id = $this->request->getPost('id_dosen');
		$data = array (
			'nidn'  => $this->request->getPost('nidn'),
			'nama' => $this->request->getPost('nama'),
			'matkul' => $this->request->getPost('matkul'),
		);
		$model->updateDosen($data, $id);
		return redirect()->to('/dosen');

	}


	public function insert()
	{
		$model = new  DosenModel();
		
		$data = array (
			'nidn'  => $this->request->getPost('nidn'),
			'nama' => $this->request->getPost('nama'),
			'matkul' => $this->request->getPost('matkul'),
		);
		$model->insertDosen($data);
		return redirect()->to('/dosen');   
	}

	
	public function delete($id)
	{
		$model = new DosenModel();
		$model->deleteDosen($id);
		return redirect()->to('/dosen');
	}

	
}
		