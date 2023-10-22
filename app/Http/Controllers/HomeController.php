<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\QuoteRequest;
use App\Models\Addresse;
use App\Models\Banner;
use App\Models\Blockquote;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Definition;
use App\Models\Leftaligned;
use App\Models\News;
use App\Models\Practice;
use App\Models\Quote;
use App\Models\Rightaligned;
use App\Models\Slider;
use App\Models\Textsample;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function blogs($id){
         $blogs=Blog::with('tags')->where('category_id',$id)->paginate(5);
        $blog = Blog::with('tags')->find(1);
        $banners = Banner::query()->where('page', 'Blog')->get();
        return view('front.blogs.index', compact('banners','blog', 'blogs'));

    }

    public function index(){
        $sliders=Slider::all();
        return view('front.home',compact('sliders'));
    }
    public function about()
    {
        $banners=Banner::query()->where('page','About')->get();
        return view('front.about',compact('banners'));
    }
    public function practiceArea(){
        $practices=Practice::all();
        $banners = Banner::query()->where('page', 'Practice')->get();
        return view('front.practiceArea',compact('banners','practices'));
    }
    public function contact(){
        $addresses=Addresse::all();
        $banners = Banner::query()->where('page', 'Contact')->get();
        return view('front.contact',compact('banners', 'addresses'));
    }
    public function blog(){
        $blogs = Blog::paginate(5);
        $blog = Blog::with('tags')->find(1);
        $banners = Banner::query()->where('page', 'Blog')->get();
        return view('front.blogs.index',compact('banners','blog','blogs'));
    }
    public function blogDetails(){
        $banners = Banner::query()->where('page', 'Blog_details')->get();
        return view('front.blogs.details',compact('banners'));
    }
    public function elements(){
        $textsample=Textsample::query()->firstOrFail();
        $leftaligned=Leftaligned::query()->firstOrFail();
        $rightaligned=Rightaligned::query()->firstOrFail();
        $blockquote=Blockquote::query()->firstOrFail();
        $definitions=Definition::all();
        $banners = Banner::query()->where('page', 'Elements')->get();
        return view('front.blogs.elements',compact('banners','textsample','leftaligned','rightaligned','definitions', 'blockquote'));
    }
    public function newsDetails($id){
        $news=News::query()->where('id',$id)->firstOrFail();
        return view('front.newsdetail',compact('news'));
    }
    public function contactForm(ContactRequest $request){
        $data=$request->validated();
        Contact::create($data);
        return redirect()->back()->with(['type' => 'success', 'message' => 'Form Göndərildi']);
    }
    public function quoteForm(QuoteRequest $request){
        $data=$request->validated();
        Quote::create($data);
        return redirect()->back()->with(['type' => 'success', 'message' => 'Form Göndərildi']);
    }
}
