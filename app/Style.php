<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    //
    protected $fillable = [
        'backgroundColor', 'navbarColor', 'footerColor', 'logoLogin', 'logoNavbar', 'logoFooter',
    ];
}
