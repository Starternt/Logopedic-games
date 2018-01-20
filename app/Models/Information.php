<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Information extends Model
{
    public function getAdminData(){
        $data = DB::table('information')->get();
        return $data;
    }

    public function addInformation($name){
        DB::insert('insert into information (name, created_at, updated_at) values (?, ?, ?)', [$name, Carbon::now(), Carbon::now()]);
        return DB::table('information')->orderBy('id', 'desc')->first();
    }

    public function updateInformation($id, $name){
        DB::update('update information set name = ? where id = ?', [$name, $id]);
        return true;
    }

    public function destroyInformation($id){
        DB::table('information')->where('id', '=', $id)->delete();
        $path = public_path();
        unlink($path.'/info_documents/'.$id.'.docx');
        return true;
    }

    public function getInformationItem($id){
        return DB::table('information')->where('id', '=', $id)->get();
    }
}
