<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Alert;
class TagController extends Controller
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
        $tag = Tag::all();
        return view('tag.index',compact('tag'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tag.create');
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
            'nama' => 'required|unique:tags'
        ]);

        $tag = new Tag;
        $tag->nama = $request->nama;
        $tag->slug = str_slug($request->nama,'-');
        $tag->save();
        return redirect()->route('tag.index');
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
        // memanggil data pos berdasrkan id di halaman pos edit
        $tag = Tag::findOrFail($id);
        return view('tag.edit',compact('tag'));
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
         // unique dihapus karena ketika update data title tidak diubah juga tidak apa-apa
        $this->validate($request,[
            'nama' => 'required|unique:tags',
        ]);

        // update data berdasarkan id
        $tag = Tag::findOrFail($id);
        $tag->nama = $request->nama;
        $tag->slug = str_slug($request->nama,'-');
        $tag->save();
        return redirect()->route('tag.index');
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
        $tag = Tag::findOrFail($id);
        $tag->delete();
        return redirect()->route('tag.index');  
    }
}
