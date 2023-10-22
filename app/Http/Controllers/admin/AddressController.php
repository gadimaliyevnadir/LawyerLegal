<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Address\CreateRequest;
use App\Http\Requests\Address\UpdateRequest;
use App\Models\Addresse;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $addresses=Addresse::paginate(10);
        return view('admin.address.index',compact('addresses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.address.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Addresse::create($data);
        return redirect()->route('admin.address.index');
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
    public function edit(Addresse $address)
    {
       return view('admin.address.update',compact('address'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Addresse $address)
    {
        $data=$request->validated();
        $address->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Addresse $address)
    {
        $address->delete();
        return redirect()->back();
    }
}
