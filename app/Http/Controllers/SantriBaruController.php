<?php

namespace App\Http\Controllers;

use App\SantriBaru;
use Illuminate\Http\Request;

class SantriBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = SantriBaru::paginate(10);

        return view('SantriBaru.index', ['santri_barus' => $item]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('SantriBaru.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new SantriBaru;
        $tambah->id = $request['id'];
        $tambah->nama = $request['nama'];
        $tambah->alamat = $request['alamat'];
        $tambah->ttl = $request['ttl'];
        $tambah->save();

        return redirect('/hape');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SantriBaru  $santriBaru
     * @return \Illuminate\Http\Response
     */
    public function show(SantriBaru $santriBaru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SantriBaru  $santriBaru
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = SantriBaru::find($id);
        return view('SantriBaru.edit', ['SantriBarus' => $edit]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SantriBaru  $santriBaru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = SantriBaru::find($id);
        $edit->id = $request['id'];
        $edit->nama = $request['nama'];
        $edit->alamat = $request['alamat'];
        $edit->ttl = $request['ttl'];
        $edit->update();

        return redirect ('/hape');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SantriBaru  $santriBaru
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = SantriBaru::where('id', $id);
        $hapus->delete();

        return redirect ('/hape');
    }
}
