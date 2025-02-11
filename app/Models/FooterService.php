<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterService extends Model
{
    use HasFactory;

    public $table = 'footer_services';

    protected $fillable = [
        'title',
        'link'
    ];
}
