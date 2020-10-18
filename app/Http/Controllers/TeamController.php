<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Team::all();
        return view('index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'nome' => 'required|max:100',
            'fantamilioni' => 'required|numeric|max:300',
            'fantallenatore' => 'required|max:100',
        ]);

        $teamNew = new Team;
        // $teamNew->nome = $data['nome'];
        // $teamNew->fantamilioni = $data['fantamilioni'];
        // $teamNew->fantallenatore = $data['fantallenatore'];
        $teamNew->fill($data);
        $saved = $teamNew->save();
        if ($saved) {
            return redirect()->route("teams.index");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('show',compact('team'));
    }
    // _______________________________________
    // public function show($id)
    // {
    //     $team = Team::find($id);
    //     return view('show',compact('team'));
    // }
    // ____________________________________________
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('create',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $data = $request->all();
        $request->validate([
            'nome' => 'required|max:100',
            'fantamilioni' => 'required|numeric|max:300',
            'fantallenatore' => 'required|max:100',
        ]);
        $team->update($data);
        return view('show',compact('team'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('teams.index');
    }
}
