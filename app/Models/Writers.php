<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writers extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug','writer_image','description','image','user_id'];
}
