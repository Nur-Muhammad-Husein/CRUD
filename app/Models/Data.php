<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
	
	public $timestamps = False;
	
	protected $table = 'data';
	protected $primaryKey = 'id';
	protected $fillable = ['nama', 'deskripsi'];
}
