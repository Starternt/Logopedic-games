<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Information;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminInformationController extends Controller
{

    public function index(Information $information)
    {
        $data = $information->getAdminData();

        return view('adminInformation.index', ['data' => $data]);
    }


    public function create(Request $request, Information $information)
    {
        if ($request->isMethod('post')) {
            $data = $request->input('name');
            $id = $information->addInformation($data)->id;
            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $extension = $file->getClientOriginalExtension();
                $file->move(public_path() . '/info_documents/', "$id.$extension");
            }
            return redirect('/admin/information');
        }

        return view('adminInformation.add');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id, Information $information, Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->input('name');
            $information->updateInformation($id, $data);
            if($request->hasFile('document')) {
                $file = $request->file('document');
                $file->move(public_path() . '/info_documents/',"$id.docx");
            }
            return redirect('/admin/information');
        }

        $item = $information->getInformationItem($id);
        return view('adminInformation.edit', ['item' => $item[0]]);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id, Information $information)
    {
        $information->destroyInformation($id);
        return redirect()->back();
    }
}
