<?php

namespace App\Http\Controllers;

use App\Models\FooterContact;
use App\Models\FooterMain;
use App\Models\FooterQuickLink;
use App\Models\FooterService;
use App\Models\MonthlyBasic;
use App\Models\MonthlyPremium;
use App\Models\MonthlyStandard;
use App\Models\YearlyBasic;
use App\Models\YearlyPremium;
use App\Models\YearlyStandard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PriceController extends Controller
{
    public function manage_price(){
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

        return view('backend.settings.pricing.manage-price', compact('monthlyBasic', 'monthlyBasicService',
    'monthlyStandard', 'monthlyStandardService', 'monthlyPremium', 'monthlyPremiumService', 'yearlyBasic', 'yearlyBasicService',
'yearlyStandard', 'yearlyStandardService', 'yearlyPremium', 'yearlyPremiumService'));
    }

// Monthly Basic
    public function monthly_basic(){
        $basicPrice = MonthlyBasic::firstOrFail();
        return view('backend.settings.pricing.monthly-basic', compact('basicPrice'));
    }

    public function store_monthly_basic(Request $request){
        $validateData = $request->validate([
            'price' => 'numeric',
            'service' => 'string'
        ]);

        $existingPrice = MonthlyBasic::first();

        if($existingPrice){
            $existingPrice->price = $request->price;
            $existingPrice->save();
        }

        $monthlyBasic = new MonthlyBasic();
        $monthlyBasic->service = $request->service;
        $monthlyBasic->save();

        return redirect()->route('manage-price');
    }

    public function delete_monthly_basic($id){
        $monthlyBasic = MonthlyBasic::findOrFail($id);
        $monthlyBasic->delete();
        return redirect()->back();
    }


    // Monthly standard
    public function monthly_standard(){
        $standardPrice = MonthlyStandard::firstOrFail();
        return view('backend.settings.pricing.monthly-standard', compact('standardPrice'));
    }

    public function store_monthly_standard(Request $request){
        $validateData = $request->validate([
            'price' => 'numeric',
            'service' => 'string'
        ]);

        $existingPrice = MonthlyStandard::first();

        if($existingPrice){
            $existingPrice->price = $request->price;
            $existingPrice->save();
        }

        $monthlyStandard = new MonthlyStandard();
        $monthlyStandard->service = $request->service;
        $monthlyStandard->save();

        return redirect()->route('manage-price');
    }

    public function delete_monthly_standard($id){
        $monthlyStandard = MonthlyStandard::findOrFail($id);
        $monthlyStandard->delete();
        return redirect()->back();
    }


     // Monthly Premium
     public function monthly_premium(){
        $premiumPrice = MonthlyPremium::firstOrFail();
        return view('backend.settings.pricing.monthly-premium', compact('premiumPrice'));
    }

    public function store_monthly_premium(Request $request){
        $validateData = $request->validate([
            'price' => 'numeric',
            'service' => 'string'
        ]);

        $existingPrice = MonthlyPremium::first();

        if($existingPrice){
            $existingPrice->price = $request->price;
            $existingPrice->save();
        }

        $monthlyPremium = new MonthlyPremium();
        $monthlyPremium->service = $request->service;
        $monthlyPremium->save();

        return redirect()->route('manage-price');
    }

    public function delete_monthly_premium($id){
        $monthlyPremium = MonthlyPremium::findOrFail($id);
        $monthlyPremium->delete();
        return redirect()->back();
    }


    // Yearly Basic
    public function yearly_basic(){
        $basicPrice = YearlyBasic::firstOrFail();
        return view('backend.settings.pricing.yearly-basic', compact('basicPrice'));
    }

    public function store_yearly_basic(Request $request){
        $validateData = $request->validate([
            'price' => 'numeric',
            'service' => 'string'
        ]);

        $existingPrice = YearlyBasic::first();

        if($existingPrice){
            $existingPrice->price = $request->price;
            $existingPrice->save();
        }

        $yearlyBasic = new YearlyBasic();
        $yearlyBasic->service = $request->service;
        $yearlyBasic->save();

        return redirect()->route('manage-price');
    }

    public function delete_yearly_basic($id){
        $yearlyBasic = YearlyBasic::findOrFail($id);
        $yearlyBasic->delete();
        return redirect()->back();
    }


    // Yearly Standard
    public function yearly_standard(){
        $standardPrice = YearlyStandard::firstOrFail();
        return view('backend.settings.pricing.yearly-standard', compact('standardPrice'));
    }

    public function store_yearly_standard(Request $request){
        $validateData = $request->validate([
            'price' => 'numeric',
            'service' => 'string'
        ]);

        $existingPrice = YearlyStandard::first();

        if($existingPrice){
            $existingPrice->price = $request->price;
            $existingPrice->save();
        }

        $yearlyStandard = new YearlyStandard();
        $yearlyStandard->service = $request->service;
        $yearlyStandard->save();

        return redirect()->route('manage-price');
    }

    public function delete_yearly_standard($id){
        $yearlyStandard = YearlyStandard::findOrFail($id);
        $yearlyStandard->delete();
        return redirect()->back();
    }

    // Yearly Premium
    public function yearly_premium(){
        $premiumPrice = YearlyPremium::firstOrFail();
        return view('backend.settings.pricing.yearly-premium', compact('premiumPrice'));
    }

    public function store_yearly_premium(Request $request){
        $validateData = $request->validate([
            'price' => 'numeric',
            'service' => 'string'
        ]);

        $existingPrice = YearlyPremium::first();

        if($existingPrice){
            $existingPrice->price = $request->price;
            $existingPrice->save();
        }

        $yearlyPremium = new YearlyPremium();
        $yearlyPremium->service = $request->service;
        $yearlyPremium->save();

        return redirect()->route('manage-price');
    }

    public function delete_yearly_premium($id){
        $yearlyPremium = YearlyPremium::findOrFail($id);
        $yearlyPremium->delete();
        return redirect()->back();
    }

    // manage footer

    public function manage_footer(){
        $footerService = FooterService::all();
        $footerQuickLink = FooterQuickLink::all();
        $footerContact = FooterContact::all();
        $footerMain = FooterMain::firstOrFail();
        return view('backend.settings.pricing.manage-footer', compact('footerService', 'footerQuickLink', 'footerContact',
    'footerMain'));
    }


    // footer services

    public function footer_services(){
        return view('backend.settings.pricing.footer-services');
    }

    public function store_footer_services(Request $request){
        $validateData = $request->validate([
            'title' => 'string|required',
            'link' => 'string|required'
        ]);

        $footerService = new FooterService();

        $footerService->title = $request->title;
        $footerService->link = $request->link;

        $footerService->save();

        return redirect()->route('manage-footer');

    }

    public function delete_footer_services($id){
        $footerService = FooterService::findOrFail($id);
        $footerService->delete();
        return redirect()->back();
    }


     // footer Quick Links

     public function footer_quick_links(){
        return view('backend.settings.pricing.footer-quick-links');
    }

    public function store_footer_quick_link(Request $request){
        $validateData = $request->validate([
            'title' => 'string|required',
            'link' => 'string|required'
        ]);

        $footerQuickLink = new FooterQuickLink();

        $footerQuickLink->title = $request->title;
        $footerQuickLink->link = $request->link;

        $footerQuickLink->save();

        return redirect()->route('manage-footer');

    }

    public function delete_footer_quick_link($id){
        $footerQuickLink = FooterQuickLink::findOrFail($id);
        $footerQuickLink->delete();
        return redirect()->back();
    }


     // footer Contact

     public function footer_contact(){
        return view('backend.settings.pricing.footer-contact');
    }

    public function store_footer_contact(Request $request){
        $validateData = $request->validate([
            'title' => 'string|required',
            'link' => 'string|required'
        ]);

        $footerContact = new FooterContact();

        $footerContact->title = $request->title;
        $footerContact->link = $request->link;

        $footerContact->save();

        return redirect()->route('manage-footer');

    }

    public function delete_footer_contact($id){
        $footerContact = FooterContact::findOrFail($id);
        $footerContact->delete();
        return redirect()->back();
    }

    // footer logo title

    public function footer_logo(Request $request){
        $validateData = $request->validate([
            'logo' => 'mimes:jpg,bmp,png',
            'title' => 'string'
        ]);

        $existingData = FooterMain::firstOrFail();

        if($existingData){
            Storage::delete($existingData->logo);
            $existingData->delete();
        }

        $image = $request->file('logo')->store('images', 'public');

        $footerMain = new FooterMain();

        $footerMain->logo = $image;
        $footerMain->title = $request->title;

        $footerMain->save();

        return redirect()->back();
    }
}
