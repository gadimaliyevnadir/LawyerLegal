<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RightAligned\CreateRequest;
use App\Http\Requests\RightAligned\UpdateRequest;
use App\Models\Rightaligned;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class RightAlignedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rightaligneds=Rightaligned::paginate(10);
        return view('admin.rightaligned.index',compact('rightaligneds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.rightaligned.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $data['image']=$this->uploadFile($request->file('image'),'Rightaligned');
        Rightaligned::create($data);
        return redirect()->route('admin.rightaligned.index');
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
    public function edit(Rightaligned $rightaligned)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.rightaligned.update',compact('rightaligned','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Rightaligned $rightaligned)
    {
        $data=$request->validated();
        if($request->hasFile('image')){
            $data['image'] = $this->uploadFile($request->file('image'), 'Rightaligned');
        }
        $rightaligned->update($data);
        return redirect()->back();
    }
    public function uploadFile(UploadedFile $file,$path='Rightaligned'){
        $imgName=Str::uuid()->toString().'.'.$file->extension();
        $file->storeAs($path,$imgName);
        return $path.'/'.$imgName;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rightaligned $rightaligned)
    {
        $rightaligned->delete();
        return redirect()->back();
    }
}
