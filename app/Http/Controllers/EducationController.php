<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests;
use App\Models\Education;


class EducationController extends Controller
{

    public function index()
    {
        $category_id = 4;
        $dataFiles = Education::all();
        $dataComments = Comment::where('category_id', '=', $category_id)->get();
        $quantityComments = $dataComments->count();

        return view('education.education', ['data' => $dataFiles, 'comments' => $dataComments, 'qComments' => $quantityComments]);
    }


    public function create(Request $request)
    {
        $category_id = 4;
        if($request->isMethod('post')){
            $comment = new Comment();
            $comment->name = $request->input('name');
            $comment->email = $request->input('email', 'empty');
            $comment->message = $request->input('comment');
            $comment->category_id = $category_id;
            $comment->created_at = Carbon::now();
            $comment->updated_at = Carbon::now();
            $comment->save();

        }
        return redirect()->back();
    }
}
