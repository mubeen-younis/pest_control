<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterMain extends Model
{
    use HasFactory;

    public $table = 'footer_mains';

    protected $fillable = [
        'logo',
        'title'
    ];
}
