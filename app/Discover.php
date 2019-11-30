<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/* Tambahanku */
use App\Discover;

class Discover extends Model
{
    protected $table = 'discover';

    public function show6() {
        $data = Discover::orderby('created_at','DESC')->take(6)->get();
        $jumlah = count($data);
        $i = 0;
                
        $datas = array_keys(get_defined_vars());
        return compact($datas);
    }

    public function getDiscover($id){
        $data = Discover::where('id_Discover', $id)->first();
        $author = User::select('username')
                    ->where('id_user', $data->id_user)
                    ->value('username');

        $datas = array_keys(get_defined_vars());
        return compact($datas);
    }
}
