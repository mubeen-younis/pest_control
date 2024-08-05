<?php

namespace App\Http\Controllers;

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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     
    


    public function about()
    {

        return view('frontend.about');
    }

    public function blog_details($id)
    {
        $blog = Blog::find($id);

        // if (!$blog) {
        //     return response()->json(['message' => 'Blog not found'], 404);
        // }

        return view('frontend.blog_details', compact('blog'));
    }

    public function blog()
    {
        $blogs = Blog::all();
        return view('frontend.blog', compact('blogs'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function members()
    {
        return view('frontend.members');
    }

    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    public function pricing()
    {
        return view('frontend.pricing');
    }

    public function privacy_policy()
    {
        return view('frontend.privacy-policy');
    }

    public function recover()
    {
        return view('frontend.recover');
    }

    public function service_details()
    {
        return view('frontend.service-details');
    }

    public function services()
    {
        return view('frontend.services');
    }

    public function sign_in()
    {
        return view('frontend.sign-in');
    }

    public function sign_up()
    {
        return view('frontend.sign-up');
    }

    public function terms_condition()
    {
        return view('frontend.terms-condition');
    }

    public function testimonial()
    {
        return view('frontend.testimonial');
    }

    public function error_404()
    {
        return view('frontend.error-404');
    }
}
