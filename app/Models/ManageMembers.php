<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageMembers extends Model
{
    use HasFactory;

    public $table = 'manage_members';

    protected $fillable = [
        'name',
        'designation',
        'image'
    ];
}
