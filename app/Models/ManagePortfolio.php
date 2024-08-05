<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagePortfolio extends Model
{
    use HasFactory;

    public $table = 'manage_portfolios';

    protected $fillable = [
        'category',
        'service',
        'image'
    ];
}
