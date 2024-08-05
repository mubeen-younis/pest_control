<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientFeedback extends Model
{
    use HasFactory;

    public $table = 'client_feedback';

    protected $ffillable = [
        'name',
        'feedback',
        'image'
    ];
}
