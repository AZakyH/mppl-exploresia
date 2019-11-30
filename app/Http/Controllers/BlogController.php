<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* Tambahanku */
use Illuminate\Support\Facades\Auth;
use App\Post;

class BlogController extends Controller
{
    public function make_page()
    {
        return view('blog.make_blog');
    }

    public function create(Request $req)
    {
        $posting = new Post();
        $posting->id_user = Auth::user()->id_user;
        $posting->judul_post = $req['judul'];
        $posting->isi_post = $req['isi'];
        // $post->nama_gambar_post = $req['isi'];
        if(!$posting->save()){
            return redirect()->back()->with('failmessage', 'Post gagal dibuat!');
        }
        else {
            return redirect()->back()->with('successmessage', 'Post berhasil dibuat!');
        }
    }

    public function read($id)
    {
        $posting = new Post();
        $datas = $posting->getPost($id);
        return view('blog.read_blog', ['posting'=>$datas]);
    }

    public function edit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul' => 'required',
            'isi' => 'required',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->with('failmessage', 'Post gagal diubah!');
        }

        // File::put(storage_path('static_var/warning.txt'), $request->input('warning_text'));

        return redirect()->back()->with('successmessage', 'Warning text berhasil diubah!');
    }
}
