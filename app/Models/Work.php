<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Work extends Model
{
    public function getAdminData()
    {
        $data = DB::table('works')->get();
        return $data;
    }

    public function addWork($description)
    {
        DB::insert('insert into works (description, created_at, updated_at) values (?, ?, ?)', [$description, Carbon::now(), Carbon::now()]);
        return DB::table('works')->orderBy('id', 'desc')->first();
    }

    public function updateWork($id, $description)
    {
        DB::update('update works set description = ? where id = ?', [$description, $id]);
        return true;
    }

    public function destroyWork($id)
    {
        DB::table('works')->where('id', '=', $id)->delete();
        $path = public_path();
        if(file_exists($path . '/images/work/' . $id . '.jpg')){
            unlink($path . '/images/work/' . $id . '.jpg');
        }
        return true;
    }

    public function getWorkItem($id)
    {
        return DB::table('works')->where('id', '=', $id)->get();
    }
}