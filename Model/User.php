<?php
namespace Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model{
    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hiddden = [
        'password'
    ];
}