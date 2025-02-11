<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyLogo extends Model
{
    use HasFactory;

    public $table = 'company_logos';

protected $fillable = ['image'];
}
