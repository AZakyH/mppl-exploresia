<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* Tambahanku */
use Illuminate\Support\Facades\Auth;
use App\Discover;

class DiscoverController extends Controller
{
    public function make_page()
    {
        return view('discover.make_discover');
    }

    public function create(Request $req)
    {
        $discover = new Discover();
        $discover->id_user = Auth::user()->id_user;
        $discover->judul_discover = $req['judul'];
        $discover->isi_discover = $req['isi'];
        // $discover->nama_gambar_discover = $req['isi'];
        if(!$discover->save()){
            return redirect()->back()->with('failmessage', 'discover gagal dibuat!');
        }
        else {
            return redirect()->back()->with('successmessage', 'discover berhasil dibuat!');
        }
    }

    public function read($id)
    {
        $discover = new Discover();
        $datas = $discover->getDiscover($id);
        return view('discover.read_discover', ['discover'=>$datas]);
    }
}
