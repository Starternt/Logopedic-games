<?php

namespace App\Http\Controllers\Admin;

use App\Models\Award;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminAwardsController extends Controller
{
    public function index(Award $award)
    {
        $data = $award->getAdminData();

        return view('adminAwards.index', ['data' => $data]);
    }

    public function create(Request $request, Award $award)
    {
        if ($request->isMethod('post')) {
            $data = $request->input('description');
            $id = $award->addAward($data)->id;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $file->move(public_path() . '/images/awards/', "$id.jpg");
            }
            return redirect('/admin/awards');
        }

        return view('adminAwards.add');
    }

    public function edit($id, Award $award, Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->input('description');
            $award->updateAward($id, $data);
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $file->move(public_path() . '/images/awards/',"$id.jpg");
            }
            return redirect('/admin/awards');
        }

        $item = $award->getAwardItem($id);
        return view('adminAwards.edit', ['item' => $item[0]]);
    }

    public function destroy($id, Award $award)
    {
        $award->destroyAward($id);
        return redirect()->back();
    }
}
