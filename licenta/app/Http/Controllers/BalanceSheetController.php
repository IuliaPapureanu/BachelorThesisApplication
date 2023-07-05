<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBalanceSheetsRequest;
use App\Models\BalanceSheet;
use App\Models\Company;
use App\Models\Month;
use App\Models\Tag;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BalanceSheetController extends Controller
{
    public function index(Company $company){
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');
        $sheets = BalanceSheet::getBalanceSheetsForCompany($company->id)->get();
        return view('balance_sheets.index',
            compact(
                'company',
                'sheets',

            ));
    }

    public function create(Company $company){
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');
        $years= Year::getYears()->get();
//        dd($years);
        $months = Month::getMonths()->get();
        return view('balance_sheets.create',
        compact(
            'company',
            'months',
            'years'
        ));
    }

    public function store(Company $company, CreateBalanceSheetsRequest $request){
        $duplicate = BalanceSheet::hasDuplicate($request->year_id,$request->month_id,$company->id);
        if ($duplicate == true)
            return redirect()->route('balanceSheets.create', ['company' => $company->id])->with('error', 'Balance sheet for this year and month already exists');;

        $b = BalanceSheet::create([
            'company_id'=> $company->id,
            'year_id'=> $request->year_id,
            'month_id'=> $request->month_id,
            'profit'=> $request->profit,
            'income'=> $request->income,
            'expenses'=> $request->expenses,
        ]);
        return redirect()->route('companies.show', ['company' => $company->id])->with('status', 'Balance sheet added successfully');

    }
}
