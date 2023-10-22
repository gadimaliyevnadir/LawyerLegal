<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Banner\CreateRequest;
use App\Http\Requests\Banner\UpdateRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners=Banner::paginate(10);
        return view('admin.banners.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.banners.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $data['image']=$this->uploadFile($request->file('image'),'Banners');
        Banner::create($data);
        return redirect()->route('admin.banners.index');
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
    public function edit(Banner $banner)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.banners.update',compact('banner','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Banner $banner)
    {
        $data=$request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'),'Banners');
        }
        $banner->update($data);
        return redirect()->back();
    }
    public function uploadFile(UploadedFile $file,$path='Banners'){
        $imgName= Str::uuid()->toString().'.'.$file->extension();
        $file->storeAs($path,$imgName);
        return $path.'/'.$imgName;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->back();
    }
}
