<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterQuickLink extends Model
{
    use HasFactory;

    public $table = 'footer_quick_links';

    protected $fillable = [
        'title',
        'link'
    ];
}
