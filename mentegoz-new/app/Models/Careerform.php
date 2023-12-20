<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careerform extends Model
{
    use HasFactory;
    protected $table = 'career_form';
     protected $fillable = ['name','email','phone','address','qualifictaion','cv','message'];
}
