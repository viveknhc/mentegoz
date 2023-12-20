<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTags extends Model
{
    use HasFactory;
    protected $table = 'project_tags';
    protected $fillable = ['tags','priority'];
}
