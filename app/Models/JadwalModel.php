<?php 
 
 namespace App\Models;

use CodeIgniter\Model;

class JadwalModel extends Model
{
	protected $table = "jadwal";

	public function getJadwal($id = false)
	{
		// return $this->db->query("SELECT * FROM film")->getResultArray();

		if ($id) {
			return $this->table('jadwal')
			->where('id_jadwal',$id)
			->get()
			->getResultArray();
		} else {
			return $this->table('jadwal')
			->get()
			->getResultArray();

		}
	}

	public function insert_jadwal($data)
	{
		return $this->db->table($this->table)->insert($data);
	}

	// protected $table = "film";

	public function delete_jadwal($id)
    {
        return $this->db->table($this->table)->delete(['id_jadwal' => $id]);
    }
	
	 public function update_jadwal($data,$id)
    {
    	return $this->db->table($this->table)->update($data, ['id_jadwal' => $id]);
    }	

}