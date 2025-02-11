<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerSetting extends Model
{
    use HasFactory;
    public $table = 'banner_settings';

    protected $fillable = [
        'title',
        'subtitle',
        'paragraph',
        'firstbtn',
        'secondbtn',
        'image',
    ];
}
