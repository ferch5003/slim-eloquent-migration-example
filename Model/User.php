<?php
namespace Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{

    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hiddden = [
        'password'
    ];
}