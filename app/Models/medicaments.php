<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicaments extends Model
{
    use HasFactory;
    protected $table = 'medicaments';
    protected $primaryKey = 'id';
    public $incrementing = true;

    public function categories()
    {
        return $this->belongsToMany('\App\Models\categories');
    }
}
