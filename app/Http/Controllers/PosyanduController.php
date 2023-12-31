<?php

namespace App\Http\Controllers;

use App\Models\Posyandu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PosyanduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role != 0) {
            return redirect('403');
        }
        $data = Posyandu::paginate(10);
        return view('admin.posyandu', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->role != 0) {
            return redirect('403');
        }
        Posyandu::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'kalurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
        ]);

        return redirect()->route('posyandu.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        if(Auth::user()->role != 0) {
            return redirect('403');
        }
        $data = [
            'name' => $request->name,
            'alamat' => $request->alamat,
            'kalurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kabupaten' => $request->kabupaten,
        ];

        Posyandu::where('id', $id)->update($data);
        return redirect()->route('posyandu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->role != 0) {
            return redirect('403');
        }
        Posyandu::where('id', $id)->delete();
        return redirect()->route('posyandu.index');
    }
}