<?php

namespace App\Models;

use CodeIgniter\Model;

class BioskopModel extends Model
{
	protected $table = "users";


	public function getUsers($id = false)
	{
		return $this->db->query("SELECT * FROM users")->getResultArray();
		 // if ($id === false) {
   //          return $this->table('user')
   //              ->get()
   //              ->getResultArray();
   //      } else {
   //          return $this->table('user')
   //              ->where('id', $id)
   //              ->get()
   //              ->getRowArray();
   //      }
   //  }
	}


	public function insert_data($data)
	{
		return $this->db->table($this->table)->insert($data);
	}

	// protected $table = "film";

	public function delete_data($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
	

}