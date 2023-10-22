<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TextSample\CreateRequest;
use App\Http\Requests\TextSample\UpdateRequest;
use App\Models\Textsample;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class TextSampleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $textsamples=Textsample::paginate(10);
        return view('admin.textsamples.index',compact('textsamples'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.textsamples.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
       $data=$request->validated();
       Textsample::create($data);
       return redirect()->route('admin.textsamples.index');
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
    public function edit(Textsample $textsample)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.textsamples.update',compact('textsample','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Textsample $textsample)
    {
        $data=$request->validated();
        $textsample->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Textsample $textsample)
    {
        $textsample->delete();
        return redirect()->back();
    }
}
