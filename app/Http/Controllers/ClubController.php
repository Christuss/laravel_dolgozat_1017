<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index(){
        $clubs = response()->json(Club::all());
        return $clubs;
    }
    public function show($id){
        $clubs = response()->json(Club::find($id));
        return $clubs;
    }
    public function destroy($id){
        Club::find($id)->delete();
    }
    public function store(Request $request){
        $club = new Club();
        $club->establishment = $request->establishment;
        $club->location = $request->location;
        $club->max_number = $request->max_number;
        $club->save();
    }
    public function update(Request $request, $id){
        $club = Club::find($id);
        $club->establishment = $request->establishment;
        $club->location = $request->location;
        $club->max_number = $request->max_number;
        $club->save();
    }


    public function newView(){
        $clubs = Club::all();
        return view('club.new', ['clubs' => $clubs]);
    }
    public function editView($id){
        $club = Club::find($id);
        return view('club.edit', ['club' => $club]);
    }
    public function listView(){
        $clubs = Club::all();
        return view('club.list', ['clubs' => $clubs]);
    }
}
