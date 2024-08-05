<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearlyPremium extends Model
{
    use HasFactory;

    public $table = 'yearly_premia';

    protected $fillable = [
        'price',
        'service'
    ];
}
