<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\CreateRequest;
use App\Http\Requests\Blog\UpdateRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=Blog::paginate(10);

        return view("admin.blogs.index",compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags=Tag::all();
        $categories=Category::all();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.blogs.create',compact('locales', 'categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data = $request->validated();
        $data['image'] = $this->uploadFile($request->file('image'), 'Blogs');
        unset($data['tag_id']);
        $create = Blog::create($data);
        if($create){
            $create->tags()->attach($request->tag_id);
        }
        return redirect()->route('admin.blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        $tags=Tag::all();
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.blogs.update',compact('blog','locales','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Blog $blog)
    {
       $data=$request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'),'Blogs');
        }
        unset($data['tag_id']);
        $update = $blog->update($data);
        if ($update) {
            $update->tags()->sync($request->tag_id);
        }
        return redirect()->back();
    }
    public function uploadFile(UploadedFile $file,$path='Blogs'){
        $imgName=Str::uuid()->toString().'.'.$file->extension();
        $file->storeAs($path,$imgName);
        return $path.'/'.$imgName;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BLog $blog)
    {
        $blog->delete();
        return redirect()->back();
    }
}
