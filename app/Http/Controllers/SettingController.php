<?php

namespace App\Http\Controllers;

use App\Models\BannerSetting;
use App\Models\Blog;
use App\Models\ClientFeedback;
use App\Models\CompanyLogo;
use App\Models\GeneralSetting;
use App\Models\ManageAboutUs;
use App\Models\ManageMembers;
use App\Models\ManageMemberTitle;
use App\Models\ManagePortfolio;
use App\Models\ManagePortfolioTitle;
use App\Models\ManageServices;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function logoCreate()
    {
        $photos = Photo::firstOrFail();

        return view('backend/settings/logo-update', compact('photos'));
    }

    public function logoStore(Request $request)
    {
        $size = $request->file('image')->getSize();
        $image = $request->file('image')->store('images', 'public');
        $photo = new Photo;
        $photo->name = $image;
        $photo->size = $size;
        $photo->save();
        return redirect()->back();
    }

    // Banner Settings

    public function banner_settings()
    {
        $bannerSetting = BannerSetting::first();
        return view('backend/settings/banner-settings');
    }

    public function store_banner_settings(Request $request)
    {

        $oldData = BannerSetting::first();
        $oldData->delete();


        $data = $request->validate([
            'title' => 'max:20',
            'subtitle' => 'max:200',
            'paragraph' => 'max:500',
            'firstbtn' => 'max:20',
            'secondbtn' => 'max:20',
            'image' => '',
        ]);

        $newProduct = new BannerSetting();
        $newProduct->title = $request->title;
        $newProduct->subtitle = $request->subtitle;
        $newProduct->paragraph = $request->paragraph;
        $newProduct->firstbtn = $request->firstbtn;
        $newProduct->secondbtn = $request->secondbtn;



                $image = $request->file('image')->store('images', 'public');

                $newProduct->image = $image;
                $newProduct->save();

        return redirect()->back()->with('success', 'Setting Updated Successfully!');


}

    public function create_company_logo()
    {
        return view('backend.settings.company-logo');
    }

    public function store_company_logo(Request $request)
    {
        if ($request->hasFile('image')) {
            try {
                $image = $request->file('image')->store('images', 'public');
                $photo = new CompanyLogo();
                $photo->image = $image;
                $photo->save();
            } catch (\Exception $e) {
                dd($e->getMessage());
            }
        }
        return redirect()->back();
    }

    // Add blogs

    public function create_blog()
    {
        return view('backend.settings.add-blog');
    }

    public function store_blog(Request $request)
    {

        $validateData = $request->validate([
            'photo' => 'required',
            'category' => 'required',
            'title' => 'required',
            'blog' => 'required',
        ]);

        $image = $request->file('photo')->store('images', 'public');

        $photo = new Blog();
        $photo->photo = $image;
        $photo->category = $request->category;
        $photo->title = $request->title;
        $photo->blog = $request->blog;

        $photo->save();

        return redirect()->route('blogs');
    }

    public function edit_blog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('backend.settings.edit-blogs', compact('blog'));
    }

    public function update_blog(Request $request, $id)
    {
        $validateData = $request->validate([
            'photo' => 'required',
            'category' => 'required',
            'title' => 'required',
            'blog' => 'required',
        ]);

        $blog = Blog::find($id);
        $blog->category = $request->category;
        $blog->title = $request->title;
        $blog->blog = $request->blog;

        if ($request->hasFile('photo')) {
            Storage::find($id)->delete('public/' . $blog->photo);
            $image = $request->file('photo')->store('images', 'public');
            $blog->photo = $image;
        }

        $blog->save();

        return redirect()->route('blogs');
    }

    public function delete_blog(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect()->route('blogs');

    }

    // Blogs using NiceAdmin Template

    public function manage_blogs()
    {
        $blogs = Blog::all();
        return view('backend.settings.blogs', compact('blogs'));
    }

    // General Settings

    public function general_settings()
    {
        $generalSetting = GeneralSetting::firstOrFail();
        return view('backend.settings.general-settings',compact('generalSetting'));
        // return view('backend.settings.general-settings', compact('generalSetting'));
    }

    public function general_settings_store(Request $request)
    {
        $validateData = $request->validate([
            'website_name' => 'max:200',
            'favicon' => 'mimes:jpg,bmp,png',
            'logo' => 'mimes:jpg,bmp,png',
            'title' => 'max:100',
            'subtitle' => 'max:500',
            'paragraph' => 'max:1000',
            'button_left' => 'max:50',
            'button_right' => 'max:50',
            'banner_image' => 'mimes:jpg,bmp,png',
        ]);

        $existingSettings = GeneralSetting::firstOrFail();

        if ($existingSettings) {
            // Delete previous record and associated images
            Storage::delete($existingSettings->favicon);
            Storage::delete($existingSettings->logo);
            Storage::delete($existingSettings->banner_image);

            $existingSettings->delete();
        }

        $data = new GeneralSetting();

        $image1 = $request->file('favicon')->store('images', 'public');

        $image2 = $request->file('logo')->store('images', 'public');

        $image3 = $request->file('banner_image')->store('images', 'public');

        $data->website_name = $request->website_name;
        $data->favicon = $image1;
        $data->logo = $image2;
        $data->title = $request->title;
        $data->subtitle = $request->subtitle;
        $data->paragraph = $request->paragraph;
        $data->button_left = $request->button_left;
        $data->button_right = $request->button_right;
        $data->banner_image = $image3;

        $data->save();

        return redirect()->back();
    }


    // Manage Services

    public function manage_services(){
        $manageServices = ManageServices::all();
        return view('backend.settings.manage-services', compact('manageServices'));
    }

    // Add Services

    public function add_services(){
        return view('backend.settings.add-services');
    }

    public function add_services_store(Request $request){
        $validatedData = $request->validate([
            'title' => 'string',
            'description' => 'string|max:500',
            'icon' => 'mimes:jpg,bmp,png'
        ]);

        $icon = $request->file('icon')->store('images', 'public');

        $service = new ManageServices();

        $service->title = $request->title;
        $service->description = $request->description;
        $service->icon = $icon;

        $service->save();

        return redirect()->route('manage-services');

    }

    public function edit_services($id){
        $service = ManageServices::findOrFail($id);
        return view('backend.settings.edit-services', compact('service'));
    }

    public function update_services(Request $request, $id){

        $validateData = $request->validate([
            'title' => 'string',
            'description' => 'string|max:500',
            'icon' => 'mimes:jpg,bmp,png'
        ]);

        $existingIcon = ManageServices::findOrFail($id);

        if($existingIcon){
            Storage::delete($existingIcon->icon);

            $existingIcon->delete();
        }

        $icon = $request->file('icon')->store('images', 'public');

        $service = new ManageServices();

        $service->title = $request->title;
        $service->description = $request->description;
        $service->icon = $icon;

        $service->save();

        return redirect()->route('manage-services');

    }

    public function delete_services($id){
        $service = ManageServices::findOrFail($id);
        $service->delete();
        return redirect()->route('manage-services');
    }


    // Manage About Us

    public function manage_about_us(){
        $manageAboutUs = ManageAboutUs::firstOrFail();
        return view('backend.settings.manage-about-us', compact('manageAboutUs'));
    }

    public function store_about_us(Request $request){
        $dataValidation = $request->validate([
            'title' => 'string',
            'description' => 'string|max:2000',
            'image' => 'mimes:jpg,bmp,png'
        ]);

        $savedImage = ManageAboutUs::firstOrFail();

        if($savedImage){
            Storage::delete($savedImage->image);
            $savedImage->delete();
        }

        $image = $request->file('image')->store('images', 'public');

        $aboutUs = new ManageAboutUs();

        $aboutUs->title = $request->title;
        $aboutUs->description = $request->description;
        $aboutUs->image = $image;

        $aboutUs->save();

        return redirect()->back();

    }

    // Manage Portfolio

    public function manage_portfolio(){
        $managePortfolio = ManagePortfolio::all();
        return view('backend.settings.manage-portfolio', compact('managePortfolio'));
    }


    public function create_portfolio(){
        $managePortfolio = ManagePortfolioTitle::firstOrFail();
        return view('backend.settings.create-portfolio', compact('managePortfolio'));
    }

    public function store_portfolio(Request $request){
        $dataValidation = $request->validate([
            'category' => 'string',
            'service' => 'string',
            'image' => 'mimes:jpg,bmp,png'
        ]);

        $image = $request->file('image')->store('images', 'public');

        $managePortfolio = new ManagePortfolio();

        $managePortfolio->category = $request->category;
        $managePortfolio->service = $request->service;
        $managePortfolio->image = $image;

        $managePortfolio->save();

        return redirect()->route('manage-portfolio');
    }

    public function edit_portfolio($id){
        $managePortfolio = ManagePortfolio::findOrFail($id);
        return view('backend.settings.edit-portfolio', compact('managePortfolio'));
    }

    public function update_portfolio(Request $request, $id){
        $dataValidation = $request->validate([
            'category' => 'string',
            'service' => 'string',
            'image' => 'mimes:jpg,bmp,png'
        ]);

        $existingImage = ManagePortfolio::findOrFail($id);
        if($existingImage){
            Storage::delete($existingImage->image);
            $existingImage->delete();
        }

        $image = $request->file('image')->store('images', 'public');

        $managePortfolio = new ManagePortfolio();

        $managePortfolio->category = $request->category;
        $managePortfolio->service = $request->service;
        $managePortfolio->image = $image;

        $managePortfolio->save();

        return redirect()->route('manage-portfolio');
    }

    public function delete_portfolio($id){
        $managePortfolio = ManagePortfolio::findOrFail($id);
        $managePortfolio->delete();
        return redirect()->back();
    }


    public function create_portfolio_title(Request $request){
        $dataValidation = $request->validate([
            'title' => 'string',
            'description' => 'string',
        ]);

        $exisstingContent = ManagePortfolioTitle::first();
        if($exisstingContent){
            $exisstingContent->delete();
        }

        $managePortfolio = new ManagePortfolioTitle();

        $managePortfolio->title = $request->title;
        $managePortfolio->description = $request->description;

        $managePortfolio->save();
        return redirect()->back();

    }

    //  Manage Members

    public function manage_members(){
        $manageMembers = ManageMembers::all();
        return view('backend.settings.manage-members', compact('manageMembers'));
    }

    public function create_members(){
        $managingMembers = ManageMemberTitle::firstOrFail();
        return view('backend.settings.create-members', compact('managingMembers'));
    }

    public function store_title_members(Request $request){

        $old = ManageMemberTitle::first();
        $old->delete();

        $dataValidation = $request->validate([
            'title' => 'string',
            'description' => 'string',
        ]);

        $manageMembers = new ManageMemberTitle();

        $manageMembers->title = $request->title;
        $manageMembers->description = $request->description;

        $manageMembers->save();
        return redirect()->back();
    }


    public function store_members(Request $request){
        $dataValidation = $request->validate([
            'name' => 'string',
            'designation' => 'string',
            'image' => 'mimes:jpg,bmp,png'
        ]);

        $image = $request->file('image')->store('images', 'public');

        $manageMembers = new ManageMembers();

        $manageMembers->name = $request->name;
        $manageMembers->designation = $request->designation;
        $manageMembers->image = $image;

        $manageMembers->save();

        return redirect()->route('manage-members');
    }


    public function edit_members($id){
        $managingMembers = ManageMemberTitle::findOrFail($id);
        $manageMembers = ManageMembers::findOrFail($id);
        return view('backend.settings.edit-members', compact('managingMembers', 'manageMembers'));
    }


    public function update_members(Request $request, $id){
        $dataValidation = $request->validate([
            'name' => 'string',
            'designation' => 'string',
            'image' => 'mimes:jpg,bmp,png'
        ]);

        $existingImage = ManageMembers::findOrFail($id);
        if($existingImage){
            Storage::delete($existingImage->image);
            $existingImage->delete();
        }

        $image = $request->file('image')->store('images', 'public');

        $manageMembers = new ManageMembers();

        $manageMembers->name = $request->name;
        $manageMembers->designation = $request->designation;
        $manageMembers->image = $image;

        $manageMembers->save();

        return redirect()->route('manage-members');
    }


    public function delete_members($id){
        $deleteMemeber = ManageMembers::findOrFail($id);
            $deleteMemeber->delete();

            return redirect()->back();
        }


        // Client Feedback

        public function client_feedback(){
            $clientFeedback = ClientFeedback::all();
            return view('backend.settings.client-feedback', compact('clientFeedback'));
        }


        public function create_client_feedback(){
            return view('backend.settings.create-feedback');
        }


        public function store_client_feedback(Request $request){
           $validateDate = $request->validate([
            'name' => 'string',
            'feedback' => 'max:700',
            'image' => 'mimes:jpg,bmp,png'
           ]);

           $image = $request->file('image')->store('images', 'public');

           $clientFeedback = new ClientFeedback();

           $clientFeedback->name = $request->name;
           $clientFeedback->feedback = $request->feedback;
           $clientFeedback->image = $image;

           $clientFeedback->save();
           return redirect()->route('client-feedback');
        }


        public function edit_client_feedback($id){
            $clientFeedback = ClientFeedback::findOrFail($id);
            return view('backend.settings.edit-feedback', compact('clientFeedback'));
        }


        public function update_client_feedback(Request $request, $id){
            $validateDate = $request->validate([
             'name' => 'string',
             'feedback' => 'max:700',
             'image' => 'mimes:jpg,bmp,png'
            ]);

            $existingData = ClientFeedback::findOrFail($id);

            if($existingData) {
                Storage::delete($existingData->image);
                $existingData->delete();
            }

            $image = $request->file('image')->store('images', 'public');

            $clientFeedback = new ClientFeedback();

            $clientFeedback->name = $request->name;
            $clientFeedback->feedback = $request->feedback;
            $clientFeedback->image = $image;

            $clientFeedback->save();
            return redirect()->route('client-feedback');
         }


         public function delete_client_feedback($id){
            $deleteClient = ClientFeedback::findOrFail($id);
                $deleteClient->delete();

                return redirect()->back();
            }





    }


