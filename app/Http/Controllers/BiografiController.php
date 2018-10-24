<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biografi;
use File;
use Alert;
class BiografiController extends Controller
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
        //menampilkan semua data post melalui model 
        $biografi = Biografi::all();
        return view('biografi.index',compact('biografi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biografi.create');
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
        $this->validate($request,[
            
            'foto' => 'required',
            'nama' => 'required|unique:biografis',
            'deskripsi' => 'required'
            
        ]);
        $biografi = new Biografi;
        $biografi->foto = $request->foto;
        $biografi->nama = $request->nama;
        $biografi->deskripsi = $request->deskripsi;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/images/fotobiografi/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $biografi->foto = $filename;
            }
        $biografi->save();
        return redirect()->route('biografi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // memanggil data berdasrkan id di halaman  edit
        $biografi = Biografi::findOrFail($id);
        return view('biografi.edit',compact('biografi'));
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
            
            
            'nama' => 'required||unique:biografis',
            'deskripsi' => 'required',
        ]);
        $biografi = Biografi::findOrFail($id);
        $biografi->nama = $request->nama;
        $biografi->deskripsi = $request->deskripsi;
         // edit upload foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/images/fotobiografi/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus foto lama, jika ada
        if ($biografi->foto) {
        $old_foto = $biografi->foto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/images/fotobiografi'
        . DIRECTORY_SEPARATOR . $biografi->foto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $biografi->foto = $filename;
}
    
        $biografi->save();
        // dd($biografi);
        return redirect()->route('biografi.index');
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
        // delete data beradasarkan id
        $biografi = Biografi::findOrFail($id);
        $biografi->delete();
        return redirect()->route('biografi.index');  
    }
}
