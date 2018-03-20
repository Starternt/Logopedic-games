<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Award extends Model
{
    public function getAdminData()
    {
        $data = DB::table('awards')->get();
        return $data;
    }

    public function addAward($description)
    {
        DB::insert('insert into awards (description, created_at, updated_at) values (?, ?, ?)', [$description, Carbon::now(), Carbon::now()]);
        return DB::table('awards')->orderBy('id', 'desc')->first();
    }

    public function updateAward($id, $description)
    {
        DB::update('update awards set description = ? where id = ?', [$description, $id]);
        return true;
    }

    public function destroyAward($id)
    {
        DB::table('awards')->where('id', '=', $id)->delete();
        $path = public_path();
        if (file_exists($path . '/images/awards/' . $id . '.jpg')) {
            unlink($path . '/images/awards/' . $id . '.jpg');
        }
        return true;
    }

    public function getAwardItem($id)
    {
        return DB::table('awards')->where('id', '=', $id)->get();
    }
}
