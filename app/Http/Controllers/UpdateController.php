<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;
use App\Models\UpdateModel;

class UpdateController extends Controller
{
    public function postupdate(Request $request, $id)
    {
        $request->validate([
            'blogpost' => '',
            'project_id' => '',
        ]);

        $blogpost = new UpdateModel;
        $blogpost->blogpost = $request->input('blogpost');
        $blogpost->project_id = $id;
        $blogpost->save();

        return redirect('/dashboard')->with('success', "Je update is gepost!");
    } 
    public function getupdate($id)
    {
        $data = ProjectModel::find($id);
        return view('blogpost.update')->with('data', $data);
    }

    public function getchange($id)
    {
        $data = UpdateModel::find($id);
        return view('blogpost.change')->with('data', $data);
    }

    public function postchange(Request $request, $id)
    {
        $request->validate([
            'blogpost' => '',
            'project_id' => '',
        ]);

        $blogpost = UpdateModel::find($id);
        $blogpost->blogpost = $request->input('blogpost');
        $blogpost->save();

        return redirect('/dashboard')->with('success', "Je post is aangepast!");
    } 

    public function deletepost($id)
    {
        $blogpost = UpdateModel::find($id);
        $blogpost->delete();
        return redirect('/dashboard')->with('success', 'Blogpost verwijderd!');
    }
}
