<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;
    // protected $table = "bebdnm";
    // protected $timestamp = false;
    protected $fillable = [
        'meta_key',
        'meta_value'
    ];

    public static function get_value($meta_key){
        return GeneralSetting::where('meta_key' , $meta_key)->first()->meta_value;
    }
}
