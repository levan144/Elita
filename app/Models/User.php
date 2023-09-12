<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use  HasRoles, HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'department_id',
        'phone',
        'avatar',
        'sid'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $attributes = [ 
        'guard_name' => 'web' 
    ];

    public function projects() {
        return $this->belongsToMany(Project::class)->withPivot('permissions');
    }

    public function projectRoles(Project $project)
    {
        return $this->belongsToMany(Role::class, 'project_user_role')
            ->wherePivot('project_id', $project->id)
            ->withTimestamps();
    }

    public function hasProjectRole(Project $project, $roleName)
    {
        return $this->projectRoles($project)->where('name', $roleName)->exists();
    }
    
    public function department() {
        $this->belongsTo(Department::class, 'department_id');
    }
   
}
