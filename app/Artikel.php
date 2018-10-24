<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikels';
	protected $fillable = ['foto','judul','deskripsi','kategori_id','tag','slug'];
	public $timestamp = true;

	public function Kategori()
	{
		return $this->belongsTo('App\Kategori','kategori_id');
	}
	public function getRouteKeyName()
    {
        return 'slug';
    }
}
