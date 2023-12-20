<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'project';
    protected $fillable = ['title','client','slug','project_category','tags','technologies','link','location','industry','scope','description','light_logo','dark_logo','project_image','banner_image','meta_title','meta_keywords','meta_description','priority'];
}
