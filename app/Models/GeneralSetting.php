<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;

    public $table = 'general_settings';

    protected $fillable = [
        'website_name',
        'favicon',
        'logo',
        'title',
        'subtitle',
        'paragraph',
        'button_left',
        'button_right',
        'banner_image'
    ];
}
