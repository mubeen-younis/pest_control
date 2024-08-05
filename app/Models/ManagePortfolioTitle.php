<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagePortfolioTitle extends Model
{
    use HasFactory;

    public $table = 'manage_portfolio_titles';

    protected $fillable = [
        'title',
        'description'
    ];
}
