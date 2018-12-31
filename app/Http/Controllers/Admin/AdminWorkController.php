<?php

namespace App\Http\Controllers\Admin;

use App\Models\Work;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminWorkController extends Controller
{
    public function index(Work $work)
    {
        $data = $work->getAdminData();

        return view('adminWork.index', ['data' => $data]);
    }

    public function create(Request $request, Work $work)
    {
        if ($request->isMethod('post')) {
            $data = $request->input('description');
            $id = $work->addWork($data)->id;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $file->move(public_path() . '/images/work/', "$id.jpg");
            }
            return redirect('/admin/work');
        }

        return view('adminWork.add');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id, Work $work, Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->input('description');
            $work->updateWork($id, $data);
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $file->move(public_path() . '/images/work/',"$id.jpg");
            }
            return redirect('/admin/work');
        }

        $item = $work->getWorkItem($id);
        return view('adminWork.edit', ['item' => $item[0]]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id, Work $work)
    {
        $work->destroyWork($id);
        return redirect()->back();
    }
}
