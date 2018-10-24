<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use File;
use Alert;
class ContentController extends Controller
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
        $content = Content::all();
        return view('content.index',compact('content'));

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
            
            'background' => 'required',
            'foto_profil' => 'required',
            'title_header' => 'required',
            'title_1' => 'required',
            'deskripsi_1' => 'required',
            'title_2' => 'required',
            'deskripsi_2' => 'required',
            'linkvideo' => 'required',
            'footer' => 'required'
            
        ]);
        $content = new Content;
        $content->background = $request->background;
        $content->foto_profil = $request->foto_profil;
        $content->title_header = $request->title_header;
        $content->title_1 = $request->title_1;
        $content->deskripsi_1 = $request->deskripsi_1;
        $content->title_2 = $request->title_2;
        $content->deskripsi_2 = $request->deskripsi_2;
        if ($request->hasFile('background')) {
            $file = $request->file('background');
            $destinationPath = public_path().'/img';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $content->background = $filename;
            }
            if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $destinationPath = public_path().'/img';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $content->foto_profil = $filename;
            }
        $content->linkvideo = $request->linkvideo;
        $url = explode('/', $request->linkvideo);
        $unique = explode('?', $url[3]);
        $unique = explode('=', $unique[1]);
        $content->unique_url = $unique[1];
        $content->footer = $request->footer;
        $content->save();
        return redirect('content');
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
        $content = Content::findOrFail($id);
        return view('content.edit',compact('content'));
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
            
            'title_header' => 'required',
            'title_1' => 'required',
            'deskripsi_1' => 'required',
            'title_2' => 'required',
            'deskripsi_2' => 'required',
            'linkvideo' => 'required',
            'footer' => 'required'
            
        ]);
         $content = Content::findOrFail($id);
         $content->title_header = $request->title_header;
         $content->title_1 = $request->title_1;
         $content->deskripsi_1 = $request->deskripsi_1;
         $content->title_2 = $request->title_2;
         $content->deskripsi_2 = $request->deskripsi_2;
         $content->linkvideo = $request->linkvideo;
         $url = explode('/', $request->linkvideo);
         $unique = explode('?', $url[3]);
         $unique = explode('=', $unique[1]);
         $content->unique_url = $unique[1];
         $content->footer = $request->footer;
         // edit upload foto
        if ($request->hasFile('background')) {
            $file = $request->file('background');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus foto lama, jika ada
        if ($content->background) {
        $old_foto = $content->background;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/img/'
        . DIRECTORY_SEPARATOR . $content->background;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $content->background = $filename;
}

        if ($request->hasFile('foto_profil')) {
            $file = $request->file('foto_profil');
            $destinationPath = public_path().'/img/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            // hapus foto lama, jika ada
            if ($content->foto_profil) {
                $old_foto = $content->foto_profil;
                $filepath = public_path() . DIRECTORY_SEPARATOR .'/img/'. DIRECTORY_SEPARATOR.$content->foto_profil;
                try {
                File::delete($filepath);
                } catch (FileNotFoundException $e) {
                // File sudah dihapus/tidak ada
                }
            }
            $content->foto_profil = $filename;
        }
        
    
        $content->save();
        // dd($content);
        return redirect()->route('content.index');
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
