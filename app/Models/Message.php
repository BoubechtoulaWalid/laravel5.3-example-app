<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    private $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'body' => 'required',
    ];

    protected $fillable = ['name', 'email', 'body'];
}
