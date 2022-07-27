<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicos extends Model
{
    use HasFactory;
    protected $table= 'medico';
    public $timestamps =false;
     public $fillable = 
  [
    'nom',
    'ape', 
    'CI',
    'espe',
    'eda'
  ];
}
