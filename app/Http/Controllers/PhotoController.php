<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Http\Requests;
use App\Models\Comment;
use Carbon\Carbon;

class PhotoController extends Controller
{

    public function index()
    {
        $data = Gallery::paginate(2);

        return view('photos.photos', ['data' => $data]);
    }


    public function create($id, Request $request)
    {
        $category_id = 3;

        if($request->isMethod('post')){
            $comment = new Comment();
            $comment->name = $request->input('name');
            $comment->email = $request->input('email', 'empty');
            $comment->message = $request->input('comment');
            $comment->category_id = $category_id;
            $comment->note_id = $id;
            $comment->created_at = Carbon::now();
            $comment->updated_at = Carbon::now();
            $comment->save();

        }
        return redirect()->back();
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $category_id = 3;
        $comments = Comment::where('category_id', '=', $category_id)->where('note_id', '=', $id)->get();
        $quantityComments = $comments->count();

        return view('photos.show_photo', ['comments' => $comments, 'id' => $id, 'quantityComments' => $quantityComments]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
