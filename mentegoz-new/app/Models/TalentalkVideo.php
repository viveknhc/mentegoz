<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TalentalkVideo extends Model
{
    use HasFactory;
    protected $table = 'talentalk_video';
    protected $fillable = ['title','link','priority'];
}
