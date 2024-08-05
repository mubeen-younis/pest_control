<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $table = 'contact';
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'msg_subject',
        'message',
    ];
}
