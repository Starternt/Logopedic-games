<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests;
use App\Models\Information;


class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Comment $comment
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Comment $comment, Request $request)
    {
        $auth = false;
        if (!is_null($request->user())) {
            $auth = true;
        }
        $category_id = 5;
        $dataFiles = Information::all();

        //start
        $dir = base_path().'/public/info_documents';
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

        return view('information.information', ['data' => $dataFiles, 'comments' => $dataComments, 'qComments' => $quantityComments
            , 'responses' => $responses, 'auth' => $auth]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $category_id = 5;

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
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
