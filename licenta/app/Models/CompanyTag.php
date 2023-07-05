<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyTag extends Model
{
    use HasFactory;

    public $table = 'companies_tags';

    protected $fillable = [
        'company_id',
        'tag_id'
    ];

    public static function getCompanyTag()
    {
        return self::with(['company', 'tag']);
    }

    public function company()
    {
        return $this->hasOne(Company::class, 'id', 'company_id')->with([]);
    }

    public function tag()
    {
        return $this->hasOne(Tag::class, 'id', 'tag_id')->with([]);
    }

//    public static function getTags(){
//        return self::orderBy('id');
//    }
}
