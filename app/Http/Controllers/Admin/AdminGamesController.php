<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Games;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminGamesController extends Controller
{
    public function index(Games $games)
    {
        $data = $games->getAdminData();

        return view('adminGames.index', ['data' => $data]);
    }

    public function create(Request $request, Games $games)
    {
        if ($request->isMethod('post')) {
            $description = $request->input('description');
            $name = $request->input('name');
            $id = $games->addGame($name, $description)->id;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $file->move(public_path() . '/images/games/', "$id.jpg");
            }

            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $file->move(public_path() . '/games_documents/', "$id.zip");
            }
            return redirect('/admin/games');
        }

        return view('adminGames.add');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id, Games $games, Request $request)
    {
        if($request->isMethod('post')){
            $description = $request->input('description');
            $name = $request->input('name');
            $games->updateGame($id, $name, $description);
            if($request->hasFile('image')) {
                $file = $request->file('image');
                $file->move(public_path() . '/images/games/',"$id.jpg");
            }

            if($request->hasFile('document')) {
                $file = $request->file('document');
                $file->move(public_path() . '/games_documents/',"$id.zip");
            }
            return redirect('/admin/games');
        }

        $item = $games->getGameItem($id);
        return view('adminGames.edit', ['item' => $item[0]]);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id, Games $games)
    {
        $games->destroyGame($id);
        return redirect()->back();
    }
}
