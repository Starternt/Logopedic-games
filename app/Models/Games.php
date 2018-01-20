<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    public function getAdminData()
    {
        $data = DB::table('games')->get();
        return $data;
    }

    public function addGame($description)
    {
        DB::insert('insert into games (description, created_at, updated_at) values (?, ?, ?)', [$description, Carbon::now(), Carbon::now()]);
        return DB::table('games')->orderBy('id', 'desc')->first();
    }

    public function updateGame($id, $description)
    {
        DB::update('update games set description = ? where id = ?', [$description, $id]);
        return true;
    }

    public function destroyGame($id)
    {
        DB::table('games')->where('id', '=', $id)->delete();
        $path = public_path();
        unlink($path . '/images/games/' . $id . '.jpg');
        return true;
    }

    public function getGameItem($id)
    {
        return DB::table('games')->where('id', '=', $id)->get();
    }
}
