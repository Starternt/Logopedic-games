<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gallery extends Model
{
    public function getAdminData()
    {
        $data = DB::table('galleries')->get();
        return $data;
    }

    public function addPhoto($description)
    {
        DB::insert('insert into galleries (description, created_at, updated_at) values (?, ?, ?)', [$description, Carbon::now(), Carbon::now()]);
        return DB::table('galleries')->orderBy('id', 'desc')->first();
    }

    public function updatePhoto($id, $description)
    {
        DB::update('update galleries set description = ? where id = ?', [$description, $id]);
        return true;
    }

    public function destroyPhoto($id)
    {
        DB::table('galleries')->where('id', '=', $id)->delete();
        $path = public_path();
        unlink($path . '/images/photos/' . $id . '.jpg');
        return true;
    }

    public function getPhotoItem($id)
    {
        return DB::table('galleries')->where('id', '=', $id)->get();
    }
}
