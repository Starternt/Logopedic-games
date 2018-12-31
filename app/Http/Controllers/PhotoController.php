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
        $data = Gallery::paginate(15);

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


    /**
     * @param $id
     * @param Comment $comment
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id, Comment $comment, Request $request)
    {
        // check auth
        $auth = false;
        if (!is_null($request->user())) {
            $auth = true;
        }

        $category_id = 3;
        $comments = Comment::where('category_id', '=', $category_id)->where('note_id', '=', $id)->get();
        $responses = $comment->getResponsesToComments();
        $quantityComments = $comments->count();

        return view('photos.show_photo', ['comments' => $comments, 'id' => $id, 'quantityComments' => $quantityComments
            ,'responses' => $responses, 'auth' => $auth]);
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
