<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cruds extends Model
{
    //
    protected $table = 'crud';
    protected $primaryKey = 'id';
    protected $fillable = ['judul','isi'];
    public $timestamps = false ;
}
