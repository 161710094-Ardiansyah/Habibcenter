<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';
protected $fillable = ['background','foto_profil','title_header','title_1','deskripsi_1'.'title_2'.'deskripsi_2','footer'];
public $timestamp = true;
}
