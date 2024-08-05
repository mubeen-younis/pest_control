<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NavItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'status',
    ];

    public function subnav(){
        return $this->hasMany('App\Models\SubNavItem')->where('status', 'active');
    }
}
