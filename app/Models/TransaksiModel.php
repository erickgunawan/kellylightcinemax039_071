<?php

namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
	protected $table = "transaksi";


	public function getTransaksi($id = false)
	{
		// return $this->db->query("SELECT * FROM transaksi")->getResultArray();
		 if ($id) {
			return $this->table('transaksi')
			->where('id_transaksi',$id)
			->get()
			->getResultArray();
		} else {
			return $this->table('transaksi')
			->get()
			->getResultArray();

		}
	}
	


	public function insert_transaksi($data)
	{
		return $this->db->table($this->table)->insert($data);
	}

	// protected $table = "film";

	public function delete_transaksi($id)
    {
        return $this->db->table($this->table)->delete(['id_transaksi' => $id]);
    }
	
	public function riwayat_transaksi($id = false)
	{
		// return $this->db->query("SELECT * FROM transaksi WHERE id = '$id'")->getResultArray();
		if ($id) {
			return $this->table('transaksi')
			->where('id',$id)
			->get()
			->getResultArray();
		} else {
			return $this->table('transaksi')
			->get()
			->getResultArray();

		}
	}

}