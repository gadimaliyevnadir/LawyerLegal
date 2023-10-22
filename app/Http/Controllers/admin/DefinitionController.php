<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Definition\CreateRequest;
use App\Http\Requests\Definition\UpdateRequest;
use App\Models\Definition;
use Illuminate\Http\Request;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class DefinitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $definitions=Definition::paginate(10);
        return view('admin.definitions.index',compact('definitions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.definitions.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {

        $data=$request->validated();
        Definition::create($data);
        return redirect()->route('admin.definitions.index');
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
    public function edit(Definition $definition)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.definitions.update',compact('definition','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Definition $definition)
    {
        $data=$request->validated();
        $definition->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Definition $definition)
    {
        $definition->delete();
        return redirect()->back();
    }
}
