<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;
use App\Models\Comment;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GamesController extends Controller
{

    public function index()
    {
        $data = Games::paginate(2);
        $dataComments = Games::select(DB::raw('games.id, COUNT(games.id) as amount'))
            ->join('comments', 'games.id', '=', 'comments.note_id')
            ->groupBy('games.id')->paginate(2);

        $amountComments = [];
        foreach($dataComments as $item){
            $amountComments[] = $item->id;
        }

        $test = array_flip($amountComments);

        foreach($dataComments as $item){
            $test[$item['id']] = $item['amount'];
        }
        return view('games.games', ['data' => $data, 'amountComments' => $test]);
    }


    public function create($id, Request $request)
    {
        $category_id = 2;

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
        $category_id = 2;
        $item = Games::select(DB::raw('name, description'))->where('id', '=', $id)->get();
        $comments = Comment::where('category_id', '=', $category_id)->where('note_id', '=', $id)->get();
        $quantityComments = $comments->count();

        return view('games.show_game', ['comments' => $comments, 'id' => $id, 'quantityComments' => $quantityComments, 'item' => $item]);
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
