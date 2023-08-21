<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'image', 'author_id', 'status'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('role_id')->using('App\Models\ProjectUserRole');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
