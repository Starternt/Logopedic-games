<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests;
use App\Models\Education;



class EducationController extends Controller
{

    public function index(Comment $comment, Request $request)
    {
        $auth = false;
        if (!is_null($request->user())) {
            $auth = true;
        }
        $category_id = 4;
        $dataFiles = Education::all();

        //start
        $dir = base_path().'/public/education_documents';
        $scan = scandir($dir);
        foreach ($dataFiles as $file) {
            $id = $file->id;
            foreach ($scan as $item)
            {
                $itemExploded = explode('.', $item);
                $name = $itemExploded[0];
                if ($id == $name) {
                    $extension = $itemExploded[1];
                    $file->setAttribute('extension', $extension);
                }
            }

        }
        //end

        $dataComments = Comment::where('category_id', '=', $category_id)->get();
        $responses = $comment->getResponsesToComments();

        $quantityComments = $dataComments->count();

        return view('education.education', ['data' => $dataFiles, 'comments' => $dataComments, 'qComments' => $quantityComments
            , 'responses' => $responses, 'auth' => $auth]);
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


    public function destroy($id)
    {
        //
    }
}
