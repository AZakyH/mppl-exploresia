<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* Tambahanku */
use App\User;

class Post extends Model
{
    protected $table = 'post';

    public function show6() {
        $data = Post::orderby('created_at','DESC')->take(6)->get();
        $jumlah = count($data);
        $i = 0;
                
        $datas = array_keys(get_defined_vars());
        return compact($datas);
    }

    public function getPost($id){
        $data = Post::where('id_post', $id)->first();
        $author = User::select('username')
                    ->where('id_user', $data->id_user)
                    ->value('username');

        $datas = array_keys(get_defined_vars());
        return compact($datas);
    }
}
