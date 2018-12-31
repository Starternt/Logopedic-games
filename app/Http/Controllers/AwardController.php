<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AwardController extends Controller
{
    public function index()
    {
        $category_id = 6;

        $data = Award::paginate(15);
        $dataComments = Award::select(DB::raw('awards.id, COUNT(awards.id) as amount'))
            ->join('comments', 'awards.id', '=', 'comments.note_id')
            ->where('comments.category_id', '=', $category_id)
            ->groupBy('awards.id')->paginate(15);
        $amountComments = [];
        foreach($dataComments as $item){
            $amountComments[] = $item->id;
        }

        $test = array_flip($amountComments);

        foreach($dataComments as $item){
            $test[$item['id']] = $item['amount'];
        }
        return view('awards.my_award', ['data' => $data, 'amountComments' => $test]);
    }


    public function create($id, Request $request)
    {
        $category_id = 6;

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
        $category_id = 6;

        $comments = Comment::where('category_id', '=', $category_id)->where('note_id', '=', $id)->get();
        $responses = $comment->getResponsesToComments();
        $quantityComments = $comments->count();

        return view('awards.show_award', ['comments' => $comments, 'id' => $id, 'quantityComments' => $quantityComments,
            'responses' => $responses, 'auth' => $auth]);
    }
}
