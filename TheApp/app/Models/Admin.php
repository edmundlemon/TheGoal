<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    protected $role = 'admin';

    public function getAdmins()
    {
        return $this->all();
    }

    public function getAdmin($id)
    {
        return $this->find($id);
    }

    public function hasRole(string $role)
    {
        return $this->role == $role;
    }
}
