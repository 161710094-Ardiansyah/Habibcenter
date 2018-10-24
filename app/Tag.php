<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
     protected $table = 'tags';
protected $fillable = ['nama'];
public $timestamp = true;

public function Artikel()
{
	return $this->hasMany('App\Artikel','tag_id');
}
public function getRouteKeyName()
    {
        return 'slug';
    }
}
