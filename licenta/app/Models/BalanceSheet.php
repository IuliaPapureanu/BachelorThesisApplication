<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BalanceSheet extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'year_id',
        'month_id',
        'profit',
        'expenses',
        'income'
    ];

    public static function getBalanceSheets(){
        return self::orderBy('month_id');
    }
    public static function getCurrentYearBalanceSheets(){
        return self::getBalanceSheets()->where('year_id',1);
    }


    public static function getBalanceSheetsForCompany($companyId){
        return self::getCurrentYearBalanceSheets()->where('company_id',$companyId);
    }

    public function year()
    {
        return $this->hasOne(Year::class, 'id', 'year_id');
    }

    public function month()
    {
        return $this->hasOne(Month::class, 'id', 'month_id');
    }

    public static function hasDuplicate($yearId,$monthID,$companyID){
        $duplicates = self::getBalanceSheets()->where('year_id',$yearId)
            ->where('month_id',$monthID)->where('company_id',$companyID)->get();
//        dd($duplicates);
        if ($duplicates->isEmpty())
            return false;
        return true;
    }
}
