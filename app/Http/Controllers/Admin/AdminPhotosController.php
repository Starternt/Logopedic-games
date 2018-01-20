<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminPhotosController extends Controller
{

    public function index(Gallery $gallery)
    {
        $data = $gallery->getAdminData();

        return view('adminPhotos.index', ['data' => $data]);
    }


    public function create(Request $request, Gallery $gallery)
    {
        if ($request->isMethod('post')) {
            $data = $request->input('description');
            $id = $gallery->addPhoto($data)->id;
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $file->move(public_path() . '/images/photos/', "$id.jpg");
            }
            return redirect('/admin/photos');
        }

        return view('adminPhotos.add');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id, Gallery $gallery, Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->input('description');
            $gallery->updatePhoto($id, $data);
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $file->move(public_path() . '/images/photos/',"$id.jpg");
            }
            return redirect('/admin/photos');
        }

        $item = $gallery->getPhotoItem($id);
        return view('adminPhotos.edit', ['item' => $item[0]]);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id, Gallery $gallery)
    {
        $gallery->destroyPhoto($id);
        return redirect()->back();
    }
}
