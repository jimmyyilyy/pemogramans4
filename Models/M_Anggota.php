<?php namespace App\Models;
use CodeIgniter\Model;

class M_Anggota extends Model
{
	/**
	* table name
	*/
	protected $table = "anggota";
	/**
	* allowed field
	*/ 
	protected $allowedFields = [
			'id_anggota',
			'nama',
			'jabatan',
		
	];
	
	public function getAnggota()
	{
		return $this->findAll();
	}

	public function getAnggotaById($id = false)
    {
        if($id === false)
        {
            return $this->findAll();
        }
        else
        {
            return $this->getWhere(['id_anggota' => $id]);
        }   
    }
	
	public function updateAnggota($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_anggota' => $id));
        return $query;
    }
	
	public function deleteAnggota($id)
    {
        $query = $this->db->table($this->table)->delete(array('id_anggota' => $id));
        return $query;
    }

    public function insertAnggota($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}
?>