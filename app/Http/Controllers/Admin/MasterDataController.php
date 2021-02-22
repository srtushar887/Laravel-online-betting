<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\game;
use App\Models\game_match;
use App\Models\game_series;
use App\Models\game_team;
use App\Models\match;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\Facades\DataTables;

class MasterDataController extends Controller
{
    public function game_team()
    {
        return view('admin.masterdata.team');
    }

    public function game_team_save(Request $request)
    {
        $team = new game_team();
        if($request->hasFile('team_image')){
            $image = $request->file('team_image');
            $imageName = time().'.'.$image->getClientOriginalName('team_image');
            $directory = 'assets/admin/images/teamimage/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $team->team_image = $imgUrl;
        }

        $team->team_name = $request->team_name;
        $team->team_sort_name = $request->team_sort_name;
        $team->save();
        return back()->with('success','Team Created');
    }


    public function game_team_get()
    {
        $all_team = game_team::all();
        return DataTables::of($all_team)
            ->addColumn('action',function ($all_team){
                return ' <button class="btn btn-primary btn-sm" id="'.$all_team->id.'" onclick="editteam(this.id)" data-toggle="modal" data-target="#editteam"><i class="fas fa-edit"></i></button>
                         <button class="btn btn-primary btn-sm" id="'.$all_team->id.'" onclick="deleteteam(this.id)" data-toggle="modal" data-target="#deleteteam"><i class="fas fa-trash"></i></button>';
            })
            ->make(true);
    }

    public function game_team_edit(Request $request)
    {
        $edit_team = game_team::where('id',$request->id)->first();
        return response($edit_team);
    }


    public function game_team_update(Request $request)
    {
        $update_team = game_team::where('id',$request->edit_team)->first();
        if($request->hasFile('team_image')){
            @unlink($update_team->team_image);
            $image = $request->file('team_image');
            $imageName = time().'.'.$image->getClientOriginalName('team_image');
            $directory = 'assets/admin/images/teamimage/';
            $imgUrl  = $directory.$imageName;
            Image::make($image)->save($imgUrl);
            $update_team->team_image = $imgUrl;
        }

        $update_team->team_name = $request->team_name;
        $update_team->team_sort_name = $request->team_sort_name;
        $update_team->save();
        return back()->with('success','Team Updated');
    }


    public function game_team_delete(Request $request)
    {
        $delete_team = game_team::where('id',$request->delete_team)->first();
        $delete_team->delete();
        return back()->with('success','Team Deleted');
    }


    public function game_match()
    {
        return view('admin.masterdata.match');
    }

    public function game_match_save(Request $request)
    {
        $match = new game_match();
        $match->match_name = $request->match_name;
        $match->save();
        return back()->with('success','Game Match Created');
    }

    public function game_match_get()
    {
        $all_serise = game_match::all();
        return DataTables::of($all_serise)
            ->addColumn('action',function ($all_serise){
                return ' <button class="btn btn-primary btn-sm" id="'.$all_serise->id.'" onclick="editmatch(this.id)" data-toggle="modal" data-target="#editserise"><i class="fas fa-edit"></i></button>
                         <button class="btn btn-primary btn-sm" id="'.$all_serise->id.'" onclick="deletmatch(this.id)" data-toggle="modal" data-target="#deleteserise"><i class="fas fa-trash"></i></button>';
            })
            ->make(true);
    }


    public function game_match_single(Request $request)
    {
        $edit_serise = game_match::where('id',$request->id)->first();
        return response($edit_serise);
    }

    public function game_match_update(Request $request)
    {
        $update_srise = game_match::where('id',$request->match_edit)->first();
        $update_srise->match_name = $request->match_name;
        $update_srise->save();
        return back()->with('success','Game Match Updated');
    }


    public function game_match_delete(Request $request)
    {
        $delete_serise = game_match::where('id',$request->delete_match)->first();
        $delete_serise->delete();
        return back()->with('success','Seerise Deleted');
    }


    public function game_serise()
    {
        return view('admin.masterdata.series');
    }


    public function game_serise_save(Request $request)
    {
        $second_serise = new game_series();
        $second_serise->series_name = $request->series_name;
        $second_serise->save();
        return back()->with('success','Game Series Created');
    }


    public function game_serise_get()
    {
        $all_serise_second = game_series::all();
        return DataTables::of($all_serise_second)
            ->addColumn('action',function ($all_serise_second){
                return ' <button class="btn btn-primary btn-sm" id="'.$all_serise_second->id.'" onclick="editserise(this.id)" data-toggle="modal" data-target="#editserise"><i class="fas fa-edit"></i></button>
                         <button class="btn btn-primary btn-sm" id="'.$all_serise_second->id.'" onclick="deleteserise(this.id)" data-toggle="modal" data-target="#deleteserise"><i class="fas fa-trash"></i></button>';
            })
            ->make(true);
    }

    public function game_serise_single(Request $request)
    {
        $single_serise_second = game_series::where('id',$request->id)->first();
        return response($single_serise_second);
    }


    public function game_serise_update(Request $request)
    {
        $update_serise_second = game_series::where('id',$request->series_edit)->first();
        $update_serise_second->series_name = $request->series_name;
        $update_serise_second->save();
        return back()->with('success','Game Series Updated');
    }


    public function game_serise_delete(Request $request)
    {
        $delete_serise = game_series::where('id',$request->delete_series)->first();
        $delete_serise->delete();
        return back()->with('success','Serise Deleted');
    }


    public function create_game()
    {
        $all_serise = game_series::all();
        $all_team = game_team::all();
        $all_match = game_match::all();
        return view('admin.game.gameList',compact('all_serise','all_team','all_match'));
    }


    public function create_game_save(Request $request)
    {
        $new_game = new game();
        $new_game->series_id = $request->series_id;
        $new_game->match_id = $request->match_id;
        $new_game->category_id = $request->category_id;
        $new_game->first_team_id = $request->first_team_id;
        $new_game->second_team_id = $request->second_team_id;
        $new_game->venue = $request->venue;
        $new_game->start_date = $request->start_date;
        $new_game->status = 1;
        $new_game->save();

        return back()->with('success','Game Created');

    }

    public function create_game_get()
    {
        $all_game = game::with('serise')
            ->with('match')
            ->with('first_team')
            ->with('second_team')
            ->get();
        return DataTables::of($all_game)
            ->addColumn('action',function ($all_game){
                return ' <a href="'. route('admin.game.start',$all_game->id) .'"><button class="btn btn-primary btn-sm" >start</button></a>
                         <button class="btn btn-primary btn-sm" id="'.$all_game->id.'" onclick="endgame(this.id)" data-toggle="modal" data-target="#endgame">End</button>
                         <button class="btn btn-primary btn-sm" id="'.$all_game->id.'" onclick="deletegame(this.id)" data-toggle="modal" data-target="#deletegame">Delete</button>';
            })
            ->make(true);
    }


    public function game_start($id)
    {
        $start_game = game::where('id',$id)->first();
        $start_game->status = 2;
        $start_game->save();
        return back()->with('success','Game Started');
    }


    public function game_delete(Request $request)
    {
        $delete_game = game::where('id',$request->delete_game)->first();
        $delete_game->delete();
        return back()->with('success','Game Deleted');
    }



















}
