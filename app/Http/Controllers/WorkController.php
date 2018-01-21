<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Http\Requests;
use Illuminate\Database\Eloquent;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class WorkController extends Controller
{

    public function index()
    {
        $category_id = 1;

        $data = Work::paginate(15);
        $dataComments = Work::select(DB::raw('works.id, COUNT(works.id) as amount'))
            ->join('comments', 'works.id', '=', 'comments.note_id')
            ->where('comments.category_id', '=', $category_id)
            ->groupBy('works.id')->paginate(15);
//        dd($dataComments);
        $amountComments = [];
        foreach($dataComments as $item){
            $amountComments[] = $item->id;
        }

        $test = array_flip($amountComments);

        foreach($dataComments as $item){
            $test[$item['id']] = $item['amount'];
        }
        return view('work.my_work', ['data' => $data, 'amountComments' => $test]);
    }


    public function create($id, Request $request)
    {
        $category_id = 1;

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
        $category_id = 1;

        $comments = Comment::where('category_id', '=', $category_id)->where('note_id', '=', $id)->get();
        $quantityComments = $comments->count();

        return view('work.show_work', ['comments' => $comments, 'id' => $id, 'quantityComments' => $quantityComments]);
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
