<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public static function getTags(){
        return self::orderBy('id');
    }

    public static function getTag($id)
    {
        return self::with('companies_tags')
            ->where('id', $id);
    }

    public function company_tag()
    {
        return $this->hasOne(CompanyTag::class, 'tag_id', 'id')/*->with('company')*/;
    }

    public static function getByCompany($id)
    {
        $tagIDsForCompany = CompanyTag::where('company_id',$id)->pluck('tag_id');
        return self::getTags()
            ->whereIn('id', $tagIDsForCompany);
    }

    public static function getAllTagsBesidesTagsOfCompany($companyID){
        $tagIDsForCompany = CompanyTag::where('company_id',$companyID)->pluck('tag_id');
//        dd($tagIDsForCompany);
        return self::getTags()
            ->whereNotIn('id', $tagIDsForCompany);
    }
}
