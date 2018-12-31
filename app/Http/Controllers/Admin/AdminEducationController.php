<?php

namespace App\Http\Controllers\Admin;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminEducationController extends Controller
{

    public function index(Education $education)
    {
        $data = $education->getAdminData();

        return view('adminEducation.index', ['data' => $data]);
    }


    public function create(Request $request, Education $education)
    {
        if ($request->isMethod('post')) {
            $data = $request->input('name');
            $id = $education->addEducation($data)->id;
            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $extension = $file->getClientOriginalExtension();
                $file->move(public_path() . '/education_documents/', "$id.$extension");
            }
            return redirect('/admin/education');
        }

        return view('adminEducation.add');
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id, Education $education, Request $request)
    {
        if($request->isMethod('post')){
            $data = $request->input('name');
            $education->updateEducation($id, $data);
            if($request->hasFile('document')) {
                $file = $request->file('document');
                $file->move(public_path() . '/education_documents/',"$id.docx");
            }
            return redirect('/admin/education');
        }

        $item = $education->getEducationItem($id);
        return view('adminEducation.edit', ['item' => $item[0]]);
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id, Education $education)
    {
        $education->destroyEducation($id);
        return redirect()->back();
    }
}
