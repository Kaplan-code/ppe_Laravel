<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medecins extends Model
{
    use HasFactory;
    protected $table = 'medecins';
    protected $primaryKey = 'id';
    public $incrementing = true;


}
