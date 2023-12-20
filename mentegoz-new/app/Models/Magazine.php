<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    use HasFactory;
    protected $table = 'magazine';
    protected $fillable = ['title','slug','date','pdf','image','priority'];
}
