<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enregistrements extends Model
{
    use HasFactory;
    protected $table = 'enregistrements';
    protected $primaryKey = 'id';
    public $incrementing = true;
}
