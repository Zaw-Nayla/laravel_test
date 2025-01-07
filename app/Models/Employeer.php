<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employeer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
    
}
