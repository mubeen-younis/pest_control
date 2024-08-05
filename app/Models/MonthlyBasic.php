<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyBasic extends Model
{
    use HasFactory;

    public $table =  'monthly_basics';

    protected $fillable = [
        'price',
        'service'
    ];
}
