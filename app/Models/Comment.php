<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Comment extends Model
{
    public function getAdminData()
    {
        $data = DB::table('comments')->get();
        return $data;
    }




    public function destroyComment($id)
    {
        DB::table('comments')->where('id', '=', $id)->delete();
        return true;
    }

}
