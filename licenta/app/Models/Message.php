<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'content',
        'company_id',
    ];

    public static function getMessages(){
        return self::orderBy('id');
    }
}
