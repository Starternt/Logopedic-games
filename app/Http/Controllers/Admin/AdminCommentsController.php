<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminCommentsController extends Controller
{

    public function index(Comment $comment)
    {
        $data = $comment->getAdminData();

        return view('adminComments.index', ['data' => $data]);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id, Comment $comment)
    {
        $comment->destroyComment($id);
        return redirect()->back();
    }
}
