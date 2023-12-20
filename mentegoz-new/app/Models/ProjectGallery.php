<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectGallery extends Model
{
    use HasFactory;
    protected $table = 'project_gallery';
    protected $fillable = ['project_id','title','image','alt_tag','priority'];
}
