<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Kategori;
use File;
use Alert;
class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $artikel = Artikel::with('Kategori')->get();
        return view('artikel.index',compact('artikel'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::all();     
        return view('artikel.create',compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Data Successfully Saved', 'Good Job!')->autoclose('1700');
        // return $request->all();
        $this->validate($request,[
            'foto' => 'required',
            'judul' => 'required|unique:artikels',
            'deskripsi' => 'required',
            'kategori_id' => 'required',
            'tag' => 'required'

            
        ]);
        $artikel = new Artikel;
        $artikel->foto = $request->foto;
        $artikel->judul = $request->judul;
        $artikel->slug = str_slug($request->judul,'-');
        $artikel->deskripsi = $request->deskripsi;
        $artikel->kategori_id = $request->kategori_id;
        $artikel->tag = json_encode($request->tag);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/images/fotoartikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $artikel->foto = $filename;
            }
        $artikel->save();
        return redirect()->route('artikel.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::finfOrFail($id);
        return view('page.show',compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        $kategori = Kategori::all();
        $selectedKategori = Artikel::findOrFail($id)->kategori_id;
       
        return view('artikel.edit',compact('artikel','kategori','selectedKategori'));
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
        Alert::success('Data Successfully Changed', 'Good Job!')->autoclose('1700');
        $this->validate($request,[
            
            'judul' => 'required|unique:artikels',
            'deskripsi' => 'required',
            'kategori_id' => 'required',

        ]);
        $artikel = Artikel::findOrFail($id);
        $artikel->judul = $request->judul;
        $artikel->deskripsi = $request->deskripsi;
        $artikel->kategori_id = $request->kategori_id;
        $artikel->tag = json_encode($request->tag);

         // edit upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/images/fotoartikel/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus foto lama, jika ada
        if ($artikel->foto) {
        $old_foto = $artikel->foto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/images/fotoartikel'
        . DIRECTORY_SEPARATOR . $artikel->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $artikel->foto = $filename;
}
    
        $artikel->save();
        // dd($artikel);
        return redirect()->route('artikel.index');
    }
        

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Data Successfully Deleted', 'Good Job!')->autoclose('1700');
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->route('artikel.index');
    }
}
