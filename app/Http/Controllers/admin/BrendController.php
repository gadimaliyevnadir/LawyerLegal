<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brend\CreateRequest;
use App\Http\Requests\Brend\UpdateRequest;
use App\Models\Brend;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class BrendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $brends=Brend::paginate(10);
       return view('admin.brends.index',compact('brends'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brends.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        $data['image']=$this->uploadFile($request->file('image'),'Brends');
        Brend::create($data);
        return redirect()->route('admin.brends.index');
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
    public function edit(Brend $brend)
    {
        return view('admin.brends.update',compact('brend'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Brend $brend)
    {
        $data=$request->validated();
        if ($request->hasFile('image')) {
            $data['image'] = $this->uploadFile($request->file('image'));
        }
        $brend->update($data);
        return redirect()->back();
    }
    public function uploadFile(UploadedFile $file,$path='Brends'){
        $imgName=Str::uuid()->toString().'.'.$file->extension();
        $file->storeAs($path,$imgName);
        return $path.'/'.$imgName;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Brend $brend)
    {
        $brend->delete();
        return redirect()->back();
    }
}
