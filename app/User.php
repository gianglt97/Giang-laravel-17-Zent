<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public function index()
    {
        return User::latest()->get();
    }

    public function findById($id)
    {
        return User::find($id);
    }

    // public function updateById($id)
    // {

    // }

}