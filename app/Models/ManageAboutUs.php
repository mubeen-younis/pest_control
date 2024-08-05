<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageAboutUs extends Model
{
    use HasFactory;

    public $table = 'manage_about_us';

    protected $fillable = [
        'title',
        'description',
        'image'
    ];
}
