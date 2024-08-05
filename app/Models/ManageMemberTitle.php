<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageMemberTitle extends Model
{
    use HasFactory;

    public $table = 'manage_member_titles';

    protected $fillable = [
        'title',
        'description'
    ];
}
