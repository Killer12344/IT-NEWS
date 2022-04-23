<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Base extends Model
{
    public static $name = "IT NEWS";
    public static $logo = 'images/logos/logo.PNG';
    public static $description = "Testing Project for Student";

    public static function showName()
    {
        return " I Am Hein Htet Aung";
    }
}


