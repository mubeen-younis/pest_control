<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyStandard extends Model
{
    use HasFactory;

    public $table = 'monthly_standards';

    protected $fillable = [
        'price',
        'service'
    ];
}
