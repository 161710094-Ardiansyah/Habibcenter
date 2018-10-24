<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListHome;
use Alert;
class ListHomeController extends Controller
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
        //menampilkan semua data post melalui model 'post'
        $listhome = ListHome::all();
        return view('listhome.index',compact('listhome'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'deskripsi' => 'required'
        ]);

        $listhome = new ListHome;
        $listhome->deskripsi = $request->deskripsi;
        $listhome->save();
        return redirect()->route('listhome.index');
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
        $listhome = ListHome::findOrFail($id);
        return view('listhome.edit',compact('listhome'));
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
             'deskripsi' => 'required',
        ]);

        // update data berdasarkan id
        $listhome = ListHome::findOrFail($id);
        $listhome->deskripsi = $request->deskripsi;
        $listhome->save();
        return redirect()->route('listhome.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
