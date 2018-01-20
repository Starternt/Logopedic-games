<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Http\Requests;
use Illuminate\Database\Eloquent;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

define('CATEGORY_ID', 1);
class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        SELECT w.id, COUNT(w.id) FROM `works` w JOIN comments c ON w.id = c.note_id GROUP BY w.id
//        $comments = Comment::where('category_id', '=', CATEGORY_ID)->where('note_id', '=', $id)->get();
//        $quantityComments =
        $data = Work::paginate(2);
        $dataComments = Work::select(DB::raw('works.id, COUNT(works.id) as amount'))->join('comments', 'works.id', '=', 'comments.note_id')->
            groupBy('works.id')->paginate(2);

        $amountComments = null;
        foreach($dataComments as $item){
            $amountComments[] = $item->id;
        }

        $test = array_flip($amountComments);

        foreach($dataComments as $item){
            $test[$item['id']] = $item['amount'];
        }
        return view('work.my_work', ['data' => $data, 'amountComments' => $test]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $comments = Comment::where('category_id', '=', CATEGORY_ID)->where('note_id', '=', $id)->get();
        $quantityComments = $comments->count();

        return view('work.show_work', ['comments' => $comments, 'id' => $id, 'quantityComments' => $quantityComments]);
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
