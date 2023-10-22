<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LeftAligned\CreateRequest;
use App\Http\Requests\LeftAligned\UpdateRequest;
use App\Models\Leftaligned;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LeftAlignedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leftaligneds=Leftaligned::paginate(10);
       return view('admin.leftaligned.index',compact('leftaligneds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.leftaligned.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $data['image']=$this->uploadFile($request->file('image'),'Leftaligned');
        Leftaligned::create($data);
        return redirect()->route('admin.leftaligned.index');
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
    public function edit(Leftaligned $leftaligned)
    {
        $locales = LaravelLocalization::getSupportedLocales();
      return view('admin.leftaligned.update',compact('leftaligned','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Leftaligned $leftaligned)
    {
        $data=$request->validated();
        if($request->hasFile('image')){
            $data['image'] = $this->uploadFile($request->file('image'), 'Leftaligned');
        }
       $leftaligned->update($data);
       return redirect()->back();
    }
    public function uploadFile(UploadedFile $file,$path='Leftaligned'){
        $imgName=Str::uuid()->toString().'.'.$file->extension();
        $file->storeAs($path,$imgName);
        return $path.'/'.$imgName;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leftaligned $leftaligned)
    {
        $leftaligned->delete();
        return redirect()->back();
    }
}
