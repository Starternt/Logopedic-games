<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Education extends Model
{
    public function getAdminData(){
        $data = DB::table('education')->get();
        return $data;
    }

    public function addEducation($name){
        DB::insert('insert into education (name, created_at, updated_at) values (?, ?, ?)', [$name, Carbon::now(), Carbon::now()]);
        return DB::table('education')->orderBy('id', 'desc')->first();
    }

    public function updateEducation($id, $name){
        DB::update('update education set name = ? where id = ?', [$name, $id]);
        return true;
    }

    public function destroyEducation($id){
        DB::table('education')->where('id', '=', $id)->delete();
        $path = public_path();

        //start
        $dir = base_path() . '/public/education_documents';
        $scan = scandir($dir);
        $extension = 'docx';
        foreach ($scan as $item) {
            $itemExploded = explode('.', $item);
            $name = $itemExploded[0];
            if ($id == $name) {
                $extension = $itemExploded[1];
            }
        }

        //end

        unlink($path.'/education_documents/'.$id.'.'.$extension);
        return true;
    }

    public function getEducationItem($id){
        return DB::table('education')->where('id', '=', $id)->get();
    }
}
