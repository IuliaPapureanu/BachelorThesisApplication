<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssignTagToCompanyRequest;
use App\Http\Requests\CreateCompanyRequest;
use App\Http\Requests\EditCompanyRequest;
use App\Mail\MonthlyReport;
use App\Models\BalanceSheet;
use App\Models\Company;
use App\Models\CompanyTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    //
    public function index(){

        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');
//        dd(Auth::user()->id);
        $companies = Company::getCompanies()->get();
        return view('companies.index',
            compact(
                'companies',
            )
        );
    }
    public function create(){
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');
        return view('companies.create',[
            'company'=>new Company
        ]);
    }

    public function store(CreateCompanyRequest $request){

        $company = Company::create([
            'name' => $request->name,
            'address'=>$request->address,
            'city' => $request->city,
            'county' => $request->county,
            'administrator' => $request->administrator,
            'admin_email' => $request->admin_email
        ]);

        return $this->redirectWithStatus('companies', 'create', $company, 'title');
    }

    public function show(Company $company){
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');
        $allTagsOfCompany = Tag::getByCompany($company->id)->get();
        $allTagsNotAssigned = Tag::getAllTagsBesidesTagsOfCompany($company->id)->get();
//        dd($allTagsNotAssigned);

        $balanceSheets = BalanceSheet::getCurrentYearBalanceSheets()->get();
        $balanceSheetsByMonth = collect(range(1, 12))->mapWithKeys(function ($month) use ($balanceSheets) {
            $balanceSheet = $balanceSheets->firstWhere('month_id', $month);
            return [$month => $balanceSheet ?? null];
        });
        $yearlyProfit=0;
        $yearlyIncome=0;
        $yearlyExpenses=0;
        foreach ($balanceSheets as $balanceSheet){
            $yearlyProfit += $balanceSheet->profit;
            $yearlyIncome +=$balanceSheet->income;
            $yearlyExpenses +=$balanceSheet->expenses;
        }

        $lastProfit = $balanceSheetsByMonth->filter()->sortBy('month')->last()->profit;
        $lastIncome = $balanceSheetsByMonth->filter()->sortBy('month')->last()->income;
        $lastExpenses = $balanceSheetsByMonth->filter()->sortBy('month')->last()->expenses;

        return view('companies.show',
            compact(
                'allTagsNotAssigned',
                'allTagsOfCompany',
                'balanceSheetsByMonth',
                'company',
                'yearlyProfit',
                'yearlyIncome',
                'yearlyExpenses',
                'lastProfit',
                'lastIncome',
                'lastExpenses'
            ));
    }

    public function edit(Company $company){
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');
        $newcompany = $company;
        return view('companies.edit',[
            'company'=>$newcompany
        ]);
    }

    public function update(EditCompanyRequest $request, Company $company){
        $company->update([
            'name' => $request->name,
            'address'=>$request->address,
            'city' => $request->city,
            'county' => $request->county,
            'administrator' => $request->administrator,
            'admin_email' => $request->admin_email
        ]);
        return $this->redirectWithStatus('companies', 'update', $company, 'title');
    }

    public function assignTag(AssignTagToCompanyRequest $request,Company $company){
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');
        $companytag = CompanyTag::create([
            'company_id' => $company->id,
            'tag_id'=>$request->tag_id,
        ]);
        return redirect()->route('companies.show', ['company' => $company->id])->with('status', 'Tag assigned successfully');
    }

    public function unassignTag(Company $company,Tag $tag){
//        dd('here');
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');        $companytag = CompanyTag::getCompanyTag()
            ->where('company_id',$company->id)
            ->where('tag_id',$tag->id)->get()->first();
        $companytag->delete();

        return redirect()->route('companies.show', ['company' => $company->id])->with('status', 'Tag unassigned successfully');
    }

    public function destroy(Company $company)
    {
        if (Auth::user()->level > 2 )
            return redirect()->route('dashboard')->with('status', 'route access denied');
        $company->delete();
        return $this->redirectWithStatus('companies', 'destroy', $company, 'title');
    }

    public function sendEmailReport(Company $company){

        $balanceSheets = BalanceSheet::getCurrentYearBalanceSheets()->get();

        $balanceSheetsByMonth = collect(range(1, 12))->mapWithKeys(function ($month) use ($balanceSheets) {
            $balanceSheet = $balanceSheets->firstWhere('month_id', $month);
            return [$month => $balanceSheet ?? null];
        });

        $yearlyProfit=0;
        $yearlyIncome=0;
        $yearlyExpenses=0;
        foreach ($balanceSheets as $balanceSheet){
            $yearlyProfit += $balanceSheet->profit;
            $yearlyIncome +=$balanceSheet->income;
            $yearlyExpenses +=$balanceSheet->expenses;
        }

        $lastProfit = $balanceSheetsByMonth->filter()->sortBy('month')->last()->profit;
        $lastIncome = $balanceSheetsByMonth->filter()->sortBy('month')->last()->income;
        $lastExpenses = $balanceSheetsByMonth->filter()->sortBy('month')->last()->expenses;

//        dd($balanceSheets,$balanceSheetsByMonth,$yearlyProfit,$yearlyIncome,$yearlyExpenses, $lastProfit,$lastIncome,$lastExpenses);
        Mail::to($company->admin_email)->send(new MonthlyReport($balanceSheets,$balanceSheetsByMonth,$yearlyProfit,$yearlyIncome,$yearlyExpenses, $lastProfit,$lastIncome,$lastExpenses));

        return redirect()->route('companies.show', ['company' => $company->id])->with('status', 'Report sent');
    }
}
