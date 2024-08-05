<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearlyStandard extends Model
{
    use HasFactory;

    public $table = 'yearly_standards';

    protected $ffillable = [
        'price',
        'service'
    ];
}
