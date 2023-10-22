<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Practice\CreateRequest;
use App\Http\Requests\Practice\UpdateRequest;
use App\Models\Practice;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class PracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $practices = Practice::paginate(10);
        return view('admin.practices.index', compact('practices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.practices.create',compact('locales'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data = $request->validated();
        $data['icon'] = $this->uploadFile($request->file('icon'), 'Practices');;
        Practice::create($data);
        return redirect()->route('admin.practices.index');
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
    public function edit(Practice $practice)
    {
        $locales = LaravelLocalization::getSupportedLocales();
        return view('admin.practices.update', compact('practice','locales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Practice $practice)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'));
        }
        $practice->update($data);
        return redirect()->back();
    }
    public function uploadFile(UploadedFile $file, $path = 'Practices')
    {
        $imgName = Str::uuid()->toString() . '.' . $file->extension();
        $file->storeAs($path, $imgName);
        return $path . '/' . $imgName;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Practice $practice)
    {
        $practice->delete();
        return redirect()->back();
    }
}

