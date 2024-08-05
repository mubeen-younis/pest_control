<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Blog;
use App\Models\ClientFeedback;
use App\Models\CompanyLogo;
use App\Models\GeneralSetting;
use App\Models\ManageAboutUs;
use App\Models\ManageMembers;
use App\Models\ManagePortfolio;
use App\Models\ManagePortfolioTitle;
use App\Models\ManageServices;
use App\Models\MonthlyBasic;
use App\Models\MonthlyPremium;
use App\Models\MonthlyStandard;
use App\Models\YearlyBasic;
use App\Models\YearlyPremium;
use App\Models\YearlyStandard;

class AdminController extends Controller
{
    public function authenticate(Request $request)
    {
      $this->validate($request,[
    'email' => 'required|email',
    'password' => 'required'
      ]);

      if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))){
        return redirect()->route('admin.dashboard');

      }else {
        session()->flash('error', 'Either password or E-Mail incorrect');
        return back()->withInput($request->only('email'));
      }

    }

    public function logout(){

      Auth::guard('admin')->logout();
      return redirect()->route('admin.login');
    }


    public function home_page()
{
    $generalSetting = GeneralSetting::first();
    $companyLogo = CompanyLogo::all();
    $manageServices = ManageServices::all();
    $manageAboutUs = ManageAboutUs::firstOrFail();
    $managePortfolio = ManagePortfolio::all();
    $managingPortfolio = ManagePortfolioTitle::firstOrFail();
    $manageMembers = ManageMembers::all();
    $clientFeedback = ClientFeedback::all();
    $blogs = Blog::latest()->take(3)->get();

    $monthlyBasic = MonthlyBasic::firstOrFail();
    $monthlyBasicService = MonthlyBasic::all();
    $monthlyStandard = MonthlyStandard::firstOrFail();
    $monthlyStandardService = MonthlyStandard::all();
    $monthlyPremium = MonthlyPremium::firstOrFail();
    $monthlyPremiumService = MonthlyPremium::all();
    $yearlyBasic = YearlyBasic::firstOrFail();
    $yearlyBasicService = YearlyBasic::all();
    $yearlyStandard = YearlyStandard::firstOrFail();
    $yearlyStandardService = YearlyStandard::all();
    $yearlyPremium = YearlyPremium::firstOrFail();
    $yearlyPremiumService = YearlyPremium::all();

    return view('frontend.index',
     compact(
        'generalSetting', 'companyLogo', 'manageServices', 'manageAboutUs',
        'managePortfolio', 'managingPortfolio', 'manageMembers', 'clientFeedback', 'blogs', 'monthlyBasic',
        'monthlyBasicService', 'monthlyStandard', 'monthlyStandardService', 'monthlyPremium', 'monthlyPremiumService',
        'yearlyBasic', 'yearlyBasicService', 'yearlyStandard', 'yearlyStandardService', 'yearlyPremium', 'yearlyPremiumService'
    )
);
}


}
