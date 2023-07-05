<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'county',
        'administrator',
        'admin_email',
    ];

    public static function getCompanies(){
        return self::orderBy('id');
    }

    public static function getCompany($id)
    {
        return self::with('companies_tags')
            ->where('id', $id);
    }

    public function company_tag()
    {
        return $this->hasOne(CompanyTag::class, 'company_id', 'id')/*->with('tag')*/;
    }

    public static function getByTag($id)
    {
        $companiesByTag = CompanyTag::where('tag_id',$id)->get()->pluck('company_id');
        return self::getCompanies()
            ->whereIn('id', $companiesByTag);

    }
}
