<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Penjualan;

class Barang extends Model
{
	protected $fillable = ['kode_barang','nama_barang','harga_jual','harga_beli','satuan','kategori'];
	

	public function Penjualan()
	{
		return $this->hasMany(Penjualan::Class);
	}

	
}
