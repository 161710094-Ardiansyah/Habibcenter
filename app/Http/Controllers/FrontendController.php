<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Biografi;
use App\ListHome;
use App\Youtube;
use App\Kategori;
use Vinkla\Instagram\Instagram;
class FrontendController extends Controller
{
    public function index()
    {
        // Create a new instagram instance.
        $instagram = new Instagram('8408425102.1677ed0.3c55573623704a0a979bf81c4455d564');
        $results = $instagram->media();
        $listhome = Listhome::all();
        $kategori = Kategori::all();
        $artikel = Artikel::with('Kategori')->OrderBy('created_at','DESC')->get();
        return view('page.home', compact('listhome', 'kategori', 'artikel','results','video'));
    }
    public function artikel(){
    	$artikel = Artikel::OrderBy('created_at','DESC')->paginate(5);
        return view('page.aktual', compact('artikel'));
    }

    public function biografi(){
    	$biografi = Biografi::all();
    	return view('page.profil', compact('biografi'));
    }
    public function filterTag($id){
        $tag = '"'.$id.'"';
        $artikel = Artikel::where('tag','LIKE','%'.$tag.'%')->OrderBy('created_at','DESC')->get();
        return view('page.aktual', compact('artikel','id'));
    }

    public function filterKategori(Kategori $kategori){
        $artikel = $kategori->Artikel()->latest()->paginate(5);
        // dd($artikel);
        return view('page.aktual', compact('artikel'));
    }

    // Artikel::where('kategori_id',$kategori_id)->get();
   public function singleblog(Artikel $artikel)
    {
        $previous = Artikel::where('id', '>', $artikel->id)->orderBy('id')->first();
        $next = Artikel::where('id', '<', $artikel->id)->orderBy('id','desc')->first();
        $related= Artikel::where('kategori_id',$artikel->kategori_id)->OrderBy('created_at','DESC')->get();
        return view('page.show', compact('artikel', 'next', 'previous','related'));
    }
    public function mediarelease(){
         $kategori = Kategori::all();
          $artikel = Artikel::with('Kategori')->OrderBy('created_at','DESC')->get();
          $yt = Youtube::all();
        return view('page.mediarelease', compact('kategori','artikel','yt'));
    }
    
}
