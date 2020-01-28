<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    protected $fillable = ['name'];

    const ROLE_USER = 1;
    const ROLE_ADMIN = 2;

    public $timestamps = false;

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
