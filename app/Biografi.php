<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biografi extends Model
{
    protected $table = 'biografis';
protected $fillable = ['foto','nama','deskripsi'];
public $timestamp = true;
}
