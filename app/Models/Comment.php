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

    public function saveResponseToComment($id, $message)
    {
        try {
            DB::insert('insert into comments_response (idComment, message) values (?, ?)',
                [$id, $message]);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    public function getResponsesToComments()
    {
        try {
            $data = DB::table('comments_response')->get();
            return $data;
        } catch (\Exception $e) {
            return false;
        }
    }
}
