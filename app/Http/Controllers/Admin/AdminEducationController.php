<?php

namespace App\Http\Controllers\Admin;

use App\Models\Education;
use Illuminate\Http\Request;

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
                $file->move(public_path() . '/education_documents/', "$id.docx");
            }
            return redirect('/admin/education');
        }

        return view('adminEducation.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Education $education)
    {
        $education->destroyEducation($id);
        return redirect()->back();
    }
}
