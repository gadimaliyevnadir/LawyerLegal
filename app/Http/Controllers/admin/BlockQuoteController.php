<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blockquote\CreateRequest;
use App\Http\Requests\Blockquote\UpdateRequest;
use App\Models\Blockquote;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class BlockQuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blockquotes=Blockquote::paginate(10);
        return view('admin.blockquotes.index',compact('blockquotes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view("admin.blockquotes.create",compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Blockquote::create($data);
        return redirect()->route('admin.blockquotes.index');
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
    public function edit(Blockquote $blockquote)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.blockquotes.update',compact('blockquote','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Blockquote $blockquote)
    {
        $data=$request->validated();
        $blockquote->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blockquote $blockquote)
    {
        $blockquote->delete();
        return redirect()->back();
    }
}
