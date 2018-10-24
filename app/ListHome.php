<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListHome extends Model
{
       protected $table = 'list_homes';
protected $fillable = ['deskripsi'];
public $timestamp = true;

}
