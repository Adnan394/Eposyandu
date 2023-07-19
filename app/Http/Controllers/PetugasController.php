<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PetugasController extends Controller
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
        $data = Petugas::paginate(10);
        return view('admin/petugas', ['data' => $data]);
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
        $path = 'Petugas'; 
        $file = $request->file('image');
        Storage::putFileAs($path, $file, $file->getClientOriginalName());

        Petugas::create([
            'name' =>$request->name,
            'jabatan' =>$request->jabatan,
            'jenis_kelamin' =>$request->jenis_kelamin,
            'tempat_lahir' =>$request->tempat_lahir,
            'tanggal_lahir' =>$request->tanggal_lahir,
            'alamat' =>$request->alamat,
            'no_telp' =>$request->no_telp,
            'image' =>$path . '/' . $file->getClientOriginalName(),
        ]);

        return redirect()->route('petugas.index');
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
        $path = 'Petugas'; 
        $file = $request->file('image');
        Storage::putFileAs($path, $file, $file->getClientOriginalName());
        
        $data = [
            'name' =>$request->name,
            'jabatan' =>$request->jabatan,
            'jenis_kelamin' =>$request->jenis_kelamin,
            'tempat_lahir' =>$request->tempat_lahir,
            'tanggal_lahir' =>$request->tanggal_lahir,
            'alamat' =>$request->alamat,
            'no_telp' =>$request->no_telp,
            'image' =>$path . '/' . $file->getClientOriginalName(),
        ];

        Petugas::where('id', $id)->update($data);
        return redirect()->route('petugas.index');
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
        Petugas::where('id', $id)->delete();
        return redirect()->route('petugas.index');
    }
}