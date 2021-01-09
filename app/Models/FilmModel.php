<?php 
 
 namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
	protected $table = "film";

	public function getFilm	($id = false)
	{
		// return $this->db->query("SELECT * FROM film")->getResultArray();

		if ($id) {
			return $this->table('film')
			->where('id_film',$id)
			->get()
			->getResultArray();
		} else {
			return $this->table('film')
			->get()
			->getResultArray();

		}
	}

	public function insert_film($data)
	{
		return $this->db->table($this->table)->insert($data);
	}

	// protected $table = "film";

	public function delete_film($id)
    {
        return $this->db->table($this->table)->delete(['id_film' => $id]);
    }
	

    public function update_film($data,$id)
    {
    	return $this->db->table($this->table)->update($data, ['id_film' => $id]);
    }
}