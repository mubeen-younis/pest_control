<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\NavItem;
use App\Models\SubNavItem;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request){

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'msg_subject' =>'required|min:5',
            'message' =>'required|min:10'

        ]);
        

        $newProduct = Contact::create($data);
        return redirect(route('contact'))->with('success', 'Message Sent Successfuly');    }




        public function dynamic(){
            return view('backend.settings.create-nav-item');
        }



        public function save(Request $request){

            NavItem::create([
                'name' => $request->name,
                'link' => $request->link,
                'status' => $request->status,
            ]);
            return redirect()->back()->with('success', 'Navbar Item Added Successfully');
}



public function sub_nav_items_create(){
    $navItem = NavItem::where('status', 'active')->get();
    return view('backend.settings.create-sub-nav-item', compact('navItem'));
}



public function sub_nav_items_save(Request $request){

    $subNavItem = SubNavItem::create([
        'name' => $request->name,
        'link' => $request->link,
        'status' => $request->status,
        'nav_item_id' => $request->nav_item_id,
    ]);
    $subNavItem->save();
    return redirect()->back()->with('success', 'Navbar Item Added Successfully');

}



}