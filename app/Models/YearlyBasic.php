<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearlyBasic extends Model
{
    use HasFactory;

    public $table = 'yearly_basics';

    protected $fillable = [
        'price',
        'service'
    ];
}
