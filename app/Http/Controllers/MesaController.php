<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMesaRequest;
use App\Models\Mesa;
use Illuminate\Http\Request;
use App\Http\Resources\MesaResource;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = Mesa::all();
        return response()->json($mesas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    public function store(StoreMesaRequest $request)
    {
        // $mesa = new Mesa;
        // $mesa->fname = $request->fname;
        // $mesa->lname = $request->lname;
        // $mesa->email = $request->email;
        // $mesa->password = $request->password;
        // $mesa->save();
        // return response()->json([
        //     "message" => "Mesa record created",
        //     "added" => $mesa
        // ], 201);
        return MesaResource::make(Mesa::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return MesaResource::make(Mesa::where('id', $id)->firstOrFail());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mesa = Mesa::find($id);
        $mesa->fname = $request->fname;
        $mesa->lname = $request->lname;
        $mesa->email = $request->email;
        $mesa->password = $request->password;
        $mesa->save();
        return response()->json([
            "message" => "Mesa updated successfully",
            "updated" => $mesa
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mesa = Mesa::find($id);
        $mesa->delete();
        return response()->json([
            "message" => "Mesa deleted"
        ], 202);
    }
}
