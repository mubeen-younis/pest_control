<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyPremium extends Model
{
    use HasFactory;

    public $table = 'monthly_premia';

    protected $fillable = [
        'price',
        'service'
    ];
}
