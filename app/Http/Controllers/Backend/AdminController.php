<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Giveaway;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Product
        $posts = Product::all();
        $activePosts = Product::where('status', 1)->get();
        $inActivePosts = Product::where('status', 0)->get();

        // Category
        $categories = Category::all();
        $activeCategory = Category::where('status', 1)->get();
        $InActiveCategory = Category::where('status', 0)->get();

        // Contact Message
        $contacts = Contact::all();
        $activeContact = Contact::where('seen', 'Yes')->get();
        $inActiveContact = Contact::where('seen', 'No')->get();


        return view('admin.dashboard', compact('posts', 'activePosts', 'inActivePosts', 'categories', 'activeCategory', 'InActiveCategory', 'contacts', 'activeContact', 'inActiveContact'));
    }

    public function adminLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function setting()
    {
        $setting = Admin::where('id', 1)->first();

        return view('admin.setting.index', compact('setting'));
    }

    public function settingUpdate(Request $request, $id)
    {

        $old_fav_icon = $request->old_fav_icon;
        $old_title_image = $request->old_title_image;

        // FAV ICON Image
        if (request()->has('fav_icon')) {
            $fav_icon = $request->file('fav_icon');
            $make_name = hexdec(uniqid()) . '.' . $fav_icon->getClientOriginalExtension();
            if ($old_fav_icon) {
                unlink($old_fav_icon);
            }
            Image::make($fav_icon)->resize(32, 32)->save('upload/setting/image/' . $make_name);
            $upload_fav_icon = 'upload/setting/image/' . $make_name;
        } else {
            $upload_fav_icon = $old_fav_icon;
        }

        // TITLE Image
        if (request()->has('title_image')) {
            $title_image = $request->file('title_image');
            $make_name_title = hexdec(uniqid()) . '.' . $title_image->getClientOriginalExtension();
            if ($old_title_image) {
                unlink($old_title_image);
            }
            Image::make($title_image)->resize(193, 45)->save('upload/setting/image/' . $make_name_title);
            $upload_title_image = 'upload/setting/image/' . $make_name_title;
        } else {
            $upload_title_image = $old_title_image;
        }

        $setting = Admin::findOrFail($id);
        $setting->website_title_en = $request->website_title_en;
        $setting->website_title_ban = $request->website_title_ban;
        $setting->copyright_text_en = $request->copyright_text_en;
        $setting->copyright_text_ban = $request->copyright_text_ban;
        $setting->fav_icon = $upload_fav_icon;
        $setting->title_image = $upload_title_image;

        $setting->update();

        $notification =  array(
            'message' => 'Setting Update Successfully',
            'alert-type' => 'info',
        );

        return redirect()->route('setting.index')->with($notification);
    }

    public function settingSocial()
    {

        $setting = Admin::find(1)->first();

        return view('admin.setting.social', compact('setting'));
    }

    public function settingSocialUpdate(Request $request, $id)
    {

        $social = Admin::findOrFail($id);
        $social->facebook_url = $request->facebook_url;
        $social->youtube_url = $request->youtube_url;
        $social->twitter_url = $request->twitter_url;
        $social->pinterest_url = $request->pinterest_url;
        $social->update();

        $notification =  array(
            'message' => 'Social Settings Update Successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }


    public function settingContact()
    {

        $setting = Admin::find(1)->first();

        return view('admin.setting.contact', compact('setting'));
    }

    public function settingContactUpdate(Request $request, $id)
    {

        $contact = Admin::findOrFail($id);
        $contact->address_en = $request->address_en;
        $contact->address_ban = $request->address_ban;
        $contact->email = $request->email;
        $contact->phone_en = $request->phone_en;
        $contact->phone_ban = $request->phone_ban;

        $contact->update();

        $notification =  array(
            'message' => 'Contact Settings Update Successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }

    public function settingSeo()
    {
        $setting = Admin::find(1)->first();
        return view('admin.setting.seo', compact('setting'));
    }

    public function settingSeoUpdate(Request $request, $id)
    {

        $seo = Admin::findOrFail($id);
        $seo->meta_title_en = $request->meta_title_en;
        $seo->meta_title_ban = $request->meta_title_ban;
        $seo->meta_description_en = $request->meta_description_en;
        $seo->meta_description_ban = $request->meta_description_ban;
        $seo->meta_keyword_en = $request->meta_keyword_en;
        $seo->meta_keyword_ban = $request->meta_keyword_ban;
        $seo->meta_author_en = $request->meta_author_en;
        $seo->meta_author_ban = $request->meta_author_ban;
        $seo->theme_color = $request->theme_color;
        $seo->update();

        $notification =  array(
            'message' => 'Seo Settings Update Successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }

    // Get All Content
    public function getAllContact()
    {
        $contacts = Contact::all();
        return view('admin.all_contact', compact('contacts'));
    }

    public function destroyContact($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        $notification =  array(
            'message' => 'Contact Delete Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function showContact($id)
    {
        $contact = Contact::findOrFail($id);
        if ($contact) {
            $contact->seen = 'Yes';
            $contact->update();
        }
        return view('admin.contact_show', compact('contact'));
    }
}
