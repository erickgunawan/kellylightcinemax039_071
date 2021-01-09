<?php 
 
 namespace App\Models;

use CodeIgniter\Model;

class CinemaModel extends Model
{
	protected $table = "cinema";

	public function getCinema($id = false)
	{
		// return $this->db->query("SELECT * FROM film")->getResultArray();

		if ($id) {
			return $this->table('cinema')
			->where('id_cinema',$id)
			->get()
			->getResultArray();
		} else {
			return $this->table('cinema')
			->get()
			->getResultArray();

		}
	}

	public function insert_cinema($data)
	{
		return $this->db->table($this->table)->insert($data);
	}

	// protected $table = "film";

	public function delete_cinema($id)
    {
        return $this->db->table($this->table)->delete(['id_cinema' => $id]);
    }
	
	 public function update_cinema($data,$id)
    {
    	return $this->db->table($this->table)->update($data, ['id_cinema' => $id]);
    }	

}