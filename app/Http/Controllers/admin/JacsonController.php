<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Jacson\CreateRequest;
use App\Http\Requests\Jacson\UpdateRequest;
use App\Models\Jacson;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;

class JacsonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jacsons=Jacson::paginate(10);
        return view('admin.jacsons.index',compact('jacsons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.jacsons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
       $data=$request->validated();
       $data['image']=$this->uploadFile($request->file('image'),'Jacsons');
       Jacson::create($data);
       return redirect()->route('admin.jacsons.index');
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
    public function edit(Jacson $jacson)
    {
        return view('admin.jacsons.update',compact('jacson'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Jacson $jacson)
    {
       $data=$request->validated();
       if($request->hasFile('image')){
            $data['image'] = $this->uploadFile($request->file('image'), 'Jacsons');
       }
       $jacson->update($data);
       return redirect()->back();
    }
    public function uploadFile(UploadedFile $file,$path="Jacsons"){
        $imgName=Str::uuid()->toString().'.'.$file->extension();
        $file->storeAs($path,$imgName);
        return $path.'/'.$imgName;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jacson $jacson)
    {
        $jacson->delete();
        return redirect()->back();
    }
}
