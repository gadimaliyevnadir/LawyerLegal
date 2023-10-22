<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Iframe\CreateRequest;
use App\Http\Requests\Iframe\UpdateRequest;
use App\Models\Iframe;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class IframeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iframes=Iframe::paginate(10);
       return view('admin.iframes.index',compact('iframes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view("admin.iframes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        $data=$request->validated();
        Iframe::create($data);
        return redirect()->route('admin.iframes.index');
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
    public function edit(Iframe $iframe)
    {
     return view('admin.iframes.update',compact('iframe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Iframe $iframe)
    {
        $data=$request->validated();
        $iframe->update($data);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Iframe $iframe)
    {
        $iframe->delete();
        return redirect()->back();
    }
}
