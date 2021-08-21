<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Giveaway;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function homeContact()
    {
        return view('frontend.include.contact');
    }

    public function homeAbout()
    {
        return view('frontend.include.about');
    }

    public function homeCopyright()
    {
        return view('frontend.include.copyright');
    }

    public function homePrivacy()
    {
        return view('frontend.include.privacy');
    }

    public function homeTerms()
    {
        return view('frontend.include.terms');
    }


    // ALL POST SHOW  HOME PAGE
    public function index()
    {
        $posts = Product::where('status', 1)->orderBy('id', 'DESC')->paginate(10);

        $popularpost = Product::where('status', 1)->OrderBy('view_count', 'DESC')->limit(5)->get();

        // Category Wise Product Show (Tech News)
        $skip_category = Category::skip(0)->first();

        $skip_products = Product::where('status', 1)->where('category_id', $skip_category->id)->orderBy('id', 'DESC')->get();

        return view('frontend.index', compact('posts', 'popularpost', 'skip_products', 'skip_category'));
    }

    public function homeProductShow($slug)
    {
        $post = Product::where('status', 1)->where('slug_en', $slug)->first();

        $visitors = $post->view_count + 1;
        $post->update(['view_count' => $visitors]);


        $allposts = Product::where('status', 1)->latest()->orderBy('id', 'DESC')->limit(4)->get();

        $previous = Product::where('status', 1)->where('id', '<', $post->id)->first();
        $next = Product::where('status', 1)->where('id', '>', $post->id)->first();

        return view('frontend.show', compact('post', 'allposts', 'previous', 'next'));
    }

    public function categoryPostShow($slug)
    {
        $category = Category::where('slug_en', $slug)->first();
        $productByCategory = Product::where('status', 1)->where('category_id', $category->id)->paginate(10);

        return view('frontend.category_wise', compact('productByCategory', 'category'));
    }

    public function productSearch(Request $request)
    {
        $request->validate(['search' => 'required']);

        $item = $request->search;
        $popularpost = Product::where('status', 1)->OrderBy('view_count', 'DESC')->limit(5)->get();

        $skip_category = Category::skip(6)->first();

        $skip_products = Product::where('status', 1)->where('category_id', '==', $skip_category)
            ->orderBy('id', 'DESC')->get();
        $posts = Product::where('status', 1)->where('name_en', 'LIKE', "%$item%")->paginate(10);

        return view('frontend.search_post', compact('posts', 'skip_products', 'popularpost'));
    }


    // SENT MESSAGE FROM FRONTEND
    public function sentMessage(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|max:50|min:4',
                'email' => 'required|email|max:50|min:8',
                'message' => 'required|min:2',
            ],
            [
                'name.required' => 'A name is required',
                'email.required' => 'A valide email is required'
            ]
        );

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        Session::flash('message', 'Thanks for contacting us, we will get back to you as soon as possible.');

        return redirect()->back();
    }

    public function sentContact(Request $request)
    {
        // dd($request->all());
        $this->validate(
            $request,
            [
                'name' => 'required|max:50|min:4',
                'email' => 'required|email|max:50|min:8',
                'message' => 'required|min:2',
            ],
            [
                'name.required' => 'A name is required',
                'email.required' => 'A valide email is required',
                'message.required' => 'A valide message is required'
            ]
        );

        $comment = new Comment();
        $comment->product_id = $request->post_id;
        $comment->name = $request->name;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->message = $request->message;
        $comment->status = 0;
        $comment->save();

        Session::flash('message', 'Comment Submitted Successfully');

        return redirect()->back();
    }
}
