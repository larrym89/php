<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectManagement extends Model
{
    use HasFactory;

    protected $table = 'project_management';

    protected $fillable = [
        'title',
        'description',
        'first_name',
        'last_name'
    ];
}
