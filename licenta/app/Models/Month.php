<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'name'
    ];
    public static function getMonths(){
        return self::orderBy('id');
    }
}
